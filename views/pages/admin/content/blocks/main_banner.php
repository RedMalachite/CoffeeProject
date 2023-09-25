<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
//dd($fields);
?>

    <div class="container" style="padding-top: 10em;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center"><h3>Block: "<?= $block['name'] ?>"</h3></div>
                    <form action="/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="edit_content">
                        <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                        <input type="hidden" name="block_name" value="<?= $block['name'] ?>">

                        <div class="card-body">
                            <?php if (!empty($fields['link'])): ?>
                                <div class="mb-3">
                                    <label class="mb-2" for="button_text_<?= $block['id'] ?>">Current button text:
                                        "<?= $fields['link']['text'] ?>". Change to:</label>
                                    <input type="text"
                                           class="form-control"
                                           id="button_text_<?= $block['id'] ?>"
                                           value="<?= $fields['link']['text'] ?>"
                                           name="button_text"
                                    >
                                </div>
                            <?php
                            endif;
                            ?>
                            <br>
                            <?php if (!empty($fields['link'])): ?>
                                <div class="mb-3">
                                    <label class="mb-2" for="link_text_<?= $block['id'] ?>">Current link to:
                                        "<?= $fields['link']['href'] ?>". Change to:</label>
                                    <input type="text"
                                           class="form-control"
                                           id="link_text_<?= $block['id'] ?>"
                                           value="<?= $fields['link']['href'] ?>"
                                           name="link_to"
                                    >
                                </div>
                            <?php
                            endif;
                            ?>
                            <br>
                            <?php if (!empty($fields['title'])): ?>
                                <div class="mb-3">
                                    <label class="mb-2" for="title_<?= $block['id'] ?>">Current title:
                                        "<?= $fields['title'] ?>". Change to:</label>
                                    <input type="text"
                                           class="form-control"
                                           id="title_<?= $block['id'] ?>"
                                           value="<?= $fields['title'] ?>"
                                           name="title"
                                    >
                                </div>
                            <?php
                            endif;
                            ?>
                            <br>
                            <?php if (!empty($fields['subtitle'])): ?>
                                <div class="mb-3">
                                    <label class="mb-2" for="subtitle_<?= $block['id'] ?>">Current title:
                                        "<?= $fields['subtitle'] ?>". Change to:</label>
                                    <input type="text"
                                           class="form-control"
                                           id="subtitle_<?= $block['id'] ?>"
                                           value="<?= $fields['subtitle'] ?>"
                                           name="subtitle"
                                    >
                                </div>
                            <?php
                            endif;
                            ?>

                            <!--                            <div class="mb-3">-->
                            <!--                                <label for="logo">Upload new logo</label>-->
                            <!--                                <input type="file" class="form-control" name="logo"/>-->
                            <!--                            </div>-->

                            <!--                            <div class="mb-3">-->
                            <!--                                <h5>Links: </h5>-->
                            <!--                            </div>-->
                            <!---->
                            <!--                            --><?php //$lastKey = array_key_last($fields['links']) ?? 0; ?>
                            <!--                            <div class="mb-3 col-6 offset-3 links-wrapper" data-last_key="-->
                            <?php //= $lastKey ?><!--">-->
                            <!--                                --><?php //if (!empty($fields['links'])): ?>
                            <!--                                    --><?php //foreach ($fields['links'] as $key => $link): ?>
                            <!--                                        <div class="row mb-3 d-flex align-items-center justify-content-center bg-body-secondary p-2 links-item"-->
                            <!--                                        >-->
                            <!--                                            <div class="col-9">-->
                            <!--                                                <label for="link_text_-->
                            <?php //= $key ?><!--">Title</label>-->
                            <!--                                                <input type="text"-->
                            <!--                                                       class="form-control"-->
                            <!--                                                       id="link_text_-->
                            <?php //= $key ?><!--"-->
                            <!--                                                       value="-->
                            <?php //= $link['title'] ?><!--"-->
                            <!--                                                       name="links[-->
                            <?php //= $key ?><!--][title]"-->
                            <!--                                                >-->
                            <!--                                                <label for="link_-->
                            <?php //= $key ?><!--">Link</label>-->
                            <!--                                                <input type="text"-->
                            <!--                                                       class="form-control"-->
                            <!--                                                       id="link_-->
                            <?php //= $key ?><!--"-->
                            <!--                                                       value="-->
                            <?php //= $link['href'] ?><!--"-->
                            <!--                                                       name="links[-->
                            <?php //= $key ?><!--][href]"-->
                            <!--                                                >-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-3 text-center">-->
                            <!--                                                <a href="#" class="btn btn-outline-danger remove-link"><i class="fa fa-trash"></i></a>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    --><?php //endforeach; ?>
                            <!--                                --><?php //endif; ?>
                            <!--                            </div>-->
                            <!--                            <a href="#" class="btn btn-outline-info add-new-link">Add link</a>-->
                            <!--                        </div>-->

                            <div class="card-footer d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php
dd($block, $fields);
require_once ADMIN_PARTS_DIR . '/footer.php';
