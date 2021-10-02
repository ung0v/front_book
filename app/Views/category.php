<?php
function add_edit_gets($parameter, $value)
{
    $params = array();
    $output = "?";
    $firstRun = true;
    foreach ($_GET as $key => $val) {
        if ($key != $parameter) {
            if (!$firstRun) {
                $output .= "&";
            } else {
                $firstRun = false;
            }
            $output .= $key . "=" . urlencode($val);
        }
    }

    if (!$firstRun)
        $output .= "&";
    $output .= $parameter . "=" . urlencode($value);
    return htmlentities($output);
}

?>
<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div id="shopify-section-collection-template" class="shopify-section">
    <div class="container" data-section-id="collection-template" data-section-type="collection-template">
        <div class="row">
            <div class=" left-sidebar has-sidebar">
                <div class="collection-grid product-grid-height-collection-template">
                    <div class="collection-header">
                        <div class="collection-view" data-view="">
                            <a title="Grid view" class="change-mode active" data-view="grid">
                                <svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m373.5 0h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m186.75 0h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m0 186.75h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m373.5 186.75h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m186.75 186.75h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m0 373.5h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m373.5 373.5h138.5v138.5h-138.5zm0 0"></path>
                                    <path d="m186.75 373.5h138.5v138.5h-138.5zm0 0"></path>
                                </svg>
                            </a>
                            <a title="List view" class="change-mode" data-view="list">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" xml:space="preserve">
                                    <path d="M0-0.3h113.3v142.5H0V-0.3z"></path>
                                    <path d="M149.3-0.3H512v142.5H149.3V-0.3z"></path>
                                    <path d="M0,184.6h113.3v142.5H0V184.6z"></path>
                                    <path d="M149.3,184.6H512v142.5H149.3V184.6z"></path>
                                    <path d="M0,369.5h113.3V512H0V369.5z"></path>
                                    <path d="M149.3,369.5H512V512H149.3V369.5z"></path>
                                </svg>

                            </a>
                        </div>



                        <!-- <div class="collection-items-per-page">
                            <label for="paginateBy">Paginate by</label>
                            <select name="paginateBy" id="paginateBy">
                                <option value="9">9</option>

                                <option value="12">12</option>

                                <option value="16">16</option>

                                <option value="20">20</option>

                                <option value="24">24</option>

                                <option value="30">30</option>

                                <option value="48">48</option>

                            </select>
                        </div> -->

                        <script type="text/javascript">
                            $('#paginateBy').on('change', function() {
                                var val = $(this).val();
                                $.ajax({
                                    type: "POST",
                                    url: '/cart.js',
                                    data: {
                                        "attributes[pagination]": val
                                    },
                                    success: function(d) {
                                        window.location.reload();
                                    },
                                    dataType: 'json'
                                });
                            });
                        </script>


                        <!-- <div class="sortby">
                            <label for="SortBy">Sort by </label>
                            <select name="SortBy" id="SortBy" class="dT_SortBy">

                                <option value="manual">Featured</option>

                                <option value="best-selling">Best selling</option>

                                <option value="title-ascending">Alphabetically, A-Z</option>

                                <option value="title-descending">Alphabetically, Z-A</option>

                                <option value="price-ascending">Price, low to high</option>

                                <option value="price-descending">Price, high to low</option>

                                <option value="created-ascending">Date, old to new</option>

                                <option value="created-descending">Date, new to old</option>

                            </select>
                        </div> -->

                        <script>
                            // Save existing sort parameters
                            //   Shopify.queryParams = {};
                            //   if(location.search.length) {
                            //     for(var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                            //       aKeyValue = aCouples[i].split('=');
                            //       if (aKeyValue.length > 1) {
                            //         Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                            //       }
                            //     }
                            //   }

                            // Add existing sort parameters to current URL
                            //   document.querySelector('#SortBy').addEventListener('change', function(e) {
                            //     var value = e.currentTarget.value;
                            //     Shopify.queryParams.sort_by = value;
                            //     location.search = new URLSearchParams(Shopify.queryParams).toString();
                            //   });
                        </script>

                    </div>

                    <div class="dT_VProdWrapper" id="dT_collectionGrid">
                        <?php if (isset($_GET['key'])) : ?>
                            <div style="margin-bottom: 20px;">
                                <h3>Kết quả tìm kiếm cho từ khoá: " <strong><?= $_GET['key'] ?> </strong>"</h3>
                            </div>

                        <?php endif; ?>
                        <ul class="grid product-collection  dt-sc-column three-column dt-even-columns">
                            <?php foreach ($lstProduct as $data) : ?>
                                <?php if (isset($data['id'])) : ?>
                                    <li class="regular-grid grid-item product-grid-item  " id="product-4947331252268">
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
                                                            <?php if ($data['discount_id'] == 0) : ?>
                                                                <span class="money"><?= $data['price'] ?></span>
                                                            <?php else : ?>
                                                                <ul class="price-list">
                                                                    <li id="ProductPrice-product-template" class="product-price-current"><span class="money"><span class="money"> <?= $data['price_discount'] ?></span></li>
                                                                    <li id="ComparePrice-product-template" class="product-price-list"><del class="money">
                                                                            <?= $data['price'] ?></del>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                <?php endif; ?>
                            <?php endforeach; ?>
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
                        <div class="text-center pagination">

                            <ul class="pagination-default text-center">
                                <li><a style="display:flex;justify-content:center;align-items:center;" class="enable-arrow" href="<?php if ($page <= 1) {
                                                                                                                                        echo 'javascript:void(0)';
                                                                                                                                    } else {
                                                                                                                                        echo add_edit_gets("page", $page - 1);
                                                                                                                                    } ?>" title="&laquo; Previous"><span class="fa fa-angle-left"></span></a></li>
                                <?php
                                for ($i = 1; $i < $total_pages + 1; $i++) {
                                    if ($page == $i) {
                                        echo "<li class='active'><a style='background:#000;' class='page-link' href='#'>" . $i . "</a></li>";
                                    } else {
                                        echo "<li class='page-item'><a class='page-link' href='" . add_edit_gets("page", $i) . "'>" . $i . "</a></li>";
                                    }
                                }
                                ?>
                                <!-- <li>
                                    <a href="all-2.html?page=3" title="" class="dT_Pagination">3</a>
                                </li> -->

                                <li><a style="display:flex;justify-content:center;align-items:center;" class="enable-arrow" href="<?php if ($page >= $total_pages) {
                                                                                                                                        echo 'javascript:void(0)';
                                                                                                                                    } else {
                                                                                                                                        echo add_edit_gets("page", $page + 1);
                                                                                                                                    } ?>" title="Next &raquo;"><span class="fa fa-angle-right"></span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center sidebar_btn"><a class="dt-sc-btn toggleIcon"> <i class="fa fa-caret-right" aria-hidden="true"></i> </a></div>

                <div class="sidebar sidebar-height-collection-template" id="sidebar-sticky">
                    <a href="#" class="js-close-modal dt-sc-btn close-icon"></a>
                    <!-- <a href="#" class="clear-all dT_ClearAll" style="text-align: right;margin-bottom: 15px;">Clear All</a> -->
                    <div class="filter-panel-menu">
                        <h5 class="sidebar_title">Thể loại sách</h5>
                        <div class="filter-panel" id="accordian">
                            <ul>
                                <li class=""><a href="<?= base_url() ?>/public/category">Tất cả</a></li>
                                <?php foreach ($lstCategory as $item) : ?>
                                    <li class=""><a href="<?= base_url() ?>/public/category?cateID=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="filter-panel-tag">
                        <h5 class="sidebar_title">Giá</h5>
                        <div class="filter-panel">
                            <ul>
                                <li class="$100 - $200"><a href="all/100-200.html" class="dT_CollectionFilter" data-value="100-200">$100 - $200</a></li>
                                <li class="$200 - $300"><a href="all/200-300.html" class="dT_CollectionFilter" data-value="200-300">$200 - $300</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="filter-panel-tag">
                        <h5 class="sidebar_title">Khuyến mại</h5>
                        <div class="filter-panel">
                            <ul>
                                <?php foreach ($lstDiscount as $item) : ?>
                                    <li><a href="<?= base_url() . '/public/category?discount_percent=' . $item['id'] ?>"><?= $item['discount_percent'] ?> %</a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.querySelectorAll(".money").forEach(item => {
        item.innerHTML = (+item.textContent.trim()).toLocaleString("vi-VN") + " VNĐ";
    })
    jQuery('[data-view] a').on('click', function() {
        jQuery('[data-view] a.active').removeClass('active');
        jQuery(this).addClass('active');
        var flag = jQuery('[data-view="list"]').hasClass("active");
        if (flag) {
            jQuery(this).parents('#shopify-section-collection-template').find('.product-collection').removeClass('three-column').removeClass('product-grid-style').addClass('product-list-style');
        } else {
            jQuery(this).parents('#shopify-section-collection-template').find('.product-collection').addClass('three-column').addClass('product-grid-style').removeClass('product-list-style');
        }
    });
</script>
<script>
    const cart = localStorage.getItem("cart");
</script>
<?= $this->endSection() ?>