<?php
$textYoutube = [
    "title" => "Kostenlose Standortbesichtigung und Entwurfsvorschlag für CCTV-Systeme!",
    "subtitle" => "Safeguard Systems sind Experten für CCTV-Kamerasysteme für Unternehmen und Gewerbe. Kontaktieren Sie uns noch heute für ein KOSTENLOSES, unverbindliches Angebot und eine Standortbesichtigung.",
    
    "list" => [
        "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        "Duis aute irure dolor in reprehenderit in voluptate velit.",
        "Duis aute irure dolor in reprehenderit in voluptate velit. Duis aute irure dolor in reprehenderit in voluptate velit."
    ],

    "buttons" => [
        ["text" => "0621 7163591", "link" => "#services"],
        ["text" => "Termin", "link" => "#services"]
    ],

    "image" => "assets/img/security-youtube.jpg",
    "youtube" => "https://www.youtube.com/watch?v=nrJtHemSPW4"
];
?>

<section id="textwith_youtube" class="textwith_youtube">
    <div class="container">
        <div class="row gy-4">

            <!-- LEFT TEXT SECTION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6 content" data-aos="fade-up" data-aos-delay="200">
                <div class="contentpart">
                    <div class="overlay"></div>

                    <h3><?= $textYoutube['title']; ?></h3>

                    <p class="fst-italic">
                        <?= $textYoutube['subtitle']; ?>
                    </p>

                    <?php if (!empty($textYoutube['list'])): ?>
                    <ul>
                        <?php foreach($textYoutube['list'] as $item): ?>
                            <li>
                                <span class="globalbtn"></span>
                                <span><?= $item; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (!empty($textYoutube['buttons'])): ?>
                    <div class="d-flex align-items-center gap-3">
                        <?php foreach($textYoutube['buttons'] as $btn): ?>
                            <a href="<?= $btn['link']; ?>" class="btn-main global-button">
                                <span class="global-button-content-wrapper"><?= $btn['text']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- RIGHT YOUTUBE SECTION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6 youtubelinks position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= $textYoutube['image']; ?>" class="img-fluid" alt="YouTube Preview">

                <a class="video__btn video__btn-white popup-video" href="<?= $textYoutube['youtube']; ?>">
                    <div class="video__player">
                        <span class="icon-play_arrow"></span>
                    </div>
                    <span class="video__title color-white">Watch Our Intro!</span>
                </a>
            </div>

        </div>
    </div>
</section>
