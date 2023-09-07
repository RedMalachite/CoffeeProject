<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/admin.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/style.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <title>Coffee Project</title>
</head>
<body>
<?php
$socials = $commonBlocks['socials'] ?? [];
?>
<?php
include_once PARTS_DIR . 'notification.php';
?>
<section id="nav-menu" class="fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
<!--                    --><?php //if ($commonBlocks['navigation']['logo']): ?>
<!--                        <a href="/"-->
<!--                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">-->
<!--                            <img src="--><?php //BASE_DIR ?><!--img/--><?php //= $commonBlocks['navigation']['logo'] ?><!--"-->
<!--                                 alt="Coffee Logo">-->
<!--                        </a>-->
<!--                    --><?php //endif; ?>
                    <div class="col d-flex justify-content-end">
                        <nav class="nav">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" style="color: white" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black" href="/admin/products">All
                                            Products</a></li>
                                    <li><a class="dropdown-item" style="color: black" href="/admin/products/create">Create
                                            Product</a></li>
                                </ul>
                            </div>
                            <!--                    <a href="/admin/content" class="nav-link">Content</a>-->
                            <a href="#" style="color: white" class="nav-link disabled">|</a>
                            <a href="/" style="color: white" class="nav-link">Back to Site</a>
                            <a href="/logout" style="color: white" class="nav-link">Log Out</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
    </div>
</section>

