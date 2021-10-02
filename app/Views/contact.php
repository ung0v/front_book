<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div id="shopify-section-contact" class="shopify-section">
    <div class="dt-sc-section-wrapper">
        <div class="container">
            <div class="row">


                <div class="layout-type left_map_form_inline">


                    <div id="map" class="contact_map2" data-zoom="16" data-latitude="20.984583284623014" data-longitude="105.79826772654529" data-icon="assets/images/marker.png">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.551611419164!2d105.80050361534099!3d21.01060359377286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca06041bd01%3A0xe0e76c9b7a094b53!2zNTkgxJDhu5cgUXVhbmcsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1633163545016!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>


                    <ul class="dt-contact-iconblock-section dt-sc-column three-column">

                        <li class="dt-contact-icon-block">

                            <div class="dt-contact-icon-image">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="dt-contact-icon-content">
                                <h4>Số điện thoại</h4>
                                <p> <b>Hotline: </b>0903244248 (Quý khách vui lòng không nhắn tin) từ 8h30 - 17h30 thứ 2 – thứ 6 hàng tuần.</p><mark></mark>
                            </div>
                        </li>


                        <li class="dt-contact-icon-block">

                            <div class="dt-contact-icon-image">
                                <i class="fa fa-envelope"></i>
                            </div>

                            <div class="dt-contact-icon-content">
                                <h4>Email</h4>
                                <p>
                                    Email: <a title="" href="mailto:bookstore@nhanam.vn">bookstore@nhanam.vn</a>
                                </p>
                            </div>
                        </li>


                        <li class="dt-contact-icon-block">

                            <div class="dt-contact-icon-image">
                                <i class="fa fa-location-arrow"></i>
                            </div>

                            <div class="dt-contact-icon-content">
                                <h4>Địa chỉ</h4>
                                <p> Địa chỉ: 59 - Đỗ Quang - Trung Hòa - Cầu Giấy - Hà Nội</p><mark></mark>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        #shopify-section-contact .dt-sc-heading {
            margin-bottom: 35px;
        }

        #shopify-section-contact .dt-sc-heading .dt-sc-main-heading {
            color: var(--DTColor_Heading);
            color: #000000;
        }

        #shopify-section-contact .dt-sc-heading .dt-sc-sub-heading {
            color: var(--DTColor_Heading);
            color: #000000;
        }

        #shopify-section-contact .dt-sc-heading .dt-sc-heading-description {
            color: var(--DTColor_Body);
            color: #000000;
        }

        #shopify-section-contact .dt-sc-heading .dt-sc-btn {
            background: var(--DT_Button_BG_Color);
            background: #d14031;
            color: var(--DT_Button_Text_Color);
            color: #ffffff;
        }

        #shopify-section-contact .dt-sc-heading .dt-sc-btn:hover {
            background: var(--DT_Button_BG_Hover_Color);
            background: #000000;
            color: var(--DT_Button_Text_Hover_Color);
            color: #ffffff;
        }

        .dt-contact-iconblock-section {
            margin: 0;
        }

        .dt-contact-iconblock-section .dt-contact-icon-block {

            border-width: 1px;
            border-style: solid;
            border-color: #e9e9e9;
            border-color: #676767;
            padding: 25px;
            transition: var(--DTBaseTransition);
        }

        .dt-contact-iconblock-section .dt-contact-icon-block .dt-contact-icon-image>i {
            background: var(--DT_Button_BG_Color);
            color: var(--DT_Button_Text_Color);
            background: #000000;
            color: #ffffff;
            display: inline-block;
            font-size: 20px;
            height: 50px;
            line-height: 50px;
            position: relative;
            text-align: center;
            width: 50px;
            transition: var(--DTBaseTransition);
        }

        .dt-contact-iconblock-section .dt-contact-icon-block .dt-contact-icon-content br {
            display: block;
            margin-top: 6px;
        }

        .dt-contact-iconblock-section .dt-contact-icon-block:hover {
            border-color: var(--DTPrimaryColor);
            border-color: #d14031;
        }

        .dt-contact-iconblock-section .dt-contact-icon-block:hover .dt-contact-icon-image>i {
            background: var(--DT_Button_BG_Hover_Color);
            background: #d14031;
            color: var(--DT_Button_Text_Hover_Color);
            color: #ffffff;
        }

        .dt-contact-iconblock-section .dt-contact-icon-block .dt-contact-icon-content h4 {
            color: var(--DTColor_Heading);
            color: #000000;
            margin-top: 25px;
            transition: var(--DTBaseTransition);
        }

        .dt-contact-iconblock-section .dt-contact-icon-block:hover .dt-contact-icon-content h4 {
            color: var(--DTPrimaryColor);
            color: #d14031;
        }

        .layout-type>.contact-form-section h4 {
            margin-top: 10px;
        }

        .layout-type form.contact-form {
            display: grid;
            gap: var(--DTGutter_Width);
            grid-template-columns: 1fr 1fr 1fr;
        }

        .layout-type form.contact-form textarea#ContactFormMessage {
            grid-column: 1/4;
        }

        .layout-type form.contact-form button {
            grid-column: 2/3;
            margin: 0;
        }

        .layout-type form.contact-form .note.form-success {
            grid-column-start: 1;
            grid-column-end: 4;
            margin-bottom: 0;
        }


        .layout-type {
            display: flex;
            flex-wrap: wrap;
            margin: 0 calc(-.5* var(--DTGutter_Width)) 50px;
        }

        .layout-type>* {
            padding: calc(.5*var(--DTGutter_Width));
            width: 100%;
        }



        /* Block Layout */
        .layout-type.block_layout>* {
            flex: 1 1 100%;
        }

        .layout-type.block_layout>*+* {
            margin-top: 35px;
        }


        /*  Left Map + Form  */
        .layout-type.left_map_form_inline>* {
            flex: 1;
        }

        .layout-type.left_map_form_inline .dt-contact-iconblock-section {
            flex: 1 1 100%;
            order: -1;
            margin-bottom: 70px;
        }

        .layout-type.left_map_form_inline>.contact-form-section h4 {
            margin-top: -10px;
            font-size: var(--DTFontSize_H2);
        }

        .layout-type.left_map_form_inline>*:nth-child(3):nth-last-child(1) form.contact-form>input,
        .layout-type.left_map_form_inline>*:nth-child(3):nth-last-child(1) form.contact-form textarea#ContactFormMessage {
            grid-column: 1/4;
        }

        .layout-type.left_map_form_inline>*:nth-child(3):nth-last-child(1) form.contact-form button {
            grid-column: 1/2;
        }


        /*  Left Map + Icon Blocks  */
        .layout-type.left_map_iconblock_inline>* {
            flex: 1;
        }

        .layout-type.left_map_iconblock_inline #map {
            flex-grow: 2;
        }

        .layout-type.left_map_iconblock_inline .contact-form-section {
            flex: 1 1 100%;
        }

        .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section .dt-contact-icon-block {
            grid-column: 1/6;
            display: flex;
            align-items: center;
        }

        .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section .dt-contact-icon-block .dt-contact-icon-content {
            padding-left: 25px;
        }

        .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section .dt-contact-icon-block .dt-contact-icon-content h4 {
            margin-top: 0;
        }


        /*  Left Icon Blocks + Map  */
        .layout-type.left_iconblock_form_inline>* {
            flex: 1;
        }

        .layout-type.left_iconblock_form_inline #map {
            flex: 1 1 100%;
            margin-bottom: 35px;
            order: 1;
        }

        .layout-type.left_iconblock_form_inline .contact-form-section {
            flex-grow: 2;
            order: 3;
        }

        .layout-type.left_iconblock_form_inline .dt-contact-iconblock-section {
            order: 2;
        }

        .layout-type.left_iconblock_form_inline>.contact-form-section h4 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section+.contact-form-section form.contact-form>input,
        .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section+.contact-form-section form.contact-form textarea#ContactFormMessage {
            grid-column: 1/4;
        }

        .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section+.contact-form-section form.contact-form button {
            grid-column: 1/2;
        }

        .layout-type.left_iconblock_form_inline>*:nth-child(1):nth-last-child(2) .dt-contact-icon-block,
        .layout-type.left_iconblock_form_inline>*:nth-child(2):nth-last-child(2) .dt-contact-icon-block {
            grid-column: 1/6;
            display: flex;
            align-items: center;
        }

        .layout-type.left_iconblock_form_inline>*:nth-child(1):nth-last-child(2) .dt-contact-icon-block .dt-contact-icon-content,
        .layout-type.left_iconblock_form_inline>*:nth-child(2):nth-last-child(2) .dt-contact-icon-block .dt-contact-icon-content {
            padding-left: 25px;
        }

        .layout-type.left_iconblock_form_inline>*:nth-child(1):nth-last-child(2) .dt-contact-icon-block .dt-contact-icon-content h4,
        .layout-type.left_iconblock_form_inline>*:nth-child(2):nth-last-child(2) .dt-contact-icon-block .dt-contact-icon-content h4 {
            margin-top: 0;
        }


        /*  Responsive  */

        @media only screen and (max-width: 1199px) {

            .layout-type.block_layout .dt-contact-iconblock-section,
            .layout-type.left_map_form_inline .dt-contact-iconblock-section {
                display: flex;
                flex-wrap: wrap;
                gap: 0;
                justify-content: center;
            }

            .layout-type.block_layout .dt-contact-iconblock-section li,
            .layout-type.left_map_form_inline .dt-contact-iconblock-section li {
                flex: 1 1 40%;
                max-width: 50%;
                margin: 15px;
            }

            .layout-type.left_map_iconblock_inline #map,
            .layout-type.left_iconblock_form_inline .contact-form-section {
                flex-grow: 1;
            }

            .layout-type.left_map_iconblock_inline .dt-contact-iconblock-section:nth-child(1):nth-last-child(2),

            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(1):nth-last-child(2),
            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(2):nth-last-child(2) {
                display: flex;
                flex-wrap: wrap;
                gap: 0;
                justify-content: center;
            }


            .layout-type.left_map_iconblock_inline .dt-contact-iconblock-section:nth-child(1):nth-last-child(2) .dt-contact-icon-block {
                flex: 1 1 40%;
                max-width: 50%;
                margin: 15px;
            }

            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(1):nth-last-child(2) .dt-contact-icon-block,
            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(2):nth-last-child(2) .dt-contact-icon-block {
                flex: 1 1 100%;
            }

            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(1):nth-last-child(2) .dt-contact-icon-block+.dt-contact-icon-block,
            .layout-type.left_iconblock_form_inline>.dt-contact-iconblock-section:nth-child(2):nth-last-child(2) .dt-contact-icon-block+.dt-contact-icon-block {
                margin-top: 30px;
            }
        }


        @media only screen and (max-width: 767px) {

            .layout-type.block_layout .dt-contact-iconblock-section li,
            .layout-type.left_map_form_inline .dt-contact-iconblock-section li {
                flex: 1 1 40%;
                max-width: 50%;
            }

            .layout-type.left_map_form_inline> :nth-child(3):nth-last-child(1) form.contact-form button {
                grid-column: 1/3;
            }

            .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section {
                gap: 0;
                justify-content: stretch;
            }

            .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section li {
                width: 100%;
            }

            .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section li+li {
                margin-top: 30px;
            }

        }


        @media only screen and (max-width: 576px) {

            .layout-type.block_layout form.contact-form>input,
            .layout-type.block_layout form.contact-form textarea#ContactFormMessage,

            .layout-type.left_map_iconblock_inline form.contact-form>input,
            .layout-type.left_map_iconblock_inline form.contact-form textarea#ContactFormMessage,

            .layout-type.left_iconblock_form_inline form.contact-form>input,
            .layout-type.left_iconblock_form_inline form.contact-form textarea#ContactFormMessage {
                grid-column: 1/4;
            }


            .layout-type.block_layout form.contact-form button,
            .layout-type.left_iconblock_form_inline form.contact-form button {
                grid-column: 1/2;
            }


            .layout-type.block_layout .dt-contact-iconblock-section li,
            .layout-type.left_map_form_inline .dt-contact-iconblock-section li,
            .layout-type.left_map_iconblock_inline .dt-contact-iconblock-section:nth-child(1):nth-last-child(2) li {
                flex: 1 1 80%;
                max-width: 80%;
            }


            .layout-type.left_map_form_inline>* {
                flex: 1 1 100%;
            }

            .layout-type.left_map_form_inline>.contact-form-section:nth-child(3):nth-last-child(1) form.contact-form button {
                grid-column: 2/3;
            }

            .layout-type.left_map_iconblock_inline>*,
            .layout-type.left_iconblock_form_inline>* {
                flex: auto;
            }

            .layout-type.left_map_iconblock_inline>#map+.dt-contact-iconblock-section li {
                margin-top: 30px;
            }

        }
    </style>

</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
<?= $this->endSection() ?>