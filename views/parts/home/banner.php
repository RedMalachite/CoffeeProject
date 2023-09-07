<section id="main-banner">
    <div class="container">
        <div class="row">
            <div>
                <div class="col-12 col-md-9 col-xl-6 banner-content">
                    <p class="banner-font-small-size"><?= $content['main_banner']['title'] ?? $empty ?></p>
                    <p><?= $content['main_banner']['subtitle'] ?? $empty ?></p>
                    <?php if ($content['main_banner']['link']): ?>
                        <button type="button" class="btn btn-light buy-button rounded-5"><a
                                    href="<?= $content['main_banner']['link']['href'] ?? $empty ?>"
                                    class="mx-4 text-uppercase"><?= $content['main_banner']['link']['text'] ?? $empty ?></a>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
