<?php
// All products array
$products = [
    [
        'brand_img' => 'https://cls-security.de/pub/media/brand/Hikvision.png',
        'brand_alt' => 'Hikvision',
        'product_img' => 'assets/img/products/hikvision.webp',
        'product_alt' => 'IP camera',
        'title' => 'HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera',
        'rating' => 5,
        'sku' => 'CLS100290968',
        'current_price' => '169.99 €',
        'old_price' => '3.099, €',
        'tax' => '19% MwSt.',
        'call_for_price' => false,
    ],
    [
        'brand_img' => 'https://cls-security.de/pub/media/brand/Hikvision.png',
        'brand_alt' => 'Hikvision',
        'product_img' => 'assets/img/products/hikvision.webp',
        'product_alt' => 'IP camera',
        'title' => 'HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera',
        'rating' => 5,
        'sku' => 'CLS100290968',
        'current_price' => '169.99 €',
        'old_price' => '3.099, €',
        'tax' => '19% MwSt.',
        'call_for_price' => false,
    ],
    [
        'brand_img' => 'https://cls-security.de/pub/media/brand/Hikvision.png',
        'brand_alt' => 'Hikvision',
        'product_img' => 'assets/img/products/hikvision.webp',
        'product_alt' => 'IP camera',
        'title' => 'HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera',
        'rating' => 5,
        'sku' => 'CLS100290968',
        'current_price' => '169.99 €',
        'old_price' => '3.099, €',
        'tax' => '19% MwSt.',
        'call_for_price' => false,
    ],
    [
        'brand_img' => 'https://cls-security.de/pub/media/brand/Hikvision.png',
        'brand_alt' => 'Hikvision',
        'product_img' => 'assets/img/products/hikvision.webp',
        'product_alt' => 'IP camera',
        'title' => 'HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera',
        'rating' => 5,
        'sku' => 'CLS100290968',
        'current_price' => '169.99 €',
        'old_price' => '3.099, €',
        'tax' => '19% MwSt.',
        'call_for_price' => true, // This one uses call-for-price layout
        'phone' => '0621 7163591',
    ],
    [
        'brand_img' => 'https://cls-security.de/pub/media/brand/Hikvision.png',
        'brand_alt' => 'Hikvision',
        'product_img' => 'assets/img/products/hikvision.webp',
        'product_alt' => 'IP camera',
        'title' => 'HIKVISION DS-2CD2123G2-IU(2.8mm) IP Kamera',
        'rating' => 5,
        'sku' => 'CLS100290968',
        'current_price' => '169.99 €',
        'old_price' => '3.099, €',
        'tax' => '19% MwSt.',
        'call_for_price' => false,
    ],
];
?>

<!-- Product Swiper Section -->
<section id="testimonials" class="products-wrap-swiper section light-background">
    <div class="container section-title" data-aos="fade-up">
        <div><span>Angebot der Woche</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper swipercat">
            <div class="swiper-wrapper">
                <?php foreach ($products as $product): ?>
                    <div class="swiper-slide">
                        <div class="card-item">
                            <div class="product_container custom-card p-3 m-2">
                                <div class="custom-card-body">

                                    <!-- Brand -->
                                    <div class="brand_photo_list">
                                        <img src="<?= $product['brand_img']; ?>"
                                            class="brandphoto"
                                            width="100"
                                            height="30"
                                            alt="<?= $product['brand_alt']; ?>">
                                    </div>

                                    <!-- Product Image -->
                                    <a href="#" class="imgPart product_thumbnail bg-image hover-zoom">
                                        <img src="<?= $product['product_img']; ?>"
                                            alt="<?= $product['product_alt']; ?>"
                                            width="180"
                                            height="180"
                                            class="img_box animation fade-in">
                                    </a>

                                    <!-- Product Title & SKU -->
                                    <a href="#">
                                        <h3 class="card-title productTitle_name"><?= $product['title']; ?></h3>
                                        <div class="product-tile__delivery mb-1 d-sm-flex justify-content-between align-items-center">
                                            <div class="ratingpart">
                                                <ul class="list-unstyled list-inline my-2 starRating">
                                                    <?php for ($i = 0; $i < $product['rating']; $i++): ?>
                                                        <li class="list-inline-item mx-0"><span class="icon-star"></span></li>
                                                    <?php endfor; ?>
                                                </ul>
                                            </div>
                                            <div class="skupart">
                                                <span><?= $product['sku']; ?></span>
                                            </div>
                                        </div>
                                    </a>

                                    <?php if (empty($product['call_for_price'])): ?>
                                        <!-- Price -->
                                        <div class="pricecontainer d-flex align-items-center justify-content-between">
                                            <div class="regular-price">
                                                <span class="currentPrice fw-bold"><?= $product['current_price']; ?></span>
                                                <div class="discount-price-label">
                                                    <span class="category-br">
                                                        <span class="home-hidden">Inkl</span>
                                                        <span class="home-hidden zero-percent"><?= $product['tax']; ?></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="old-price">
                                                <span class="instead-price">Statt</span>
                                                <span class="strike-through">
                                                    <span class="price-label pre">ab</span>
                                                    <span class="currency">€</span>
                                                    <span class="price"><?= $product['old_price']; ?></span>
                                                    <span class="cents"><span class="minus">-</span></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="productFooter mt-3 d-sm-flex justify-content-between align-items-center hidden">
                                            <div class="qty-container">
                                                <button class="qty-btn-minus btn-light" type="button"><span class="icon-minus"></span></button>
                                                <input type="text" name="qty" value="0" class="input-qty w-100">
                                                <button class="qty-btn-plus btn-light" type="button"><span class="icon-plus"></span></button>
                                            </div>
                                            <div class="readMoreLink">
                                                <a data-scroll="" href="#services" class="btn-main global-button">
                                                    <span class="global-button-content-wrapper icon-shopping-cart"></span>
                                                </a>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <!-- Call for price -->
                                        <div class="currentPrice mt-2 fw-bold callpricehidden"><?= $product['current_price']; ?></div>
                                        <div class="callfor-btn callfor-global-button productFooter mt-4">
                                            <div class="phone_number_call2">
                                                <span class="icon-phone icomoonMargin"></span><?= $product['phone']; ?>
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

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>