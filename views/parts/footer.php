<?php
$socials = $commonBlocks['socials'] ?? [];
?>
<section id="foot-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-5 foot-columns">
                <p class="foot-titles">
                    <?= $socials['about']['title'] ?? $empty ?>
                </p>
                <p><?= $socials['about']['description'] ?? $empty ?></p>
                <p><?= $socials['about']['copyright'] ?? $empty ?> | This template is made with <i
                            class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a
                            href="#">Colorlib</a></p>
            </div>
            <div class="col-lg-5 col-sm-5 foot-columns">
                <p class="foot-titles"><?= $socials['form']['title'] ?? $empty ?></p>
                <p><?= $socials['form']['description'] ?? $empty ?></p>
                <form action="/" method="POST" class="w-100">
                    <input type="hidden" name="type" value="new_subscriber">
                    <div class="input-group mb-3">
                        <label for="email"><?= $footer['form']['description'] ?? '' ?></label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-sm-2 foot-columns">
                <p class="foot-titles"><?= $socials['follow']['title'] ?? $empty ?></p>
                <p><?= $socials['follow']['description'] ?? $empty ?></p>
                <div class="footer-social social">
                    <?php foreach ($socials['follow']['socials'] as $social): ?>
                        <a href="<?= $social['href'] ?>"><i class="fa <?= $social['icon'] ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'views/parts/modals/buy_product.php' ?>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="/assets/js/script.js"></script>
<script type="application/javascript" src="/assets/js/buy_product11.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
