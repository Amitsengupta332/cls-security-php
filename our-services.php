<?php
$services = [
    [
        "title" => "NFT Marketplace Development For Patents",
        "image" => "assets/img/maincat/mainpage-img3.webp",
        "description" => "How developing a frictionless web app empowered an agricultural startup to bring the idea of a real-time AI-powered monitoring system to life and serve farms with 10,000–15,000 plants.",
        "link" => "#"
    ],
    [
        "title" => "Real-time AI-powered Monitoring System",
        "image" => "assets/img/maincat/mainpage-img1.webp",
        "description" => "Instinctools was approached by IPwe for assistance in revamping their marketplace for monetizing patents encased in NFTs.",
        "link" => "#"
    ],
    [
        "title" => "User Support System For Mercedes-Benz",
        "image" => "assets/img/maincat/user-support-system-for-mercedes-benz.webp",
        "description" => "Instinctools helped to revamp the marketplace for monetizing patents encased in NFTs.",
        "link" => "#"
    ],
    [
        "title" => "Conversational AI Chatbot For Bank",
        "image" => "assets/img/maincat/homepage-conversational-ai-chatbot-for-bank.webp",
        "description" => "Instinctools improved the NFT-based patent marketplace to increase transparency and accessibility.",
        "link" => "#"
    ],
    [
        "title" => "Web App For Robotics Manufacturer",
        "image" => "assets/img/maincat/homepage-web-app-for-robotics-manufacturer.webp",
        "description" => "Instinctools revamped the robotics manufacturer's patent marketplace platform.",
        "link" => "#"
    ],
    [
        "title" => "ML-Powered Demand Forecasting For Ecommerce",
        "image" => "assets/img/maincat/homepage-ml-powered-demand-forecasting-for-ecommerce.webp",
        "description" => "Instinctools revamped the NFT-based marketplace for improved patent monetization.",
        "link" => "#"
    ],
];
?>
<section id="maincatImge" class="maincatimage-section light-background">
    <div class="container section-title" data-aos="fade-up">
        <div><span>Our Service</span></div>
    </div>

    <div class="container">
        <div class="row gy-4">

            <?php foreach($services as $service): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    
                    <div class="main-catimg__item">
                        <a class="main-catimg__link" href="<?= $service['link']; ?>" tabindex="0" style="height: 345px;">

                            <div class="main-catimg__image">
                                <img alt="<?= $service['title']; ?>" class="maincat__img" decoding="async" src="<?= $service['image']; ?>">
                            </div>

                            <div class="main-catimg__content">
                                <h3 class="main-catimg__title heading-6">
                                    <?= $service['title']; ?>
                                    <span>
                                        <svg viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.195 15.289h17.5M15.945 6.539l8.75 8.75-8.75 8.75"
                                                  stroke="currentColor" stroke-width="2" 
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </h3>

                                <div class="main-catimg__text">
                                    <p><?= $service['description']; ?></p>
                                </div>
                            </div>

                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
