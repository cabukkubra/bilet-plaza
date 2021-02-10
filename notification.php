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

                <div class="fl notification mb-3">

                    <div class="notification-header">
                        <i class="fas fa-bell mr-2"></i>
                        1 Bildirim
                    </div>

                    <p>Güvenin ve gizliliğin sizin için ne kadar önemli olduğunu biliyoruz www.biletplaza.com’u ziyaret ettiğiniz veya bilet satın almak</p>

                </div>

                <div class="fl notification mb-3">

                    <div class="notification-header">
                        <i class="fas fa-bell mr-2"></i>
                        1 Bildirim
                    </div>

                    <p>Güvenin ve gizliliğin sizin için ne kadar önemli olduğunu biliyoruz www.biletplaza.com’u ziyaret ettiğiniz veya bilet satın almak</p>

                </div>

                <div class="fl notification mb-3">

                    <div class="notification-header">
                        <i class="fas fa-bell mr-2"></i>
                        1 Bildirim
                    </div>

                    <p>Güvenin ve gizliliğin sizin için ne kadar önemli olduğunu biliyoruz www.biletplaza.com’u ziyaret ettiğiniz veya bilet satın almak</p>

                </div>

            </div>

        </div>

    </div>

<?php include("inc/footer.php"); ?>

<?php include("inc/js.php"); ?>

</body>
</html>