<?php
function updateNavigationBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);
    $links = $fields['links'] ?? [];
    $content = json_encode([
        'logo' => uploadNavigationLogo($blockContent['logo'] ?? '', $id),
        'links' => array_values($links),
    ]);
//    dd($content, json_decode($content,true));
    $query = getContentQuery();

    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);
    executeContentQuery($query, $id);
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

function updateBannerContent(int $id, array $fields): void
{

    $currentBannerData = dbFind(Tables::Content, $id);
    $currentBannerDataDecode = json_decode($currentBannerData['content'], true);

    $content = json_encode([
        'link' => [
            'href' => $fields['link_to'],
            'text' => $fields['button_text']
        ],
        'title' => $fields['title'],
        'subtitle' => $fields['subtitle']
    ]);

//    dd($currentBannerData['content'], $content);

    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

//    dd($fields, $currentBannerDataDecode);

    executeContentQuery($query, $id);
}