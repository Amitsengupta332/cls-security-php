<?php

$products = [

    [
        "brand"   => "https://cls-security.de/pub/media/brand/Hikvision.png",
        "image"   => "assets/img/products/hikvision.webp",
        "title"   => "HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera",
        "sku"     => "CLS100290968",
        "price"   => "169.99 €",
        "old_price" => "3.099",
        "type"    => "normal",  // normal price card
        "link"    => "#"
    ],

    [
        "brand"   => "https://cls-security.de/pub/media/brand/Hikvision.png",
        "image"   => "assets/img/products/hikvision.webp",
        "title"   => "HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera",
        "sku"     => "CLS100290968",
        "price"   => "169.99 €",
        "old_price" => "3.099",
        "type"    => "normal",
        "link"    => "#"
    ],

    [
        "brand"   => "https://cls-security.de/pub/media/brand/Hikvision.png",
        "image"   => "assets/img/products/hikvision.webp",
        "title"   => "HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera",
        "sku"     => "CLS100290968",
        "price"   => "169.99 €",
        "old_price" => "3.099",
        "type"    => "normal",
        "link"    => "#"
    ],

    [
        "brand"   => "https://cls-security.de/pub/media/brand/Hikvision.png",
        "image"   => "assets/img/products/hikvision.webp",
        "title"   => "HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera",
        "sku"     => "CLS100290968",
        "type"    => "call",  // call-for-price card
        "phone"   => "0621 7163591",
        "link"    => "#"
    ],

];

?>
<section id="productsgrid" class="productsgrid section light-background">

    <div class="container section-title" data-aos="fade-up">
        <div><span>Angebot der Woche</span></div>
    </div>

    <div class="container">
        <div class="row gy-4">

            <?php foreach ($products as $p): ?>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3 custom-padding" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="product_container custom-card p-3 m-2" style="width: 100%; display: inline-block;">

                            <div class="custom-card-body">

                                <!-- Brand -->
                                <div class="brand_photo_list">
                                    <img src="<?= $p['brand'] ?>" class="brandphoto" width="100" height="30" alt="Brand">
                                </div>

                                <!-- Image -->
                                <a href="<?= $p['link'] ?>" class="imgPart product_thumbnail bg-image hover-zoom" tabindex="0">
                                    <img src="<?= $p['image'] ?>" alt="<?= $p['title'] ?>" width="180" height="180" class="img_box animation fade-in">
                                </a>

                                <!-- Title + Rating + SKU -->
                                <a href="<?= $p['link'] ?>" aria-label="visit product" tabindex="0">
                                    <h3 class="card-title productTitle_name"><?= $p['title'] ?></h3>

                                    <div class="product-tile__delivery mb-1 d-sm-flex justify-content-between align-items-center">

                                        <div class="ratingpart">
                                            <ul class="list-unstyled list-inline my-2 starRating">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <li class="list-inline-item mx-0"><span class="icon-star"></span></li>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>

                                        <div class="skupart">
                                            <span><?= $p['sku'] ?></span>
                                        </div>

                                    </div>
                                </a>

                                <!-- Pricing Section -->
                                <?php if ($p['type'] == "normal"): ?>

                                    <div class="pricecontainer d-flex align-items-center justify-content-between">

                                        <div class="regular-price">
                                            <span class="currentPrice fw-bold"><?= $p['price'] ?></span>
                                            <div class="discount-price-label">
                                                <span class="category-br">
                                                    <span class="home-hidden">Inkl</span>
                                                    <span class="home-hidden zero-percent">19% MwSt.</span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="old-price">
                                            <span class="instead-price">Statt</span>
                                            <span class="strike-through">
                                                <span class="price-label pre">ab</span>
                                                <span class="currency">€</span>
                                                <span class="price"><?= $p['old_price'] ?>,</span>
                                                <span class="cents"><span class="minus">-</span></span>
                                            </span>
                                        </div>

                                    </div>

                                    <!-- Hidden Footer -->
                                    <div class="productFooter mt-3 d-sm-flex justify-content-between align-items-center hidden">

                                        <div class="qty-container">
                                            <button class="qty-btn-minus btn-light" type="button"><span class="icon-minus"></span></button>
                                            <input type="text" name="qty" value="0" class="input-qty w-100">
                                            <button class="qty-btn-plus btn-light" type="button"><span class="icon-plus"></span></button>
                                        </div>

                                        <div class="readMoreLink">
                                            <a href="#" class="btn-main global-button">
                                                <span class="global-button-content-wrapper icon-shopping-cart"></span>
                                            </a>
                                        </div>

                                    </div>

                                <?php else: ?>

                                    <!-- Call for Price -->
                                    <div class="currentPrice mt-2 fw-bold callpricehidden"><?= $p['price'] ?? "Preis auf Anfrage" ?></div>

                                    <div class="callfor-btn callfor-global-button productFooter mt-4">
                                        <div class="phone_number_call2">
                                            <span class="icon-phone icomoonMargin"></span><?= $p['phone'] ?>
                                        </div>
                                        <div class="call_for_button">Preis anfragen</div>
                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>