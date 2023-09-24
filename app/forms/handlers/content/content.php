<?php
function editContent()
{

    $fields = $_POST;
    $name = filter_input(INPUT_POST, 'block_name');

    $id = filter_input(INPUT_POST, 'block_id', FILTER_VALIDATE_INT);

    if (!$id) {
        notify("Can not find block with ID = $id", 'danger');
        redirectBack();
    }

    conditionRedirect(!$id, '/admin/content');
    unset($fields['block_name'], $fields['block_id']);
    match ($name) {
        'navigation' => updateNavigationBlock($id, $fields),
        default => redirectBack()
    };
}

function uploadContentImage(string $tmpName, string $path, int $id)
{
    if (!move_uploaded_file($tmpName, $path)) {
        notify("We can not upload this file", "danger");
        redirectBack();
    }
}