<!DOCTYPE html>
<html lang="tr">
<head>

	<?php include("inc/head.php"); ?>

</head>
<body>

	<?php include("inc/header.php"); ?>

	<div class="col-md-12 p-0 banner-fluid">
		<div class="container">
			<h2 class="position-absolute banner-slogan">Uçuş Yap, <strong> Puan Kazan </strong></h2>
		</div>
		<picture>
			<source srcset="assets/img/web-mobil-banner3.jpg" class="w100" media="(max-width: 767px)">
			<source srcset="assets/img/web_banner3.jpg" class="w100">
			<img src="assets/img/web_banner3.jpg" class="w100" alt="Biletplaza Slider">
		</picture>
	</div>

	<!-- gidiş dönüş seçilirse ticket.php gelecek, tek yön olursa ticket2.php gelecek -->
	<?php include("inc/ticket.php"); ?>

	<div class="banner-bottom-slogan col-md-12">
		<div class="container p-0">

			<div class="col-md-10 m-0-auto slogan-border tablet-none">
				<div class="col-md-4 banner-bottom-icon p-0">
					<div class="display-center">
						<img src="assets/img/guvenli-odeme-icon.png" class="banner-bottom-img" alt="Güvenli Ödeme">
						<h2>Güvenli Ödeme Sistemi</h2>
					</div>
				</div>

				<div class="col-md-4 banner-bottom-icon p-0">
					<div class="display-center">
						<img src="assets/img/tasimacilik-icon.png" class="banner-bottom-img" alt="Hava ve Kara Ulaşımı">
						<h2>Hava ve Kara Ulaşımı</h2>
					</div>
				</div>


				<div class="col-md-4 banner-bottom-icon p-0">
					<div class="display-center">
						<img src="assets/img/refund.png" class="banner-bottom-img" alt="Kesintisiz Para İadesi">
						<h2 class="svg-wrapper">Kesintisiz Para İadesi</h2>
					</div>
				</div>
			</div>


			<div class="col-md-12 m-0-auto campaign-banner">

				<div class="container">
					<div class="owl-carousel campaign-slider">
						<div>
							<a href="" class="owl-campaign-active">
								<img src="assets/img/kampanya1.jpg" alt="Kampanya">
							</a>
						</div>

						<div>
							<a href="" class="owl-campaign-active">
								<img src="assets/img/kampanya2.jpg" alt="Kampanya">
							</a>
						</div>

						<div>
							<a href="" class="owl-campaign-active">
								<img src="assets/img/kampanya3.jpg" alt="Kampanya">
							</a>
						</div>
					</div>
					<style type="text/css">.owl-campaign-active:hover::after{content: 'Daha Fazla Detay İçin '}</style>
				</div>
				
			</div>

		</div>
	</div>

	<div class="airlane-logo col-md-12">
		<div class="container">
			<div id="owl-products" class="owl-carousel owl-theme">
				<div class="item"><img src="assets/img/airlane/metro-turizm-logo.png" alt="Metro Turizm Logo"></div>
				<div class="item"><img src="assets/img/airlane/thy.png" alt="Türk Hava Yolları Logo"></div>
				<div class="item"><img src="assets/img/airlane/kamilkoc-logo.png" alt="Kamil Koç Logo"></div>
				<div class="item"><img src="assets/img/airlane/pegasus.png" alt="Pegasus Logo"></div>
				<div class="item"><img src="assets/img/airlane/sun-express.png" alt="Sun Express"></div>
				<div class="item"><img src="assets/img/airlane/anadolu-jet.png" alt="Anadolu Jet Logo"></div>
				<div class="item"><img src="assets/img/airlane/onur-air.png" alt="Onur Air Logo"></div>
			</div>
		</div>
	</div>

	<div class="col-md-12 fl biletplaza-about-index">

		<div class="container">

			<div class="animated">
				<div class="sun"></div>
				<div class="bus"></div>
				<div class="sky-left"></div>
				<div class="sky-right"></div>
			</div>

			<div class="col-md-8 m-0-auto biletplaza-about-text">

				<h3>Neden Biletplaza?</h3>

				<p>
					Kara, deniz ve hava yolu ulaşım firmaları bir araya toplandı!<br>
					Bilet Plaza sayesinde bir siteden diğerine gitmek yok! Herşey bir tık yanınızda.<br> 
					Bilet Plaza ile biletlerinizi seçkin firmaların kendi liste fiyatlarından kolaylıkla satın alabilir,<br> 
					Bilet Plaza’nın sizlere sunduğu fırsatlardan yararlanabilirsiniz.

				</p>

				<h4>Biletplaza Nedir?</h4>
				<p>
					Bilet Plaza, 2008 yılında Atlas Yazılım ve Bilişim Hiz. Tic. A.Ş. ‘nın inovatif, yaratıcı ve gelişime açık kadrosuyla geliştirilen online bilet satın alma platformudur. Tüm fırsatlardan yararlanabilmeniz adına her gün kendini yenilemekte ve geliştirmektedir. Sizler için seçkin firmaları bir araya toplayan Bilet Plaza sayesinde hiçbir fırsatı kaçırmayacak ve online bilet satış sistem sayesinde istediğiniz güzergaha otobüs, uçak bileti sorgulatıp, tüm seçenekleri değerlendirebileceksiniz. Otobüs bileti ve uçak bileti almanın avantajlı yolunu keşfedeceksiniz.
				</p>
			</div>
		</div>
	</div>

	<div class="col-md-12 fl popular-city">
		<div class="container popular-city-text">
			<h2>En Popüler Şehirlerin Biletleri</h2>
			<h3>Tek Aramayla</h3> 
			<h1><img src="assets/img/biletplaza-logo-orange.svg" alt="Bilet plaza Logo Turuncu"></h1> 
			<span>'da!</span><br>
			<h5>Yeni keşifler, gezi için ipuçları faydalı bilgilerle dolu içeriklerimizi okumadan gezi planı yapmayın</h5>
		</div>

		<div class="popular-city-bg col-md-12 fl">
			<div class="container">
				<div class="owl-carousel popular-city-owl">
					<div>
						<img src="assets/img/istanbul.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
					<div>
						<img src="assets/img/prag.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
					<div>
						<img src="assets/img/roma.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
					<div>
						<img src="assets/img/istanbul.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
					<div>
						<img src="assets/img/prag.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
					<div>
						<img src="assets/img/roma.svg" alt="İstanbul Bilet Fiyatları">
						<div class="popular-img-text">
							<h3>İSTANBUL</h3>
							<h5>90₺'den başlayan fiyatlar</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12 fl counter-biletplaza">
		<div class="container">
			<h2 class="counter-biletplaza-title text-align-center fl col-md-12 fw-700">RAKAMLARLA BİLETPLAZA</h2>
			<div class="col-md-4 fl text-align-center mb-3 countersdiv">
				<img src="assets/img/kullanici.svg" class="counter-img" alt="Otobüs, Uçak Kullanıcı">
				<div class="counter-user" data-from="0" data-to="140000">14000</div>
				<h3 class="fw-700 gray-color">KULLANICI</h3>
				<p>Kayıtlı üye ile günden güne sizinle birlikte büyüyoruz</p>
			</div>

			<div class="col-md-4 fl text-align-center mb-3 countersdiv">
				<img src="assets/img/firma.svg" class="counter-img" alt="Otobüs, Uçak Firma">
				<div class="counter-user" data-from="0" data-to="580000">58000</div>
				<h3 class="fw-700 gray-color">FİRMA</h3>
				<p>Otobüs ve Uçak firmasına biletinizi kolayca alabilirsiniz</p>
			</div>

			<div class="col-md-4 fl text-align-center mb-3 countersdiv">
				<img src="assets/img/ticket.svg" class="counter-img" alt="Bilet Satış">
				<div class="counter-user" data-from="0" data-to="1000000">10000</div>
				<h3 class="fw-700 gray-color">BİLET</h3>
				<p>Üzerinde bilet satışı ile her gün binlerce kişiyi kavuşturuyor</p>
			</div>
		</div>
	</div>

	<div class="col-md-12 fl public-banner text-align-center">
		<div class="container">
			<div class="fl col-md-6 mt-4 p-0">
				<h3 class="fl fw-600 public-banner-text">BİLETPLAZA MOBİL </h3>
				<span class="fl fw-500 public-banner-text">&nbsp;İLE</span>
				<span class="fl fw-500 public-banner-text">biletinizi her yerde kolayca alın.</span>
				<p class="fw-400 col-md-9 fl p-0 mt-3 public-banner-p">Biletplaza mobil uygulaması sayesinde 4 adım da biletinizi kolaylıkla ve güvenli bir şekilde alabilirsiniz, üstelik istediğiniz her yerden!</p>
				<div class="fl col-md-12 p-0 mt-4 mobile-text-align-center">
					<a href=""><img src="assets/img/appstore.png" width="150" class="phone-img" alt="App Store Logo"></a>
					<a href=""><img src="assets/img/googleplay.png" width="150" class="phone-img" alt="Google Play Logo"></a>
				</div>
			</div>

			<div class="fl col-md-6 mt-4 p-0">
				<form class="fl col-md-12 text-align-center phone-number p-0">
					<h5>UYGULAMAYI TELEFONUNUZA GÖNDERİN</h5>
					<input id="appSubmitPhone" type="text" name="phone-to-mobil-input" class="phone-number-input col-md-5 col-sm-12">
					<input type="submit" name="GÖNDER" class="col-md-2 col-sm-12 text-align-center submit-phone">
				</form>
				<div class="fl col-md-12 p-0">
					<img id="scrollphoneimg" src="assets/img/public-banner-phone.png" width="280" class="p-0 public-banner-phone bounceInUp animated" alt="Bilet plaza mobil uygulama">
				</div>
			</div>
		</div>	
	</div>

	<div class="col-md-12 fl ebulten-banner">
		<div class="container">
			<div class="col-md-12 m-0-auto text-align-center mb-5">
				<img src="assets/img/ebulten-abone.png" height="80" alt="E Bülten Abone">
			</div>
			<h5 class="text-align-center fw-700">E-BÜLTEN'E ABONE OLUN</h5>
			<span class="text-align-center col-md-12 fl mt-2">Promosyon, indirim ve kampanyalardan haberdar olmak için, <br> E-Bültenimize abone olabilirsiniz.</span>
			<form class="text-align-center col-md-12 fl mt-4">
				<i class="far fa-envelope submit-icon animated bounceInLeft" id="scrollebulteni"></i>
				<input type="email" name="ebulten-phone-number" class="phone-number-input ebulten-input" id="phone-number-input" required>
				<input type="submit" name="GÖNDER" class="ebulten-submit fw-700">
			</form>
		</div>
	</div>


	<?php include("inc/footer.php"); ?>


	<?php include("inc/js.php"); ?>

</body>
</html>