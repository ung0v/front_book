<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div id="shopify-section-cart-template" class="shopify-section">
    <script src="//cdn.shopify.com/s/files/1/0359/5979/9852/t/4/assets/dT_shipping-cart.js?v=4107990818448521407" defer="defer"></script>
    <div class="container">
        <div class="row">


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
                            <h4 class="cart_heading">Order Summary</h4>

                            <p class="cart_total_price">
                                <span class="cart__subtotal-title">Subtotal :</span>
                                <span class="cart__subtotal"><span class="money">$1,800.00</span></span>
                            </p>
                            <p>
                            </p>

                            <button type="button" class="text-link cart__note-add">
                                Add a note to your order
                            </button>
                            <div class="cart__note">
                                <label for="CartSpecialInstructions">Special instructions for seller</label>
                                <textarea name="note" class="input-full" id="CartSpecialInstructions"></textarea>
                            </div>

                            <p class="shopping-checkout"><em>Shipping, taxes, and discounts will be calculated at checkout.</em></p>


                            <div class="cart_btn">
                                <input type="submit" name="checkout" class="dt-sc-btn" style="width:100%" value="Proceed to Checkout">

                            </div>

                            <div id="shipping-calculator">
                                <p class="dt-sc-btn" onclick="shippingCall()">Get shipping estimates <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">

                                        <path d="M96.3,24.9c-2.3-2.2-5.8-2.1-8,0.1L51.6,63L11.5,24.9c-2.3-2.2-5.9-2.1-8,0.2c-2.2,2.3-2.1,5.9,0.2,8l44.2,42
	c1.1,1,2.5,1.6,3.9,1.6c1.5,0,3-0.6,4.1-1.7l40.6-42C98.7,30.7,98.6,27.1,96.3,24.9z"></path>
                                    </svg>
                                </p>
                                <div style="display:none; margin-top:20px;" id="shipping-calculator-block">
                                    <p class="field">
                                        <label for="address_country">Country</label>
                                        <select id="address_country" name="address[country]" data-default="United States" tabindex="0" class="" aria-hidden="false">
                                            <option value="---" data-provinces="[]">---</option>
                                            <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                            <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                            <option value="Albania" data-provinces="[]">Albania</option>
                                            <option value="Algeria" data-provinces="[]">Algeria</option>
                                            <option value="Andorra" data-provinces="[]">Andorra</option>
                                            <option value="Angola" data-provinces="[]">Angola</option>
                                            <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                            <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                            <option value="Argentina" data-provinces="[[&quot;Buenos Aires&quot;,&quot;Buenos Aires Province&quot;],[&quot;Catamarca&quot;,&quot;Catamarca&quot;],[&quot;Chaco&quot;,&quot;Chaco&quot;],[&quot;Chubut&quot;,&quot;Chubut&quot;],[&quot;Ciudad Autónoma de Buenos Aires&quot;,&quot;Buenos Aires (Autonomous City)&quot;],[&quot;Corrientes&quot;,&quot;Corrientes&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Entre Ríos&quot;,&quot;Entre Ríos&quot;],[&quot;Formosa&quot;,&quot;Formosa&quot;],[&quot;Jujuy&quot;,&quot;Jujuy&quot;],[&quot;La Pampa&quot;,&quot;La Pampa&quot;],[&quot;La Rioja&quot;,&quot;La Rioja&quot;],[&quot;Mendoza&quot;,&quot;Mendoza&quot;],[&quot;Misiones&quot;,&quot;Misiones&quot;],[&quot;Neuquén&quot;,&quot;Neuquén&quot;],[&quot;Río Negro&quot;,&quot;Río Negro&quot;],[&quot;Salta&quot;,&quot;Salta&quot;],[&quot;San Juan&quot;,&quot;San Juan&quot;],[&quot;San Luis&quot;,&quot;San Luis&quot;],[&quot;Santa Cruz&quot;,&quot;Santa Cruz&quot;],[&quot;Santa Fe&quot;,&quot;Santa Fe&quot;],[&quot;Santiago Del Estero&quot;,&quot;Santiago del Estero&quot;],[&quot;Tierra Del Fuego&quot;,&quot;Tierra del Fuego&quot;],[&quot;Tucumán&quot;,&quot;Tucumán&quot;]]">Argentina</option>
                                            <option value="Armenia" data-provinces="[]">Armenia</option>
                                            <option value="Aruba" data-provinces="[]">Aruba</option>
                                            <option value="Ascension Island" data-provinces="[]">Ascension Island</option>
                                            <option value="Australia" data-provinces="[[&quot;Australian Capital Territory&quot;,&quot;Australian Capital Territory&quot;],[&quot;New South Wales&quot;,&quot;New South Wales&quot;],[&quot;Northern Territory&quot;,&quot;Northern Territory&quot;],[&quot;Queensland&quot;,&quot;Queensland&quot;],[&quot;South Australia&quot;,&quot;South Australia&quot;],[&quot;Tasmania&quot;,&quot;Tasmania&quot;],[&quot;Victoria&quot;,&quot;Victoria&quot;],[&quot;Western Australia&quot;,&quot;Western Australia&quot;]]">Australia</option>
                                            <option value="Austria" data-provinces="[]">Austria</option>
                                            <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                            <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                            <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                            <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                            <option value="Barbados" data-provinces="[]">Barbados</option>
                                            <option value="Belarus" data-provinces="[]">Belarus</option>
                                            <option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="Belize" data-provinces="[]">Belize</option>
                                            <option value="Benin" data-provinces="[]">Benin</option>
                                            <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                            <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                            <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                            <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana" data-provinces="[]">Botswana</option>
                                            <option value="Brazil" data-provinces="[[&quot;Acre&quot;,&quot;Acre&quot;],[&quot;Alagoas&quot;,&quot;Alagoas&quot;],[&quot;Amapá&quot;,&quot;Amapá&quot;],[&quot;Amazonas&quot;,&quot;Amazonas&quot;],[&quot;Bahia&quot;,&quot;Bahia&quot;],[&quot;Ceará&quot;,&quot;Ceará&quot;],[&quot;Distrito Federal&quot;,&quot;Federal District&quot;],[&quot;Espírito Santo&quot;,&quot;Espírito Santo&quot;],[&quot;Goiás&quot;,&quot;Goiás&quot;],[&quot;Maranhão&quot;,&quot;Maranhão&quot;],[&quot;Mato Grosso&quot;,&quot;Mato Grosso&quot;],[&quot;Mato Grosso do Sul&quot;,&quot;Mato Grosso do Sul&quot;],[&quot;Minas Gerais&quot;,&quot;Minas Gerais&quot;],[&quot;Paraná&quot;,&quot;Paraná&quot;],[&quot;Paraíba&quot;,&quot;Paraíba&quot;],[&quot;Pará&quot;,&quot;Pará&quot;],[&quot;Pernambuco&quot;,&quot;Pernambuco&quot;],[&quot;Piauí&quot;,&quot;Piauí&quot;],[&quot;Rio Grande do Norte&quot;,&quot;Rio Grande do Norte&quot;],[&quot;Rio Grande do Sul&quot;,&quot;Rio Grande do Sul&quot;],[&quot;Rio de Janeiro&quot;,&quot;Rio de Janeiro&quot;],[&quot;Rondônia&quot;,&quot;Rondônia&quot;],[&quot;Roraima&quot;,&quot;Roraima&quot;],[&quot;Santa Catarina&quot;,&quot;Santa Catarina&quot;],[&quot;Sergipe&quot;,&quot;Sergipe&quot;],[&quot;São Paulo&quot;,&quot;São Paulo&quot;],[&quot;Tocantins&quot;,&quot;Tocantins&quot;]]">Brazil</option>
                                            <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                            <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                            <option value="Brunei" data-provinces="[]">Brunei</option>
                                            <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                            <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                            <option value="Burundi" data-provinces="[]">Burundi</option>
                                            <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                            <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                            <option value="Canada" data-provinces="[[&quot;Alberta&quot;,&quot;Alberta&quot;],[&quot;British Columbia&quot;,&quot;British Columbia&quot;],[&quot;Manitoba&quot;,&quot;Manitoba&quot;],[&quot;New Brunswick&quot;,&quot;New Brunswick&quot;],[&quot;Newfoundland and Labrador&quot;,&quot;Newfoundland and Labrador&quot;],[&quot;Northwest Territories&quot;,&quot;Northwest Territories&quot;],[&quot;Nova Scotia&quot;,&quot;Nova Scotia&quot;],[&quot;Nunavut&quot;,&quot;Nunavut&quot;],[&quot;Ontario&quot;,&quot;Ontario&quot;],[&quot;Prince Edward Island&quot;,&quot;Prince Edward Island&quot;],[&quot;Quebec&quot;,&quot;Quebec&quot;],[&quot;Saskatchewan&quot;,&quot;Saskatchewan&quot;],[&quot;Yukon&quot;,&quot;Yukon&quot;]]">Canada</option>
                                            <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                            <option value="Caribbean Netherlands" data-provinces="[]">Caribbean Netherlands</option>
                                            <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                            <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                            <option value="Chad" data-provinces="[]">Chad</option>
                                            <option value="Chile" data-provinces="[[&quot;Antofagasta&quot;,&quot;Antofagasta&quot;],[&quot;Araucanía&quot;,&quot;Araucanía&quot;],[&quot;Arica and Parinacota&quot;,&quot;Arica y Parinacota&quot;],[&quot;Atacama&quot;,&quot;Atacama&quot;],[&quot;Aysén&quot;,&quot;Aysén&quot;],[&quot;Biobío&quot;,&quot;Bío Bío&quot;],[&quot;Coquimbo&quot;,&quot;Coquimbo&quot;],[&quot;Los Lagos&quot;,&quot;Los Lagos&quot;],[&quot;Los Ríos&quot;,&quot;Los Ríos&quot;],[&quot;Magallanes&quot;,&quot;Magallanes Region&quot;],[&quot;Maule&quot;,&quot;Maule&quot;],[&quot;O'Higgins&quot;,&quot;Libertador General Bernardo O’Higgins&quot;],[&quot;Santiago&quot;,&quot;Santiago Metropolitan&quot;],[&quot;Tarapacá&quot;,&quot;Tarapacá&quot;],[&quot;Valparaíso&quot;,&quot;Valparaíso&quot;],[&quot;Ñuble&quot;,&quot;Ñuble&quot;]]">Chile</option>
                                            <option value="China" data-provinces="[[&quot;Anhui&quot;,&quot;Anhui&quot;],[&quot;Beijing&quot;,&quot;Beijing&quot;],[&quot;Chongqing&quot;,&quot;Chongqing&quot;],[&quot;Fujian&quot;,&quot;Fujian&quot;],[&quot;Gansu&quot;,&quot;Gansu&quot;],[&quot;Guangdong&quot;,&quot;Guangdong&quot;],[&quot;Guangxi&quot;,&quot;Guangxi&quot;],[&quot;Guizhou&quot;,&quot;Guizhou&quot;],[&quot;Hainan&quot;,&quot;Hainan&quot;],[&quot;Hebei&quot;,&quot;Hebei&quot;],[&quot;Heilongjiang&quot;,&quot;Heilongjiang&quot;],[&quot;Henan&quot;,&quot;Henan&quot;],[&quot;Hubei&quot;,&quot;Hubei&quot;],[&quot;Hunan&quot;,&quot;Hunan&quot;],[&quot;Inner Mongolia&quot;,&quot;Inner Mongolia&quot;],[&quot;Jiangsu&quot;,&quot;Jiangsu&quot;],[&quot;Jiangxi&quot;,&quot;Jiangxi&quot;],[&quot;Jilin&quot;,&quot;Jilin&quot;],[&quot;Liaoning&quot;,&quot;Liaoning&quot;],[&quot;Ningxia&quot;,&quot;Ningxia&quot;],[&quot;Qinghai&quot;,&quot;Qinghai&quot;],[&quot;Shaanxi&quot;,&quot;Shaanxi&quot;],[&quot;Shandong&quot;,&quot;Shandong&quot;],[&quot;Shanghai&quot;,&quot;Shanghai&quot;],[&quot;Shanxi&quot;,&quot;Shanxi&quot;],[&quot;Sichuan&quot;,&quot;Sichuan&quot;],[&quot;Tianjin&quot;,&quot;Tianjin&quot;],[&quot;Xinjiang&quot;,&quot;Xinjiang&quot;],[&quot;Xizang&quot;,&quot;Tibet&quot;],[&quot;Yunnan&quot;,&quot;Yunnan&quot;],[&quot;Zhejiang&quot;,&quot;Zhejiang&quot;]]">China</option>
                                            <option value="Christmas Island" data-provinces="[]">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands" data-provinces="[]">Cocos (Keeling) Islands</option>
                                            <option value="Colombia" data-provinces="[[&quot;Amazonas&quot;,&quot;Amazonas&quot;],[&quot;Antioquia&quot;,&quot;Antioquia&quot;],[&quot;Arauca&quot;,&quot;Arauca&quot;],[&quot;Atlántico&quot;,&quot;Atlántico&quot;],[&quot;Bogotá, D.C.&quot;,&quot;Capital District&quot;],[&quot;Bolívar&quot;,&quot;Bolívar&quot;],[&quot;Boyacá&quot;,&quot;Boyacá&quot;],[&quot;Caldas&quot;,&quot;Caldas&quot;],[&quot;Caquetá&quot;,&quot;Caquetá&quot;],[&quot;Casanare&quot;,&quot;Casanare&quot;],[&quot;Cauca&quot;,&quot;Cauca&quot;],[&quot;Cesar&quot;,&quot;Cesar&quot;],[&quot;Chocó&quot;,&quot;Chocó&quot;],[&quot;Cundinamarca&quot;,&quot;Cundinamarca&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Guainía&quot;,&quot;Guainía&quot;],[&quot;Guaviare&quot;,&quot;Guaviare&quot;],[&quot;Huila&quot;,&quot;Huila&quot;],[&quot;La Guajira&quot;,&quot;La Guajira&quot;],[&quot;Magdalena&quot;,&quot;Magdalena&quot;],[&quot;Meta&quot;,&quot;Meta&quot;],[&quot;Nariño&quot;,&quot;Nariño&quot;],[&quot;Norte de Santander&quot;,&quot;Norte de Santander&quot;],[&quot;Putumayo&quot;,&quot;Putumayo&quot;],[&quot;Quindío&quot;,&quot;Quindío&quot;],[&quot;Risaralda&quot;,&quot;Risaralda&quot;],[&quot;San Andrés, Providencia y Santa Catalina&quot;,&quot;San Andrés \u0026 Providencia&quot;],[&quot;Santander&quot;,&quot;Santander&quot;],[&quot;Sucre&quot;,&quot;Sucre&quot;],[&quot;Tolima&quot;,&quot;Tolima&quot;],[&quot;Valle del Cauca&quot;,&quot;Valle del Cauca&quot;],[&quot;Vaupés&quot;,&quot;Vaupés&quot;],[&quot;Vichada&quot;,&quot;Vichada&quot;]]">Colombia</option>
                                            <option value="Comoros" data-provinces="[]">Comoros</option>
                                            <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                            <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                            <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                            <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                            <option value="Croatia" data-provinces="[]">Croatia</option>
                                            <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                            <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                            <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                            <option value="Côte d'Ivoire" data-provinces="[]">Côte d’Ivoire</option>
                                            <option value="Denmark" data-provinces="[]">Denmark</option>
                                            <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                            <option value="Dominica" data-provinces="[]">Dominica</option>
                                            <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                            <option value="Ecuador" data-provinces="[]">Ecuador</option>
                                            <option value="Egypt" data-provinces="[[&quot;6th of October&quot;,&quot;6th of October&quot;],[&quot;Al Sharqia&quot;,&quot;Al Sharqia&quot;],[&quot;Alexandria&quot;,&quot;Alexandria&quot;],[&quot;Aswan&quot;,&quot;Aswan&quot;],[&quot;Asyut&quot;,&quot;Asyut&quot;],[&quot;Beheira&quot;,&quot;Beheira&quot;],[&quot;Beni Suef&quot;,&quot;Beni Suef&quot;],[&quot;Cairo&quot;,&quot;Cairo&quot;],[&quot;Dakahlia&quot;,&quot;Dakahlia&quot;],[&quot;Damietta&quot;,&quot;Damietta&quot;],[&quot;Faiyum&quot;,&quot;Faiyum&quot;],[&quot;Gharbia&quot;,&quot;Gharbia&quot;],[&quot;Giza&quot;,&quot;Giza&quot;],[&quot;Helwan&quot;,&quot;Helwan&quot;],[&quot;Ismailia&quot;,&quot;Ismailia&quot;],[&quot;Kafr el-Sheikh&quot;,&quot;Kafr el-Sheikh&quot;],[&quot;Luxor&quot;,&quot;Luxor&quot;],[&quot;Matrouh&quot;,&quot;Matrouh&quot;],[&quot;Minya&quot;,&quot;Minya&quot;],[&quot;Monufia&quot;,&quot;Monufia&quot;],[&quot;New Valley&quot;,&quot;New Valley&quot;],[&quot;North Sinai&quot;,&quot;North Sinai&quot;],[&quot;Port Said&quot;,&quot;Port Said&quot;],[&quot;Qalyubia&quot;,&quot;Qalyubia&quot;],[&quot;Qena&quot;,&quot;Qena&quot;],[&quot;Red Sea&quot;,&quot;Red Sea&quot;],[&quot;Sohag&quot;,&quot;Sohag&quot;],[&quot;South Sinai&quot;,&quot;South Sinai&quot;],[&quot;Suez&quot;,&quot;Suez&quot;]]">Egypt</option>
                                            <option value="El Salvador" data-provinces="[]">El Salvador</option>
                                            <option value="Equatorial Guinea" data-provinces="[]">Equatorial Guinea</option>
                                            <option value="Eritrea" data-provinces="[]">Eritrea</option>
                                            <option value="Estonia" data-provinces="[]">Estonia</option>
                                            <option value="Eswatini" data-provinces="[]">Eswatini</option>
                                            <option value="Ethiopia" data-provinces="[]">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)" data-provinces="[]">Falkland Islands</option>
                                            <option value="Faroe Islands" data-provinces="[]">Faroe Islands</option>
                                            <option value="Fiji" data-provinces="[]">Fiji</option>
                                            <option value="Finland" data-provinces="[]">Finland</option>
                                            <option value="France" data-provinces="[]">France</option>
                                            <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                            <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                            <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                            <option value="Gabon" data-provinces="[]">Gabon</option>
                                            <option value="Gambia" data-provinces="[]">Gambia</option>
                                            <option value="Georgia" data-provinces="[]">Georgia</option>
                                            <option value="Germany" data-provinces="[]">Germany</option>
                                            <option value="Ghana" data-provinces="[]">Ghana</option>
                                            <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                            <option value="Greece" data-provinces="[]">Greece</option>
                                            <option value="Greenland" data-provinces="[]">Greenland</option>
                                            <option value="Grenada" data-provinces="[]">Grenada</option>
                                            <option value="Guadeloupe" data-provinces="[]">Guadeloupe</option>
                                            <option value="Guatemala" data-provinces="[[&quot;Alta Verapaz&quot;,&quot;Alta Verapaz&quot;],[&quot;Baja Verapaz&quot;,&quot;Baja Verapaz&quot;],[&quot;Chimaltenango&quot;,&quot;Chimaltenango&quot;],[&quot;Chiquimula&quot;,&quot;Chiquimula&quot;],[&quot;El Progreso&quot;,&quot;El Progreso&quot;],[&quot;Escuintla&quot;,&quot;Escuintla&quot;],[&quot;Guatemala&quot;,&quot;Guatemala&quot;],[&quot;Huehuetenango&quot;,&quot;Huehuetenango&quot;],[&quot;Izabal&quot;,&quot;Izabal&quot;],[&quot;Jalapa&quot;,&quot;Jalapa&quot;],[&quot;Jutiapa&quot;,&quot;Jutiapa&quot;],[&quot;Petén&quot;,&quot;Petén&quot;],[&quot;Quetzaltenango&quot;,&quot;Quetzaltenango&quot;],[&quot;Quiché&quot;,&quot;Quiché&quot;],[&quot;Retalhuleu&quot;,&quot;Retalhuleu&quot;],[&quot;Sacatepéquez&quot;,&quot;Sacatepéquez&quot;],[&quot;San Marcos&quot;,&quot;San Marcos&quot;],[&quot;Santa Rosa&quot;,&quot;Santa Rosa&quot;],[&quot;Sololá&quot;,&quot;Sololá&quot;],[&quot;Suchitepéquez&quot;,&quot;Suchitepéquez&quot;],[&quot;Totonicapán&quot;,&quot;Totonicapán&quot;],[&quot;Zacapa&quot;,&quot;Zacapa&quot;]]">Guatemala</option>
                                            <option value="Guernsey" data-provinces="[]">Guernsey</option>
                                            <option value="Guinea" data-provinces="[]">Guinea</option>
                                            <option value="Guinea Bissau" data-provinces="[]">Guinea-Bissau</option>
                                            <option value="Guyana" data-provinces="[]">Guyana</option>
                                            <option value="Haiti" data-provinces="[]">Haiti</option>
                                            <option value="Honduras" data-provinces="[]">Honduras</option>
                                            <option value="Hong Kong" data-provinces="[[&quot;Hong Kong Island&quot;,&quot;Hong Kong Island&quot;],[&quot;Kowloon&quot;,&quot;Kowloon&quot;],[&quot;New Territories&quot;,&quot;New Territories&quot;]]">Hong Kong SAR</option>
                                            <option value="Hungary" data-provinces="[]">Hungary</option>
                                            <option value="Iceland" data-provinces="[]">Iceland</option>
                                            <option value="India" data-provinces="[[&quot;Andaman and Nicobar Islands&quot;,&quot;Andaman and Nicobar Islands&quot;],[&quot;Andhra Pradesh&quot;,&quot;Andhra Pradesh&quot;],[&quot;Arunachal Pradesh&quot;,&quot;Arunachal Pradesh&quot;],[&quot;Assam&quot;,&quot;Assam&quot;],[&quot;Bihar&quot;,&quot;Bihar&quot;],[&quot;Chandigarh&quot;,&quot;Chandigarh&quot;],[&quot;Chhattisgarh&quot;,&quot;Chhattisgarh&quot;],[&quot;Dadra and Nagar Haveli&quot;,&quot;Dadra and Nagar Haveli&quot;],[&quot;Daman and Diu&quot;,&quot;Daman and Diu&quot;],[&quot;Delhi&quot;,&quot;Delhi&quot;],[&quot;Goa&quot;,&quot;Goa&quot;],[&quot;Gujarat&quot;,&quot;Gujarat&quot;],[&quot;Haryana&quot;,&quot;Haryana&quot;],[&quot;Himachal Pradesh&quot;,&quot;Himachal Pradesh&quot;],[&quot;Jammu and Kashmir&quot;,&quot;Jammu and Kashmir&quot;],[&quot;Jharkhand&quot;,&quot;Jharkhand&quot;],[&quot;Karnataka&quot;,&quot;Karnataka&quot;],[&quot;Kerala&quot;,&quot;Kerala&quot;],[&quot;Ladakh&quot;,&quot;Ladakh&quot;],[&quot;Lakshadweep&quot;,&quot;Lakshadweep&quot;],[&quot;Madhya Pradesh&quot;,&quot;Madhya Pradesh&quot;],[&quot;Maharashtra&quot;,&quot;Maharashtra&quot;],[&quot;Manipur&quot;,&quot;Manipur&quot;],[&quot;Meghalaya&quot;,&quot;Meghalaya&quot;],[&quot;Mizoram&quot;,&quot;Mizoram&quot;],[&quot;Nagaland&quot;,&quot;Nagaland&quot;],[&quot;Odisha&quot;,&quot;Odisha&quot;],[&quot;Puducherry&quot;,&quot;Puducherry&quot;],[&quot;Punjab&quot;,&quot;Punjab&quot;],[&quot;Rajasthan&quot;,&quot;Rajasthan&quot;],[&quot;Sikkim&quot;,&quot;Sikkim&quot;],[&quot;Tamil Nadu&quot;,&quot;Tamil Nadu&quot;],[&quot;Telangana&quot;,&quot;Telangana&quot;],[&quot;Tripura&quot;,&quot;Tripura&quot;],[&quot;Uttar Pradesh&quot;,&quot;Uttar Pradesh&quot;],[&quot;Uttarakhand&quot;,&quot;Uttarakhand&quot;],[&quot;West Bengal&quot;,&quot;West Bengal&quot;]]">India</option>
                                            <option value="Indonesia" data-provinces="[[&quot;Aceh&quot;,&quot;Aceh&quot;],[&quot;Bali&quot;,&quot;Bali&quot;],[&quot;Bangka Belitung&quot;,&quot;Bangka–Belitung Islands&quot;],[&quot;Banten&quot;,&quot;Banten&quot;],[&quot;Bengkulu&quot;,&quot;Bengkulu&quot;],[&quot;Gorontalo&quot;,&quot;Gorontalo&quot;],[&quot;Jakarta&quot;,&quot;Jakarta&quot;],[&quot;Jambi&quot;,&quot;Jambi&quot;],[&quot;Jawa Barat&quot;,&quot;West Java&quot;],[&quot;Jawa Tengah&quot;,&quot;Central Java&quot;],[&quot;Jawa Timur&quot;,&quot;East Java&quot;],[&quot;Kalimantan Barat&quot;,&quot;West Kalimantan&quot;],[&quot;Kalimantan Selatan&quot;,&quot;South Kalimantan&quot;],[&quot;Kalimantan Tengah&quot;,&quot;Central Kalimantan&quot;],[&quot;Kalimantan Timur&quot;,&quot;East Kalimantan&quot;],[&quot;Kalimantan Utara&quot;,&quot;North Kalimantan&quot;],[&quot;Kepulauan Riau&quot;,&quot;Riau Islands&quot;],[&quot;Lampung&quot;,&quot;Lampung&quot;],[&quot;Maluku&quot;,&quot;Maluku&quot;],[&quot;Maluku Utara&quot;,&quot;North Maluku&quot;],[&quot;North Sumatra&quot;,&quot;North Sumatra&quot;],[&quot;Nusa Tenggara Barat&quot;,&quot;West Nusa Tenggara&quot;],[&quot;Nusa Tenggara Timur&quot;,&quot;East Nusa Tenggara&quot;],[&quot;Papua&quot;,&quot;Papua&quot;],[&quot;Papua Barat&quot;,&quot;West Papua&quot;],[&quot;Riau&quot;,&quot;Riau&quot;],[&quot;South Sumatra&quot;,&quot;South Sumatra&quot;],[&quot;Sulawesi Barat&quot;,&quot;West Sulawesi&quot;],[&quot;Sulawesi Selatan&quot;,&quot;South Sulawesi&quot;],[&quot;Sulawesi Tengah&quot;,&quot;Central Sulawesi&quot;],[&quot;Sulawesi Tenggara&quot;,&quot;Southeast Sulawesi&quot;],[&quot;Sulawesi Utara&quot;,&quot;North Sulawesi&quot;],[&quot;West Sumatra&quot;,&quot;West Sumatra&quot;],[&quot;Yogyakarta&quot;,&quot;Yogyakarta&quot;]]">Indonesia</option>
                                            <option value="Iraq" data-provinces="[]">Iraq</option>
                                            <option value="Ireland" data-provinces="[[&quot;Carlow&quot;,&quot;Carlow&quot;],[&quot;Cavan&quot;,&quot;Cavan&quot;],[&quot;Clare&quot;,&quot;Clare&quot;],[&quot;Cork&quot;,&quot;Cork&quot;],[&quot;Donegal&quot;,&quot;Donegal&quot;],[&quot;Dublin&quot;,&quot;Dublin&quot;],[&quot;Galway&quot;,&quot;Galway&quot;],[&quot;Kerry&quot;,&quot;Kerry&quot;],[&quot;Kildare&quot;,&quot;Kildare&quot;],[&quot;Kilkenny&quot;,&quot;Kilkenny&quot;],[&quot;Laois&quot;,&quot;Laois&quot;],[&quot;Leitrim&quot;,&quot;Leitrim&quot;],[&quot;Limerick&quot;,&quot;Limerick&quot;],[&quot;Longford&quot;,&quot;Longford&quot;],[&quot;Louth&quot;,&quot;Louth&quot;],[&quot;Mayo&quot;,&quot;Mayo&quot;],[&quot;Meath&quot;,&quot;Meath&quot;],[&quot;Monaghan&quot;,&quot;Monaghan&quot;],[&quot;Offaly&quot;,&quot;Offaly&quot;],[&quot;Roscommon&quot;,&quot;Roscommon&quot;],[&quot;Sligo&quot;,&quot;Sligo&quot;],[&quot;Tipperary&quot;,&quot;Tipperary&quot;],[&quot;Waterford&quot;,&quot;Waterford&quot;],[&quot;Westmeath&quot;,&quot;Westmeath&quot;],[&quot;Wexford&quot;,&quot;Wexford&quot;],[&quot;Wicklow&quot;,&quot;Wicklow&quot;]]">Ireland</option>
                                            <option value="Isle Of Man" data-provinces="[]">Isle of Man</option>
                                            <option value="Israel" data-provinces="[]">Israel</option>
                                            <option value="Italy" data-provinces="[[&quot;Agrigento&quot;,&quot;Agrigento&quot;],[&quot;Alessandria&quot;,&quot;Alessandria&quot;],[&quot;Ancona&quot;,&quot;Ancona&quot;],[&quot;Aosta&quot;,&quot;Aosta&quot;],[&quot;Arezzo&quot;,&quot;Arezzo&quot;],[&quot;Ascoli Piceno&quot;,&quot;Ascoli Piceno&quot;],[&quot;Asti&quot;,&quot;Asti&quot;],[&quot;Avellino&quot;,&quot;Avellino&quot;],[&quot;Bari&quot;,&quot;Bari&quot;],[&quot;Barletta-Andria-Trani&quot;,&quot;Barletta-Andria-Trani&quot;],[&quot;Belluno&quot;,&quot;Belluno&quot;],[&quot;Benevento&quot;,&quot;Benevento&quot;],[&quot;Bergamo&quot;,&quot;Bergamo&quot;],[&quot;Biella&quot;,&quot;Biella&quot;],[&quot;Bologna&quot;,&quot;Bologna&quot;],[&quot;Bolzano&quot;,&quot;South Tyrol&quot;],[&quot;Brescia&quot;,&quot;Brescia&quot;],[&quot;Brindisi&quot;,&quot;Brindisi&quot;],[&quot;Cagliari&quot;,&quot;Cagliari&quot;],[&quot;Caltanissetta&quot;,&quot;Caltanissetta&quot;],[&quot;Campobasso&quot;,&quot;Campobasso&quot;],[&quot;Carbonia-Iglesias&quot;,&quot;Carbonia-Iglesias&quot;],[&quot;Caserta&quot;,&quot;Caserta&quot;],[&quot;Catania&quot;,&quot;Catania&quot;],[&quot;Catanzaro&quot;,&quot;Catanzaro&quot;],[&quot;Chieti&quot;,&quot;Chieti&quot;],[&quot;Como&quot;,&quot;Como&quot;],[&quot;Cosenza&quot;,&quot;Cosenza&quot;],[&quot;Cremona&quot;,&quot;Cremona&quot;],[&quot;Crotone&quot;,&quot;Crotone&quot;],[&quot;Cuneo&quot;,&quot;Cuneo&quot;],[&quot;Enna&quot;,&quot;Enna&quot;],[&quot;Fermo&quot;,&quot;Fermo&quot;],[&quot;Ferrara&quot;,&quot;Ferrara&quot;],[&quot;Firenze&quot;,&quot;Florence&quot;],[&quot;Foggia&quot;,&quot;Foggia&quot;],[&quot;Forlì-Cesena&quot;,&quot;Forlì-Cesena&quot;],[&quot;Frosinone&quot;,&quot;Frosinone&quot;],[&quot;Genova&quot;,&quot;Genoa&quot;],[&quot;Gorizia&quot;,&quot;Gorizia&quot;],[&quot;Grosseto&quot;,&quot;Grosseto&quot;],[&quot;Imperia&quot;,&quot;Imperia&quot;],[&quot;Isernia&quot;,&quot;Isernia&quot;],[&quot;L'Aquila&quot;,&quot;L’Aquila&quot;],[&quot;La Spezia&quot;,&quot;La Spezia&quot;],[&quot;Latina&quot;,&quot;Latina&quot;],[&quot;Lecce&quot;,&quot;Lecce&quot;],[&quot;Lecco&quot;,&quot;Lecco&quot;],[&quot;Livorno&quot;,&quot;Livorno&quot;],[&quot;Lodi&quot;,&quot;Lodi&quot;],[&quot;Lucca&quot;,&quot;Lucca&quot;],[&quot;Macerata&quot;,&quot;Macerata&quot;],[&quot;Mantova&quot;,&quot;Mantua&quot;],[&quot;Massa-Carrara&quot;,&quot;Massa and Carrara&quot;],[&quot;Matera&quot;,&quot;Matera&quot;],[&quot;Medio Campidano&quot;,&quot;Medio Campidano&quot;],[&quot;Messina&quot;,&quot;Messina&quot;],[&quot;Milano&quot;,&quot;Milan&quot;],[&quot;Modena&quot;,&quot;Modena&quot;],[&quot;Monza e Brianza&quot;,&quot;Monza and Brianza&quot;],[&quot;Napoli&quot;,&quot;Naples&quot;],[&quot;Novara&quot;,&quot;Novara&quot;],[&quot;Nuoro&quot;,&quot;Nuoro&quot;],[&quot;Ogliastra&quot;,&quot;Ogliastra&quot;],[&quot;Olbia-Tempio&quot;,&quot;Olbia-Tempio&quot;],[&quot;Oristano&quot;,&quot;Oristano&quot;],[&quot;Padova&quot;,&quot;Padua&quot;],[&quot;Palermo&quot;,&quot;Palermo&quot;],[&quot;Parma&quot;,&quot;Parma&quot;],[&quot;Pavia&quot;,&quot;Pavia&quot;],[&quot;Perugia&quot;,&quot;Perugia&quot;],[&quot;Pesaro e Urbino&quot;,&quot;Pesaro and Urbino&quot;],[&quot;Pescara&quot;,&quot;Pescara&quot;],[&quot;Piacenza&quot;,&quot;Piacenza&quot;],[&quot;Pisa&quot;,&quot;Pisa&quot;],[&quot;Pistoia&quot;,&quot;Pistoia&quot;],[&quot;Pordenone&quot;,&quot;Pordenone&quot;],[&quot;Potenza&quot;,&quot;Potenza&quot;],[&quot;Prato&quot;,&quot;Prato&quot;],[&quot;Ragusa&quot;,&quot;Ragusa&quot;],[&quot;Ravenna&quot;,&quot;Ravenna&quot;],[&quot;Reggio Calabria&quot;,&quot;Reggio Calabria&quot;],[&quot;Reggio Emilia&quot;,&quot;Reggio Emilia&quot;],[&quot;Rieti&quot;,&quot;Rieti&quot;],[&quot;Rimini&quot;,&quot;Rimini&quot;],[&quot;Roma&quot;,&quot;Rome&quot;],[&quot;Rovigo&quot;,&quot;Rovigo&quot;],[&quot;Salerno&quot;,&quot;Salerno&quot;],[&quot;Sassari&quot;,&quot;Sassari&quot;],[&quot;Savona&quot;,&quot;Savona&quot;],[&quot;Siena&quot;,&quot;Siena&quot;],[&quot;Siracusa&quot;,&quot;Syracuse&quot;],[&quot;Sondrio&quot;,&quot;Sondrio&quot;],[&quot;Taranto&quot;,&quot;Taranto&quot;],[&quot;Teramo&quot;,&quot;Teramo&quot;],[&quot;Terni&quot;,&quot;Terni&quot;],[&quot;Torino&quot;,&quot;Turin&quot;],[&quot;Trapani&quot;,&quot;Trapani&quot;],[&quot;Trento&quot;,&quot;Trentino&quot;],[&quot;Treviso&quot;,&quot;Treviso&quot;],[&quot;Trieste&quot;,&quot;Trieste&quot;],[&quot;Udine&quot;,&quot;Udine&quot;],[&quot;Varese&quot;,&quot;Varese&quot;],[&quot;Venezia&quot;,&quot;Venice&quot;],[&quot;Verbano-Cusio-Ossola&quot;,&quot;Verbano-Cusio-Ossola&quot;],[&quot;Vercelli&quot;,&quot;Vercelli&quot;],[&quot;Verona&quot;,&quot;Verona&quot;],[&quot;Vibo Valentia&quot;,&quot;Vibo Valentia&quot;],[&quot;Vicenza&quot;,&quot;Vicenza&quot;],[&quot;Viterbo&quot;,&quot;Viterbo&quot;]]">Italy</option>
                                            <option value="Jamaica" data-provinces="[]">Jamaica</option>
                                            <option value="Japan" data-provinces="[[&quot;Aichi&quot;,&quot;Aichi&quot;],[&quot;Akita&quot;,&quot;Akita&quot;],[&quot;Aomori&quot;,&quot;Aomori&quot;],[&quot;Chiba&quot;,&quot;Chiba&quot;],[&quot;Ehime&quot;,&quot;Ehime&quot;],[&quot;Fukui&quot;,&quot;Fukui&quot;],[&quot;Fukuoka&quot;,&quot;Fukuoka&quot;],[&quot;Fukushima&quot;,&quot;Fukushima&quot;],[&quot;Gifu&quot;,&quot;Gifu&quot;],[&quot;Gunma&quot;,&quot;Gunma&quot;],[&quot;Hiroshima&quot;,&quot;Hiroshima&quot;],[&quot;Hokkaidō&quot;,&quot;Hokkaido&quot;],[&quot;Hyōgo&quot;,&quot;Hyogo&quot;],[&quot;Ibaraki&quot;,&quot;Ibaraki&quot;],[&quot;Ishikawa&quot;,&quot;Ishikawa&quot;],[&quot;Iwate&quot;,&quot;Iwate&quot;],[&quot;Kagawa&quot;,&quot;Kagawa&quot;],[&quot;Kagoshima&quot;,&quot;Kagoshima&quot;],[&quot;Kanagawa&quot;,&quot;Kanagawa&quot;],[&quot;Kumamoto&quot;,&quot;Kumamoto&quot;],[&quot;Kyōto&quot;,&quot;Kyoto&quot;],[&quot;Kōchi&quot;,&quot;Kochi&quot;],[&quot;Mie&quot;,&quot;Mie&quot;],[&quot;Miyagi&quot;,&quot;Miyagi&quot;],[&quot;Miyazaki&quot;,&quot;Miyazaki&quot;],[&quot;Nagano&quot;,&quot;Nagano&quot;],[&quot;Nagasaki&quot;,&quot;Nagasaki&quot;],[&quot;Nara&quot;,&quot;Nara&quot;],[&quot;Niigata&quot;,&quot;Niigata&quot;],[&quot;Okayama&quot;,&quot;Okayama&quot;],[&quot;Okinawa&quot;,&quot;Okinawa&quot;],[&quot;Saga&quot;,&quot;Saga&quot;],[&quot;Saitama&quot;,&quot;Saitama&quot;],[&quot;Shiga&quot;,&quot;Shiga&quot;],[&quot;Shimane&quot;,&quot;Shimane&quot;],[&quot;Shizuoka&quot;,&quot;Shizuoka&quot;],[&quot;Tochigi&quot;,&quot;Tochigi&quot;],[&quot;Tokushima&quot;,&quot;Tokushima&quot;],[&quot;Tottori&quot;,&quot;Tottori&quot;],[&quot;Toyama&quot;,&quot;Toyama&quot;],[&quot;Tōkyō&quot;,&quot;Tokyo&quot;],[&quot;Wakayama&quot;,&quot;Wakayama&quot;],[&quot;Yamagata&quot;,&quot;Yamagata&quot;],[&quot;Yamaguchi&quot;,&quot;Yamaguchi&quot;],[&quot;Yamanashi&quot;,&quot;Yamanashi&quot;],[&quot;Ōita&quot;,&quot;Oita&quot;],[&quot;Ōsaka&quot;,&quot;Osaka&quot;]]">Japan</option>
                                            <option value="Jersey" data-provinces="[]">Jersey</option>
                                            <option value="Jordan" data-provinces="[]">Jordan</option>
                                            <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                            <option value="Kenya" data-provinces="[]">Kenya</option>
                                            <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                            <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                            <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                            <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                            <option value="Latvia" data-provinces="[]">Latvia</option>
                                            <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                            <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                            <option value="Liberia" data-provinces="[]">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                            <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                            <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                            <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                            <option value="Macao" data-provinces="[]">Macao SAR</option>
                                            <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                            <option value="Malawi" data-provinces="[]">Malawi</option>
                                            <option value="Malaysia" data-provinces="[[&quot;Johor&quot;,&quot;Johor&quot;],[&quot;Kedah&quot;,&quot;Kedah&quot;],[&quot;Kelantan&quot;,&quot;Kelantan&quot;],[&quot;Kuala Lumpur&quot;,&quot;Kuala Lumpur&quot;],[&quot;Labuan&quot;,&quot;Labuan&quot;],[&quot;Melaka&quot;,&quot;Malacca&quot;],[&quot;Negeri Sembilan&quot;,&quot;Negeri Sembilan&quot;],[&quot;Pahang&quot;,&quot;Pahang&quot;],[&quot;Penang&quot;,&quot;Penang&quot;],[&quot;Perak&quot;,&quot;Perak&quot;],[&quot;Perlis&quot;,&quot;Perlis&quot;],[&quot;Putrajaya&quot;,&quot;Putrajaya&quot;],[&quot;Sabah&quot;,&quot;Sabah&quot;],[&quot;Sarawak&quot;,&quot;Sarawak&quot;],[&quot;Selangor&quot;,&quot;Selangor&quot;],[&quot;Terengganu&quot;,&quot;Terengganu&quot;]]">Malaysia</option>
                                            <option value="Maldives" data-provinces="[]">Maldives</option>
                                            <option value="Mali" data-provinces="[]">Mali</option>
                                            <option value="Malta" data-provinces="[]">Malta</option>
                                            <option value="Martinique" data-provinces="[]">Martinique</option>
                                            <option value="Mauritania" data-provinces="[]">Mauritania</option>
                                            <option value="Mauritius" data-provinces="[]">Mauritius</option>
                                            <option value="Mayotte" data-provinces="[]">Mayotte</option>
                                            <option value="Mexico" data-provinces="[[&quot;Aguascalientes&quot;,&quot;Aguascalientes&quot;],[&quot;Baja California&quot;,&quot;Baja California&quot;],[&quot;Baja California Sur&quot;,&quot;Baja California Sur&quot;],[&quot;Campeche&quot;,&quot;Campeche&quot;],[&quot;Chiapas&quot;,&quot;Chiapas&quot;],[&quot;Chihuahua&quot;,&quot;Chihuahua&quot;],[&quot;Ciudad de México&quot;,&quot;Ciudad de Mexico&quot;],[&quot;Coahuila&quot;,&quot;Coahuila&quot;],[&quot;Colima&quot;,&quot;Colima&quot;],[&quot;Durango&quot;,&quot;Durango&quot;],[&quot;Guanajuato&quot;,&quot;Guanajuato&quot;],[&quot;Guerrero&quot;,&quot;Guerrero&quot;],[&quot;Hidalgo&quot;,&quot;Hidalgo&quot;],[&quot;Jalisco&quot;,&quot;Jalisco&quot;],[&quot;Michoacán&quot;,&quot;Michoacán&quot;],[&quot;Morelos&quot;,&quot;Morelos&quot;],[&quot;México&quot;,&quot;Mexico State&quot;],[&quot;Nayarit&quot;,&quot;Nayarit&quot;],[&quot;Nuevo León&quot;,&quot;Nuevo León&quot;],[&quot;Oaxaca&quot;,&quot;Oaxaca&quot;],[&quot;Puebla&quot;,&quot;Puebla&quot;],[&quot;Querétaro&quot;,&quot;Querétaro&quot;],[&quot;Quintana Roo&quot;,&quot;Quintana Roo&quot;],[&quot;San Luis Potosí&quot;,&quot;San Luis Potosí&quot;],[&quot;Sinaloa&quot;,&quot;Sinaloa&quot;],[&quot;Sonora&quot;,&quot;Sonora&quot;],[&quot;Tabasco&quot;,&quot;Tabasco&quot;],[&quot;Tamaulipas&quot;,&quot;Tamaulipas&quot;],[&quot;Tlaxcala&quot;,&quot;Tlaxcala&quot;],[&quot;Veracruz&quot;,&quot;Veracruz&quot;],[&quot;Yucatán&quot;,&quot;Yucatán&quot;],[&quot;Zacatecas&quot;,&quot;Zacatecas&quot;]]">Mexico</option>
                                            <option value="Moldova, Republic of" data-provinces="[]">Moldova</option>
                                            <option value="Monaco" data-provinces="[]">Monaco</option>
                                            <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                            <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                            <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                            <option value="Morocco" data-provinces="[]">Morocco</option>
                                            <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                            <option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
                                            <option value="Namibia" data-provinces="[]">Namibia</option>
                                            <option value="Nauru" data-provinces="[]">Nauru</option>
                                            <option value="Nepal" data-provinces="[]">Nepal</option>
                                            <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                            <option value="New Caledonia" data-provinces="[]">New Caledonia</option>
                                            <option value="New Zealand" data-provinces="[[&quot;Auckland&quot;,&quot;Auckland&quot;],[&quot;Bay of Plenty&quot;,&quot;Bay of Plenty&quot;],[&quot;Canterbury&quot;,&quot;Canterbury&quot;],[&quot;Chatham Islands&quot;,&quot;Chatham Islands&quot;],[&quot;Gisborne&quot;,&quot;Gisborne&quot;],[&quot;Hawke's Bay&quot;,&quot;Hawke’s Bay&quot;],[&quot;Manawatu-Wanganui&quot;,&quot;Manawatu-Wanganui&quot;],[&quot;Marlborough&quot;,&quot;Marlborough&quot;],[&quot;Nelson&quot;,&quot;Nelson&quot;],[&quot;Northland&quot;,&quot;Northland&quot;],[&quot;Otago&quot;,&quot;Otago&quot;],[&quot;Southland&quot;,&quot;Southland&quot;],[&quot;Taranaki&quot;,&quot;Taranaki&quot;],[&quot;Tasman&quot;,&quot;Tasman&quot;],[&quot;Waikato&quot;,&quot;Waikato&quot;],[&quot;Wellington&quot;,&quot;Wellington&quot;],[&quot;West Coast&quot;,&quot;West Coast&quot;]]">New Zealand</option>
                                            <option value="Nicaragua" data-provinces="[]">Nicaragua</option>
                                            <option value="Niger" data-provinces="[]">Niger</option>
                                            <option value="Nigeria" data-provinces="[[&quot;Abia&quot;,&quot;Abia&quot;],[&quot;Abuja Federal Capital Territory&quot;,&quot;Federal Capital Territory&quot;],[&quot;Adamawa&quot;,&quot;Adamawa&quot;],[&quot;Akwa Ibom&quot;,&quot;Akwa Ibom&quot;],[&quot;Anambra&quot;,&quot;Anambra&quot;],[&quot;Bauchi&quot;,&quot;Bauchi&quot;],[&quot;Bayelsa&quot;,&quot;Bayelsa&quot;],[&quot;Benue&quot;,&quot;Benue&quot;],[&quot;Borno&quot;,&quot;Borno&quot;],[&quot;Cross River&quot;,&quot;Cross River&quot;],[&quot;Delta&quot;,&quot;Delta&quot;],[&quot;Ebonyi&quot;,&quot;Ebonyi&quot;],[&quot;Edo&quot;,&quot;Edo&quot;],[&quot;Ekiti&quot;,&quot;Ekiti&quot;],[&quot;Enugu&quot;,&quot;Enugu&quot;],[&quot;Gombe&quot;,&quot;Gombe&quot;],[&quot;Imo&quot;,&quot;Imo&quot;],[&quot;Jigawa&quot;,&quot;Jigawa&quot;],[&quot;Kaduna&quot;,&quot;Kaduna&quot;],[&quot;Kano&quot;,&quot;Kano&quot;],[&quot;Katsina&quot;,&quot;Katsina&quot;],[&quot;Kebbi&quot;,&quot;Kebbi&quot;],[&quot;Kogi&quot;,&quot;Kogi&quot;],[&quot;Kwara&quot;,&quot;Kwara&quot;],[&quot;Lagos&quot;,&quot;Lagos&quot;],[&quot;Nasarawa&quot;,&quot;Nasarawa&quot;],[&quot;Niger&quot;,&quot;Niger&quot;],[&quot;Ogun&quot;,&quot;Ogun&quot;],[&quot;Ondo&quot;,&quot;Ondo&quot;],[&quot;Osun&quot;,&quot;Osun&quot;],[&quot;Oyo&quot;,&quot;Oyo&quot;],[&quot;Plateau&quot;,&quot;Plateau&quot;],[&quot;Rivers&quot;,&quot;Rivers&quot;],[&quot;Sokoto&quot;,&quot;Sokoto&quot;],[&quot;Taraba&quot;,&quot;Taraba&quot;],[&quot;Yobe&quot;,&quot;Yobe&quot;],[&quot;Zamfara&quot;,&quot;Zamfara&quot;]]">Nigeria</option>
                                            <option value="Niue" data-provinces="[]">Niue</option>
                                            <option value="Norfolk Island" data-provinces="[]">Norfolk Island</option>
                                            <option value="North Macedonia" data-provinces="[]">North Macedonia</option>
                                            <option value="Norway" data-provinces="[]">Norway</option>
                                            <option value="Oman" data-provinces="[]">Oman</option>
                                            <option value="Pakistan" data-provinces="[]">Pakistan</option>
                                            <option value="Palestinian Territory, Occupied" data-provinces="[]">Palestinian Territories</option>
                                            <option value="Panama" data-provinces="[[&quot;Bocas del Toro&quot;,&quot;Bocas del Toro&quot;],[&quot;Chiriquí&quot;,&quot;Chiriquí&quot;],[&quot;Coclé&quot;,&quot;Coclé&quot;],[&quot;Colón&quot;,&quot;Colón&quot;],[&quot;Darién&quot;,&quot;Darién&quot;],[&quot;Emberá&quot;,&quot;Emberá&quot;],[&quot;Herrera&quot;,&quot;Herrera&quot;],[&quot;Kuna Yala&quot;,&quot;Guna Yala&quot;],[&quot;Los Santos&quot;,&quot;Los Santos&quot;],[&quot;Ngöbe-Buglé&quot;,&quot;Ngöbe-Buglé&quot;],[&quot;Panamá&quot;,&quot;Panamá&quot;],[&quot;Panamá Oeste&quot;,&quot;West Panamá&quot;],[&quot;Veraguas&quot;,&quot;Veraguas&quot;]]">Panama</option>
                                            <option value="Papua New Guinea" data-provinces="[]">Papua New Guinea</option>
                                            <option value="Paraguay" data-provinces="[]">Paraguay</option>
                                            <option value="Peru" data-provinces="[[&quot;Amazonas&quot;,&quot;Amazonas&quot;],[&quot;Apurímac&quot;,&quot;Apurímac&quot;],[&quot;Arequipa&quot;,&quot;Arequipa&quot;],[&quot;Ayacucho&quot;,&quot;Ayacucho&quot;],[&quot;Cajamarca&quot;,&quot;Cajamarca&quot;],[&quot;Callao&quot;,&quot;El Callao&quot;],[&quot;Cuzco&quot;,&quot;Cusco&quot;],[&quot;Huancavelica&quot;,&quot;Huancavelica&quot;],[&quot;Huánuco&quot;,&quot;Huánuco&quot;],[&quot;Ica&quot;,&quot;Ica&quot;],[&quot;Junín&quot;,&quot;Junín&quot;],[&quot;La Libertad&quot;,&quot;La Libertad&quot;],[&quot;Lambayeque&quot;,&quot;Lambayeque&quot;],[&quot;Lima (departamento)&quot;,&quot;Lima Region&quot;],[&quot;Lima (provincia)&quot;,&quot;Lima&quot;],[&quot;Loreto&quot;,&quot;Loreto&quot;],[&quot;Madre de Dios&quot;,&quot;Madre de Dios&quot;],[&quot;Moquegua&quot;,&quot;Moquegua&quot;],[&quot;Pasco&quot;,&quot;Pasco&quot;],[&quot;Piura&quot;,&quot;Piura&quot;],[&quot;Puno&quot;,&quot;Puno&quot;],[&quot;San Martín&quot;,&quot;San Martín&quot;],[&quot;Tacna&quot;,&quot;Tacna&quot;],[&quot;Tumbes&quot;,&quot;Tumbes&quot;],[&quot;Ucayali&quot;,&quot;Ucayali&quot;],[&quot;Áncash&quot;,&quot;Ancash&quot;]]">Peru</option>
                                            <option value="Philippines" data-provinces="[[&quot;Abra&quot;,&quot;Abra&quot;],[&quot;Agusan del Norte&quot;,&quot;Agusan del Norte&quot;],[&quot;Agusan del Sur&quot;,&quot;Agusan del Sur&quot;],[&quot;Aklan&quot;,&quot;Aklan&quot;],[&quot;Albay&quot;,&quot;Albay&quot;],[&quot;Antique&quot;,&quot;Antique&quot;],[&quot;Apayao&quot;,&quot;Apayao&quot;],[&quot;Aurora&quot;,&quot;Aurora&quot;],[&quot;Basilan&quot;,&quot;Basilan&quot;],[&quot;Bataan&quot;,&quot;Bataan&quot;],[&quot;Batanes&quot;,&quot;Batanes&quot;],[&quot;Batangas&quot;,&quot;Batangas&quot;],[&quot;Benguet&quot;,&quot;Benguet&quot;],[&quot;Biliran&quot;,&quot;Biliran&quot;],[&quot;Bohol&quot;,&quot;Bohol&quot;],[&quot;Bukidnon&quot;,&quot;Bukidnon&quot;],[&quot;Bulacan&quot;,&quot;Bulacan&quot;],[&quot;Cagayan&quot;,&quot;Cagayan&quot;],[&quot;Camarines Norte&quot;,&quot;Camarines Norte&quot;],[&quot;Camarines Sur&quot;,&quot;Camarines Sur&quot;],[&quot;Camiguin&quot;,&quot;Camiguin&quot;],[&quot;Capiz&quot;,&quot;Capiz&quot;],[&quot;Catanduanes&quot;,&quot;Catanduanes&quot;],[&quot;Cavite&quot;,&quot;Cavite&quot;],[&quot;Cebu&quot;,&quot;Cebu&quot;],[&quot;Cotabato&quot;,&quot;Cotabato&quot;],[&quot;Davao Occidental&quot;,&quot;Davao Occidental&quot;],[&quot;Davao Oriental&quot;,&quot;Davao Oriental&quot;],[&quot;Davao de Oro&quot;,&quot;Compostela Valley&quot;],[&quot;Davao del Norte&quot;,&quot;Davao del Norte&quot;],[&quot;Davao del Sur&quot;,&quot;Davao del Sur&quot;],[&quot;Dinagat Islands&quot;,&quot;Dinagat Islands&quot;],[&quot;Eastern Samar&quot;,&quot;Eastern Samar&quot;],[&quot;Guimaras&quot;,&quot;Guimaras&quot;],[&quot;Ifugao&quot;,&quot;Ifugao&quot;],[&quot;Ilocos Norte&quot;,&quot;Ilocos Norte&quot;],[&quot;Ilocos Sur&quot;,&quot;Ilocos Sur&quot;],[&quot;Iloilo&quot;,&quot;Iloilo&quot;],[&quot;Isabela&quot;,&quot;Isabela&quot;],[&quot;Kalinga&quot;,&quot;Kalinga&quot;],[&quot;La Union&quot;,&quot;La Union&quot;],[&quot;Laguna&quot;,&quot;Laguna&quot;],[&quot;Lanao del Norte&quot;,&quot;Lanao del Norte&quot;],[&quot;Lanao del Sur&quot;,&quot;Lanao del Sur&quot;],[&quot;Leyte&quot;,&quot;Leyte&quot;],[&quot;Maguindanao&quot;,&quot;Maguindanao&quot;],[&quot;Marinduque&quot;,&quot;Marinduque&quot;],[&quot;Masbate&quot;,&quot;Masbate&quot;],[&quot;Metro Manila&quot;,&quot;Metro Manila&quot;],[&quot;Misamis Occidental&quot;,&quot;Misamis Occidental&quot;],[&quot;Misamis Oriental&quot;,&quot;Misamis Oriental&quot;],[&quot;Mountain Province&quot;,&quot;Mountain&quot;],[&quot;Negros Occidental&quot;,&quot;Negros Occidental&quot;],[&quot;Negros Oriental&quot;,&quot;Negros Oriental&quot;],[&quot;Northern Samar&quot;,&quot;Northern Samar&quot;],[&quot;Nueva Ecija&quot;,&quot;Nueva Ecija&quot;],[&quot;Nueva Vizcaya&quot;,&quot;Nueva Vizcaya&quot;],[&quot;Occidental Mindoro&quot;,&quot;Occidental Mindoro&quot;],[&quot;Oriental Mindoro&quot;,&quot;Oriental Mindoro&quot;],[&quot;Palawan&quot;,&quot;Palawan&quot;],[&quot;Pampanga&quot;,&quot;Pampanga&quot;],[&quot;Pangasinan&quot;,&quot;Pangasinan&quot;],[&quot;Quezon&quot;,&quot;Quezon&quot;],[&quot;Quirino&quot;,&quot;Quirino&quot;],[&quot;Rizal&quot;,&quot;Rizal&quot;],[&quot;Romblon&quot;,&quot;Romblon&quot;],[&quot;Samar&quot;,&quot;Samar&quot;],[&quot;Sarangani&quot;,&quot;Sarangani&quot;],[&quot;Siquijor&quot;,&quot;Siquijor&quot;],[&quot;Sorsogon&quot;,&quot;Sorsogon&quot;],[&quot;South Cotabato&quot;,&quot;South Cotabato&quot;],[&quot;Southern Leyte&quot;,&quot;Southern Leyte&quot;],[&quot;Sultan Kudarat&quot;,&quot;Sultan Kudarat&quot;],[&quot;Sulu&quot;,&quot;Sulu&quot;],[&quot;Surigao del Norte&quot;,&quot;Surigao del Norte&quot;],[&quot;Surigao del Sur&quot;,&quot;Surigao del Sur&quot;],[&quot;Tarlac&quot;,&quot;Tarlac&quot;],[&quot;Tawi-Tawi&quot;,&quot;Tawi-Tawi&quot;],[&quot;Zambales&quot;,&quot;Zambales&quot;],[&quot;Zamboanga Sibugay&quot;,&quot;Zamboanga Sibugay&quot;],[&quot;Zamboanga del Norte&quot;,&quot;Zamboanga del Norte&quot;],[&quot;Zamboanga del Sur&quot;,&quot;Zamboanga del Sur&quot;]]">Philippines</option>
                                            <option value="Pitcairn" data-provinces="[]">Pitcairn Islands</option>
                                            <option value="Poland" data-provinces="[]">Poland</option>
                                            <option value="Portugal" data-provinces="[[&quot;Aveiro&quot;,&quot;Aveiro&quot;],[&quot;Açores&quot;,&quot;Azores&quot;],[&quot;Beja&quot;,&quot;Beja&quot;],[&quot;Braga&quot;,&quot;Braga&quot;],[&quot;Bragança&quot;,&quot;Bragança&quot;],[&quot;Castelo Branco&quot;,&quot;Castelo Branco&quot;],[&quot;Coimbra&quot;,&quot;Coimbra&quot;],[&quot;Faro&quot;,&quot;Faro&quot;],[&quot;Guarda&quot;,&quot;Guarda&quot;],[&quot;Leiria&quot;,&quot;Leiria&quot;],[&quot;Lisboa&quot;,&quot;Lisbon&quot;],[&quot;Madeira&quot;,&quot;Madeira&quot;],[&quot;Portalegre&quot;,&quot;Portalegre&quot;],[&quot;Porto&quot;,&quot;Porto&quot;],[&quot;Santarém&quot;,&quot;Santarém&quot;],[&quot;Setúbal&quot;,&quot;Setúbal&quot;],[&quot;Viana do Castelo&quot;,&quot;Viana do Castelo&quot;],[&quot;Vila Real&quot;,&quot;Vila Real&quot;],[&quot;Viseu&quot;,&quot;Viseu&quot;],[&quot;Évora&quot;,&quot;Évora&quot;]]">Portugal</option>
                                            <option value="Qatar" data-provinces="[]">Qatar</option>
                                            <option value="Reunion" data-provinces="[]">Réunion</option>
                                            <option value="Romania" data-provinces="[[&quot;Alba&quot;,&quot;Alba&quot;],[&quot;Arad&quot;,&quot;Arad&quot;],[&quot;Argeș&quot;,&quot;Argeș&quot;],[&quot;Bacău&quot;,&quot;Bacău&quot;],[&quot;Bihor&quot;,&quot;Bihor&quot;],[&quot;Bistrița-Năsăud&quot;,&quot;Bistriţa-Năsăud&quot;],[&quot;Botoșani&quot;,&quot;Botoşani&quot;],[&quot;Brașov&quot;,&quot;Braşov&quot;],[&quot;Brăila&quot;,&quot;Brăila&quot;],[&quot;București&quot;,&quot;Bucharest&quot;],[&quot;Buzău&quot;,&quot;Buzău&quot;],[&quot;Caraș-Severin&quot;,&quot;Caraș-Severin&quot;],[&quot;Cluj&quot;,&quot;Cluj&quot;],[&quot;Constanța&quot;,&quot;Constanța&quot;],[&quot;Covasna&quot;,&quot;Covasna&quot;],[&quot;Călărași&quot;,&quot;Călărași&quot;],[&quot;Dolj&quot;,&quot;Dolj&quot;],[&quot;Dâmbovița&quot;,&quot;Dâmbovița&quot;],[&quot;Galați&quot;,&quot;Galați&quot;],[&quot;Giurgiu&quot;,&quot;Giurgiu&quot;],[&quot;Gorj&quot;,&quot;Gorj&quot;],[&quot;Harghita&quot;,&quot;Harghita&quot;],[&quot;Hunedoara&quot;,&quot;Hunedoara&quot;],[&quot;Ialomița&quot;,&quot;Ialomița&quot;],[&quot;Iași&quot;,&quot;Iași&quot;],[&quot;Ilfov&quot;,&quot;Ilfov&quot;],[&quot;Maramureș&quot;,&quot;Maramureş&quot;],[&quot;Mehedinți&quot;,&quot;Mehedinți&quot;],[&quot;Mureș&quot;,&quot;Mureş&quot;],[&quot;Neamț&quot;,&quot;Neamţ&quot;],[&quot;Olt&quot;,&quot;Olt&quot;],[&quot;Prahova&quot;,&quot;Prahova&quot;],[&quot;Satu Mare&quot;,&quot;Satu Mare&quot;],[&quot;Sibiu&quot;,&quot;Sibiu&quot;],[&quot;Suceava&quot;,&quot;Suceava&quot;],[&quot;Sălaj&quot;,&quot;Sălaj&quot;],[&quot;Teleorman&quot;,&quot;Teleorman&quot;],[&quot;Timiș&quot;,&quot;Timiș&quot;],[&quot;Tulcea&quot;,&quot;Tulcea&quot;],[&quot;Vaslui&quot;,&quot;Vaslui&quot;],[&quot;Vrancea&quot;,&quot;Vrancea&quot;],[&quot;Vâlcea&quot;,&quot;Vâlcea&quot;]]">Romania</option>
                                            <option value="Russia" data-provinces="[[&quot;Altai Krai&quot;,&quot;Altai Krai&quot;],[&quot;Altai Republic&quot;,&quot;Altai&quot;],[&quot;Amur Oblast&quot;,&quot;Amur&quot;],[&quot;Arkhangelsk Oblast&quot;,&quot;Arkhangelsk&quot;],[&quot;Astrakhan Oblast&quot;,&quot;Astrakhan&quot;],[&quot;Belgorod Oblast&quot;,&quot;Belgorod&quot;],[&quot;Bryansk Oblast&quot;,&quot;Bryansk&quot;],[&quot;Chechen Republic&quot;,&quot;Chechen&quot;],[&quot;Chelyabinsk Oblast&quot;,&quot;Chelyabinsk&quot;],[&quot;Chukotka Autonomous Okrug&quot;,&quot;Chukotka Okrug&quot;],[&quot;Chuvash Republic&quot;,&quot;Chuvash&quot;],[&quot;Irkutsk Oblast&quot;,&quot;Irkutsk&quot;],[&quot;Ivanovo Oblast&quot;,&quot;Ivanovo&quot;],[&quot;Jewish Autonomous Oblast&quot;,&quot;Jewish&quot;],[&quot;Kabardino-Balkarian Republic&quot;,&quot;Kabardino-Balkar&quot;],[&quot;Kaliningrad Oblast&quot;,&quot;Kaliningrad&quot;],[&quot;Kaluga Oblast&quot;,&quot;Kaluga&quot;],[&quot;Kamchatka Krai&quot;,&quot;Kamchatka Krai&quot;],[&quot;Karachay–Cherkess Republic&quot;,&quot;Karachay-Cherkess&quot;],[&quot;Kemerovo Oblast&quot;,&quot;Kemerovo&quot;],[&quot;Khabarovsk Krai&quot;,&quot;Khabarovsk Krai&quot;],[&quot;Khanty-Mansi Autonomous Okrug&quot;,&quot;Khanty-Mansi&quot;],[&quot;Kirov Oblast&quot;,&quot;Kirov&quot;],[&quot;Komi Republic&quot;,&quot;Komi&quot;],[&quot;Kostroma Oblast&quot;,&quot;Kostroma&quot;],[&quot;Krasnodar Krai&quot;,&quot;Krasnodar Krai&quot;],[&quot;Krasnoyarsk Krai&quot;,&quot;Krasnoyarsk Krai&quot;],[&quot;Kurgan Oblast&quot;,&quot;Kurgan&quot;],[&quot;Kursk Oblast&quot;,&quot;Kursk&quot;],[&quot;Leningrad Oblast&quot;,&quot;Leningrad&quot;],[&quot;Lipetsk Oblast&quot;,&quot;Lipetsk&quot;],[&quot;Magadan Oblast&quot;,&quot;Magadan&quot;],[&quot;Mari El Republic&quot;,&quot;Mari El&quot;],[&quot;Moscow&quot;,&quot;Moscow&quot;],[&quot;Moscow Oblast&quot;,&quot;Moscow Province&quot;],[&quot;Murmansk Oblast&quot;,&quot;Murmansk&quot;],[&quot;Nizhny Novgorod Oblast&quot;,&quot;Nizhny Novgorod&quot;],[&quot;Novgorod Oblast&quot;,&quot;Novgorod&quot;],[&quot;Novosibirsk Oblast&quot;,&quot;Novosibirsk&quot;],[&quot;Omsk Oblast&quot;,&quot;Omsk&quot;],[&quot;Orenburg Oblast&quot;,&quot;Orenburg&quot;],[&quot;Oryol Oblast&quot;,&quot;Oryol&quot;],[&quot;Penza Oblast&quot;,&quot;Penza&quot;],[&quot;Perm Krai&quot;,&quot;Perm Krai&quot;],[&quot;Primorsky Krai&quot;,&quot;Primorsky Krai&quot;],[&quot;Pskov Oblast&quot;,&quot;Pskov&quot;],[&quot;Republic of Adygeya&quot;,&quot;Adygea&quot;],[&quot;Republic of Bashkortostan&quot;,&quot;Bashkortostan&quot;],[&quot;Republic of Buryatia&quot;,&quot;Buryat&quot;],[&quot;Republic of Dagestan&quot;,&quot;Dagestan&quot;],[&quot;Republic of Ingushetia&quot;,&quot;Ingushetia&quot;],[&quot;Republic of Kalmykia&quot;,&quot;Kalmykia&quot;],[&quot;Republic of Karelia&quot;,&quot;Karelia&quot;],[&quot;Republic of Khakassia&quot;,&quot;Khakassia&quot;],[&quot;Republic of Mordovia&quot;,&quot;Mordovia&quot;],[&quot;Republic of North Ossetia–Alania&quot;,&quot;North Ossetia-Alania&quot;],[&quot;Republic of Tatarstan&quot;,&quot;Tatarstan&quot;],[&quot;Rostov Oblast&quot;,&quot;Rostov&quot;],[&quot;Ryazan Oblast&quot;,&quot;Ryazan&quot;],[&quot;Saint Petersburg&quot;,&quot;Saint Petersburg&quot;],[&quot;Sakha Republic (Yakutia)&quot;,&quot;Sakha&quot;],[&quot;Sakhalin Oblast&quot;,&quot;Sakhalin&quot;],[&quot;Samara Oblast&quot;,&quot;Samara&quot;],[&quot;Saratov Oblast&quot;,&quot;Saratov&quot;],[&quot;Smolensk Oblast&quot;,&quot;Smolensk&quot;],[&quot;Stavropol Krai&quot;,&quot;Stavropol Krai&quot;],[&quot;Sverdlovsk Oblast&quot;,&quot;Sverdlovsk&quot;],[&quot;Tambov Oblast&quot;,&quot;Tambov&quot;],[&quot;Tomsk Oblast&quot;,&quot;Tomsk&quot;],[&quot;Tula Oblast&quot;,&quot;Tula&quot;],[&quot;Tver Oblast&quot;,&quot;Tver&quot;],[&quot;Tyumen Oblast&quot;,&quot;Tyumen&quot;],[&quot;Tyva Republic&quot;,&quot;Tuva&quot;],[&quot;Udmurtia&quot;,&quot;Udmurt&quot;],[&quot;Ulyanovsk Oblast&quot;,&quot;Ulyanovsk&quot;],[&quot;Vladimir Oblast&quot;,&quot;Vladimir&quot;],[&quot;Volgograd Oblast&quot;,&quot;Volgograd&quot;],[&quot;Vologda Oblast&quot;,&quot;Vologda&quot;],[&quot;Voronezh Oblast&quot;,&quot;Voronezh&quot;],[&quot;Yamalo-Nenets Autonomous Okrug&quot;,&quot;Yamalo-Nenets Okrug&quot;],[&quot;Yaroslavl Oblast&quot;,&quot;Yaroslavl&quot;],[&quot;Zabaykalsky Krai&quot;,&quot;Zabaykalsky Krai&quot;]]">Russia</option>
                                            <option value="Rwanda" data-provinces="[]">Rwanda</option>
                                            <option value="Samoa" data-provinces="[]">Samoa</option>
                                            <option value="San Marino" data-provinces="[]">San Marino</option>
                                            <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                            <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                            <option value="Senegal" data-provinces="[]">Senegal</option>
                                            <option value="Serbia" data-provinces="[]">Serbia</option>
                                            <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                            <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                            <option value="Singapore" data-provinces="[]">Singapore</option>
                                            <option value="Sint Maarten" data-provinces="[]">Sint Maarten</option>
                                            <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                            <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                            <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                            <option value="Somalia" data-provinces="[]">Somalia</option>
                                            <option value="South Africa" data-provinces="[[&quot;Eastern Cape&quot;,&quot;Eastern Cape&quot;],[&quot;Free State&quot;,&quot;Free State&quot;],[&quot;Gauteng&quot;,&quot;Gauteng&quot;],[&quot;KwaZulu-Natal&quot;,&quot;KwaZulu-Natal&quot;],[&quot;Limpopo&quot;,&quot;Limpopo&quot;],[&quot;Mpumalanga&quot;,&quot;Mpumalanga&quot;],[&quot;North West&quot;,&quot;North West&quot;],[&quot;Northern Cape&quot;,&quot;Northern Cape&quot;],[&quot;Western Cape&quot;,&quot;Western Cape&quot;]]">South Africa</option>
                                            <option value="South Georgia And The South Sandwich Islands" data-provinces="[]">South Georgia &amp; South Sandwich Islands</option>
                                            <option value="South Korea" data-provinces="[[&quot;Busan&quot;,&quot;Busan&quot;],[&quot;Chungbuk&quot;,&quot;North Chungcheong&quot;],[&quot;Chungnam&quot;,&quot;South Chungcheong&quot;],[&quot;Daegu&quot;,&quot;Daegu&quot;],[&quot;Daejeon&quot;,&quot;Daejeon&quot;],[&quot;Gangwon&quot;,&quot;Gangwon&quot;],[&quot;Gwangju&quot;,&quot;Gwangju City&quot;],[&quot;Gyeongbuk&quot;,&quot;North Gyeongsang&quot;],[&quot;Gyeonggi&quot;,&quot;Gyeonggi&quot;],[&quot;Gyeongnam&quot;,&quot;South Gyeongsang&quot;],[&quot;Incheon&quot;,&quot;Incheon&quot;],[&quot;Jeju&quot;,&quot;Jeju&quot;],[&quot;Jeonbuk&quot;,&quot;North Jeolla&quot;],[&quot;Jeonnam&quot;,&quot;South Jeolla&quot;],[&quot;Sejong&quot;,&quot;Sejong&quot;],[&quot;Seoul&quot;,&quot;Seoul&quot;],[&quot;Ulsan&quot;,&quot;Ulsan&quot;]]">South Korea</option>
                                            <option value="South Sudan" data-provinces="[]">South Sudan</option>
                                            <option value="Spain" data-provinces="[[&quot;A Coruña&quot;,&quot;A Coruña&quot;],[&quot;Albacete&quot;,&quot;Albacete&quot;],[&quot;Alicante&quot;,&quot;Alicante&quot;],[&quot;Almería&quot;,&quot;Almería&quot;],[&quot;Asturias&quot;,&quot;Asturias Province&quot;],[&quot;Badajoz&quot;,&quot;Badajoz&quot;],[&quot;Balears&quot;,&quot;Balears Province&quot;],[&quot;Barcelona&quot;,&quot;Barcelona&quot;],[&quot;Burgos&quot;,&quot;Burgos&quot;],[&quot;Cantabria&quot;,&quot;Cantabria Province&quot;],[&quot;Castellón&quot;,&quot;Castellón&quot;],[&quot;Ceuta&quot;,&quot;Ceuta&quot;],[&quot;Ciudad Real&quot;,&quot;Ciudad Real&quot;],[&quot;Cuenca&quot;,&quot;Cuenca&quot;],[&quot;Cáceres&quot;,&quot;Cáceres&quot;],[&quot;Cádiz&quot;,&quot;Cádiz&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Girona&quot;,&quot;Girona&quot;],[&quot;Granada&quot;,&quot;Granada&quot;],[&quot;Guadalajara&quot;,&quot;Guadalajara&quot;],[&quot;Guipúzcoa&quot;,&quot;Gipuzkoa&quot;],[&quot;Huelva&quot;,&quot;Huelva&quot;],[&quot;Huesca&quot;,&quot;Huesca&quot;],[&quot;Jaén&quot;,&quot;Jaén&quot;],[&quot;La Rioja&quot;,&quot;La Rioja Province&quot;],[&quot;Las Palmas&quot;,&quot;Las Palmas&quot;],[&quot;León&quot;,&quot;León&quot;],[&quot;Lleida&quot;,&quot;Lleida&quot;],[&quot;Lugo&quot;,&quot;Lugo&quot;],[&quot;Madrid&quot;,&quot;Madrid Province&quot;],[&quot;Melilla&quot;,&quot;Melilla&quot;],[&quot;Murcia&quot;,&quot;Murcia&quot;],[&quot;Málaga&quot;,&quot;Málaga&quot;],[&quot;Navarra&quot;,&quot;Navarra&quot;],[&quot;Ourense&quot;,&quot;Ourense&quot;],[&quot;Palencia&quot;,&quot;Palencia&quot;],[&quot;Pontevedra&quot;,&quot;Pontevedra&quot;],[&quot;Salamanca&quot;,&quot;Salamanca&quot;],[&quot;Santa Cruz de Tenerife&quot;,&quot;Santa Cruz de Tenerife&quot;],[&quot;Segovia&quot;,&quot;Segovia&quot;],[&quot;Sevilla&quot;,&quot;Seville&quot;],[&quot;Soria&quot;,&quot;Soria&quot;],[&quot;Tarragona&quot;,&quot;Tarragona&quot;],[&quot;Teruel&quot;,&quot;Teruel&quot;],[&quot;Toledo&quot;,&quot;Toledo&quot;],[&quot;Valencia&quot;,&quot;Valencia&quot;],[&quot;Valladolid&quot;,&quot;Valladolid&quot;],[&quot;Vizcaya&quot;,&quot;Biscay&quot;],[&quot;Zamora&quot;,&quot;Zamora&quot;],[&quot;Zaragoza&quot;,&quot;Zaragoza&quot;],[&quot;Álava&quot;,&quot;Álava&quot;],[&quot;Ávila&quot;,&quot;Ávila&quot;]]">Spain</option>
                                            <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                            <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                            <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                            <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                            <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                            <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                            <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                            <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                            <option value="Sudan" data-provinces="[]">Sudan</option>
                                            <option value="Suriname" data-provinces="[]">Suriname</option>
                                            <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                            <option value="Sweden" data-provinces="[]">Sweden</option>
                                            <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                            <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                            <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                            <option value="Tanzania, United Republic Of" data-provinces="[]">Tanzania</option>
                                            <option value="Thailand" data-provinces="[[&quot;Amnat Charoen&quot;,&quot;Amnat Charoen&quot;],[&quot;Ang Thong&quot;,&quot;Ang Thong&quot;],[&quot;Bangkok&quot;,&quot;Bangkok&quot;],[&quot;Bueng Kan&quot;,&quot;Bueng Kan&quot;],[&quot;Buriram&quot;,&quot;Buri Ram&quot;],[&quot;Chachoengsao&quot;,&quot;Chachoengsao&quot;],[&quot;Chai Nat&quot;,&quot;Chai Nat&quot;],[&quot;Chaiyaphum&quot;,&quot;Chaiyaphum&quot;],[&quot;Chanthaburi&quot;,&quot;Chanthaburi&quot;],[&quot;Chiang Mai&quot;,&quot;Chiang Mai&quot;],[&quot;Chiang Rai&quot;,&quot;Chiang Rai&quot;],[&quot;Chon Buri&quot;,&quot;Chon Buri&quot;],[&quot;Chumphon&quot;,&quot;Chumphon&quot;],[&quot;Kalasin&quot;,&quot;Kalasin&quot;],[&quot;Kamphaeng Phet&quot;,&quot;Kamphaeng Phet&quot;],[&quot;Kanchanaburi&quot;,&quot;Kanchanaburi&quot;],[&quot;Khon Kaen&quot;,&quot;Khon Kaen&quot;],[&quot;Krabi&quot;,&quot;Krabi&quot;],[&quot;Lampang&quot;,&quot;Lampang&quot;],[&quot;Lamphun&quot;,&quot;Lamphun&quot;],[&quot;Loei&quot;,&quot;Loei&quot;],[&quot;Lopburi&quot;,&quot;Lopburi&quot;],[&quot;Mae Hong Son&quot;,&quot;Mae Hong Son&quot;],[&quot;Maha Sarakham&quot;,&quot;Maha Sarakham&quot;],[&quot;Mukdahan&quot;,&quot;Mukdahan&quot;],[&quot;Nakhon Nayok&quot;,&quot;Nakhon Nayok&quot;],[&quot;Nakhon Pathom&quot;,&quot;Nakhon Pathom&quot;],[&quot;Nakhon Phanom&quot;,&quot;Nakhon Phanom&quot;],[&quot;Nakhon Ratchasima&quot;,&quot;Nakhon Ratchasima&quot;],[&quot;Nakhon Sawan&quot;,&quot;Nakhon Sawan&quot;],[&quot;Nakhon Si Thammarat&quot;,&quot;Nakhon Si Thammarat&quot;],[&quot;Nan&quot;,&quot;Nan&quot;],[&quot;Narathiwat&quot;,&quot;Narathiwat&quot;],[&quot;Nong Bua Lam Phu&quot;,&quot;Nong Bua Lam Phu&quot;],[&quot;Nong Khai&quot;,&quot;Nong Khai&quot;],[&quot;Nonthaburi&quot;,&quot;Nonthaburi&quot;],[&quot;Pathum Thani&quot;,&quot;Pathum Thani&quot;],[&quot;Pattani&quot;,&quot;Pattani&quot;],[&quot;Pattaya&quot;,&quot;Pattaya&quot;],[&quot;Phangnga&quot;,&quot;Phang Nga&quot;],[&quot;Phatthalung&quot;,&quot;Phatthalung&quot;],[&quot;Phayao&quot;,&quot;Phayao&quot;],[&quot;Phetchabun&quot;,&quot;Phetchabun&quot;],[&quot;Phetchaburi&quot;,&quot;Phetchaburi&quot;],[&quot;Phichit&quot;,&quot;Phichit&quot;],[&quot;Phitsanulok&quot;,&quot;Phitsanulok&quot;],[&quot;Phra Nakhon Si Ayutthaya&quot;,&quot;Phra Nakhon Si Ayutthaya&quot;],[&quot;Phrae&quot;,&quot;Phrae&quot;],[&quot;Phuket&quot;,&quot;Phuket&quot;],[&quot;Prachin Buri&quot;,&quot;Prachin Buri&quot;],[&quot;Prachuap Khiri Khan&quot;,&quot;Prachuap Khiri Khan&quot;],[&quot;Ranong&quot;,&quot;Ranong&quot;],[&quot;Ratchaburi&quot;,&quot;Ratchaburi&quot;],[&quot;Rayong&quot;,&quot;Rayong&quot;],[&quot;Roi Et&quot;,&quot;Roi Et&quot;],[&quot;Sa Kaeo&quot;,&quot;Sa Kaeo&quot;],[&quot;Sakon Nakhon&quot;,&quot;Sakon Nakhon&quot;],[&quot;Samut Prakan&quot;,&quot;Samut Prakan&quot;],[&quot;Samut Sakhon&quot;,&quot;Samut Sakhon&quot;],[&quot;Samut Songkhram&quot;,&quot;Samut Songkhram&quot;],[&quot;Saraburi&quot;,&quot;Saraburi&quot;],[&quot;Satun&quot;,&quot;Satun&quot;],[&quot;Sing Buri&quot;,&quot;Sing Buri&quot;],[&quot;Sisaket&quot;,&quot;Si Sa Ket&quot;],[&quot;Songkhla&quot;,&quot;Songkhla&quot;],[&quot;Sukhothai&quot;,&quot;Sukhothai&quot;],[&quot;Suphan Buri&quot;,&quot;Suphanburi&quot;],[&quot;Surat Thani&quot;,&quot;Surat Thani&quot;],[&quot;Surin&quot;,&quot;Surin&quot;],[&quot;Tak&quot;,&quot;Tak&quot;],[&quot;Trang&quot;,&quot;Trang&quot;],[&quot;Trat&quot;,&quot;Trat&quot;],[&quot;Ubon Ratchathani&quot;,&quot;Ubon Ratchathani&quot;],[&quot;Udon Thani&quot;,&quot;Udon Thani&quot;],[&quot;Uthai Thani&quot;,&quot;Uthai Thani&quot;],[&quot;Uttaradit&quot;,&quot;Uttaradit&quot;],[&quot;Yala&quot;,&quot;Yala&quot;],[&quot;Yasothon&quot;,&quot;Yasothon&quot;]]">Thailand</option>
                                            <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                            <option value="Togo" data-provinces="[]">Togo</option>
                                            <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                            <option value="Tonga" data-provinces="[]">Tonga</option>
                                            <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                            <option value="Tristan da Cunha" data-provinces="[]">Tristan da Cunha</option>
                                            <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                            <option value="Turkey" data-provinces="[]">Turkey</option>
                                            <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                            <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                            <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                            <option value="Uganda" data-provinces="[]">Uganda</option>
                                            <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                            <option value="United Arab Emirates" data-provinces="[[&quot;Abu Dhabi&quot;,&quot;Abu Dhabi&quot;],[&quot;Ajman&quot;,&quot;Ajman&quot;],[&quot;Dubai&quot;,&quot;Dubai&quot;],[&quot;Fujairah&quot;,&quot;Fujairah&quot;],[&quot;Ras al-Khaimah&quot;,&quot;Ras al-Khaimah&quot;],[&quot;Sharjah&quot;,&quot;Sharjah&quot;],[&quot;Umm al-Quwain&quot;,&quot;Umm al-Quwain&quot;]]">United Arab Emirates</option>
                                            <option value="United Kingdom" data-provinces="[[&quot;British Forces&quot;,&quot;British Forces&quot;],[&quot;England&quot;,&quot;England&quot;],[&quot;Northern Ireland&quot;,&quot;Northern Ireland&quot;],[&quot;Scotland&quot;,&quot;Scotland&quot;],[&quot;Wales&quot;,&quot;Wales&quot;]]">United Kingdom</option>
                                            <option value="United States" data-provinces="[[&quot;Alabama&quot;,&quot;Alabama&quot;],[&quot;Alaska&quot;,&quot;Alaska&quot;],[&quot;American Samoa&quot;,&quot;American Samoa&quot;],[&quot;Arizona&quot;,&quot;Arizona&quot;],[&quot;Arkansas&quot;,&quot;Arkansas&quot;],[&quot;Armed Forces Americas&quot;,&quot;Armed Forces Americas&quot;],[&quot;Armed Forces Europe&quot;,&quot;Armed Forces Europe&quot;],[&quot;Armed Forces Pacific&quot;,&quot;Armed Forces Pacific&quot;],[&quot;California&quot;,&quot;California&quot;],[&quot;Colorado&quot;,&quot;Colorado&quot;],[&quot;Connecticut&quot;,&quot;Connecticut&quot;],[&quot;Delaware&quot;,&quot;Delaware&quot;],[&quot;District of Columbia&quot;,&quot;Washington DC&quot;],[&quot;Federated States of Micronesia&quot;,&quot;Micronesia&quot;],[&quot;Florida&quot;,&quot;Florida&quot;],[&quot;Georgia&quot;,&quot;Georgia&quot;],[&quot;Guam&quot;,&quot;Guam&quot;],[&quot;Hawaii&quot;,&quot;Hawaii&quot;],[&quot;Idaho&quot;,&quot;Idaho&quot;],[&quot;Illinois&quot;,&quot;Illinois&quot;],[&quot;Indiana&quot;,&quot;Indiana&quot;],[&quot;Iowa&quot;,&quot;Iowa&quot;],[&quot;Kansas&quot;,&quot;Kansas&quot;],[&quot;Kentucky&quot;,&quot;Kentucky&quot;],[&quot;Louisiana&quot;,&quot;Louisiana&quot;],[&quot;Maine&quot;,&quot;Maine&quot;],[&quot;Marshall Islands&quot;,&quot;Marshall Islands&quot;],[&quot;Maryland&quot;,&quot;Maryland&quot;],[&quot;Massachusetts&quot;,&quot;Massachusetts&quot;],[&quot;Michigan&quot;,&quot;Michigan&quot;],[&quot;Minnesota&quot;,&quot;Minnesota&quot;],[&quot;Mississippi&quot;,&quot;Mississippi&quot;],[&quot;Missouri&quot;,&quot;Missouri&quot;],[&quot;Montana&quot;,&quot;Montana&quot;],[&quot;Nebraska&quot;,&quot;Nebraska&quot;],[&quot;Nevada&quot;,&quot;Nevada&quot;],[&quot;New Hampshire&quot;,&quot;New Hampshire&quot;],[&quot;New Jersey&quot;,&quot;New Jersey&quot;],[&quot;New Mexico&quot;,&quot;New Mexico&quot;],[&quot;New York&quot;,&quot;New York&quot;],[&quot;North Carolina&quot;,&quot;North Carolina&quot;],[&quot;North Dakota&quot;,&quot;North Dakota&quot;],[&quot;Northern Mariana Islands&quot;,&quot;Northern Mariana Islands&quot;],[&quot;Ohio&quot;,&quot;Ohio&quot;],[&quot;Oklahoma&quot;,&quot;Oklahoma&quot;],[&quot;Oregon&quot;,&quot;Oregon&quot;],[&quot;Palau&quot;,&quot;Palau&quot;],[&quot;Pennsylvania&quot;,&quot;Pennsylvania&quot;],[&quot;Puerto Rico&quot;,&quot;Puerto Rico&quot;],[&quot;Rhode Island&quot;,&quot;Rhode Island&quot;],[&quot;South Carolina&quot;,&quot;South Carolina&quot;],[&quot;South Dakota&quot;,&quot;South Dakota&quot;],[&quot;Tennessee&quot;,&quot;Tennessee&quot;],[&quot;Texas&quot;,&quot;Texas&quot;],[&quot;Utah&quot;,&quot;Utah&quot;],[&quot;Vermont&quot;,&quot;Vermont&quot;],[&quot;Virgin Islands&quot;,&quot;U.S. Virgin Islands&quot;],[&quot;Virginia&quot;,&quot;Virginia&quot;],[&quot;Washington&quot;,&quot;Washington&quot;],[&quot;West Virginia&quot;,&quot;West Virginia&quot;],[&quot;Wisconsin&quot;,&quot;Wisconsin&quot;],[&quot;Wyoming&quot;,&quot;Wyoming&quot;]]">United States</option>
                                            <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                            <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                            <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                            <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                            <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                            <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                            <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                            <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                            <option value="Yemen" data-provinces="[]">Yemen</option>
                                            <option value="Zambia" data-provinces="[]">Zambia</option>
                                            <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option>
                                        </select>
                                    </p>
                                    <p class="field" id="address_province_container" style="">
                                        <label for="address_province" id="address_province_label">State</label>
                                        <select id="address_province" name="address[province]" data-default="" tabindex="0" class="" aria-hidden="false">
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="Armed Forces Americas">Armed Forces Americas</option>
                                            <option value="Armed Forces Europe">Armed Forces Europe</option>
                                            <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="District of Columbia">Washington DC</option>
                                            <option value="Federated States of Micronesia">Micronesia</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virgin Islands">U.S. Virgin Islands</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                    </p>
                                    <p class="field">
                                        <label for="address_zip">Zip/Postal Code</label>
                                        <input type="text" id="address_zip" name="address[zip]">
                                    </p>
                                    <p class="field">
                                        <input type="button" class="get-rates btn button" value="Calculate shipping">
                                    </p>
                                </div>
                                <div id="wrapper-response"></div>
                            </div>


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
        const json = localStorage.getItem('cart');
        let cart = JSON.parse(json);
        const cartItems = document.querySelector(".cart__items .items_cart");
        let html = cart.map(item =>
            `
        <div class="cart__row" data-product-id="${item.product_id}">
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
                                    <strong>Đơn giá: <span class="money unit">${(+item.price).toLocaleString('vi-VI')}</span></strong> VNĐ
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
        `).join("");
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
                const price = item.querySelector(".money").textContent.trim().split(".").join("");
                const image = item.querySelector("img").getAttribute("src");
                const total = +price * quantity;
                return {
                    product_id,
                    name,
                    category_name,
                    author,
                    quantity,
                    price,
                    image,
                    total
                }
            })
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
    </script>
</div>
<?= $this->endSection() ?>