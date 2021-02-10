<!DOCTYPE html>
<html lang="tr">
<head>
	<?php include("inc/head.php"); ?>
</head>
<body>

    <!--hesabımla ilgili sayfalardayken oturum açıldıysa hesabım divleri entegre edilecek --> 
    <?php include("inc/header3.php"); ?>

    <div class="col-md-12 p-0 banner-fluid">
        <div class="container">
            <h2 class="position-absolute account-banner-slogan">Merhaba, <strong> Nagihan </strong></h2>
        </div>
        <picture>
            <source srcset="assets/img/account-banner-mobil.jpg" class="w100" media="(max-width: 767px)">
            <source srcset="assets/img/account-banner.jpg" class="w100">
            <img src="assets/img/account-banner.jpg" class="w100" alt="Biletplaza Slider">
        </picture>
    </div>
    
    <div class="col-md-12 fl mt-3 p-0">

        <div class="container">

            <?php include("inc/account-left.php");?>

            <div class="col-md-8 fr mb-4 account-right">
                
                <div id="accordion">
                    <div class="panel">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#my-bus-ticket" class="myticket-header">
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="katman_1" class="my-way-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.4 26.6" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#fff;}
                                </style>
                                <path id="bus-icon" class="st0 mr-2" d="M24.6,6.1V3c0-1.6-5-3-11.2-3S2.2,1.3,2.2,3v3C1,6.2,0,7.2,0,8.5v0.7c0,1.3,1,2.4,2.2,2.6v8.3
                                c0,0.9,0.4,1.8,1.1,2.4v2c0,1.1,0.9,2.1,2.1,2.1h0.3c1.1,0,2.1-0.9,2.1-2.1v-1.3H19v1.3c0,1.1,0.9,2.1,2.1,2.1h0.3
                                c1.1,0,2.1-0.9,2.1-2.1v-2c0.7-0.6,1.1-1.5,1.1-2.4v-8.4c1.1-0.3,1.9-1.3,1.9-2.5V8.5C26.4,7.4,25.7,6.4,24.6,6.1z M9.6,2.1h7.6v2.1
                                H9.6V2.1z M5.6,21.5c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4l0,0C6.9,20.9,6.3,21.5,5.6,21.5L5.6,21.5z
                                M21.2,21.5c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4l0,0C22.6,20.9,22,21.5,21.2,21.5L21.2,21.5z M22.7,15
                                c0,0.9-0.8,1.7-1.7,1.7h0H5.9c-0.9,0-1.7-0.8-1.7-1.7v0V7.7C4.1,6.7,4.9,6,5.9,6h0H21c0.9,0,1.7,0.8,1.7,1.7v0V15z"/>
                            </svg>
                            Otobüs Biletlerim
                        </div>
                        <div id="my-bus-ticket" class="collapse in show collapse-bar">

                            <ul class="p-0 w100">

                                <li class="mr-2 ticket-date">
                                    22.01.2020<br/>
                                    15.30
                                </li>

                                <li>
                                    <img src="assets/img/airlane/metro-turizm-logo.png" height="30" class="ticket-logo">
                                </li>

                                <li class="reference-no p-2">
                                    Referans No : <br/>
                                    15134043
                                </li>

                                <li class="pl-2 pr-2 mobile-none">
                                    <img src="assets/img/myticket-border.png">
                                </li>

                                <li class="col-md-5 ml-2">
                                    <div class="mt-3 mr-4">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                    <div class="route-dot text-align-left ml-2 mr-4 w40 mobile-none">
                                        <span class="point-route"></span>
                                        <i class="bus-root">
                                            <img src="assets/img/bus-ticket-blue.svg" height="15">
                                        </i>
                                    </div>

                                    <div class="mt-3 mr-2">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                </li>

                                <li class="mt-4 fr">
                                    <a href="">
                                        <img src="assets/img/icon_print.png" height="26">
                                    </a>
                                </li>

                            </ul>

                            <ul class="p-0 w100">

                                <li class="mr-2 ticket-date">
                                    22.01.2020<br/>
                                    15.30
                                </li>

                                <li>
                                    <img src="assets/img/airlane/metro-turizm-logo.png" height="30" class="ticket-logo">
                                </li>

                                <li class="reference-no p-2">
                                    Referans No : <br/>
                                    15134043
                                </li>

                                <li class="pl-2 pr-2 mobile-none">
                                    <img src="assets/img/myticket-border.png">
                                </li>

                                <li class="col-md-5 ml-2">
                                    <div class="mt-3 mr-4">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                    <div class="route-dot text-align-left ml-2 mr-4 w40 mobile-none">
                                        <span class="point-route"></span>
                                        <i class="bus-root">
                                            <img src="assets/img/bus-ticket-blue.svg" height="15">
                                        </i>
                                    </div>

                                    <div class="mt-3 mr-2">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                </li>

                                <li class="mt-4 fr">
                                    <a href="">
                                        <img src="assets/img/icon_print.png" height="26">
                                    </a>
                                </li>

                            </ul>
                          
                        </div>
                    </div>

                    <div class="panel">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#my-fly-ticket" class="myticket-header">
                            <?xml version="1.0" encoding="utf-8"?>
                                <svg version="1.1" id="katman_1" class="my-way-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 33.6 32.4" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#fff;}
                                </style>
                                <path id="plane" class="st0" d="M33.1,17.1l-12.9-7c-0.3-0.2-0.5-0.5-0.5-0.9l0.3-5c0,0,0-0.1,0-0.1c0-2-1.2-4.1-3.1-4.1
                                s-3.1,2.1-3.1,4.1c0,0,0,0.1,0,0.1L14,9.1c0,0.4-0.2,0.7-0.5,0.9l-12.9,7C0.2,17.3,0,17.6,0,18v1.3c0,0.5,0.4,1,1,1
                                c0.1,0,0.2,0,0.3,0l5.1-1.3v0.7c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-1.1l2-0.5v1.6c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-2
                                c0,0,0,0,0,0l1.9-0.5c0.5-0.1,1.1,0.2,1.2,0.7c0,0.1,0,0.1,0,0.2l0.5,8.3c0,0.3-0.1,0.7-0.4,0.9L10,30.4c-0.3,0.2-0.4,0.5-0.4,0.8
                                v0.2c0,0.5,0.4,1,1,1c0.1,0,0.3,0,0.4-0.1l3.3-1.3c0.5-0.2,1,0,1.2,0.4c0.3,0.5,0.8,0.8,1.3,0.8c0.6,0,1.1-0.3,1.4-0.8
                                c0.2-0.4,0.8-0.6,1.2-0.5l3.2,1.3c0.5,0.2,1.1,0,1.3-0.5c0-0.1,0.1-0.2,0.1-0.4v-0.2c0-0.3-0.2-0.6-0.4-0.8l-4.5-3.3
                                c-0.3-0.2-0.4-0.5-0.4-0.9l0.5-8.3c0-0.5,0.5-1,1-0.9c0.1,0,0.1,0,0.2,0l1.9,0.5c0,0,0,0,0,0v2c0,0.4,0.3,0.8,0.8,0.8
                                s0.8-0.3,0.8-0.8V18l2,0.5v1.1c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-0.7l5.1,1.3c0.5,0.1,1.1-0.2,1.2-0.7c0-0.1,0-0.2,0-0.3V18
                                C33.6,17.6,33.4,17.3,33.1,17.1z"/>
                                </svg>
                            Uçak Biletlerim
                        </div>
                        <div id="my-fly-ticket" class="collapse collapse-bar">
                            <ul class="p-0 w100">

                                <li class="mr-2 ticket-date">
                                    22.01.2020<br/>
                                    15.30
                                </li>

                                <li>
                                    <img src="assets/img/airlane/metro-turizm-logo.png" height="30" class="ticket-logo">
                                </li>

                                <li class="reference-no p-2">
                                    Referans No : <br/>
                                    15134043
                                </li>

                                <li class="pl-2 pr-2 mobile-none">
                                    <img src="assets/img/myticket-border.png">
                                </li>

                                <li class="col-md-5 ml-2">
                                    <div class="mt-3 mr-4">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                    <div class="route-dot text-align-left ml-2 mr-4 w40">
                                        <span class="point-route"></span>
                                        <i class="bus-root">
                                            <img src="assets/img/bus-ticket-blue.svg" height="15">
                                        </i>
                                    </div>

                                    <div class="mt-3 mr-2">
                                        <h3 class="city-myticket">İzmir</h3>
                                        <h6 class="clock-myticket">03:45</h6>
                                    </div>

                                </li>

                                <li class="mt-4 fr">
                                    <a href="">
                                        <img src="assets/img/icon_print.png" height="26">
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="panel">
                        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#my-train-ticket" class="myticket-header">
                            <?xml version="1.0" encoding="utf-8"?>
                                <svg version="1.1" id="katman_1" class="my-way-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 33.6 32.4" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#fff;}
                                </style>
                                <path id="plane" class="st0" d="M33.1,17.1l-12.9-7c-0.3-0.2-0.5-0.5-0.5-0.9l0.3-5c0,0,0-0.1,0-0.1c0-2-1.2-4.1-3.1-4.1
                                s-3.1,2.1-3.1,4.1c0,0,0,0.1,0,0.1L14,9.1c0,0.4-0.2,0.7-0.5,0.9l-12.9,7C0.2,17.3,0,17.6,0,18v1.3c0,0.5,0.4,1,1,1
                                c0.1,0,0.2,0,0.3,0l5.1-1.3v0.7c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-1.1l2-0.5v1.6c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-2
                                c0,0,0,0,0,0l1.9-0.5c0.5-0.1,1.1,0.2,1.2,0.7c0,0.1,0,0.1,0,0.2l0.5,8.3c0,0.3-0.1,0.7-0.4,0.9L10,30.4c-0.3,0.2-0.4,0.5-0.4,0.8
                                v0.2c0,0.5,0.4,1,1,1c0.1,0,0.3,0,0.4-0.1l3.3-1.3c0.5-0.2,1,0,1.2,0.4c0.3,0.5,0.8,0.8,1.3,0.8c0.6,0,1.1-0.3,1.4-0.8
                                c0.2-0.4,0.8-0.6,1.2-0.5l3.2,1.3c0.5,0.2,1.1,0,1.3-0.5c0-0.1,0.1-0.2,0.1-0.4v-0.2c0-0.3-0.2-0.6-0.4-0.8l-4.5-3.3
                                c-0.3-0.2-0.4-0.5-0.4-0.9l0.5-8.3c0-0.5,0.5-1,1-0.9c0.1,0,0.1,0,0.2,0l1.9,0.5c0,0,0,0,0,0v2c0,0.4,0.3,0.8,0.8,0.8
                                s0.8-0.3,0.8-0.8V18l2,0.5v1.1c0,0.4,0.3,0.8,0.8,0.8s0.8-0.3,0.8-0.8v-0.7l5.1,1.3c0.5,0.1,1.1-0.2,1.2-0.7c0-0.1,0-0.2,0-0.3V18
                                C33.6,17.6,33.4,17.3,33.1,17.1z"/>
                                </svg>
                            Uçak Biletlerim
                        </div>
                        <div id="my-train-ticket" class="collapse collapse-bar">
                            <ul class="my-ticket-show">
                                <li>
                                    Gösterilecek biletiniz bulunmamaktadır.
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php include("inc/footer.php"); ?>

<?php include("inc/js.php"); ?>

</body>
</html>