<?php
function addToCart(array $productData)
{
//    dd($productData);
    $cartItems = retrieveCartFromCookie();
    $cartItems = addOrCombineProduct(
        $cartItems,
        $productData
    );

    $expire = time() + (60 * 60 * 24 * 10);
    setcookie('cart', json_encode($cartItems), $expire);
    notify("The product was added to the cart");
    redirect();
}

function addOrCombineProduct(array $cartItems, array $addedProduct): array
{
    $sameProduct = array_filter(
        $cartItems,
        fn($item) => $item['product_id'] === $addedProduct['product_id'] && empty($item['additions'])
    );
    if (!empty($addedProduct['additions']) || empty($sameProduct)) {
        $cartItems[] = $addedProduct;
    } else {
        array_walk(
            $cartItems,
            function (&$item, $key, $recentProduct) {
                if ($item['product_id'] === $recentProduct['product_id'] && empty($item['additions'])) {
                    $item['quantity'] += $recentProduct['quantity'];
                }
            },
            $addedProduct
        );
    }
    return $cartItems;
}

function retrieveCartFromCookie(): array
{
    return isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
}

function getCartItems(): array
{
    $cart = retrieveCartFromCookie();
    $cartItems = [];
    dd($cart);
    if (!empty($cart)) {

    }

    return $cartItems;
}

