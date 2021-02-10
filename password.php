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
                <form class="needs-validation" novalidate>
                    <div class="form-row pl-3">

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom01">Eski Şifre</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Eski Şifre" required>
                            <div class="valid-feedback">
                                Geçerli!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom02">Yeni Şifre</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Yeni Şifre" required>
                            <div class="valid-feedback">
                                 Geçerli!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 account-form">
                            <label for="validationCustom02">Yeni Şifre (Tekrar)</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Yeni Şifre (Tekrar)" required>
                            <div class="valid-feedback">
                                 Geçerli!
                            </div>
                        </div>
                    </div>

                </form>

                <button class="btn btn-primary btn-sm fr passenger-save" type="submit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">Kaydet</button>

            </div>

        </div>

    </div>

<?php include("inc/footer.php"); ?>

<?php include("inc/js.php"); ?>

</body>
</html>