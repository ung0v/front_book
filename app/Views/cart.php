<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div id="shopify-section-cart-template" class="shopify-section">
    <script src="//cdn.shopify.com/s/files/1/0359/5979/9852/t/4/assets/dT_shipping-cart.js?v=4107990818448521407" defer="defer"></script>
    <div class="container">
        <div class="row">

            <form method="POST" action="<?= base_url() ?>/public/cart">
                <div class="cart_table">
                    <div novalidate="" class="cart dt-sc-column two-third-one-third">
                        <div class="cart__items">



                            <div class="cart__header-labels">
                                <h4 class="cart_heading"> Giỏ hàng </h4>
                            </div>



                            <style>
                                .cart_table .cart__row {
                                    border: 1px solid var(--DTColor_Border);
                                    margin-bottom: 30px;
                                }
                            </style>

                            <div class="items_cart">

                            </div>




                            <div class="btn_actions">
                                <a class="dt-sc-btn" href="<?= base_url() ?>/public">Tiếp tục mua hàng</a>
                                <button name="update" class="dt-sc-btn update-cart right">Cật nhật giỏ hàng</button>
                            </div>




                        </div>
                        <div class="shipping-section">
                            <div class="order_summary">
                                <h4 class="cart_heading">Đơn hàng</h4>
                                <p>Phí ship nội thành (2h) : 30.000 VNĐ</p>
                                <div id="shipping-calculator">

                                    <div style="display:block; margin-top:20px;margin-bottom:20px;" id="shipping-calculator-block">
                                        <p class="field">
                                            <label for="shipping_id">Chọn đơn vị vận chuyển</label>
                                            <select id="shipping_id" name="shipping_id" tabindex="0" class="" aria-hidden="false">
                                                <?php if (isset($lstShip)) : ?>
                                                    <?php foreach ($lstShip as $item) : ?>
                                                        <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </p>
                                    </div>
                                    <div id="wrapper-response"></div>
                                </div>


                                <p class="cart_total_price">
                                    <span class="cart__subtotal-title">Thành tiền :</span>
                                    <span class="cart__subtotal"><span class="subtotal money"></span></span>
                                    <input id="subtotal" name="subtotal" type="hidden" />
                                    <input id="delivery_cost" name="delivery_cost" type="hidden" value="30000" />
                                </p>
                                <?php if (isset($error)) : ?>
                                    <p style="color:red;">
                                        <?= $error ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (isset($success)) : ?>
                                    <p style="color:green;">
                                        <?= $success ?>
                                    </p>
                                <?php endif; ?>
                                <p class="field">
                                    <label for="payment_type">Chọn Hình thức thanh toán</label>
                                    <div style="display: flex; align-items:center; gap:10px;">
                                    <input type="radio" id="tien_mat" name="payment_type" value="0" checked/>
                                    <label  style="margin: 0;" for="tien_mat">Tiền mặt</label>
                                    </div>
                                    <div style="display: flex; align-items:center; gap:10px;">
                                    <input type="radio" id="vn_pay" name="payment_type" value="1" />
                                    <label style="margin: 0;" for="vn_pay">Thanh toán online (VNPAY)</label>
                                    </div>
                                </p>
                                <!-- <button type="button" class="text-link cart__note-add">
                                Add a note to your order
                            </button>
                            <div class="cart__note">
                                <label for="CartSpecialInstructions">Special instructions for seller</label>
                                <textarea name="note" class="input-full" id="CartSpecialInstructions"></textarea>
                            </div> -->

                                <!-- <p class="shopping-checkout"><em>Shipping, taxes, and discounts will be calculated at checkout.</em></p> -->


                                <div class="cart_btn">
                                    <button type="submit" onclick="return confirm('Bạn chắc chắn muốn đặt hàng? Hãy đảm bảo đã cập nhật giỏ hàng nếu có thay đổi.')" name="checkout" class="dt-sc-btn" style="width:100%">Đặt hàng</button>

                                </div>
            </form>
            <script id="shipping-calculator-response-template" type="text/template">

                <p id="shipping-rates-feedback" {{#if success}} class="success" {{else}} class="error" {{/if}}>

  </p>
  
</script>

            <!--[if lte IE 8]>
<style> #shipping-calculator { display: none; } </style>
<![endif]-->


            <script>
                var theme = {
                    strings: {
                        shippingCalcSubmitButton: "Calculate shipping",
                        shippingCalcSubmitButtonDisabled: "Calculating...",

                        shippingCalcMoneyFormat: "\u003cspan class=money\u003e${{amount}} USD\u003c\/span\u003e"
                    }
                }
            </script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.10/handlebars.min.js"></script>
            <script src="/services/javascripts/countries.js"></script>
            <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" defer="defer"></script>
            <style type="text/css">
                #shipping-calculator svg {
                    margin-left: 5px;
                }

                #shipping-calculator .field label {
                    display: block;
                    margin: 0 0 .3em;
                    font-size: 1em;
                }

                #shipping-calculator .field input[type=text] {
                    display: inline-block;
                    box-sizing: border-box;
                    margin: 0;
                    padding: .4em .6em;
                    font-size: 1em;
                    outline: 0;
                    -webkit-appearance: none;
                    border: 1px solid var(--DTColor_Border);
                }

                #shipping-calculator #wrapper-response {
                    clear: both;
                }

                #shipping-calculator select {
                    width: 100%;
                    padding: 5px;
                    border-radius: var(--DTRadius);
                    border: 1px solid var(--DTColor_Border);
                }

                @media (max-width: 800px) {
                    #shipping-calculator .field {
                        float: none;
                    }
                }
            </style>
        </div>
    </div>
</div>
</div>


</div>
</div>
<style>
    .cart_table .qty-box-set {
        display: flex;
        flex-wrap: wrap;
    }

    .cart_table .qty-box-set .qtyminus,
    .cart_table .qty-box-set .qtyplus {
        width: 30px;
        height: 30px;
        font-size: 14px;
        line-height: 30px;
        padding: 0px 10px;
        margin: 0;
        background: transparent;
        background: transparent;
        border: 1px solid var(--DTColor_Border);
        color: var(--DT_Button_BG_Color);
    }

    .cart_table .qty-box-set .qtyplus:hover,
    .cart_table .qty-box-set .qtyminus:hover {
        background-color: var(--DTPrimaryColor);
        color: var(--DT_Button_Text_Hover_Color);
        border: 1px solid var(--DTPrimaryColor);
    }

    .cart_table .qty-box-set .qtyminus {
        border-radius: var(--DTRadius) 0 0 var(--DTRadius);
    }

    .cart_table .qty-box-set .qtyplus {
        border-radius: 0 var(--DTRadius) var(--DTRadius) 0;
    }

    .cart_table .qty-box-set .quantity-selector {
        padding: 0;
        text-align: center;
        height: 30px;
        max-width: 40px;
        border: 1px solid currentcolor;
        border-width: 1px 0;
        border-radius: 0;
        color: var(--button_bg_color);
        border-color: var(--DTColor_Border);
    }

    .cart_table .qty-box-set .quantity-selector:focus {
        border: 1px solid var(--DT_Button_BG_Hover_Color)
    }
</style>
<script>
    (() => {
        const json = localStorage.getItem('cart');
        let cart = JSON.parse(json);
        const cartItems = document.querySelector(".cart__items .items_cart");
        const subtotal = document.querySelector(".subtotal");
        cart.forEach(item => {
            item.total = item.quantity * item.price_discount;
        })

        function updateSubtotal(cart) {
            const sum = cart.reduce((prev, cur) => {
                return prev + cur.total;
            }, 30000);
            document.querySelector("#subtotal").value = sum;
            console.log(sum);
            subtotal.innerHTML = sum.toLocaleString("vi-VI") + " VNĐ";
        }
        updateSubtotal(cart);
        let html = cart.map(item => {
            return `
        <div class="cart__row" data-product-id="${item.product_id}">
                            <input type="hidden" name="product_ids[]" value="${item.product_id}"/>
                            <input type="hidden" name="product_quantities[]" value="${item.quantity}"/>
                            <div class="cart_items">
                                <a href="<?= base_url() ?>/public/productDetail?pid=${item.product_id}" class="cart__image">
                                    <img src="${item.image}" alt="${item.name} - ${item.category_name} / ${item.author}">
                                </a>
                            </div>
                            <div class="product-info">
                                <div class="cart-title ">
                                    <h5><a href="<?= base_url() ?>/public/productDetail?pid=${item.product_id}" class="product-name">
                                        ${item.name}
                                        </a>
                                    </h5>
                                    <p class="category_author">${item.category_name} / ${item.author}</p>
                                </div>

                                <div class="price">
                                    <strong>Đơn giá: <span class="money unit">${(+item.price_discount).toLocaleString('vi-VI')}</span> <del>${(+item.price).toLocaleString("vi-VI")}</del></strong> VNĐ
                                </div>

                                <div class="qty-box-set">
                                    <input type="button" value="-" class="qtyminus">
                                    <input type="text" class="quantity-selector cart-number" name="updates[]" id="updates_33450373349420" value="${item.quantity}" min="0">
                                    <input type="button" value="+" class="qtyplus">
                                </div>
                                <div class="price">
                                    <span class="cart_total">Tổng :</span>
                                    <strong>
                                        <span class="money total">${item.total.toLocaleString('vi-VI')}</span>
                                    </strong>
                                    VNĐ
                                </div>
                            </div>
                            <a href="javscript:void(0)" class="cart__remove close_icon">
                                <span class="dt-sc-btn close-icon"></span>
                            </a>
                        </div>
        `
        }).join("");
        cartItems.insertAdjacentHTML("beforeend", html);

        const minusBtn = document.querySelectorAll(".qtyminus");
        const plusBtn = document.querySelectorAll(".qtyplus");
        const rmItemBtn = document.querySelectorAll('.close_icon');
        const updateBtn = document.querySelector(".update-cart");

        rmItemBtn.forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                const row = item.closest("div");
                row.parentElement.removeChild(row);
            })
        })

        minusBtn.forEach(item => {
            item.addEventListener('click', event => {
                //handle click
                event.preventDefault();
                if (item.nextElementSibling.value <= 1) {
                    item.nextElementSibling.value = 1;
                } else {
                    item.nextElementSibling.value--;
                    const row = item.closest('div.cart__row');
                    const total = row.querySelector(".total");
                    const unit = row.querySelector(".unit");
                    // const product_id = +item.getAttribute("data-product-id");
                    // const total = cart.find(item => item.product_id === product_id).total;
                    // const unit = cart.find(item => item.product_id === product_id).price;
                    const val = Math.floor(+total.textContent.trim().split(".").join("") - +unit.textContent.trim().split(".").join(""));
                    total.innerHTML = val.toLocaleString("vi-VN");
                }

            })
        });
        plusBtn.forEach(item => {
            item.addEventListener('click', event => {
                //handle click
                event.preventDefault();
                item.previousElementSibling.value++;
                const row = item.closest('div.cart__row');
                const total = row.querySelector(".total");
                const unit = row.querySelector(".unit");
                // const product_id = +item.getAttribute("data-product-id");
                // const total = cart.find(item => item.product_id === product_id).total;
                // const unit = cart.find(item => item.product_id === product_id).price;
                const val = Math.floor(+total.textContent.trim().split(".").join("") + +unit.textContent.trim().split(".").join(""));
                total.innerHTML = val.toLocaleString("vi-VN");
            })
        })
        updateBtn.addEventListener("click", event => {
            event.preventDefault();
            const allItem = document.querySelectorAll(".cart__row");
            const cart = Array.from(allItem).map(item => {
                const category_author = item.querySelector(".category_author").textContent.trim();
                const product_id = +item.getAttribute("data-product-id");
                const name = item.querySelector(".product-name").textContent.trim();
                const category_name = category_author.split("/")[0].trim();
                const author = category_author.split("/")[1].trim();
                const quantity = +item.querySelector('.quantity-selector').value;
                const price_discount = item.querySelector(".money").textContent.trim().split(".").join("");
                const price = item.querySelector("del").textContent.trim().split(".").join("");
                const image = item.querySelector("img").getAttribute("src");
                const total = +price_discount * quantity;
                return {
                    product_id,
                    name,
                    category_name,
                    author,
                    quantity,
                    price,
                    price_discount,
                    image,
                    total
                }
            });
            document.querySelector('.count').innerHTML = cart.length;
            updateSubtotal(cart);

            const json = JSON.stringify(cart);
            localStorage.setItem('cart', json);
            $.toast({
                heading: 'Cật nhật giỏ hàng thành công',
                // text: '<a href="http://localhost:8080/web_ic4/checkout">Xem giỏ hàng</a>',
                showHideTransition: 'slide',
                icon: 'success',
                position: 'bottom-right',
                hideAfter: 3000,
                loaderBg: '#9EC600'
            })
        })
    })();
</script>
</div>
<?= $this->endSection() ?>