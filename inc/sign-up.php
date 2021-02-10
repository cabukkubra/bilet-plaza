<div class="sign-in modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close close-sign-up" data-dismiss="modal">&times;</button>
			<div class="container" id="container-signup">
				<div class="form-container sign-up-container">
					<!--<p>
						{{JSON.stringfy(signUpDesktopForm)}}
					</p>-->

					<form class="signup-form" name="signUpDesktopForm" ng-submit="signUpDesktopForm.$valid && signUpDesktopForm._handleSubmitSignUp()">

						<h3 class="sigup-title">Hesap Oluşturun</h3>
						<div class="social-container">
							<a href="#" class="social signup-a"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social signup-a"><i class="fab fa-google-plus-g"></i></a>
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
								<div class="col-md-6 fl p-0">
									<div ng-messages="signUpDesktopForm.signUpFormName.$error">
										<p class="validation-error" ng-message="required">Boş Geçilemez</p>
									</div>
								</div>

								<div class="col-md-5 fl p-0">
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

							<label class="checked-container col-md-3 mr-3 mt-2 fl">Kadın
								<input type="radio" checked="checked"
								ng-model="signUpDesktopForm.gender"
								name="signUpFormGender"
								value="1"
								required />
								<span class="checkmark"></span>
							</label>

							<label class="checked-container col-md-3 mt-2 fl">Erkek
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
								<p class="fs-12 text-align-left fl gray-color ml-2"> SMS ve Eposta ile Kampanyalardan haberdar olmak istiyorum.</p>
							</div>

							<div ng-messages="signUpDesktopForm.signUpFormContract.$error">
								<p class="validation-error" ng-message="required">Kayıt için sözleşmeyi onaylayınız</p>
							</div>
						</div>

						<button type="submit" class="signup-button z-index2">Kaydol</button>
						
					</form>

					<div class="position-absolute top0 left0 z-index0">
						<img src="assets/img/signin.png" alt="Kayıt Ol Banner">
					</div>
				</div>


				<div class="form-container sign-in-container">
					<form class="signup-form" name="signInDesktopForm" novalidate ng-submit="signInDesktopForm.$valid && _handleLogin()">
						<h3 class="sigup-title">Giriş Yap</h3>
						<div class="social-container">
							<a href="#" class="social signup-a"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social signup-a"><i class="fab fa-google-plus-g"></i></a>
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
					</form>
					<div class="position-absolute top0 left0 z-index0">
						<img src="assets/img/signin.png" alt="Kayıt Ol Banner">
					</div>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h3 class="sigup-title">Tekrar hoşgeldiniz!</h3>
							<p class="signup-p">
								Fırsat, indirim ve kampanyalarımızdan yararlanmak için lütfen giriş
								yapın
							</p>
							<button class="ghost signup-button" id="signIn">Giriş Yapın</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h3>Merhaba!</h3>
							<p class="signup-p">Kayıt olun ve bizimle seyahat etmeye başlayın.</p>
							<button class="ghost signup-button" id="signUp">Kaydol</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="contract-signin" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fl fs-14">BİLETPLAZA Gizlilik ve Kullanım Şartları</h4>
                <button type="button" class="close fr" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body contract-modal fs-14">
                <p>
					Güvenin ve gizliliğin sizin için ne kadar önemli olduğunu biliyoruz. <br>

					www.biletplaza.com’u ziyaret ettiğiniz veya bilet satın almak istediğiniz zamanlarda periyodik olarak lütfen bu sayfayı okuyunuz.<br>

					www.biletplaza.com’u ziyaret etmek veya bilet satın almakla, bu sitenin kullanılmasına ilişkin koşulları, gizlilik politikasını ve site ile ilgili tüm cari kanunları, yönetmelikleri ve mevzuatı açıkça kabul etmiş sayılırsınız.<br>

					<h3> Tanımlamalar </h3><br>

					"Biletplaza" : Atlas Yazılım ve Bilişim Hizmetler A.Ş., www.biletplaza.com online bilet hizmeti, cep telefonları, tabletler ve her türlü benzeri elektronik ortamda kullanılan Biletplaza mobil online bilet hizmetlerini kapsayan tüm içeriği ifade eder.<br>

					"Kullanıcı" : Biletplaza’yı ziyaret eden ve/veya bilet alan kişiyi ifade eder.<br>

					“Hizmet”: Kullanıcının Biletplaza üzerinden bilet satın alma işlemini ifade eder.<br>

					"Hizmet Bedeli" : Yapılan anlaşmalar dahilinde bazı etkinliklerde biletin gişe satış fiyatı üzerine eklenerek Kullanıcıdan tahsil edilen ve Biletplaza'nın yapmış olduğu hizmetler için alınacak olan bedeli ifade eder.<br><br>

					<h3>BiletPlaza Gizlilik ve Kullanım Koşulları</h3><br>

					Biletplaza'nın sitesini ziyaret ettiğinizde, ziyaretinize ait genel nitelikte, kişisel olmayan bazı bilgiler toplanıp kaydedilebilir. Bu bilgiler içinde, ziyaretinizin zamanı ve süresi, sitede izlenen sayfalar ve bizim sitemize gelmeden hemen önce ziyaret edilen sitenin bilgisi de bulunabilir. Bu bilgiler sadece, site aktivitesini ölçmek, sitemizi geliştirecek fikirler üretebilmek ve sizlerin site içerisindeki işlemlerinizi hızlandırmak için kullanılır. Sitemiz tüm ziyaretçilerin kullanımına açık olmakla birlikte, sadece üyelerin izlemesine ve katılımına açık bazı bölümler de içermektedir. Sitedeki haber ve bölümler hakkında görüş bildirme, etkileşimli anket, test ve yarışmalara katılım bunların başlıcalarıdır. Bu bölümleri kullanabilmek için üye girişi yapmanız gerekecektir.<br><br>

					<h3>Kişisel Bilgilerin Toplanması ve Kullanılması</h3><br>

					Biletplaza, üyelerin katılımıyla zenginleşecek, paylaşımcı ve katılımcı bir bilet satış internet sitesi olmayı hedeflemektedir. Bu doğrultuda sizleri tanımak ve tercihlerinizi takip etmek amacıyla, sitemize üye olurken kendinize ve ilgi alanlarınıza dair kişisel bilgileri bizimle paylaşmanız istenebilir.<br><br>

					<h3>Toplanan Kişisel Bilgiler</h3><br>

					Bir Biletplaza hesabı oluşturduğunuzda, bir etkinlik için bilet aldığınızda veya Biletplaza’nın site işlevlerinden herhangi birisini kullandığınızda, adınız, adresiniz, telefon numaranız, e-posta adresiniz, irtibat tercihleriniz ve kredi kartı bilgileriniz dahil olmak üzere çeşitli bilgileri toplayabiliriz.<br>

					Biletplaza sitesini kullanarak site içeriğini aileniz, arkadaşlarınız ve diğer kişilerle paylaştığınızda veya etkinlikler önerdiğinizde, ad, adres, e-posta adresi ve telefon numarası da dahil olmak üzere bu kişiler hakkında sunduğunuz bilgileri toplayabiliriz.<br><br>

					<h3>Kişisel Bilgilerin Kullanılması</h3><br>

					İstediğiniz takdirde onay vererek bizimle paylaşacağınız bu bilgiler, başka hiçbir kişi ya da şirketle paylaşılmayacak, sadece ilgi alanlarınıza yönelik haber ve etkinlikler sunmak, sizi sitemizdeki yeniliklerden ve etkinliklerden haberdar etmek, ürünlerimizin, kampanyalarımızın, hizmetlerimizin, içeriğimizin ve reklamlarımızın geliştirilmesi, sunulması ve iyileştirilmesi için kullanılacaktır. Kişisel bilgilerinizi bizimle paylaşmak ve sitemize üye olmak, sizin istek ve onayınızla gerçekleşecektir. İstediğiniz takdirde, sitedeki bilgilerinizi güncelleyebilir, e-posta iletişim onaylarınızı iptal edebilirsiniz.<br>

					Sizden bilgi talep ettiğimiz her durumda, zorunlu olarak vermenizi istediğimiz bilgileri açık bir şekilde tanımlayarak, bu bilgileri değiştirme ve iptal etme hakkını size tanıyacak ve ne şekilde kullanılacağı hakkında bilgi vereceğiz.<br><br>

					<h3>Değişiklik Hakları</h3><br>

					Biletplaza, gelişen şartlar dahilinde herhangi bir zamanda kullanım koşulları ve gizlilik politikasında değişiklik yapma hakkını saklı tutar. Biletplaza herhangi bir zamanda hizmet bedeli eklemek de dahil olmak üzere Kullanım Şartlarına yeni eklemeler yapabilir. Bu eklemeler, değişiklikler, düzenlemeler, ya da iptaller ilan edilir edilmez www.biletplaza.com’da yayınlanacak, ayrıca Kullanıcının kayıt esnasında vermiş olduğu bilgiler doğrultusunda en etkin yöntemlerle bildirimler yapılacaktır. Bu yüzden Kullanıcıya ilgili gelişmelerin bildirilebilmesi için kayıt esnasında verdiği bilgilerin doğru olması gerekmektedir; aksi takdirde her türlü sorumluluk Kullanıcıya ait olacaktır.<br>

					Kullanıcı, Biletplaza’yı kullanmakla bu olası değişiklikleri ve düzenlemeleri de kabul etmiş sayılır.<br><br>

					<h3>Yaş Sınırlaması</h3><br>

					Uluslararası düzenlemeler, internet sitelerinde 13 yaşının altındaki gençlerin kişisel bilgilerinin toplanmasına sınırlar getirmektedir. Bu nedenle yaşınız 13'ün altında ise, Biletplaza’ya üye olup satın alma işlemi yapamayacağınızdan, velinizin onayıyla onun üyeliği üzerinden işlem gerçekleştirebilirsiniz.<br><br>

					<h3>Bilgilerin Korunumu</h3><br>

					Biletplaza, sizinle ilgili hiçbir kişisel bilginizi web sitesinde barındırmaz. Web sitesinde saklanan bilgiler tamamen istatistiksel bilgiler olup hiçbir kişisel bilgi içermez. Tüm kişisel bilgileriniz daha güvenli bir alanda saklanmaktadır. Kredi kart numaralarınız en yeni e-ticaret teknolojisi kullanılarak şifrelendirilir. Biletplaza’da veri güvenliği sistemleri kullanılmaktadır. Bu amaçla Biletplaza, "COMODO"'nun güvenlik kapsamı içindedir. Güvenli sunucu yazılımımız (SSL) endüstri standartlarında olup, kredi kartı işlemleriniz için en güvenilir güvenlik sistemidir.<br>

					Kredi kartınıza ait bilgiler sistemimiz üzerinde kayıt altında tutulmamaktadır. Bu kuralın tek istisnası olarak, kredi kartınıza ait kart numaranız, onay vermeniz halinde, ödeme işlemlerinizi hızlandırmak ve hizmet kalitesini arttırmak amacıyla, güvenli bir alanda saklanmak üzere kaydedilebilir. Bu kapsamda, kredi kartınıza ait CVC (kart doğrulama kodu) bilgisi hiçbir şekilde kaydedilmeyecektir.<br>

					Biletplaza, kart bilgileriniz de dahil olmak üzere sistemimiz üzerinden işlenen tüm bilgi ve işlemleriniz için gerekli güvenlik önlemlerini almaktadır. Ancak Kullanıcı, kullanım sırasında hiçbir sistem hakkında tam olarak güvence verilemeyeceğini unutmamalı ve Biletplaza üzerinden yapacağı işlemleri bu husus doğrultusunda gerçekleştirmelidir.<br>

					Biletplaza üzerinden yapacağınız işlemler için belirli bir aşamadan sonra Üye Girişi yapmanız ve işlemlerinizi kişisel bilgilerinizle tamamlamanız istenecektir. Eğer ortak bir bilgisayar kullanıyorsanız, işlemleriniz tamamlandıktan sonra çıkış işlemi yapmanız gerekecektir. Aksi takdirde üyelik işlemleriniz ya da satın almış olduğunuz hizmet üzerinde üçüncü kişiler tarafından yapılabilecek işlemlerden Biletplaza sorumlu olmayacaktır.<br>

					Yasaların men ettiği durumlar haricinde ve kayıt esnasında belirtmediğiniz
					takdirde isim veya adresiniz diğer organizasyonlarla paylaşılmayacaktır. Üçüncü bir tarafın kimliğinizin ifşasını talep eden bir mahkeme celbi veya diğer bir yasal evrakla başvurması halinde, dosyalarımızda yer alan en son adresinizi kullanarak durumu size bildirmek için makul bütün çabalar gösterilecektir. Bu durumda, kayıtlarda bulunan irtibat bilgilerinizin güncel olmamasından veya başka şekillerde size bildirimde bulunulamayacak durumda olmamızdan Biletplaza sorumlu olmayacaktır.<br>

					Biletplaza aşağıda sayılan hallerde işbu hükümlerin dışına çıkarak kullanıcılara ait bilgileri üçüncü kişilere açıklayabilecektir. Bu durumlar;<br>

					• Yasa, KHK, Yönetmelik vb. yetkili hukuki makamlar tarafından çıkarılan ve yürürlükte bulunan hukuk kurallarının getirdiği zorunluluklara uyulmasının gerektiği haller,
					• Biletplaza’nın kullanıcılarıyla arasındaki sözleşmelerin gereklerinin yerine getirilmesi ve bunların uygulamaya koyulmalarıyla ilgili haller,
					• Yetkisi idari ve/veya adli makamlar tarafından hukuk ve usul kurallarına uygun olarak yürütülen bir araştırma veya soruşturma doğrultusunda kullanıcılarla ilgili bilgi talep edilmesi halleri,
					• Kullanıcıların haklarını veya güvenliklerini koruma amacıyla bilgi verilmesinin gerekli olduğu hallerdir.

					İflas, yediemin tayini veya mülkiyetin diğer şekillerde devri halinde irtibat bilgileriniz halefe devredilecektir.<br>

					Biletplaza, kamu güvenliğinden sorumlu resmi makamlarla talepleri halinde kişisel bilgilerinizi paylaşma hakkını daima saklı tutar.<br><br>

					<h3>Sağlanan İçerikler ve Diğer Site Linkleri</h3>

					Biletplaza’nın sunduğu içeriğin bazı bölümleri, üçüncü kişiler tarafından sağlanmaktadır. Sitede belirtilen düşünce, tavsiye, hizmet, öneri ve diğer içeriğin yazarı veya sağlayıcısı üçüncü kişiler olduğu durumlarda, Biletplaza bu bilgilerin bütünlüğünden, kullanışlılığından ve doğruluğundan sorumlu değildir. Bu nedenle üçüncü kişiler tarafından yapılan fikri mülkiyet ihlalleri, Biletplaza’nın sorumluluğunda değildir.<br>

					Ayrıca, bu sitede diğer sitelerin linkleri bulunabilir. Biletplaza, bu web sitelerinin gizlilik uygulamaları, içerikleri ya da üçüncü tarafların gizlilik politikaları ve uygulamalarından sorumlu değildir.<br><br>

					<h3>Hizmet Bedeli</h3><br>

					Biletplaza’nın bilet satışlarıyla ilgili belirlenen hizmet bedelleri; bilet satışı gerçekleştirilen kişi, kurum ya da kuruluş ile Biletplaza arasında mutabık olarak imzalanmış olan sözleşmelere istinaden belirlenmektedir. Bu durumda Biletplaza tarafından işlem gören her bilet için, bilet değeri içinden veya bilet bedeli üzerinden kesilmek suretiyle hizmet bedeli alınmaktadır. Kullanıcı Biletplaza’dan bilet satın almakla, eğer varsa bilet bedeli üzerinden alınan bu bedelleri ödemeyi kabul etmiş sayılır.<br><br>

					<h3>Ödemelerde Uygulanacak Ek Güvenlik Önlemleri</h3>

					Biletplaza, ödemelerin azami derecede güvenliğini sağlamak ve kötü niyetli girişimlerin önüne geçmek amacıyla, ödemelerde uygulanacak bazı ek güvenlik önlemleri belirlemiştir. Kullanım koşulları ve gizlilik politikalarını kabul ederek bu tedbirlere uymayı da kabul etmiş sayılırsınız.<br>

					Buna göre;<br>

					Tüm alışverişlerde 3D Secure sistemini kullanmak ve ödemeleri bu kanalla gerçekleştirmek mecburidir.<br>

					3D Secure sistemine dair ayrıntılı açıklamaları Sık Sorulan Sorular sayfasında bulabilirsiniz.

					İlgili Kurumlar, İptaller, Ertelemeler ve İadeler<br>

					Biletplaza, anlaştığı kişi, kurum ya da kuruluşlar adına, bunlarla yapılan sözleşmelere istinaden bilet satmaktadır. Biletplaza, sağladığı hizmet konusunda seyahat firması garantisi, ortalama kalite garantisi dahil fakat bununla sınırlı olmayan belirli bir garanti vermez. Site ve içeriği "olduğu gibi" sunulmaktadır.<br>

					Anlaşma yapılan kişi, kurum ya da kuruluşun bilet satış politikaları ve yapılan sözleşmeler doğrultusunda, Biletplaza’nın satılan bir biletin bedelini ve eğer alındıysa hizmet bedelini iade etmesi söz konusu değildir.<br>

					Anlaşma yapılmış ve Biletplaza üzerinden bileti satılmış olan kişi, kurum ya da kuruluş, muhtelif sebeplerle hizmeti Kullanıcıya vermeyebilir veya erteleyebilir. Hizmetin herhangi bir şekilde iptal edilmesinden Biletplaza sorumlu değildir. Bu gibi durumlarda detaylı bilgi alabilmek için Biletplaza ile temasa geçmeniz gerekmektedir.<br>

					Gününde ve saatinde kullanılmayan biletler geçersiz olup, Biletplaza’nın bilet bedeli ve hizmet bedeli iadesi ve/veya değişikliği yapması mümkün değildir. Gün ve saatinde kullanılmayan biletlerin iadesi için Biletplaza’dan talepte bulunulamaz. Ancak ilgili kişi, kurum ya da kuruluşun seyahat iptal ya da erteleme ardından vereceği bilgiler ve gelişmeler, Biletplaza aracılığıyla Kullanıcıya mümkün olduğunca duyurulacaktır.<br>

					Metro turizm için uygulanan özel şartlar haricinde, mücbir sebepler dışında kesinlikle Biletplaza üzerinden iade işlemi gerçekleştirilmez. Mücbir sebepler; seyahatin iptali ve/veya değiştirilmesi, resmi makamlarca da teyid edilen hava muhalefeti, afet hali, grev, lokavt, savaş, terörist hareketler, otogar, peron, havaalanı, gar gibi seyahat başlangıç noktalarında yaşanan teknik aksaklıklar olarak tanımlanmaktadır. Mücbir sebepler; seyahatin iptali ve/veya değiştirilmesi durumlarında, Kredi Kart ve BKM Express ile ödeme seçeneği dışındaki diğer ödeme seçenekleri (Turkcell Cüzdan, PayPal, Mobil Ödeme) kullanılmış ise bilet iadeleri açık para yükleme işlemi olarak gerçekleştirilmektedir. Metro Turizm için her türlü iade işlemi bu kurumların kendi inisiyatifleri ile kendi sistemleri üzerinden yapılır.<br>

					www.biletplaza.com üzerinden satın alınan biletler iptal edilememekle birlikte Açık Bilet’e dönüştürülemez. Buna göre, biletinizi mücbir sebep ya da seyahatin iptali haricinde herhangi bir sebeple kullanmayacak iseniz, Metro Turizm biletleri için; 12 saate kadar, diğer firma biletleri için 24 saate kadar, biletiniz için ödediğiniz tutarı hesabına aktarabilirsiniz. Ancak hesabınıza aktarılan bilet ücretini sadece bilet alınan firmanın seferlerinde kullanılabilir. İptal ettiğiniz bilet işlemleri sonucunda oluşan bakiye bedelin iadesi yapılamaz.<br>

					Biletplaza ile birlikte Biletplaza'nın ortakları, çalışanları ya da içerik sağlayıcıları, sebebi ve süresinden bağımsız olarak Biletplaza'da ortaya çıkabilecek olası hata ve kasıtsız ihmallerden, kusurlardan veya bilgi eksikliğinden, kullanıcının maruz kaldığı kesintiden veya gecikmeden dolayı meydana gelebilecek zarardan sorumlu tutulamaz. Tüm bu kuruluşlar ya da kişiler, üçüncü şahısların hasar ve zarar iddialarından, cezalandırıcı tazminat veya dolaylı zararlardan dolayı sorumluluk kabul etmez.<br><br>

					<h3>Kullanıcı İlişkileri</h3><br>

					Biletplaza, herhangi bir seyahatin başarısızlığı, hatası, iptali veya gecikmesi, iletişim kesintisi, bilgisayar virüsü sonucu oluşan herhangi bir zarar veya ziyandan dolayı sorumluluk kabul etmez. Kullanıcı, Biletplaza’nın diğer kullanıcılarının usulsüz ve saldırgan davranışları, hakaretleri konusunda sorumlu tutulamayacağını kabul eder. Biletplaza, genel ahlak ve toplum kurallarına uygun davranmayan kullanıcıların üyeliklerini iptal etme hakkını saklı tutmakla birlikte, bu tür ilişkilerinden meydana gelebilecek zarardan Kullanıcının kendisi sorumludur.<br><br>

					<h3>İletişim</h3><br>

					Kullanıcı, Biletplaza ile iletişime geçmek istediğinde aşağıda belirtilen yolları kullanabilecektir.<br>

					E-Posta: biletplaza@atlasyazilim.com.tr<br>


					Büyük İstanbul Otogarı 58/15 Kod C-3 Kat:2 Bayrampaşa / İSTANBUL<br>
					Tel : 0 (212) 658 00 32<br>
					Fax : 0 (212) 658 22 14<br><br>

					<h3>Fikri Mülkiyet Hakları</h3><br>

					Biletplaza, bazıları kendine, bazıları ise 3.şahıslara ait telif hakkına konu olan metin, fotoğraf, grafik, ses müzik dahil bilgi ve materyalleri barındırmaktadır. Biletplaza, bu içerik, bilgi ve materyallerle ilgili eser/derleme olarak telif hakkına sahiptir. Kullanıcı sadece kişisel kullanım için kopya hakkına sahip olduğunu kabul eder ve Biletplaza’nın yazılı izni olmadan içerik ve materyallerde değişiklik yapamaz, kopyalayamaz, çoğaltamaz, yayınlayamaz, satamaz ve yasal olmayan şekilde kullanılmasına yardım edemez.<br>

					Aynı zamanda Kullanıcı Biletplaza’nın çalışmasına müdahale etmek veya müdahaleye teşebbüs etmek amacıyla herhangi bir alet, yazılım veya yöntem kullanmayacağını da kabul etmektedir. Biletplaza, her türlü izinsiz müdahale ve/veya uygulama karşısında yasal yaptırımları kullanma hakkını saklı tutar.<br><br>

					<h3>Uyuşmazlıkların Çözümü</h3><br>

					Kullanıcı siteyi kullanmakla site ile ilgili herhangi bir uyuşmazlık çıkması halinde bu uyuşmazlığın Türkiye Cumhuriyeti Kanunlarına tabi olacağını ve bu kanunlara göre çözümleneceğini kabul eder.<br>

					Biletplaza, Kullanıcılarının güvenliğini en yüksek seviyede tutabilmek için en yeni ve en iyi önlemleri sürekli araştırmakta ve etkin çözümlerini uygulamaya çalışmaktadır.<br>

					Amacımız sizlerin konforlu kaliteli bir seyahati en iyi ve en güvenli şekliyle gerçekleştirmenizdir.<br>

					Saygılarımızla.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>