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
    
    <div class="col-md-12 fl mt-5 p-0">

        <div class="container">

            <?php include("inc/account-left.php");?>

            <div class="col-md-8 fr mb-4 account-right">
                <form class="needs-validation" novalidate>
                    <div class="form-row pl-3">

                        <div class="col-md-12 fl mb-3 account-border">
                            <div class="account-user fl" style="background-image: url(assets/img/user-avatar.png);"></div>

                            <div class="mr-2 ml-2 fl fw-600 fs-14">Nagihan Özkar</div>
                            <span class="fl fs-14 fw-400">(Hesap Sahibi)</span>

                            <i class="fr"><img src="assets/img/edit.png"></i>

                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom01">Ad</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Adınız" value="Kübra" required>
                            <div class="valid-feedback">
                                Geçerli!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom02">Soyad</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Soyadınız" value="Çabuk" required>
                            <div class="valid-feedback">
                                 Geçerli!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustomUsername">Mail Adresi</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom02" placeholder="info@atlasyazilim.com.tr" value="info@atlasyazilim.com.tr" aria-describedby="inputGroupPrepend" required>

                                <div class="invalid-feedback">
                                    Lütfen geçerli mail adresi giriniz.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom03">Doğum Tarihi</label>
                            <input class="form-control bg-white account-date" id="datepicker" placeholder="Doğum Tarihi" required style="padding-left: 12px !important">
                            <div class="invalid-feedback">
                                Lütfen doğum tarihinizi giriniz.
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustomUsername">Tc Kimlik Numarası</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom02" placeholder="20569997755" value="20569997755" aria-describedby="inputGroupPrepend" required>

                                <div class="invalid-feedback">
                                    Lütfen geçerli Tc Kimlik No / Pasaport No giriniz.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustomUsername">Telefon Numarası</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom02" placeholder="05324597898" value="05324597898" aria-describedby="inputGroupPrepend" required>

                                <div class="invalid-feedback">
                                    Lütfen geçerli Telefon Numarası giriniz.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form account-border2">
                            <label for="validationCustomUsername">Adres</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Lorem ipsum dolor sit amet Beykoz - İSTANBUL" value="Lorem ipsum dolor sit amet Beykoz - İSTANBUL" aria-describedby="inputGroupPrepend" required>

                                <div class="invalid-feedback">
                                    Lütfen geçerli Telefon Numarası giriniz.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 fl p-0">
                            <div class="fl" data-toggle="modal" data-target=".passenger-card">
                                <p class="fl mr-2 passenger-p">Passenger Card Ekle</p>
                                <i class="fas fa-plus passenger-plus"></i>
                            </div>
                            <span class="fl w100 fs-13 mb-3">İndirimlerden faydalanmak için Passenger Card üyeliği oluşturunuz.</span>
                        </div>
                    </div>

                </form>

                <div class="modal fade bd-example-modal-lg passenger-card" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content passenger-modal-content">
                            <div class="modal-header">
                                <h6 class="train-popup-title">Passenger Card Başvuru Formu</h6>
                                <button type="button" class="close close-passenger" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="fl col-md-12">

                                <p class="fl mt-4 fs-14 text-align-center f-roboto">Lütfen bilgileri doğru ve eksiksiz giriniz. Bilgilerin doğruluğu size ulaşabilmemiz ve indirimlerden faydalanabilmeniz için önemlidir.</p>
                                
                                <div class="w100 fl p-0 z-index2">
                                    <input type="text"
                                    placeholder="Adınız"
                                    class="signup-input passenger-input w48"
                                    ng-model="signUpModel.name"
                                    name="signUpFormName"
                                    required>

                                    <input type="text"
                                    placeholder="Soyadınız"
                                    class="signup-input passenger-input w48 fr"
                                    ng-model="signUpModel.surname"
                                    name="signUpFormSurname"
                                    required>


                                    <div class="fl w100 p-0">
                                        <div class="w48 fl p-0">
                                            <div ng-messages="signUpDesktopForm.signUpFormName.$error">
                                                <p class="validation-error" ng-message="required">Boş Geçilemez</p>
                                            </div>
                                        </div>

                                        <div class="w48 fl p-0">
                                            <div ng-messages="signUpDesktopForm.signUpFormSurname.$error">
                                                <p class="validation-error" ng-message="required">Boş geçilemez</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="w100 fl p-0 z-index2">
                                    <input type="email"
                                    placeholder="E-Mail Adresiniz"
                                    class="signup-input passenger-input"
                                    ng-model="signUpModel.email"
                                    name="signUpFormEmail"
                                    required>
                                    <div ng-messages="signUpDesktopForm.signUpFormEmail.$error">
                                        <p class="validation-error" ng-message="required">Boş geçilemez</p>
                                    </div>
                                </div>

                                <div class="w100 fl p-0 z-index2">
                                    <input type="text"
                                    placeholder="Telefon Numaranız"
                                    class="signup-input passenger-input"
                                    ng-model="signUpModel.phone"
                                    name="signUpFormPhone"
                                    required>
                                    <div ng-messages="signUpDesktopForm.signUpFormPhone.$error">
                                        <p class="validation-error" ng-message="required">Boş Geçilemez</p>
                                    </div>
                                </div>


                                <div class="w100 fl p-0 z-index2">

                                    <input type="text"
                                    id="datepicker" 
                                    placeholder="Doğum Tarihiniz"
                                    class="signup-input passenger-input account-date"
                                    ng-model="signUpModel.birthdate"
                                    name="signUpFormBirthdate"
                                    required>

                                </div>

                                <div class="w100 fl p-0 z-index2">

                                    <input type="text"
                                    placeholder="Tc Kimlik veya Pasaport Numaranız"
                                    class="signup-input passenger-input"
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
                                    class="signup-input passenger-input w48"
                                    ng-model="signUpModel.password"
                                    name="signUpFormPassword"
                                    required>


                                    <input type="password"
                                    placeholder="Şifre Tekrar"
                                    class="signup-input passenger-input w48"
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
                                    <div class="col-md-12 text-align-left p-0 fl fs-14 mt-2">Cinsiyet seçiniz</div>

                                    <div class="mr-2 fl w49">
                                        <input checked class="radiobutton" type="radio" name="radio5" id="radio3" value="1">
                                        <label class="radiobutton-label" for="radio3">
                                            <span>Kadın</span>
                                        </label>
                                    </div>

                                    <div class="w48 fl">
                                        <input class="radiobutton" type="radio" name="radio5" id="radio4" value="2"><label class="radiobutton-label" for="radio4">
                                            <span>Erkek</span>
                                        </label>
                                    </div>

                                    <div ng-messages="signUpDesktopForm.signUpFormGender.$error">
                                        <p class="validation-error" ng-message="required">Cinsiyet seçiniz</p>
                                    </div>
                                </div>

                                <div class="w100 fl p-0 z-index2 mt-2">
                    
                                    <div class="w100 fl p-0 white-box">
                                        <input type="checkbox" id="sms-eposta">
                                        <label for="sms-eposta" class="fs-14 fw-400"> Metro Turizm KVKK kapsamında kişisel verilerin korunması, saklanması ve işlenmesi hakkında Aydınlatma Metni'ni okudum.</label>
                                    </div>

                                    <div ng-messages="signUpDesktopForm.signUpFormContract.$error">
                                        <p class="validation-error mb-2" ng-message="required">Kayıt için sözleşmeyi onaylayınız</p>
                                    </div>

                                    <div class="w100 fl p-0 white-box">
                                        <input type="checkbox" id="kampanya">
                                        <label for="kampanya" class="fs-14 fw-400"> SMS ve Eposta ile Kampanyalardan haberdar olmak istiyorum.</label>
                                    </div>

                                </div>

                                <button type="submit" class="btn fl col-md-4 button_safe_price mt-3 mb-4">KAYIT İŞLEMİNİ TAMAMLA</button>
                                
                            </div>
                        </div>

                        <div class="position-absolute right0 bottom0 z-index0 mobile-none">
                        <img src="assets/img/passenger-card.png" alt="Kayıt Ol Banner">
                    </div>

                    </div>
                </div>

                <button class="btn btn-primary btn-sm fr passenger-save" type="submit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">Kaydet</button>

            </div>

        </div>

    </div>

<?php include("inc/footer.php"); ?>

<?php include("inc/js.php"); ?>

</body>
</html>