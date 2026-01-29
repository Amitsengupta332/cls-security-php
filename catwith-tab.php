<?php
// Tab data array
$tabs = [
    [
        "id" => "pills-home",
        "label" => "uberwachungskamera",
        "active" => true,
        "content_order" => ["text", "video"], // order of content and video
    ],
    [
        "id" => "pills-profile",
        "label" => "Alarmtechnik",
        "active" => false,
        "content_order" => ["video", "text"],
    ],
    [
        "id" => "pills-contact",
        "label" => "Aufzeichnungsgeräte",
        "active" => false,
        "content_order" => ["text", "video"],
    ],
];

// Content text (same for all tabs)
$tabText = [
    "heading" => "Kostenlose Standortbesichtigung und Entwurfsvorschlag für CCTV-Systeme!",
    "paragraph" => "Safeguard Systems sind Experten für CCTV-Kamerasysteme für Unternehmen und Gewerbe.Kontaktieren Sie uns noch heute für ein KOSTENLOSES, unverbindliches Angebot und eine Standortbesichtigung.",
    "list" => [
        "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        "Duis aute irure dolor in reprehenderit in voluptate velit.",
        "Duis aute irure dolor in reprehenderit in voluptate velit.Duis aute irure dolor in reprehenderit in voluptate velit.",
    ], 
    "buttons" => [
        ["text" => "0621 7163591", "href" => "#services"],
        ["text" => "Termin", "href" => "#services"]
    ],
];

// Video info (same for all tabs)
$video = [
    "thumbnail" => "assets/img/security-youtube.jpg",
    "url" => "https://www.youtube.com/watch?v=nrJtHemSPW4",
    "title" => "Watch Our Intro!"
];
?>

<section id="categoryWithTab" class="categoryWithTab">
    <div class="bgoverlay"></div>
    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-12 col-md-12">
                <ul class="nav nav-pills mb-5 mt-4 customtabpanel-ul justify-content-center" id="pills-tab" role="tablist">
                    <?php foreach ($tabs as $index => $tab): ?>
                        <li class="nav-item customtabpanel-li" role="presentation">
                            <button class="nav-link nav-link-btn <?= $tab['active'] ? 'active' : '' ?>" 
                                    id="<?= $tab['id'] ?>-tab" 
                                    data-bs-toggle="pill" 
                                    data-bs-target="#<?= $tab['id'] ?>" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="<?= $tab['id'] ?>" 
                                    aria-selected="<?= $tab['active'] ? 'true' : 'false' ?>">
                                <?= $tab['label'] ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content custom-tab-content mt-4" id="pills-tabContent">
                    <?php foreach ($tabs as $tab): ?>
                        <div class="tab-pane fade <?= $tab['active'] ? 'show active' : '' ?>" 
                             id="<?= $tab['id'] ?>" 
                             role="tabpanel" 
                             aria-labelledby="<?= $tab['id'] ?>-tab" 
                             tabindex="0">
                            <div class="row gy-4">
                                <?php foreach ($tab['content_order'] as $type): ?>
                                    <?php if ($type === "text"): ?>
                                        <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                            <div class="contentpart">
                                                <div class="overlay"></div>
                                                <h3><?= $tabText['heading'] ?></h3>
                                                <p class="fst-italic"><?= $tabText['paragraph'] ?></p>
                                                <ul>
                                                    <?php foreach ($tabText['list'] as $item): ?>
                                                        <li>
                                                            <span class="globalbtn"></span>
                                                            <span><?= $item ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <?php foreach ($tabText['buttons'] as $btn): ?>
                                                        <a data-scroll="" href="<?= $btn['href'] ?>" class="btn-main global-button">
                                                            <span class="global-button-content-wrapper"><?= $btn['text'] ?></span>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-lg-6 youtubelinks position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                            <img src="<?= $video['thumbnail'] ?>" class="img-fluid" alt="">
                                            <a class="video__btn video__btn-white popup-video" href="<?= $video['url'] ?>">
                                                <div class="video__player">
                                                    <span class="icon-play_arrow"></span>
                                                </div>
                                                <span class="video__title color-white"><?= $video['title'] ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</section>
