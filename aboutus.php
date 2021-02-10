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

    <div class="col-md-12 fl p-0">

        <div class="aboutpage-header fadeIn animated fl col-lg-12">

            <div class="container">

                <ul class="">
                    <li class="aboutpage-header-active"><a href="#aboutus">Hakkımızda</a></li>
                    <li><a href="#mision">Misyon ve Vizyon</a></li>
                </ul>

            </div>

        </div>


        <div class="fl col-lg-12 about-content" id="aboutus">

            <div class="container">

                <h2 class="fs-22 fw-700">Hakkımızda</h2>
                <p>
                    Kara, deniz ve hava yolu ulaşım firmaları bir araya toplandı! Bilet Plaza sayesinde bir siteden diğerine gitmek yok! Herşey bir tık yanınızda. Bilet Plaza ile biletlerinizi seçkin firmaların kendi liste fiyatlarından kolaylıkla satın alabilir, Bilet Plaza’nın sizlere sunduğu fırsatlardan yararlanabilirsiniz.<br/><br/>
                </p>

                <h4 class="fs-16 fw-700">Bilet Plaza Nedir?</h4>
                <p>
                    Bilet Plaza, 2008 yılında Atlas Yazılım ve Bilişim Hiz. Tic. A.Ş. ‘nın inovatif, yaratıcı ve gelişime açık kadrosuyla geliştirilen online bilet satın alma platformudur. Tüm fırsatlardan yararlanabilmeniz adına her gün kendini yenilemekte ve geliştirmektedir. Sizler için seçkin firmaları bir araya toplayan Bilet Plaza sayesinde hiçbir fırsatı kaçırmayacak ve online bilet satış sistem sayesinde istediğiniz güzergaha otobüs, uçak bileti sorgulatıp, tüm seçenekleri değerlendirebileceksiniz. 
                    Otobüs bileti ve uçak bileti almanın avantajlı yolunu keşfedeceksiniz.<br/><br/>

                    Keyifli Yolculuklar…
                </p>


                <div class="col-lg-12">
                    <div class="col-lg-4 p-0 fl about-img text-align-center">
                        <img src="assets/img/professional-team.png" width="186">
                        <h3>Profesyonel ve Yaratıcı Ekip</h3>
                    </div>

                    <div class="col-lg-4 p-0 fl about-img text-align-center">
                        <img src="assets/img/online-bilet.png" width="186">
                        <h3>Online Bilet</h3>
                    </div>

                    <div class="col-lg-4 p-0 fl about-img text-align-center">
                        <img src="assets/img/guvenli-odeme.png" width="186">
                        <h3>Güvenli Ödeme Sistemi</h3>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-lg-12 fl" id="mision">

            <div class="container">

                <div class="fl col-lg-6 p-0 no-gutters mision-content">

                    <div class="fl col-lg-12 mision-img mt-4 mb-4">
                        <img src="assets/img/mision-icon.png" class="fl">
                        <h3>Misyonumuz</h3>
                    </div>

                    <p>
                        Küresel değişimleri ve gelişmeleri öngören aktif yapısı ile <strong>ATLAS Yazılım ve Bilişim,</strong>  kendi sektöründe verimlilik, kalite, partnerleri ve çalışanlarının huzur ve refahı konularında standartları belirleyen, Türkiye'nin en güvenilir şirketleri arasında yer alma hedefi ve güvenilirlik bilinci ile kararlılıkla çalışmaktadır.<br/><br/>

                        Ürettiği yazılımlar ve sunduğu hizmetler ile ülke ekonomisinin lider firmalarından biri olmayı, büyüme ve gelişme potansiyelleri ile daha fazla katma değer yaratmayı, ekonomik büyümenin yanı sıra kurumsal bağlılık kültürünü geliştirerek sosyal gelişime katkıda bulunmayı ve örnek bir şirket olarak sektörüne öncülük etmeyi vizyon edinmiştir.<br/><br/>

                        Profesyonel kadromuz, güçlü organizasyonumuz ve başarıya olan inancımız ile ATLAS YAZILIM, kurulduğu ilk günden beri oluşturduğu ilk'leri sunma, öncü olma ve liderlik etme özelliklerini tüm gayreti ile geliştirmeye devam edecektir.
                    </p>

                </div>

                <div class="fl col-lg-6 p-0 no-gutters mision-content">

                    <div class="fl col-lg-12 mision-img mt-4 mb-4">
                        <img src="assets/img/vision-icon.png" class="fl">
                        <h3>Vizyonumuz</h3>
                    </div>

                    <p>
                        Şirket ve kalite hedeflerimiz doğrultusunda ve toplam kalite anlayışı çerçevesinde tüm müşterilerimizi partnerimiz olarak görerek beklentilerin ötesinde değer yaratacak ürün ve hizmet sunmak, sektörde örnek ve öncü bir kuruluş olmaktır.
                        <br/><br/>
                    </p>

                    <ul class="p-0">
                        <li class="fw-700">Değerlerimiz</li>
                        <li>Sorumluluk ve Sürdürülebilirlik</li>
                        <li>Açıklık ve Güven</li>
                        <li>Güvenilirlik, inandırıcılık, yasalara uygunluk</li>
                        <li>Müşteri Memnuniyeti</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <?php include("inc/footer.php"); ?>

    <?php include("inc/js.php"); ?>

</body>
</html>