<section id="pictures">
    <div class="container mb-5">
        <div class="in-center pt-5">
            <h1><?= $content['gallery']['title'] ?? $empty ?></h1>
            <p><?= $content['gallery']['description'] ?? $empty ?></p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-4 first-col">
                <img src="img/<?= $content['gallery']['images'][0] ?? '' ?>" alt="">
                <img class="mt-4" src="img/<?= $content['gallery']['images'][1] ?? '' ?>" alt="">
            </div>
            <div class="col-sm-12 col-lg-8 second-col mobile-paddings">
                <img src="img/<?= $content['gallery']['images'][2] ?? '' ?>" alt="">
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="img/<?= $content['gallery']['images'][3] ?? '' ?>" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/<?= $content['gallery']['images'][4] ?? '' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//dd($content['gallery']);
?>