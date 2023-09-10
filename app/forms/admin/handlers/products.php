<?php
function createProduct(array $fields): void
{
    productValidation($fields, SESSION_KEYS::CREATE_PRODUCT);

    $checkOnName = dbSelect(Tables::Products, condition: 'name = "' . $fields['name'] . '"', isSingle: true);

    if (!empty($checkOnName)) {
        notify("Product with name '$fields[name]' already exists", 'warning');
    }
    conditionRedirect(!empty($checkOnName), 'admin/products/create');

    $fields['is_main'] = (int)$fields['is_main'];

    $sql = "INSERT INTO " . Tables::Products->value . " (name, description, price, quantity, is_main) VALUES (:name, :description, :price, :quantity, :is_main)";
    $query = DB::connect()->prepare($sql);
    $query->execute($fields);

    flushSessionByKey(SESSION_KEYS::CREATE_PRODUCT);

    notify("Product with name '$fields[name]' has been created");

    redirect('/admin/products/create');
}

function productValidation(array $fields, SESSION_KEYS $key, $uri = 'admin/products/create'): void
{
    updateSessionFields($key, $fields);

    unset($fields['description']);
    unset($fields['is_main']);
    unset($fields['product_id']);

    $isEmptyFields = emptyFields($fields, $key);
    $isNegativeValues = validateOnNegativeValues($fields['price'], $fields['quantity']);

    conditionRedirect($isEmptyFields || $isNegativeValues, $uri);
}

function validateOnNegativeValues(float $price, int $quantity): bool
{
    $result = false;
    foreach (compact('price', 'quantity') as $key => $value) {
        if ($value < 0) {
            $_SESSION[SESSION_KEYS::CREATE_PRODUCT->value]['errors'][$key] = 'Value should be 0 or high';
            $result = true;
        }
    }
    return $result;
}

function getProducts(bool $isMain = true): array
{
    $condition = "is_main = " . (int)$isMain;
    return dbSelect(Tables::Products, condition: $condition);
}

function ShowMainProductsTable(): void
{
    displayInTable(getProducts());
}

function ShowAdditionalProductsTable(): void
{
    displayInTable(getProducts(false));
}

function displayInTable(array $products = []): void
{
    if (empty($products)) {
        echo "<h5>There are no products in this category</h5>";
    } else {
        include ADMIN_PAGE_DIR . '/products/parts/table.php';
    }
}

function removeProduct(int $id): void
{
    $sql = "DELETE FROM " . Tables::Products->value . " WHERE id = :id";
    $query = DB::connect()->prepare($sql);
    $query->bindParam('id', $id, PDO::PARAM_INT);
    $query->execute();
    notify("Product has been removed");
    redirect('/admin/products');
}

function editProduct(array $fields): void
{
$uri = "/admin/products/edit/$fields[product_id]";
    productValidation($fields, SESSION_KEYS::EDIT_PRODUCT, $uri);

    $fields['is_main'] = (int)$fields['is_main'];

    $sql = "UPDATE " . Tables::Products->value . ' SET name = :name, description = :description, quantity = :quantity, is_main = :is_main, price = :price WHERE id = :product_id';
    $query = DB::connect()->prepare($sql);
    $query->execute($fields);

    flushSessionByKey(SESSION_KEYS::EDIT_PRODUCT);

    notify("Product with name '$fields[name]' was updated");

    redirect($uri);
}