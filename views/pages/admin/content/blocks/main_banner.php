<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

    <div class="container" style="padding-top: 10em;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Block: <?= $block['name'] ?></h3>
                        <form action="/">
                            <div class="cart-body">

                            </div>
                            <div class="cart-footer">

                            </div>
                            <button type="submit" class="btn btn-outline-primary">Update info</button>

                        </form>
                        <br>
                        <a href="/admin/content"><button type="submit" class="btn btn-outline-primary">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once ADMIN_PARTS_DIR . '/footer.php';
