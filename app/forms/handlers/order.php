<?php

function createOrder()
{
    $cart = getCartItems();
    $total = $cart['total'];
    unset($cart['total']);

    try {
        DB::connect()->beginTransaction();
        updateUserBalance(userId(), $total);
        $oderId = insertOrder(userId(), $total);
        setProductsToOrder($oderId, $cart);
        DB::connect()->commit();

        notify('Your order was created');
        redirect('/cart');

    } catch (PDOException|Exception $exception) {
        DB::connect()->rollBack();
        notify($exception->getMessage(), 'danger');
        redirectBack();
    }
}

function setProductsToOrder(int $orderId, array $cart): void
{
    $sql = "";
}

function updateUserBalance(int $userId, float $total): void
{
    $user = dbFind(Tables::Users, $userId);

//    dd($user);

    if ($user['balance'] < $total) {
        throw new Exception('Not enough money on your balance');
    }

    $sql = "UPDATE " . Tables::Users->value . " SET balance = balance - :total WHERE id = :id";
    dd($sql);
    $query = DB::connect()->prepare($sql);

    $query->bindParam('user_id', $userId, PDO::PARAM_INT);
    $query->bindParam('total', $total);

    $query->execute();
}

function insertOrder(int $userId, float $total): int
{
    $sql = "INSERT INTO " . Tables::Orders->value . " (user_id, total) VALUES (:user_id, :total)";
    $query = DB::connect()->prepare($sql);
    $query->bindParam('user_id', $userId, PDO::PARAM_INT);
    $query->bindParam('total', $total);
    $query->execute();

    return (int)DB::connect()->lastInsertId();
}