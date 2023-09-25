<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
//dd($fields);
?>

    <div class="container col-8" style="padding-top: 10em;">
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
                            <br>
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
                            <br>
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
                            <br>
                            <div class="mb-3">
                                <label class="mb-2" for="subtitle_<?= $block['id'] ?>">Current subtitle:
                                    "<?= $fields['subtitle'] ?>". Change to:</label>
                                <input type="text"
                                       class="form-control"
                                       id="subtitle_<?= $block['id'] ?>"
                                       value="<?= $fields['subtitle'] ?>"
                                       name="subtitle"
                                >
                            </div>
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
//dd($block, $fields);
require_once ADMIN_PARTS_DIR . '/footer.php';
