<?= $this->extend("_Layout") ?>

<?= $this->section("content") ?>
<?php if (isset($product)) : ?>
    <div class="shifter-page is-moved-by-drawer" id="container">
        <div class="container">
            <div class="row">
                <div class="has-sidebar left-sidebar full-width">
                    <div class="product-template-content">
                        <div id="shopify-section-product-template" class="shopify-section">
                            <div class="text-center sidebar_btn"><a class="dt-sc-btn toggleIcon"> <i class="fa fa-caret-right" aria-hidden="true"></i> </a></div>
                            <div class="product-template__container page-width template-product" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product-page" data-enable-history-state="true">
                                <div class="product-page-row">
                                    <div class="product_images_length-3  product_image_width product-gallery-product-template" id="product-gallery">
                                        <div class="product-item-wrap slider-product-template   swiper-gallery-inline" id="slider" data-dt_media_group="">
                                            <div class="swiper-container main-swiper-container swiper-gallery-inline-slider" id="swiper-gallery-product-template">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide  zoom-img-wrap " id="7946688299052">
                                                        <div id="FeaturedMedia-product-template-7946688299052-wrapper" class="dt-sc-product-single-wrapper  zoom-img-wrap " data-product-single-media-wrapper="" data-media-id="product-template-7946688299052" tabindex="-1">
                                                            <img class="product-item-img zoom-img lazyload" data-srczoom="<?= $product[0]['image'] ?>" src="<?= $product[0]['image'] ?>" data-src="<?= $product[0]['image'] ?>" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="0.6901311249137336" data-sizes="auto" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                            <a tabindex="-1" class="zoom-img-container zoom-img-position" data-image-loading-animation="" href="javascript:void(0);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php foreach ($product['imageDetail'] as $image) : ?>
                                                        <div class="swiper-slide  zoom-img-wrap " id="7946688299052">
                                                            <div id="FeaturedMedia-product-template-7946688299052-wrapper" class="dt-sc-product-single-wrapper  zoom-img-wrap " data-product-single-media-wrapper="" data-media-id="product-template-7946688299052" tabindex="-1">
                                                                <img class="product-item-img zoom-img lazyload" data-srczoom="<?= $image['image'] ?>" src="<?= $image['image'] ?>" data-src="<?= $image['image'] ?>" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="0.6901311249137336" data-sizes="auto" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                                <a tabindex="-1" class="zoom-img-container zoom-img-position" data-image-loading-animation="" href="javascript:void(0);">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <!-- <div class="swiper-slide  zoom-img-wrap " id="7946688135212">
                                                        <div id="FeaturedMedia-product-template-7946688135212-wrapper" class="dt-sc-product-single-wrapper  zoom-img-wrap " data-product-single-media-wrapper="" data-media-id="product-template-7946688135212" tabindex="-1">
                                                            <img class="product-item-img zoom-img lazyload lazypreload" data-srczoom="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-60_2000x.jpg?v=1587101860" src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-60.jpg?v=1587101860" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-60.jpg?v=1587101860" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="0.6901311249137336" data-sizes="auto" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                            <a tabindex="-1" class="zoom-img-container zoom-img-position" data-image-loading-animation="" href="javascript:void(0);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide  zoom-img-wrap " id="7946688233516">
                                                        <div id="FeaturedMedia-product-template-7946688233516-wrapper" class="dt-sc-product-single-wrapper  zoom-img-wrap " data-product-single-media-wrapper="" data-media-id="product-template-7946688233516" tabindex="-1">
                                                            <img class="product-item-img zoom-img lazyload lazypreload" data-srczoom="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63_2000x.jpg?v=1587101860" src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63.jpg?v=1587101860" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63.jpg?v=1587101860" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="0.6901311249137336" data-sizes="auto" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                            <a tabindex="-1" class="zoom-img-container zoom-img-position" data-image-loading-animation="" href="javascript:void(0);">
                                                            </a>
                                                        </div>
                                                    </div> -->
                                                    <noscript>
                                                        <div class="dt-sc-no-image" style="background-image: url('//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63.jpg?v=1587101860'); background-position: center;"></div>
                                                    </noscript>
                                                </div>
                                                <div class="swiper-pagination-product-template"></div>
                                            </div>
                                            <div class="swiper-horiz-thumbnails-main-container swiper-thumbnails-main-container">
                                                <div class="swiper-container swiper-thumbnails-inline" id="swiper-gallery-thumbs-product-template">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide" tabindex="0">
                                                            <img class="swiper-thumb-item lazyload" src="<?= $product[0]['image'] ?>" data-src="<?= $product[0]['image'] ?>" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                        </div>
                                                        <?php foreach ($product['imageDetail'] as $image) : ?>
                                                            <div class="swiper-slide" tabindex="0">
                                                                <img class="swiper-thumb-item lazyload" src="<?= $image['image'] ?>" data-src="<?= $image['image'] ?>" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                            </div>
                                                        <?php endforeach; ?>

                                                        <!-- <div class="swiper-slide" tabindex="0">
                                                            <img class="swiper-thumb-item lazyload" src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-60_medium.jpg?v=1587101860" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-60_medium.jpg?v=1587101860" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                        </div>
                                                        <div class="swiper-slide" tabindex="0">
                                                            <img class="swiper-thumb-item lazyload" src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63_medium.jpg?v=1587101860" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-63_medium.jpg?v=1587101860" alt="<?= $product[0]['name'] ?>" title="<?= $product[0]['name'] ?>">
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description-product-template" id="product-description">
                                        <div class="product-item-caption-white  sidebar-product-template" id="sidebar">
                                            <div class="product-meta-block">
                                                <h2 class="product-title"><?= $product[0]['name'] ?></h2>
                                                <!-- <span class="shopify-product-reviews-badge" data-id="4800202473516"></span> -->
                                                <div class="product-item-caption-desc product-rte-description" style="display: -webkit-box;overflow: hidden;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">
                                                    <?= $product[0]['description'] ?>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="product-price-label product-label">Giá:</h6>
                                                    <ul class="price-list">
                                                        <li id="ProductPrice-product-template" class="product-price-current"><span class="money"><span class="money"><?= $product[0]['price'] ?></span></span></li>
                                                        <li id="ComparePrice-product-template" class="product-price-list"><span class="money">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="unitPrice-product-template"></div>
                                                </div>
                                            </div>
                                            <form method="post" action="/cart/add" id="product_form_4800202473516" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" data-product-form="
                                            {
                                            &quot;money_format&quot;: &quot;\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e&quot;,
                                            &quot;enable_history&quot;: true,
                                            &quot;currency_switcher_enabled&quot;: null,
                                            &quot;sold_out&quot;: &quot;Sold Out&quot;,
                                            &quot;button&quot;: &quot;Add to Cart&quot;,
                                            &quot;unavailable&quot;: &quot;Unavailable&quot;
                                            }
                                            ">
                                                <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                                                <style>
                                                    .product-select-block-product-template {
                                                        display: none;
                                                    }
                                                </style>
                                                <style>
                                                    label[for="product-select-option-0"] {
                                                        display: none;
                                                    }

                                                    #product-select-option-0 {
                                                        display: none;
                                                    }

                                                    #product-select-option-0+.custom-style-select-box {
                                                        display: none !important;
                                                    }
                                                </style>

                                                <style>
                                                    label[for="product-select-option-1"] {
                                                        display: none;
                                                    }

                                                    #product-select-option-1 {
                                                        display: none;
                                                    }

                                                    #product-select-option-1+.custom-style-select-box {
                                                        display: none !important;
                                                    }
                                                </style>
                                                <div class="product-attributes">
                                                    <h6 class="product-label">Tác giả:</h6>
                                                    <span><?= $product[0]['author'] ?></span>
                                                </div>
                                                <div id="sku-table" class="product-attributes sku-table-product-template attributes-hidden">
                                                    <h6 class="product-label">SKU :</h6>
                                                    <span id="variant-sku" class="variant-sku-product-template"><?= $product[0]['SKU'] ?></span>
                                                </div>
                                                <div class="product-attributes">
                                                    <h6 id="category_name" class="product-label">Thể loại:</h6>
                                                    <?= $product['categoryName'] ?>
                                                </div>
                                                <div class="product-attributes dt-sc-qty">
                                                    <h6 class="product-label">Số lượng:</h6>
                                                    <div class="product-form__item product-form__item--quantity product-item-caption-qty">
                                                        <button class="btn-number btn-number-product-template" type="button" data-type="minus" data-field="quant[1]">-</button>
                                                        <input type="text" id="Quantity-product-template" name="quantity" value="1" class="form-control input-number input-number-product-template product-form__input" pattern="[0-9]*">
                                                        <button class="btn-number btn-number-product-template" type="button" data-type="plus" data-field="quant[1]">+</button>
                                                    </div>
                                                </div>
                                                <div class="product-form__item product-form__item--submit  product_payments_btns">
                                                    <button type="submit" name="add" id="dT_AddToCart-product-template" class="dT_AddToCart dt-sc-btn ">
                                                        <span class="dT_AddToCartText-product-template">Thêm vào giỏ hàng</span>
                                                    </button>
                                                    <div data-shopify="payment-button" class="shopify-payment-button"><button class="shopify-payment-button__button shopify-payment-button__button--unbranded shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button><button class="shopify-payment-button__more-options shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab">
                                    <div class="dt-sc-tabs-container">
                                        <div class="dt-sc-tabs dt-sc-list-inline">
                                            <button class="tablinks" onclick="openTab(event, 'tab-description')">Mô tả</button>
                                            <!-- <button class="tablinks" onclick="openTab(event, 'tab-custom')"></button>
                                            <button class="tablinks" onclick="openTab(event, 'tab-review')">Reviews</button> -->
                                        </div>
                                        <div class="dt-sc-tabs-content  product-single__description rte" id="tab-description" style="display:block;">
                                            <?= $product[0]['description'] ?>

                                        </div>
                                        <div class="dt-sc-tabs-content" id="tab-custom">
                                        </div>
                                        <div class="dt-sc-tabs-content" id="tab-review">
                                            <div id="shopify-product-reviews" data-id="4800202473516">
                                                <style scoped="">
                                                    .spr-container {
                                                        padding: 24px;
                                                        border-color: #ECECEC;
                                                    }

                                                    .spr-review,
                                                    .spr-form {
                                                        border-color: #ECECEC;
                                                    }
                                                </style>
                                                <div class="spr-container">
                                                    <div class="spr-header">
                                                        <h2 class="spr-header-title">Customer Reviews</h2>
                                                        <div class="spr-summary">
                                                            <span class="spr-starrating spr-summary-starrating">
                                                                <i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star-empty"></i>
                                                            </span>
                                                            <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 1 review</span>
                                                            </span><span class="spr-summary-actions">
                                                                <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(4800202473516);return false'>Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class='spr-form' id='form_4800202473516' style='display: none'></div>
                                                        <div class='spr-reviews' id='reviews_4800202473516'></div>
                                                    </div>
                                                </div>
                                                <script type="application/ld+json">
                                                    {
                                                        "@context": "http://schema.org/",
                                                        "@type": "AggregateRating",
                                                        "reviewCount": "1",
                                                        "ratingValue": "4.0",
                                                        "itemReviewed": {
                                                            "@type": "Product",
                                                            "name": "<?= $product[0]['name'] ?>",
                                                            "offers": {
                                                                "@type": "AggregateOffer",
                                                                "lowPrice": "420.0",
                                                                "highPrice": "430.0",
                                                                "priceCurrency": "USD"
                                                            }
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function openTab(evt, TabName) {
                                            var i, tabcontent, tablinks;
                                            tabcontent = document.getElementsByClassName("dt-sc-tabs-content");
                                            for (i = 0; i < tabcontent.length; i++) {
                                                tabcontent[i].style.display = "none";
                                            }
                                            tablinks = document.getElementsByClassName("tablinks");
                                            for (i = 0; i < tablinks.length; i++) {
                                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                                            }
                                            document.getElementById(TabName).style.display = "block";
                                            evt.currentTarget.className += " active";
                                        }
                                        $(".tablinks").first().addClass("active");
                                        $(".dt-sc-tabs-content").first().css("display", "block");
                                    </script>
                                </div>
                            </div>
                            <script type="application/json" id="ProductJson-product-template">
                                {
                                    "id": 4800202473516,
                                    "title": "<?= $product[0]['name'] ?>",
                                    "handle": "the-gift-of-love",
                                    "description": "\u003cp\u003eNam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.\u003cbr\u003e\u003cstrong\u003e\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eLorem ipsum dolor sit amet\u003c\/strong\u003e\u003cbr\u003e\u003cspan\u003eSonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\u003c\/span\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eBusey ipsum dolor sit amet\u003c\/strong\u003e\u003cbr\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cspan\u003eTortor at auctor urna nunc id cursus metus aliquam. Odio tempor orci dapibus ultrices. Tortor condimentum lacinia quis vel eros donec ac odio. Velit euismod in pellentesque massa placerat duis ultricies lacus. Scelerisque purus semper eget duis at tellus at urna condimentum. Eu facilisis sed odio morbi quis commodo odio aenean urpis massa sed elemen. \u003c\/span\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eSample Paragraph Text\u003c\/strong\u003e\u003cbr\u003e\u003c\/p\u003e\n\u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes loremous. Suspendisse vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor ipsum.\u003c\/p\u003e",
                                    "published_at": "2020-03-26T03:05:31-04:00",
                                    "created_at": "2020-03-26T03:05:37-04:00",
                                    "vendor": "Michael Alice",
                                    "type": "Entertainment",
                                    "tags": ["$400 - $500", "Entertainment", "Japanese", "Kindle Edition", "Michael Alice"],
                                    "price": 42000,
                                    "price_min": 42000,
                                    "price_max": 43000,
                                    "available": true,
                                    "price_varies": true,
                                    "compare_at_price": 20000,
                                    "compare_at_price_min": 20000,
                                    "compare_at_price_max": 20000,
                                    "compare_at_price_varies": false,
                                    "variants": [{
                                        "id": 33107020742700,
                                        "title": "Kindle Edition \/ Japanese",
                                        "option1": "Kindle Edition",
                                        "option2": "Japanese",
                                        "option3": null,
                                        "sku": "",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": {
                                            "id": 15773092610092,
                                            "product_id": 4800202473516,
                                            "position": 1,
                                            "created_at": "2020-04-17T01:37:41-04:00",
                                            "updated_at": "2020-04-17T06:12:26-04:00",
                                            "alt": null,
                                            "width": 1000,
                                            "height": 1449,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587118346",
                                            "variant_ids": [33107020742700]
                                        },
                                        "available": true,
                                        "name": "<?= $product[0]['name'] ?> - Kindle Edition \/ Japanese",
                                        "public_title": "Kindle Edition \/ Japanese",
                                        "options": ["Kindle Edition", "Japanese"],
                                        "price": 42000,
                                        "weight": 0,
                                        "compare_at_price": 20000,
                                        "inventory_management": null,
                                        "barcode": "",
                                        "featured_media": {
                                            "alt": null,
                                            "id": 7946688299052,
                                            "position": 1,
                                            "preview_image": {
                                                "aspect_ratio": 0.69,
                                                "height": 1449,
                                                "width": 1000,
                                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587101861"
                                            }
                                        }
                                    }, {
                                        "id": 33356977405996,
                                        "title": "Large Print \/ Hebrew",
                                        "option1": "Large Print",
                                        "option2": "Hebrew",
                                        "option3": null,
                                        "sku": "",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": {
                                            "id": 15773092479020,
                                            "product_id": 4800202473516,
                                            "position": 3,
                                            "created_at": "2020-04-17T01:37:40-04:00",
                                            "updated_at": "2020-04-17T07:09:53-04:00",
                                            "alt": null,
                                            "width": 1000,
                                            "height": 1449,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-63.jpg?v=1587121793",
                                            "variant_ids": [33356977405996]
                                        },
                                        "available": true,
                                        "name": "<?= $product[0]['name'] ?> - Large Print \/ Hebrew",
                                        "public_title": "Large Print \/ Hebrew",
                                        "options": ["Large Print", "Hebrew"],
                                        "price": 42000,
                                        "weight": 0,
                                        "compare_at_price": 20000,
                                        "inventory_management": null,
                                        "barcode": "",
                                        "featured_media": {
                                            "alt": null,
                                            "id": 7946688233516,
                                            "position": 3,
                                            "preview_image": {
                                                "aspect_ratio": 0.69,
                                                "height": 1449,
                                                "width": 1000,
                                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-63.jpg?v=1587101860"
                                            }
                                        }
                                    }, {
                                        "id": 33107020775468,
                                        "title": "Audible Audiobook \/ Korean",
                                        "option1": "Audible Audiobook",
                                        "option2": "Korean",
                                        "option3": null,
                                        "sku": "",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": {
                                            "id": 15773092577324,
                                            "product_id": 4800202473516,
                                            "position": 2,
                                            "created_at": "2020-04-17T01:37:40-04:00",
                                            "updated_at": "2020-04-17T07:09:53-04:00",
                                            "alt": null,
                                            "width": 1000,
                                            "height": 1449,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-60.jpg?v=1587121793",
                                            "variant_ids": [33107020775468]
                                        },
                                        "available": true,
                                        "name": "<?= $product[0]['name'] ?> - Audible Audiobook \/ Korean",
                                        "public_title": "Audible Audiobook \/ Korean",
                                        "options": ["Audible Audiobook", "Korean"],
                                        "price": 43000,
                                        "weight": 0,
                                        "compare_at_price": 20000,
                                        "inventory_management": null,
                                        "barcode": "",
                                        "featured_media": {
                                            "alt": null,
                                            "id": 7946688135212,
                                            "position": 2,
                                            "preview_image": {
                                                "aspect_ratio": 0.69,
                                                "height": 1449,
                                                "width": 1000,
                                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-60.jpg?v=1587101860"
                                            }
                                        }
                                    }],
                                    "images": ["\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587118346", "\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-60.jpg?v=1587121793", "\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-63.jpg?v=1587121793"],
                                    "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587118346",
                                    "options": ["Format", "Language"],
                                    "media": [{
                                        "alt": null,
                                        "id": 7946688299052,
                                        "position": 1,
                                        "preview_image": {
                                            "aspect_ratio": 0.69,
                                            "height": 1449,
                                            "width": 1000,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587101861"
                                        },
                                        "aspect_ratio": 0.69,
                                        "height": 1449,
                                        "media_type": "image",
                                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-65.jpg?v=1587101861",
                                        "width": 1000
                                    }, {
                                        "alt": null,
                                        "id": 7946688135212,
                                        "position": 2,
                                        "preview_image": {
                                            "aspect_ratio": 0.69,
                                            "height": 1449,
                                            "width": 1000,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-60.jpg?v=1587101860"
                                        },
                                        "aspect_ratio": 0.69,
                                        "height": 1449,
                                        "media_type": "image",
                                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-60.jpg?v=1587101860",
                                        "width": 1000
                                    }, {
                                        "alt": null,
                                        "id": 7946688233516,
                                        "position": 3,
                                        "preview_image": {
                                            "aspect_ratio": 0.69,
                                            "height": 1449,
                                            "width": 1000,
                                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-63.jpg?v=1587101860"
                                        },
                                        "aspect_ratio": 0.69,
                                        "height": 1449,
                                        "media_type": "image",
                                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0359\/5979\/9852\/products\/shop-new-63.jpg?v=1587101860",
                                        "width": 1000
                                    }],
                                    "content": "\u003cp\u003eNam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.\u003cbr\u003e\u003cstrong\u003e\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eLorem ipsum dolor sit amet\u003c\/strong\u003e\u003cbr\u003e\u003cspan\u003eSonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\u003c\/span\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eBusey ipsum dolor sit amet\u003c\/strong\u003e\u003cbr\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cspan\u003eTortor at auctor urna nunc id cursus metus aliquam. Odio tempor orci dapibus ultrices. Tortor condimentum lacinia quis vel eros donec ac odio. Velit euismod in pellentesque massa placerat duis ultricies lacus. Scelerisque purus semper eget duis at tellus at urna condimentum. Eu facilisis sed odio morbi quis commodo odio aenean urpis massa sed elemen. \u003c\/span\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eSample Paragraph Text\u003c\/strong\u003e\u003cbr\u003e\u003c\/p\u003e\n\u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes loremous. Suspendisse vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor ipsum.\u003c\/p\u003e"
                                }
                            </script>
                            <script type="application/json" id="ModelJson-product-template">
                                []
                            </script>
                            <script type="application/json" id="ProductTemplate-4800202473516">
                                {
                                    "template": "product-page"
                                }
                            </script>
                            <script type="text/javascript"></script>
                        </div>
                    </div>
                    <div class="sidebar" id="sidebar-sticky">
                        <div id="shopify-section-product-sidebar" class="shopify-section">
                            <div class="sidebar-height-product-sidebar">
                                <a href="#" class="js-close-modal dt-sc-btn close-icon"></a>
                                <div class="dT_VProdWrapper widget product-sidebar-type-carousel">
                                    <h5 class="sidebar_title">Hot Deals</h5>
                                    <div data-section-id="2609ab18-f9bf-4ce5-bfc8-e3fd42c808bf" data-section-type="product-sidebar-carousel-section" data-item-per-view="1" data-autoplay="true" data-small-screen-items="1" data-blocks-limit="1" data-item-space="2" data-auto-height="true" data-item-row="1" class="product-sidebar-deals">
                                        <div class="dt-sc-swiper-slider swiper-container navigation-bottom-center outside_element">
                                            <div id="swiper-2609ab18-f9bf-4ce5-bfc8-e3fd42c808bf-slider" class="dT_VProdWrapperOther">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide grid-item product-grid-item  " id="product-4947331252268">
                                                        <div class="products">
                                                            <div class="product-container">
                                                                <a href="#" class="grid-link product-group">
                                                                    <div class="image_group">
                                                                        <div class="ImageOverlayCa"></div>
                                                                        <div class="reveal">
                                                                            <span class="product-additional">
                                                                                <img src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-76_600x.jpg?v=1622275073" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-76_600x.jpg?v=1622275073" class="" alt="Girls at the Golden City">
                                                                            </span>
                                                                            <img src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-75_600x.jpg?v=1587116682" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-75_600x.jpg?v=1587116682" class="hidden-feature_img" alt="Girls at the Golden City">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="product_right_tag  ">
                                                                </div>
                                                                <div class="ImageWrapper">
                                                                </div>
                                                            </div>
                                                            <div class="product-detail content-left">
                                                                <p class="product-vendor"><span>Alice James</span></p>
                                                                <h4 class="#">Girls at the Golden City</a></h4>
                                                                <div class="grid-link__meta">
                                                                    <div class="product_price">
                                                                        <div class="grid-link__org_price" id="ProductPrice">
                                                                            <span class="money">$300.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <style type="text/css">
                                                        .teaser.lazyload {
                                                            opacity: 0;
                                                            transform: scale(0.8);
                                                        }

                                                        .teaser.lazyloaded {
                                                            opacity: 1;
                                                            transform: scale(1);
                                                            transition: all 700ms;
                                                        }
                                                    </style>
                                                    <li class="swiper-slide grid-item product-grid-item  on-sale " id="product-4800214433836">
                                                        <div class="products">
                                                            <div class="product-container">
                                                                <a href="#" class="grid-link product-group">
                                                                    <div class="featured-tag">
                                                                        <span class="badge badge--sale">
                                                                            <span class="gift-tag badge__text">Sale</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="image_group">
                                                                        <div class="ImageOverlayCa"></div>
                                                                        <div class="reveal">
                                                                            <span class="product-additional">
                                                                                <img src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-57_600x.jpg?v=1587119315" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-57_600x.jpg?v=1587119315" class="featured-image" alt="Vistit in the North">
                                                                            </span>
                                                                            <img src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-54_600x.jpg?v=1587119315" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-54_600x.jpg?v=1587119315" class="hidden-feature_img lazyload" alt="Vistit in the North">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="product-detail content-left">
                                                                <p class="product-vendor"><span>Adam Baid</span></p>
                                                                <h4 class="#">Vistit in the North</a></h4>
                                                                <div class="grid-link__meta">
                                                                    <div class="product_price">
                                                                        <div class="grid-link__org_price" id="ProductPrice">
                                                                            <span class="money">$410.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <del class="grid-link__sale_price" id="ComparePrice">
                                                                        <span class="money">$700.00</span>
                                                                    </del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <style type="text/css">
                                                        .teaser.lazyload {
                                                            opacity: 0;
                                                            transform: scale(0.8);
                                                        }

                                                        .teaser.lazyloaded {
                                                            opacity: 1;
                                                            transform: scale(1);
                                                            transition: all 700ms;
                                                        }
                                                    </style>
                                                    <li class="swiper-slide grid-item product-grid-item  on-sale " id="product-4800207290412">
                                                        <div class="products">
                                                            <div class="product-container">
                                                                <a href="#" class="grid-link product-group">
                                                                    <div class="featured-tag">
                                                                        <span class="badge badge--sale">
                                                                            <span class="gift-tag badge__text">Sale</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="image_group">
                                                                        <div class="ImageOverlayCa"></div>
                                                                        <div class="reveal">
                                                                            <span class="product-additional">
                                                                                <img src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-87_600x.jpg?v=1587118936" class="featured-image lazyload" alt="The Stadium by Night">
                                                                            </span>
                                                                            <img src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/shop-new-85_600x.jpg?v=1587118936" class="hidden-feature_img lazyload" alt="The Stadium by Night">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="product-detail content-left">
                                                                <p class="product-vendor"><span>John Erik</span></p>
                                                                <h4 class="#">The Stadium by Night</a></h4>
                                                                <div class="grid-link__meta">
                                                                    <div class="product_price">
                                                                        <div class="grid-link__org_price" id="ProductPrice">
                                                                            <span class="money">$320.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <del class="grid-link__sale_price" id="ComparePrice">
                                                                        <span class="money">$700.00</span>
                                                                    </del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <style type="text/css">
                                                        .teaser.lazyload {
                                                            opacity: 0;
                                                            transform: scale(0.8);
                                                        }

                                                        .teaser.lazyloaded {
                                                            opacity: 1;
                                                            transform: scale(1);
                                                            transition: all 700ms;
                                                        }
                                                    </style>
                                                    <li class="swiper-slide grid-item product-grid-item  " id="product-4800180486188">
                                                        <div class="products">
                                                            <div class="product-container">
                                                                <a href="#" class="grid-link product-group">
                                                                    <div class="image_group">
                                                                        <div class="ImageOverlayCa"></div>
                                                                        <div class="reveal">
                                                                            <span class="product-additional">
                                                                                <img src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/booknew-3_600x.jpg?v=1587119671" class="featured-image lazyload" alt="When The Stars Align">
                                                                            </span>
                                                                            <img src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="//cdn.shopify.com/s/files/1/0359/5979/9852/products/booknew-4_600x.jpg?v=1587119671" class="hidden-feature_img lazyload" alt="When The Stars Align">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="product-detail content-left">
                                                                <p class="product-vendor"><span>Alice James</span></p>
                                                                <h4 class="#">When The Stars Align</a></h4>
                                                                <div class="grid-link__meta">
                                                                    <div class="product_price">
                                                                        <div class="grid-link__org_price" id="ProductPrice">
                                                                            <span class="money">$300.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <style type="text/css">
                                                        .teaser.lazyload {
                                                            opacity: 0;
                                                            transform: scale(0.8);
                                                        }

                                                        .teaser.lazyloaded {
                                                            opacity: 1;
                                                            transform: scale(1);
                                                            transition: all 700ms;
                                                        }
                                                    </style>
                                                </ul>
                                                <div class="swiper-2609ab18-f9bf-4ce5-bfc8-e3fd42c808bf-arrows swiper-arrows">
                                                    <div id="swiper-2609ab18-f9bf-4ce5-bfc8-e3fd42c808bf-next" class="swiper-button-next dt-sc-btn"></div>
                                                    <div id="swiper-2609ab18-f9bf-4ce5-bfc8-e3fd42c808bf-prev" class="swiper-button-prev dt-sc-btn"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .dt-sc-product_bundle {
                        background: var(--DTTertiaryColor);
                        padding: 30px;
                        display: inline-block;
                        width: 100%;
                        border-radius: var(--DTRadius);
                    }

                    .dt-sc-product_bundle .section-title h3 {
                        margin: 0 0 15px;
                        line-height: normal;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image {
                        display: flex;
                        justify-content: space-between;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image>div {
                        text-align: center;
                        margin-bottom: 20px;
                        position: relative;
                        width: calc(25% - 15px);
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image>div:not(:last-child) {
                        margin-right: 30px
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image .item-image img {
                        width: 100%;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image a.item-image {
                        margin-bottom: 30px;
                        display: block;
                        overflow: hidden;
                        border-radius: var(--DTRadius);
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image>div:not(:last-child)>div:first-child {
                        position: relative;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image>div:not(:last-child)>div:first-child:after {
                        content: '+';
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        right: -22px;
                        font-size: 20px;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image li:not(:last-child) {
                        margin-bottom: 15px;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image [type=checkbox] {
                        margin: auto;
                    }

                    .dt-sc-product_bundle .dt-sc-product-details {
                        display: flex;
                        align-items: center;
                        margin-bottom: 0;
                        flex-flow: column wrap;
                        line-height: normal;
                    }

                    .dt-sc-product_bundle .dt-sc-product-details span {
                        font-weight: 600;
                        padding: 0 3px;
                        color: var(--DTPrimaryColor);
                    }

                    .dt-sc-product_bundle .bundle-product-cart-total {
                        font-weight: 600;
                        font-size: var(--DTFontSize_H6);
                    }

                    .dt-sc-product_bundle .dt-sc-select-btn {
                        width: 100%;
                        padding: 10px 15px;
                        border-radius: var(--DTRadius);
                        background-color: var(--DTBodyBGColor);
                        border: 1px solid var(--DTColor_Border);
                    }

                    .dt-sc-product_bundle .varient-options {
                        z-index: 1;
                        display: none;
                        margin-bottom: 15px;
                        padding: 15px !important;
                        width: 100% !important;
                        box-shadow: var(--DTboxShadow);
                        border-radius: var(--DTRadius);
                        background-color: var(--DTBodyBGColor);
                        position: absolute;
                    }

                    .dt-sc-product_bundle .product-form__controls-group {
                        display: flex;
                        flex-flow: column;
                    }

                    .dt-sc-product_bundle .product-form__controls-group~* {
                        display: none;
                    }

                    .dt-sc-product_bundle .product-form__controls-group .selector-wrapper {
                        display: inline-flex;
                        text-align: left;
                        margin-bottom: 15px;
                    }

                    .dt-sc-product_bundle .product-form__controls-group .selector-wrapper:last-child {
                        margin-bottom: 0px;
                    }

                    .dt-sc-product_bundle .selector-wrapper label {
                        display: inline-flex;
                        font-weight: bold;
                        width: 50%;
                    }

                    .dt-sc-product_bundle .selector-wrapper .select2.select2-container {
                        width: 50% !important;
                    }

                    .dt-sc-product_bundle .selector-wrapper select {
                        padding: 5px;
                        width: 100%;
                        background-color: var(--DTColor_Border);
                        border-radius: var(--DTRadius);
                    }

                    .dt-sc-product_bundle .dt-sc-btn.btn-product-add-to-cart,
                    .bundle-product-add-to-cart,
                    .bundle-product-offer-note {
                        display: inline-block;
                        margin: 0 10px 20px 0px;
                    }

                    .bundle-product-cart-total {
                        display: flex;
                        margin: 0 0 20px;
                    }

                    .bundle-product-cart-total>*+* {
                        margin-left: 10px;
                    }

                    .dt-sc-product_bundle .bundle-product-offer-note {
                        font-style: italic;
                    }

                    span.dT_totalBundleOriginalPrice {
                        text-decoration: line-through;
                        opacity: .5;
                        color: inherit;
                        font-weight: 400;
                    }

                    .group-product .old-price {
                        font-size: 80%;
                        opacity: .5;
                        text-decoration: line-through;
                    }

                    .group-product .old-price,
                    .group-product .special-price {
                        margin: 0 5px;
                    }

                    .dt-sc-product_bundle .dt-sc-thumb-image ul {
                        position: relative;
                    }

                    .checkbox_style {
                        display: inline-block;
                        position: relative;
                        padding-left: 35px;
                        margin-bottom: 20px;
                        cursor: pointer;
                        font-size: 0;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                    }

                    .checkbox_style input {
                        position: absolute;
                        opacity: 0;
                        cursor: pointer;
                        left: 0;
                        top: 0;
                        width: 25px;
                        height: 25px;
                        z-index: 1;
                    }

                    .checkmark {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 25px;
                        width: 25px;
                        background-color: var(--DTPrimaryColor);
                        ;
                    }

                    .checkbox_style:hover input~.checkmark {
                        background-color: var(--DTPrimaryColor);
                    }

                    .checkbox_style input:checked~.checkmark {
                        background-color: var(--DTPrimaryColor);
                    }

                    .checkbox_style input:checked~.checkmark:after {
                        display: block;
                    }

                    .checkbox_style .checkmark:after {
                        content: "";
                        position: absolute;
                        display: none;
                    }

                    .checkbox_style .checkmark:after {
                        left: 10px;
                        top: 6px;
                        width: 5px;
                        height: 10px;
                        border: solid white;
                        border-width: 0 1px 1px 0;
                        -webkit-transform: rotate(45deg);
                        -ms-transform: rotate(45deg);
                        transform: rotate(45deg);
                    }

                    @media only screen and (max-width: 991px) and (min-width: 767px) {

                        .dt-sc-product_bundle .dt-sc-thumb-image,
                        .dt-sc-product_bundle .product-list {
                            grid-template-columns: repeat(2, 1fr);
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image {
                            display: grid;
                            gap: 30px;
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image>div:not(:last-child)>div:first-child:after {
                            display: none;
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image>div {
                            width: 100%;
                        }
                    }

                    @media (max-width:767px) {
                        .dt-sc-product_bundle .dt-sc-thumb-image>div:not(:last-child)>div:first-child:after {
                            display: none;
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image,
                        .dt-sc-product_bundle .product-list {
                            grid-template-columns: repeat(2, 1fr);
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image {
                            display: block;
                        }

                        .dt-sc-product_bundle .dt-sc-thumb-image>div {
                            width: 100%;
                            margin-bottom: 40px;
                        }
                    }

                    @media (max-width:575px) {

                        .dt-sc-product_bundle .dt-sc-thumb-image,
                        .dt-sc-product_bundle .product-list {
                            grid-template-columns: repeat(1, 1fr);
                        }
                    }
                </style>
                <script type="text/javascript">
                    const DT_DISCOUNT = '';
                    const BUNDLE_MAIN_PRODUCT_ID = "4800202473516";

                    var bundleProductIds = ["4800202473516"];
                </script>
                <div id="shopify-section-related-products" class="shopify-section">
                    <div class="related-products-container dT_VRelatedProducts">
                        <div class="section-header section-header--small">
                            <div class="title">
                                <h3 class="section-header__title text-center">
                                    Sản phẩm liên quan
                                </h3>
                            </div>
                        </div>
                        <div class="dT_VProdWrapper">
                            <ul class=" dt-sc-column  four-column">
                                <?php if (isset($lstRelateProduct)) : ?>
                                    <?php foreach ($lstRelateProduct as $data) : ?>
                                        <li class=" grid-item product-grid-item   " id="product-4800222363692">
                                            <div class="products">
                                                <div class="product-container">
                                                    <a href="<?= base_url() ?>/public/productDetail?pid=<?= $data['id'] ?>" class="grid-link product-group">
                                                        <?php if ($data['discount_id'] != 0) : ?>
                                                            <div class="featured-tag"><span class="badge badge--sale"><span class="gift-tag badge__text">Sale</span></span></div>

                                                        <?php endif; ?>
                                                        <div class="image_group" style="max-height: 365px;">
                                                            <div class="ImageOverlayCa"></div>
                                                            <div class="reveal">
                                                                <span class="product-additional">
                                                                    <img style="width: 100%;object-fit: contain;" src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="<?= $data['image'] ?>" class="featured-image teaser lazyload" alt="<?= $data['name'] ?>">
                                                                </span>
                                                                <img src="<?= base_url() ?>/public/client/s/files/1/0359/5979/9852/t/4/assets/loading.gif?v=1780583550831190727" data-src="<?= $data['image'] ?>" class="hidden-feature_img teaser lazyload" alt="<?= $data['name'] ?>">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php if ($data['discount_id'] != 0) : ?>
                                                        <div class="product_right_tag   offer_exist "><span class="offer-price">Save <br> <b><?= $data['discount_percent'] ?>% </b></span></div>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="product-detail content-left">
                                                    <p class="product-vendor"><span><?= $data['author'] ?></span></p>
                                                    <h4 class="grid-link__title"><a href="<?= base_url() ?>/public/productDetail?pid=<?= $data['id'] ?>"><?= $data['name'] ?></a></h4>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">
                                                            <div class="grid-link__org_price" id="ProductPrice">
                                                                <span class="money"><?= $data['price'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <style type="text/css">
                                    .teaser.lazyload {
                                        opacity: 0;
                                        transform: scale(0.8);
                                    }

                                    .teaser.lazyloaded {
                                        opacity: 1;
                                        transform: scale(1);
                                        transition: all 700ms;
                                    }
                                </style>
                            </ul>
                        </div>
                    </div>
                </div>
                <style>
                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-arrows .dt-sc-btn {
                        background: #ec7979;
                    }

                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-arrows .dt-sc-btn[class*="swiper-button-"]:after {
                        color: #d8000c;
                    }

                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-arrows .dt-sc-btn:hover {
                        background: #70bdc2;
                    }

                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-arrows .dt-sc-btn:hover[class*="swiper-button-"]:after {
                        color: #9f6000;
                    }

                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-pagination-bullet {
                        background: #4f8a10;
                    }

                    .related-products-container .dt-sc-swiper-slider.swiper-container .swiper-pagination-bullet.swiper-pagination-bullet-active {
                        background: #d1ed00;
                    }
                </style>
                <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                        var swiper = new Swiper('#related-related-products-slider', {
                            slidesPerView: 5,
                            spaceBetween: 30,
                            loop: false,

                            autoHeight: true,

                            pagination: {
                                el: '#related-related-products-pagination',
                                clickable: true,
                                type: 'bullets'
                            },
                            navigation: {
                                nextEl: '#related-related-products-next',
                                prevEl: '#related-related-products-prev'
                            },

                            autoplay: {
                                delay: 2500,
                                disableOnInteraction: false,
                            },

                            breakpoints: {
                                "@0.00": {
                                    slidesPerView: 1,
                                    spaceBetween: 10,
                                },
                                "@0.75": {
                                    slidesPerView: 1,
                                    spaceBetween: 10,
                                },
                                "@1.00": {
                                    slidesPerView: 3,
                                    spaceBetween: 10,
                                },
                                "@1.50": {
                                    slidesPerView: 4,
                                    spaceBetween: 10,
                                },
                            }
                        });
                    });
                </script>
            </div>
            <div id="shopify-section-product-recommendations" class="shopify-section">
            </div>
            <div id="shopify-section-recently-viewed-products" class="shopify-section">
                <script src="<?= base_url() ?>/public/client/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    /**
                     * Cookie plugin
                     *
                     * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
                     * Dual licensed under the MIT and GPL licenses:
                     * http://www.opensource.org/licenses/mit-license.php
                     * http://www.gnu.org/licenses/gpl.html
                     *
                     */

                    jQuery.cookie = function(b, j, m) {
                        if (typeof j != "undefined") {
                            m = m || {};
                            if (j === null) {
                                j = "";
                                m.expires = -1
                            }
                            var e = "";
                            if (m.expires && (typeof m.expires == "number" || m.expires.toUTCString)) {
                                var f;
                                if (typeof m.expires == "number") {
                                    f = new Date();
                                    f.setTime(f.getTime() + (m.expires * 24 * 60 * 60 * 1000))
                                } else {
                                    f = m.expires
                                }
                                e = "; expires=" + f.toUTCString()
                            }
                            var l = m.path ? "; path=" + (m.path) : "";
                            var g = m.domain ? "; domain=" + (m.domain) : "";
                            var a = m.secure ? "; secure" : "";
                            document.cookie = [b, "=", encodeURIComponent(j), e, l, g, a].join("")
                        } else {
                            var d = null;
                            if (document.cookie && document.cookie != "") {
                                var k = document.cookie.split(";");
                                for (var h = 0; h < k.length; h++) {
                                    var c = jQuery.trim(k[h]);
                                    if (c.substring(0, b.length + 1) == (b + "=")) {
                                        d = decodeURIComponent(c.substring(b.length + 1));
                                        break
                                    }
                                }
                            }
                            return d
                        }
                    };
                    window.money_format = "<span class=money>${{amount}}</span>";
                </script>
            </div>
        </div>
    </div>
    <script>
        const btnSubmit = document.getElementById("dT_AddToCart-product-template");
        const quantityInput = document.getElementById("Quantity-product-template");
        quantityInput.onchange = () => {
            if (quantityInput.value == 0) quantityInput.value = 1;
        }
        const json = localStorage.getItem("cart");
        let cart = JSON.parse(json) || [];
        btnSubmit.addEventListener("click", () => {
            const quantity = quantityInput.value;
            const checkIndex = cart ? cart.findIndex(pro => pro.product_id === +<?= $product[0]['id'] ?>) : false;
            if (checkIndex !== -1) {
                cart[checkIndex].quantity = quantity;
            } else {
                cart = [...cart, {
                    product_id: +<?= $product[0]['id'] ?>,
                    name: '<?= $product[0]['name'] ?>',
                    category_name: document.getElementById("category_name").nextSibling.textContent.trim(),
                    author: '<?= $product[0]['author'] ?>',
                    quantity: quantity,
                    price: '<?= $product[0]['price'] ?>',
                    image: `<?= $product[0]['image'] ?>`,
                    total: +<?= $product[0]['price'] ?> * quantity
                }]
            }
            const json = JSON.stringify(cart);
            localStorage.setItem("cart", json);
        })
    </script>
<?php endif; ?>
<?= $this->endSection() ?>