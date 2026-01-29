<?php
$blogs = [
    [
        'image' => 'assets/img/maincat/mainpage-img1.webp',
        'title' => 'Real-time AI-powered Monitoring System',
        'description' => '*instinctools was approached by IPwe for assistance in revamping their marketplace for monetizing patents encased in non-fungible tokens or NFTs...',
        'link' => '#',
        'delay' => 100
    ],
    [
        'image' => 'assets/img/maincat/mainpage-img1.webp',
        'title' => 'Real-time AI-powered Monitoring System',
        'description' => '*instinctools was approached by IPwe for assistance in revamping their marketplace for monetizing patents encased in non-fungible tokens or NFTs...',
        'link' => '#',
        'delay' => 200
    ],
    [
        'image' => 'assets/img/maincat/mainpage-img1.webp',
        'title' => 'Real-time AI-powered Monitoring System',
        'description' => '*instinctools was approached by IPwe for assistance in revamping their marketplace for monetizing patents encased in non-fungible tokens or NFTs..',
        'link' => '#',
        'delay' => 300
    ]
];
?>

<!-- Our Blog Section -->
<section id="our-blog" class="blog-sectionblog-section section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div><span>Our Blog</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-5">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4" data-aos="fade-up" data-aos-delay="<?= $blog['delay'] ?>">
                    <div class="blog">
                        <div class="pic"><img alt="" class="w-100 h-auto" decoding="async" src="<?= $blog['image'] ?>"></div>
                        <div class="blog-info">
                            <h4><?= $blog['title'] ?></h4>
                            <span><?= $blog['description'] ?></span>
                            <div class="social">
                                <a href="<?= $blog['link'] ?>" class="redMore">
                                    <span>Read More</span>
                                    <span class="icon-keyboard_arrow_right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="text-center viewboreBtn">
                    <button data-scroll="" type="button" class="global-button btn-transparent">
                        <span class="global-button-content-wrapper">view more</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
