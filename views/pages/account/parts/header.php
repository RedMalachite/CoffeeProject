<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="/css/main.css">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <title>Account</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style1.css">
</head>
<body class="account-body" style="height: 100vh;">
<?php include PARTS_DIR . '/notification.php'; ?>
<header id="navigation" style="background-color: #664d03">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <?php if (!empty($commonBlocks['navigation']['logo'])): ?>
                <div class="col" id="logo">
                    <a href="/">
                        <img src="<?= IMAGES_URI . '/' . $commonBlocks['navigation']['logo'] ?>"/>
                    </a>
                </div>
            <?php endif; ?>
            <div class="col d-flex justify-content-end">
                <nav class="nav">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/account/orders" class="nav-link">Orders</a>
                    <a href="#" class="nav-link disabled">|</a>
                    <a href="/" class="nav-link">Back to Site</a>
                    <a href="/logout" class="nav-link">Log Out</a>
                </nav>
            </div>
        </div>
    </div>
</header>