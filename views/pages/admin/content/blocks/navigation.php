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
                        <form action="/" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="type" value="edit_content">
                            <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                            <input type="hidden" name="block_name" value="<?= $block['name'] ?>">
                            <div class="cart-body">
                                <?php
                                if (!empty($fields['logo'])):
                                    ?>
                                    <div class="mt-3">
                                        <p>Current logo:</p>
                                        <img class="img-thumbnail" src="/img/<?= $fields['logo'] ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <label for="logo">Upload new logo</label>
                                    <input type="file" class="form-control" name="Logo">
                                </div>
                                <div class="mt-3">
                                    <h5>Nav links:</h5>
                                    <?php if (!empty($fields['links'])): ?>
                                        <?php
                                        foreach ($fields['links'] as $key => $link):
                                            ?>
                                            <div class="row d-flex align-items-center" style="border: 1px solid #000;border-radius: 15px">
                                                <div class="col-11 mb-3">
                                                    <label for="link_text_<?= $key ?>">Title</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="link-text_<?= $key ?>"
                                                           value="<?= $link['title'] ?>"
                                                    >
                                                    <label for="link_<?= $key ?>">Link</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="link_<?= $key ?>"
                                                           value="<?= $link['href'] ?>"
                                                    >
                                                </div>
                                                <div class="col-1 d-flex align-items-center">
                                                    <a href="#" class="btn btn-outline-danger"><i
                                                                class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        <br>
                                        <?php
                                        endforeach;
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="cart-footer">

                            </div>
                            <button type="submit" class="btn btn-outline-primary mt-3">Update info</button>
                        </form>
                        <br>
                        <a href="/admin/content">
                            <button type="submit" class="btn btn-outline-primary">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once ADMIN_PARTS_DIR . '/footer.php';
