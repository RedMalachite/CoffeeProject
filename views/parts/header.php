<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <title>Coffee Project</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<?php
$socials = $commonBlocks['socials'] ?? [];
$empty = "<span style='color: darkred'>Value not found</span>";
?>
<?php
include_once PARTS_DIR . 'notification.php';
?>
<section id="nav-menu" class="fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
                    <?php if ($commonBlocks['navigation']['logo']): ?>
                        <a href="/"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <img src="<?= IMAGES_URI ?>/<?= $commonBlocks['navigation']['logo'] ?>" alt="Logo">
                        </a>
                    <?php endif; ?>

                    <?php if ($commonBlocks['navigation']['links']): ?>
                        <ul class="nav nav-pills">
                            <?php foreach ($commonBlocks['navigation']['links'] as $link): ?>
                                <li class="nav-item">
                                    <a href="<?= $link['href'] ?>" class="nav-link"
                                       aria-current="page"><?= $link['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                            <li class="nav-item">
                                <a href="/cart" class="nav-link"
                                   aria-current="page"><i class="fa fa-shopping-cart"></i></a>
                            </li>

                            <?php if (!isAuth()): ?>
                                <li class="nav-item">
                                    <a href="/login" class="nav-link" aria-current="page">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link disabled">|</span>
                                </li>
                                <li class="nav-item">
                                    <a href="/register" class="nav-link" aria-current="page">Sign Up</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <span class="nav-link disabled">|</span>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">User Actions</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/account">Account</a></li>
                                        <?php if (isAdmin()): ?>
                                            <li><a href="/admin/dashboard" class="dropdown-item">Admin panel</a></li>
                                        <?php endif; ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </header>
            </div>
        </div>
    </div>
</section>