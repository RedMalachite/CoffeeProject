<section id="video-clip" class="my-5">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-6 video-right justify-content-center align-items-center d-flex rounded-5">
                <div class="overlay overlay-bg">
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                                                                                                src="img/<?= $content['about_us']['video']['play-img'] ?? '' ?>"
                                                                                                alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 video-left">
                <h6><?= $content['about_us']['text']['title'] ?? $empty ?></h6>
                <h1><?= $content['about_us']['text']['subtitle'] ?? $empty ?></h1>
                <p class="black-font"><?= $content['about_us']['text']['quote'] ?? $empty ?></p>
                <p><?= $content['about_us']['text']['description'] ?? $empty ?></p>
                <img class="img-fluid" src="img/<?= $content['about_us']['text']['img'] ?? '' ?>" alt="Lava Craft Signature">
            </div>
        </div>
    </div>
</section>