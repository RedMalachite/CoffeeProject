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
                <form target="_blank" novalidate="true"
                      action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                      method="get" class="form-inline">
                    <div class="wide">
                        <input class="search rounded-0" name="EMAIL" placeholder="Enter Email"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'Enter Email '" required="" type="email">
                        <button class="search-button"><i class="arrow" aria-hidden="true">&#8702;</i>
                        </button>
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script type="application/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
