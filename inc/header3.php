<header class="col-sm-12 mobile-none">
	<div class="container p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-orange headermenu mt-3 p-0">
			<a href="index.php" class="col-sm-2 p0 logo p-0">
				<img src="assets/img/biletplaza-logo-orange.svg" class="w85" alt="Bilet Plaza">
			</a>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active mr-2">
						<a class="nav-link" href="search-ticket.php">
							Uçak Bileti 
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-2">
						<a class="nav-link" href="search-ticket.php">
							Otobüs Bileti 
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-2">
						<a class="nav-link" href="search-ticket.php">
							Tren Bileti
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-2">
						<a class="nav-link" href="campaign.php">
							Kampanyalar
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-2">
						<a class="nav-link" href="contact.php">
							İletişim
							<span class="sr-only">(current)</span>
						</a>
					</li>
				</ul>
				<div class="navbar-nav my-2 my-lg-0">

					<ul class="navbar-nav mr-auto">
						
						<!--<li class="btn-group">
							<button type="button" class="btn btn-dropdown-flag dropdown-toggle fontsize-18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								₺
							</button>
							<div class="dropdown-menu dropdown-menu-right flatarrow menu-drop">
								<a href="" class="dropdown-item" type="button">
									₺ &nbsp;<span>TL</span>
								</a>
								<a href="" class="dropdown-item" type="button">
									$ &nbsp; <span>TL</span>
								</a>
							</div>
						</li>-->

						<li class="btn-group mr-2">
							<button type="button" class="btn btn-dropdown-flag dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="assets/img/tr-flag.png" class="flag-dropdown" alt="Türkçe">
							</button>
							<div class="dropdown-menu dropdown-menu-right flatarrow menu-drop p-0">
								<a href="" class="dropdown-item" type="button">Türkçe &nbsp;
									<img src="assets/img/tr-flag.png" class="flag-dropdown" alt="Türkçe">
								</a>
								<a href="" class="dropdown-item" type="button">English&nbsp;
									<img src="assets/img/en-flag.png" class="flag-dropdown" alt="İngilizce">
								</a>
							</div>
						</li>

						<li class="nav-item">

							<button type="button" class="btn btn-dropdown-flag fontsize-13 sign-up p-0 mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
								<div class="mr-3 ml-2 fl fw-600">Nagihan Özkar</div>

								<!-- resim yoksa isim baş harfi olacak 
									<div class="account-user fl">N</div>
								-->

								<!--profil resim div-->
								<div class="account-user fl" style="background-image: url(assets/img/user-avatar.png);"></div>
							</button>

							<div class="dropdown-menu dropdown-menu-right flatarrow account-drop p-0">
								<a href="account.php" class="dropdown-item text-align-left" type="button">
									<i class="fas fa-user mr-2"></i>
									Hesabım
								</a>
								<a href="" class="dropdown-item text-align-left" type="button">
									<i class="fas fa-ticket-alt mr-2"></i>
									Biletlerim
								</a>
								<a href="" class="dropdown-item text-align-left" type="button">
									<i class="fas fa-gift mr-2"></i>
									Puanlarım
								</a>
								<a href="" class="dropdown-item text-align-left" type="button">
									<i class="fas fa-unlock-alt mr-2"></i>
									Şifre Değiştir
								</a>
								<a href="" class="dropdown-item text-align-left" type="button">
									<i class="fas fa-bell mr-2"></i>
									Bildirimler
								</a>
							</div>

						</li>

					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="mobile-menu-bar">

	<a href="" class="mobil-logo desktop-none">
		<img src="assets/img/biletplaza-logo-orange.svg" class="w80" alt="Bilet Plaza">
	</a>

	<div class="outer-menu sabitmenu fadeIn animated">

		<a href="" class="mobil-logo desktop-none">
			<img src="assets/img/biletplaza.png" class="w80" alt="Bilet Plaza">
		</a>

		<input class="checkbox-toggle" type="checkbox">
		<div class="hamburger">
			<div></div>
		</div>
		<div class="menu">
			<div>
				<div>
					<ul>
						<li><a href="#"><img src="assets/img/biletplaza-black.png" alt="Bilet Plaza"></a></li>
						<li><a href="#">Uçak Bileti</a></li>
						<li><a href="#">Otobüs Bileti</a></li>
						<li><a href="#">Tren Bileti</a></li>
						<li><a href="#">Kampanyalar</a></li>
						<li><a href="#">İletişim</a></li>
						<li data-toggle="modal" data-target="#signin-mobile"><a>Giriş Yap</a></li>
						<li data-toggle="modal" data-target="#signup-mobile"><a href="#">Üye Ol</a></li>
						<li>
							<a href="#"> <img src="assets/img/tr-flag.png" width="28" alt="Türkçe"></a>
							<a href="#"> <img src="assets/img/en-flag.png" width="28" alt="İngilizce"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="signup-mobile" class="modal fade bg-white" role="dialog">
	<button type="button" class="close close-sign-up" data-dismiss="modal">&times;</button>
	<div class="modal-dialog signin-top">
		<div class="modal-content">
			<div class="form-container sign-in-container w100">
				<form action="#" class="signup-form">
					<h5 class="sigup-title" style="padding-top: 210px;">Hesap Oluşturun</h3>
					<div class="social-container">
						<a href="#" class="social signup-a"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social signup-a"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social signup-a"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="w100 fl p-0 z-index2">
						<input type="text"
						placeholder="Adınız"
						class="signup-input w49"
						ng-model="signUpModel.name"
						name="signUpFormName"
						required>

						<input type="text"
						placeholder="Soyadınız"
						class="signup-input w49"
						ng-model="signUpModel.surname"
						name="signUpFormSurname"
						required>


						<div class="fl w100 p-0">
							<div class="w49 fl p-0">
								<div ng-messages="signUpDesktopForm.signUpFormName.$error">
									<p class="validation-error" ng-message="required">Boş Geçilemez</p>
								</div>
							</div>

							<div class="w49 fl p-0">
								<div ng-messages="signUpDesktopForm.signUpFormSurname.$error">
									<p class="validation-error" ng-message="required">Boş geçilemez</p>
								</div>
							</div>
						</div>

					</div>

					<div class="w100 fl p-0 z-index2">
						<input type="email"
						placeholder="E-Mail Adresiniz"
						class="signup-input"
						ng-model="signUpModel.email"
						name="signUpFormEmail"
						required>
						<div ng-messages="signUpDesktopForm.signUpFormEmail.$error">
							<p class="validation-error" ng-message="required">Boş geçilemez</p>
						</div>
					</div>


					<div class="w100 fl p-0 z-index2">
						<input type="number"
						placeholder="Telefon Numaranız"
						class="signup-input"
						ng-model="signUpModel.phone"
						name="signUpFormPhone"
						required>
						<div ng-messages="signUpDesktopForm.signUpFormPhone.$error">
							<p class="validation-error" ng-message="required">Boş Geçilemez</p>
						</div>
					</div>


					<div class="w100 fl p-0 z-index2">

						<input type="date"
						placeholder="Doğum Tarihiniz"
						class="signup-input"
						ng-model="signUpModel.birthdate"
						name="signUpFormBirthdate"
						required>

					</div>

					<div class="w100 fl p-0 z-index2">

						<input type="number"
						placeholder="Tc Kimlik veya Pasaport Numaranız"
						class="signup-input"
						ng-model="signUpModel.tcIdentity"
						name="signUpFormTcIdentity"
						ng-minlength="11"
						ng-maxlength="11"
						required>


						<div class="fl w100 p-0">
							<div class="w50 fl p-0">
								<div ng-messages="signUpForm.signUpFormBirthdate.$error">
									<p class="validation-error" ng-message="required">Boş Geçilemez</p>
								</div>

							</div>

							<div class="w50 fl p-0">
								<div ng-messages="signUpDesktopForm.signUpFormPasswordAgain.$error">
									<p class="validation-error" ng-message="required">Boş Geçilemez</p>
									<p class="validation-error" ng-message="minlength">TC Kimlik numarası 11 haneli olmalıdır</p>
								</div>
							</div>
						</div>
					</div>

					<div class="w100 fl p-0 z-index2">

						<input type="password"
						placeholder="Şifre"
						class="signup-input w49"
						ng-model="signUpModel.password"
						name="signUpFormPassword"
						required>


						<input type="password"
						placeholder="Şifre Tekrar"
						class="signup-input w49"
						ng-model="signUpModel.passwordAgain"
						name="signUpFormPasswordAgain"
						password-verify="signUpModel.password"
						required>


						<div class="fl w100 p-0">
							<div class="w50 fl p-0">
								<div ng-messages="signUpDesktopForm.signUpFormPassword.$error">
									<p class="validation-error" ng-message="required">Boş Geçilemez</p>
								</div>
							</div>

							<div class="w50 fl p-0">
								<div ng-messages="signUpDesktopForm.signUpFormPasswordAgain.$error">
									<p class="validation-error" ng-message="required">Boş Geçilemez</p>
									<p class="validation-error" ng-message="passwordVerify">Parolalar eşleşmiyor</p>
								</div>
							</div>
						</div>
					</div>

					<div class="w100 fl p-0 z-index2">
						<div class="col-md-5 text-align-left p-0 fl fs-14 mt-2">Cinsiyet seçiniz</div>

						<label class="checked-container w47 mr-3 mt-2 fl">Kadın
							<input type="radio" checked="checked"
							ng-model="signUpDesktopForm.gender"
							name="signUpFormGender"
							value="1"
							required />
							<span class="checkmark"></span>
						</label>

						<label class="checked-container w47 mt-2 fl">Erkek
							<input type="radio"
							ng-model="signUpDesktopForm.gender"
							name="signUpFormGender"
							value="2"
							required />
							<span class="checkmark"></span>
						</label>

						<div ng-messages="signUpDesktopForm.signUpFormGender.$error">
							<p class="validation-error" ng-message="required">Cinsiyet seçiniz</p>
						</div>
					</div>

					<div class="w100 fl p-0 z-index2 mt-2">
						<div class="w100 fl p-0">
							<input type="checkbox"
							ng-model="signUpDesktopForm.contract"
							value="false"
							name="signUpFormContract"
							required class="fl"/>
							<a data-toggle="modal" data-target="#contract-signin" class="fs-12 ml-2 text-align-left fl gray-color">Sözleşmeyi okudum kabul ediyorum.</a> 
						</div>

						<div class="w100 fl p-0">
							<input type="checkbox" checked="checked" 
							ng-model="signUpDesktopForm.campaign"
							value="false" class="fl"/> 
							<p class="fs-12 text-align-left fl w80 gray-color ml-2"> SMS ve Eposta ile Kampanyalardan haberdar olmak istiyorum.</p>
						</div>

						<div ng-messages="signUpDesktopForm.signUpFormContract.$error">
							<p class="validation-error mb-2" ng-message="required">Kayıt için sözleşmeyi onaylayınız</p>
						</div>
					</div>

					<button type="submit" class="signup-button z-index2">Kaydol</button>
					<div class="position-absolute left0 z-index0">
						<img src="assets/img/signin.png" alt="Kayıt Ol Banner">
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

<div id="signin-mobile" class="modal fade bg-white" role="dialog">
	<button type="button" class="close close-sign-up" data-dismiss="modal">&times;</button>
	<div class="modal-dialog signin-top">
		<div class="modal-content">
			<div class="form-container sign-in-container sign-in-container2" id="mobil-signup">
				<form action="#" class="signup-form">
					<h5 class="sigup-title">Giriş Yap</h5>
					<div class="social-container">
						<a href="#" class="social signup-a"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social signup-a"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social signup-a"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<input type="email" placeholder="Email" name="desktopEmail" ng-model="signInModel.email" ng-keyup="_handleKeyEnter($event)" class="signup-input" required ng-minlength="1">
					<div ng-messages="signInDesktopForm.desktopEmail.$error">
						<p class="validation-error" ng-message="required">Boş Geçilemez</p>
						<p class="validation-error" ng-message="minlength">Karakter Kısa Kontrol Ediniz</p>
					</div>

					<input type="password" placeholder="Password" name="desktopPassword" ng-model="signInModel.password" ng-keyup="_handleKeyEnter($event)" class="signup-input" required ng-minlength="1">
					<div ng-messages="signInDesktopForm.desktopPassword.$error">
						<p class="validation-error" ng-message="required">Boş Geçilemez</p>
						<p class="validation-error" ng-message="minlength">Karakter Kısa Kontrol Ediniz</p>
					</div>

					<div class="m-0-auto z-index2">

						<label class="checked-container col-md-12 fl">
							<input type="checkbox"
							name="validationSignInRememberMe1" 
							ng-model="signInModel.isRemember" 
							value="false" 
							@(BiletPlazaMVC.Management.CookieManagement.Read(BiletPlazaMVC.Management.CookieKey.Login_IsRemember))  />
							<span class="checkmark"></span>
							<p class="fs-14 fl ml-3">Beni Hatırla</p> 
						</label>

					</div>
					<a href="#" class="signup-a">Şifremi unuttum</a>
					<button type="submit" ng-click="_handleLogin()" class="signup-button">Giriş Yap</button>

					<div class="position-absolute left0 z-index0">
						<img src="assets/img/signin.png" alt="Kayıt Ol Banner">
					</div>
				</form>

			</div>
		</div>

	</div>
</div>


<?php include("inc/sign-up.php");?>

