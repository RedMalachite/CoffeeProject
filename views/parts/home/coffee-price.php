<?php
$products = getProducts();
if (!empty($products)) {
    $products = array_chunk($products, 3);
}
?>
<section id="coffee-price">
    <div class="container">
        <div class="in-center pt-5">
            <h1><?= $content['catalog']['title'] ?? $empty ?></h1>
            <p><?= $content['catalog']['description'] ?? $empty ?></p>
        </div>
        <?php foreach ($products as $row): ?>
            <div class="row mt-5">
                <?php foreach ($row as $product): ?>
                    <div class="col-sm-12 col-lg-4 drinks"
                         data-bs-toggle="modal"
                         data-bs-target="#buyProduct"
                         data-id="<?= $product['id'] ?>"
                         data-qty="<?= $product['quantity'] ?>"
                         data-name="<?= $product['name'] ?>"
                         data-price="<?= $product['price'] ?>"
                    >
                        <div class="shadow-box rounded-3 mx-3">
                            <div class="d-flex justify-content-between flex-wrap mb-3 mx-3">
                                <div class="coffee-name mt-3"><?= $product['name'] ?></div>
                                <div class="price mt-3"><?= $product['price'] . '$' ?></div>
                            </div>
                            <div class="description mx-3 pb-3">
                                <?= $product['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <p style="height: 70px"></p>
    </div>
</section>
