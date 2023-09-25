<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Project</title>
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/admin.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/style.css">
    <link rel="stylesheet" href="<?php BASE_DIR ?>/bootstrap/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/js/jquery.js">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
</head>
<body>
<style>
    .notification {
        position: absolute;
        top: 13%;
        right: 1%;
        padding: 0.5rem 1rem;
    }
</style>
<?php
$socials = $commonBlocks['socials'] ?? [];
?>
<?php
include_once PARTS_DIR . 'notification.php';
?>
<section id="nav-menu" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
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
                            <a href="/admin/content" style="color: white" class="nav-link">Content</a>
                            <a href="/admin/newsletter" style="color: white" class="nav-link">Newsletter</a>
                            <a href="#" style="color: white" class="nav-link disabled">|</a>
                            <a href="/" style="color: white" class="nav-link">Back to Site</a>
                            <a href="/logout" style="color: white" class="nav-link">Log Out <?php
                                if ($_SESSION['user']['isAdmin'] === true) echo ", Admin";
                                ?></a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
    </div>
</section>

