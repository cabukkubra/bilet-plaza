<div class="container search-ticket-bar">
	<form class="filter-flight-bus">
		
		<div class="clearfix">
			<!--<div class="fl accommodation-options">
				<label class="fl switch mb-3">
					<input type="checkbox" class="tooglecheck" checked>
					<span class="toogle round"></span>
				</label>
				<span class="fl fontsize-13">Konaklama seçenekleri</span>
			</div>-->

			<div class="dropdown ticket-passenger ticket-way fl mt-0">
				<a href="#" class="js-link">Gidiş-Dönüş</a>
				<ul class="js-dropdown-list">
					<li>Gidiş-Dönüş</li>
					<li>Tek Yön</li>
				</ul>
			</div>

			<div class="fl ticket-passenger position-relative mobile-counter mt-0">
				<button type="button" class="active dropdown-list dropdown-person" data-dropdown-toggle="dropdown-list">Yolcu Bilgileri </button>
				<div id="dropdown-list" class="dropdown-menu left">
					<div id="adult-container" class=" collapse-counter">
						<span>1 Yetişkin</span>
						<button id="adult-up" class="counter-circle p-0">
							<i class="fas fa-minus up-arrow"></i>
						</button>
						<button id="adult-down" class="counter-circle p-0">
							<i class="fas fa-plus down-arrow"></i>
						</button>
					</div>

					<div id="child-container" class=" collapse-counter">
						<span>2 Çocuk</span>
						<button id="child-up" class="counter-circle p-0">
							<i class="fas fa-minus up-arrow"></i>
						</button>
						<button id="adult-down" class="counter-circle p-0">
							<i class="fas fa-plus down-arrow"></i>
						</button>
					</div>

					<div id="baby-container" class=" collapse-counter">
						<span>0 Bebek</span>
						<button id="baby-up" class="counter-circle p-0">
							<i class="fas fa-minus up-arrow"></i>
						</button>
						<button id="adult-down" class="counter-circle p-0">
							<i class="fas fa-plus down-arrow"></i>
						</button>
					</div>

					<div class="p-2 economy-business">
						<a href="" class="economy-class">Ekonomi</a>
						<a href="" class="business-class">Bussiness</a>
					</div>

				</div>
			</div>
		</div>
		
		<div class="row no-gutters mt-2">
			<div class="col-lg-6 col-md-12 col-12">
				<ul class="search-ticket-where">
					<li>

						<i class="position-absolute whereicon">
							<img src="assets/img/whereicon.svg" alt="Nereden">
						</i>

						<select id="ticket-where" class="js-states form-control">
							<option>İstanbul</option>
							<option>Nevşehir</option>
							<option>Konya</option>
							<option>Adana</option>
							<option>İstanbul</option>
							<option>Nevşehir</option>
							<option>Konya</option>
							<option>Adana</option>
							<option>İstanbul</option>
							<option>Nevşehir</option>
							<option>Konya</option>
							<option>Adana</option>
							<option>İstanbul</option>
							<option>Nevşehir</option>
							<option>Konya</option>
							<option>Adana</option>
						</select>
					</li>
					<li>
						<a href="">
                            <img src="assets/img/forward-arrow.svg" alt="Transfer" class="ml-2 mobil-transfer-icon" width="22">
                        </a>
					</li>
					<li>
						<i class="position-absolute whereicon3">
							<img src="assets/img/towhereicon.svg" alt="Nereye">
						</i>
						<select id="ticket-towhere" class="js-states form-control">
							<option>İstanbul</option>
							<option>Nevşehir</option>
							<option>Konya</option>
							<option>Adana</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-12 col-12">
				<div class="row no-gutters ticket-margin">
					<div class="col-lg-4 col-md-4 col-12"><input id="datepicker" class="ticket-datepicker w100"></div>
					<div class="col-lg-4 col-md-4 col-12 datepicker-default"><input id="datepicker2" class="ticket-datepicker2 w100"></div>
					<div class="col-lg-4 col-md-4 col-12"><button type="submit" class="btn ticket-search w100">BİLET ARA</button></div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>