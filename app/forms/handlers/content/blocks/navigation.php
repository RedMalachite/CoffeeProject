<?php
//dd('navigation');
function updateNavigationBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);
    $links = $fields['links'] ?? [];
    $content = json_encode([
        'logo' => uploadNavigationLogo($blockContent['logo'] ?? '', $id),
        'links' => array_values($links),
    ]);
    dd($content, json_decode($content,true));
}

function uploadNavigationLogo(string $image, int $id): string
{
    if (!empty($_FILES['Logo']) && $_FILES['Logo']['error'] === 0) {
        $newImageName = time() . $_FILES['Logo']['name'];
        $path = BASE_DIR . "/img/$newImageName";
//        dd($_FILES);
        uploadContentImage($_FILES['Logo']['tmp_name'], $path, $id);

        $oldFile = BASE_DIR . '/img/' . $image;
        if (file_exists($oldFile)) {
        unlink($oldFile);
        }
        $image = $newImageName;
    }
    return $image;
}