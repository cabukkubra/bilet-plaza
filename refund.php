<!DOCTYPE html>
<html lang="tr">
<head>
	<?php include("inc/head.php"); ?>
</head>
<body class="bg-white">

    <!--hesabımla ilgili sayfalardayken oturum açıldıysa hesabım divleri entegre edilecek --> 
    <?php include("inc/header3.php"); ?>

    <div class="col-md-12 p-0 banner-fluid">
        <picture>
            <source srcset="assets/img/web-mobil-banner-hakkimizda.jpg" class="w100" media="(max-width: 767px)">
            <source srcset="assets/img/web-banner-hakkimizda.jpg" class="w100">
            <img src="assets/img/web-banner-hakkimizda.jpg" class="w100" alt="Biletplaza Slider">
        </picture>
    </div>

    <div class="col-md-12 fl p-0 mt-4 contract-text">

        <div class="container">
            
            <h2 class="fs-22 fw-700">İade ve İptal Prosedürü</h2>

            <strong>Ödeme Seçenekleri</strong>
            <p>
                Siparişlerinizin ödemesini kredi kartı ile yapabilirsiniz.
            </p>

            <strong>Kredi Kartı İşlemleri</strong>

            <p>
                Alış-verişlerinizi güvenle yapabilmeniz için kredi kartı bilgileriniz Comodo SSL kullanılarak şifrelenmektedir. SSL bağlantısının aktif olduğunu, sipariş işlemleri sırasında kart bilgilerinizi girdiğiniz sayfamıza geçtiğinizde, tarayıcınızın adres çubuğunun hemen yanında görüntülenecek olan kilit simgesinden anlayabilirsiniz.
            </p>

        </div>

    </div>

    <?php include("inc/footer.php"); ?>

    <?php include("inc/js.php"); ?>

</body>
</html>