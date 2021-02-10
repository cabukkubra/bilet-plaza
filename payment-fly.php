<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body>

    <?php include("inc/header2.php"); ?>


    <div class="container mobile-container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="search-ticket.php">Bilet Seçenekleri</a></li>
            <li class="breadcrumb-item active" aria-current="page">Yolcu Detayları ve Ödeme</li>
        </ol>
    </nav>


    <div class="row clearfix payment">
        <div class="col-lg-5">
            <div class="white-box box-shadow-50 mb-4 p-4 radius5">
                <div class="box-sefer box-fly">
                    <div class="title-payment blue-text text-center">UÇUŞ BİLGİLERİ</div>


                    <div class="fly-acent clearfix">
                        <span><i class="fas fa-plane-departure"></i> Gidiş Bilgileri</span>
                        <img src="assets/img/airlane/thy.png" alt="Türk Hava Yolları Logo">
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0" class="blue-text mt-4 mb-4">
                     <tr>
                        <td>
                           <span class="bx-sefer-move color-orange bold">İST (SAW)</span>
                           <span class="bx-sefer-time">03:45</span>
                           <span class="bx-sefer-date">22.11.2019</span>
                       </td>
                       <td>
                           <i class="fas fa-angle-right" style="font-size: 30px; color: #3D517D;"></i>
                       </td>
                       <td>
                           <span class="bx-sefer-move color-orange bold">Ankara (ESB)</span>
                           <span class="bx-sefer-time">06:45</span>
                           <span class="bx-sefer-date">22.11.2019</span>
                       </td>
                       <td>
                           <i class="fas fa-angle-right" style="font-size: 30px; color: #3D517D;"></i>
                       </td>
                       <td>
                           <span class="bx-sefer-move color-orange bold">Antalya</span>
                           <span class="bx-sefer-time">06:45</span>
                           <span class="bx-sefer-date">22.11.2019</span>
                       </td>
                    </tr>
                    </table>

                    <div class="fly-acent clearfix">
                        <span><i class="fas fa-plane-arrival"></i> Dönüş Bilgileri</span>
                        <img src="assets/img/airlane/thy.png" alt="Türk Hava Yolları Logo">
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0" class="blue-text mt-4 mb-4">
                     <tr>
                        <td>
                           <span class="bx-sefer-move color-orange bold">İST (SAW)</span>
                           <span class="bx-sefer-time">03:45</span>
                           <span class="bx-sefer-date">22.11.2019</span>
                       </td>
                       <td>
                           <i class="fas fa-angle-right" style="font-size: 30px; color: #3D517D;"></i>
                       </td>
                       <td>
                           <span class="bx-sefer-move color-orange bold">Ankara (ESB)</span>
                           <span class="bx-sefer-time">06:45</span>
                           <span class="bx-sefer-date">22.11.2019</span>
                       </td>

                    </tr>
                    </table>


                </div>

                <div class="title-payment blue-text">İLETİŞİM BİLGİLERİ</div>
                <input type="text" class="form-control" placeholder="E-Posta Adresiniz">
                <input type="text" class="form-control" placeholder="GSM (5XX) xxx xxxx">
                <p class="color-orange">Bilet bilgileriniz SMS ile gönderilecektir.</p>
                <ul class="attation_text">
                  <li>** Yurt içi GSM operatörlerine ait olan cep telefonu numaranızı boşluksuz olarak, başında ülke kodunu seçerek 5xxxxxxxxx şeklinde giriniz.</li>
                  <li>** Yurt dışı GSM operatörlerine ait olan cep telefonu numaranızı boşluksuz olarak, başında ülke kodunu seçerek 5xxxxxxxxx şeklinde giriniz.</li>
                </ul>


                <div id="accordion">
                    <div class="panel checkout-step">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="pessenger-stats-box">
                            1.Yolcu Bilgiler
                            <em><i class="fas fa-chevron-down"></i></em>
                        </div>
                        <div id="collapseOne" class="collapse in show">
                            <form action="#" style="margin:15px;">
                                <input type="checkbox" id="birinciyolcu" />
                                <label for="birinciyolcu">T.C Vatandaşı Değilim</label>
                            </form>
                            <input type="text" class="form-control" placeholder="Yolcu Adı ve Soyadı">
                            <input type="text" class="form-control" placeholder="T.C Kimlik No">
                            <input type="text" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                    </div>

                    <div class="panel checkout-step">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="pessenger-stats-box women">
                            2.Yolcu Bilgiler
                            <em><i class="fas fa-chevron-down"></i></em>
                        </div>
                        <div id="collapseTwo" class="collapse">
                            <form action="#" style="margin:15px;">
                                <input type="checkbox" id="ikinciyolcu" />
                                <label for="ikinciyolcu">T.C Vatandaşı Değilim</label>
                            </form>
                            <input type="text" class="form-control" placeholder="Yolcu Adı ve Soyadı">
                            <input type="text" class="form-control" placeholder="T.C Kimlik No">
                            <input type="text" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                    </div>

                    <div class="panel checkout-step">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="pessenger-stats-box women">
                            3.Yolcu Bilgiler
                            <em><i class="fas fa-chevron-down"></i></em>
                        </div>
                        <div id="collapseThree" class="collapse">
                            <form action="#" style="margin:15px;">
                                <input type="checkbox" id="ikinciyolcu" />
                                <label for="ikinciyolcu">T.C Vatandaşı Değilim</label>
                            </form>
                            <input type="text" class="form-control" placeholder="Yolcu Adı ve Soyadı">
                            <input type="text" class="form-control" placeholder="T.C Kimlik No">
                            <input type="text" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                    </div>

                    <div class="panel checkout-step">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="pessenger-stats-box women">
                            4.Yolcu Bilgiler
                            <em><i class="fas fa-chevron-down"></i></em>
                        </div>
                        <div id="collapseFour" class="collapse">
                            <form action="#" style="margin:15px;">
                                <input type="checkbox" id="ikinciyolcu" />
                                <label for="ikinciyolcu">T.C Vatandaşı Değilim</label>
                            </form>
                            <input type="text" class="form-control" placeholder="Yolcu Adı ve Soyadı">
                            <input type="text" class="form-control" placeholder="T.C Kimlik No">
                            <input type="text" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

        <div class="col-lg-7">

            <div class="white-box p20 mb-4 radius5">
                <div class="title-payment blue-text mr-4 text-center">ÜCRET BİLGİLERİ</div>
                <ul class="fly-payment-box clearfix">
                    <li>
                        <span>2 Yetişkin</span>
                        <p>Fiyat  : <strong>2000₺</strong></p>
                        <p>Vergi/Yakıt : <strong>135.98₺</strong></p>
                        <p>Hizmet Bedeli : <strong>135.98₺</strong></p>
                        <p>Tutar : <strong>2000₺</strong></p>
                    </li>
                    <li>
                        <span>1 Çocuk</span>
                        <p>Fiyat  : <strong>2000₺</strong></p>
                        <p>Vergi/Yakıt : <strong>135.98₺</strong></p>
                        <p>Hizmet Bedeli : <strong>135.98₺</strong></p>
                        <p>Tutar : <strong>2000₺</strong></p>
                    </li>
                    <li>
                        <span>1 Bebek</span>
                        <p>Fiyat  : <strong>2000₺</strong></p>
                        <p>Vergi/Yakıt : <strong>135.98₺</strong></p>
                        <p>Hizmet Bedeli : <strong>135.98₺</strong></p>
                        <p>Tutar : <strong>2000₺</strong></p>
                    </li>
                </ul>

                <div class="fly-total-price">Toplam Tutar:  <span> 3.589₺</span></div>
            </div>

            <div class="title-payment blue-text mr-4">ÖDEME BİLGİLERİ</div>
            <div class="title-card radius-tr-tl-5">Kredi Kartı İle Ödeme</div>              
            <div class="white-box creditcard-box mb-4 clearfix radius-br-bl-5">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="input-box">
                            <span>Kart Üzerindeki İsim</span>
                            <input class="custom-card-label-input kart-customer-name2" id="name" maxlength="40" type="text">
                        </div>
                        <div class="input-box">
                            <span>Kredi Kartı Numarası</span>
                            <span id="generatecard" style="display:none;">generate random</span>
                            <input class="custom-card-label-input" id="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric">
                            <input class="custom-card-label-input" id="iscardnumber" type="hidden" value="False">
                            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                        </svg>
                    </div>
                    <div class="row">
                        <div class="input-box col-md-6">
                            <span>Ay / Yıl</span>
                            <input class="custom-card-label-input" id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric" />
                        </div>
                        <div class="input-box col-md-6">
                            <span>CVC</span>
                            <input class="custom-card-label-input" maxlength="3" id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="custom-card-container preload">
                            <div class="creditcard">
                                        <div class="front">
                                            <div id="ccsingle"></div>
                                            <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                            <g id="Front">
                                                <g id="CardBackground">
                                                    <g id="Page-1_1_">
                                                        <g id="amex_1_">
                                                            <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                            C0,17.9,17.9,0,40,0z" />
                                                        </g>
                                                    </g>
                                                    <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                                </g>
                                                <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">000 0000 0000 0000</text>
                                                <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">****</text>
                                                <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8"><!-- cardholder name --></text>
                                                <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8"><!-- expiration --></text>
                                                <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8"><!-- card number --></text>
                                                <g>
                                                    <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                                    <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">Ay</text>
                                                    <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">Yıl</text>
                                                    <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9" />
                                                </g>
                                                <g id="cchip">
                                                    <g>
                                                        <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                        </g>
                                                        <g>
                                                            <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                        </g>
                                                        <g>
                                                            <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                        </g>
                                                        <g>
                                                            <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                        </g>
                                                        <g>
                                                            <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                        </g>
                                                        <g>
                                                            <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                        </g>
                                                        <g>
                                                            <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Back">
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="back">
                                        <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                        <g id="Front">
                                            <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                        </g>
                                        <g id="Back">
                                            <g id="Page-1_2_">
                                                <g id="amex_2_">
                                                    <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                    C0,17.9,17.9,0,40,0z" />
                                                </g>
                                            </g>
                                            <rect y="61.6" class="st2" width="750" height="78" />

                                            <g>
                                                <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5 C707.1,246.4,704.4,249.1,701.1,249.1z" />

                                                <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />

                                                <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />

                                                <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                            </g>
                                            <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7"><!-- 985 --></text>
                                            <g class="st8">
                                                <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10"><!-- security code --></text>
                                            </g>
                                            <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />

                                            <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />

                                            <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13"><!-- John Doe --></text>
                                        </g>
                                        </svg>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--<div class="card-total-price clearfix">
                    <div class="fl"><span>ÖDENECEK TUTAR</span></div>
                    <div class="fr">4 KİŞİ: <em>150₺</em></div>
                </div>-->

                <form action="#" style="margin:15px 0;">
                    <input type="checkbox" id="biletiade">
                    <label for="biletiade">Bilet iade hakkı istiyorum</label>
                </form>

                <form action="#" style="margin:15px 0;">
                    <input type="checkbox" id="satissözlesmesi">
                    <label for="satissözlesmesi">Satış Sözleşmesi'ni okudum ve kabul ediyorum</label>
                </form>

                <form action="#" style="margin:15px 0;">
                    <input type="checkbox" id="kampanya">
                    <label for="kampanya">Kampanyalardan haberdar olmak istiyorum</label>
                </form>

                <a class="button_safe_price mb-4" href="">
                    <h6 class="fl w100">170 TL</h6>
                    <h6>GÜVENLİ ÖDEME YAP</h6>
                </a>
                <span>256 Bit Şifreleme ile Kredi Kartınızla Güvenli Ödeme Yapabilirsiniz.</span>

                <img class="comodo-ssl" src="assets/img/comodo-logo.svg" alt="Comodo Sertifika">
            </div>
        </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>

<?php include("inc/js.php"); ?>
<script src="assets/kkartlibs/imask.min.js"></script>
<script src='assets/kkartlibs/custom.cart.libs.js'></script>
<script src='assets/kkartlibs/card.js'></script>

</body>
</html>