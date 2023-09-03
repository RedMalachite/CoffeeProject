<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php BASE_DIR ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>css/style.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>css/font-awesome.min.css">
    <title>Coffee Project</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
</head>
<body>
<?php
$socials = $commonBlocks['socials'] ?? [];
$empty = "<span style='color: darkred'>Value not found</span>";
?>
<section id="nav-menu" class="fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
                    <?php if ($commonBlocks['navigation']['logo']): ?>
                        <a href="/"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <img src="<?php BASE_DIR ?>img/<?= $commonBlocks['navigation']['logo'] ?>"
                                 alt="Coffee Logo">
                        </a>
                    <?php endif; ?>
                    <?php if ($commonBlocks['navigation']['links']): ?>
                        <ul class="nav nav-pills">
                            <?php foreach ($commonBlocks['navigation']['links'] as $link): ?>
                                <li class="nav-item">
                                    <a href="<?= $link['href'] ?>" class="nav-link" aria-current="page"><?= $link['title'] ?? $empty ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </header>
            </div>
        </div>
    </div>
</section>