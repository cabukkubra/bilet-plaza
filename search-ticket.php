<!DOCTYPE html>
<html lang="tr">
<head>

	<?php include("inc/head.php"); ?>

</head>
<body>

    <div class="col-md-12 p-0 banner-fluid desktop-none">
        <div class="container">
            <h2 class="position-absolute banner-slogan">Uçuş Yap, <strong> Puan Kazan </strong></h2>
        </div>
        <picture>
            <source srcset="assets/img/web-mobil-banner3.jpg" class="w100" media="(max-width: 767px)">
            <source srcset="assets/img/web_banner3.jpg" class="w100">
            <img src="assets/img/web_banner3.jpg" class="w100" alt="Biletplaza Slider">
        </picture>
    </div>

	<?php include("inc/header2.php"); ?>

	<div class="ticket-search-subpage col-md-12 fl p-0">

		<div class="container p-0">

			<div class="row no-gutters">
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
                            <img src="assets/img/forward-arrow.svg" alt="Transfer" class="ml-1 mobil-transfer-icon" width="30">
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
                    <div class="col-lg-4 col-md-4 col-12"><button type="submit" class="btn ticket-search-button w100">BİLET ARA</button></div>
                </div>
            </div>
        </div>


			<div class="fl col-md-12 p-0">

				<div class="fl price-select p-0 tablet-margin0">

					<select class="form-control sort-filter">
						<option value="hide">Sırala&nbsp; : &nbsp;En düşük fiyat</option>
						<option>En düşük fiyat</option>
						<option>En yüksek fiyat</option>
						<option>En yeniler</option>
					</select>

				</div>

                <div class="fl ticket-passenger position-relative mobile-counter ml-4 tablet-margin0">
                    <button type="button" class="active dropdown-list bg-white dropdown-person dropdown-list-color" data-dropdown-toggle="dropdown-list">Yolcu Bilgileri </button>
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


				<div class="fl col-lg-6 col-md-12 quick-filters-nav mobile-none">

					<span class="mr-2 fw-600">Hızlı Filtreler&nbsp;:</span>

					<li class="seat">
						<input type="checkbox" id="Aktarmasız" />
						<label for="Aktarmasız">Aktarmasız</label>
					</li>

					<li class="seat">
						<input type="checkbox" id="Sabah" />
						<label for="Sabah">Sabah</label>
					</li>

					<li class="seat">
						<input type="checkbox" id="Ogle" />
						<label for="Ogle">Öğle</label>
					</li>

					<li class="seat">
						<input type="checkbox" id="Aksam" />
						<label for="Aksam">Akşam</label>
					</li>

				</div>

				<div class="fr col-md-2 mb-quicfiltertext">

                    <!--Filtre Menü -->
                    <a class="filtermenu fw-600" data-toggle="collapse" href="#filtermenu" role="button" aria-expanded="false" aria-controls="filtermenu">
                        Tüm Filtreler 
                        <i class="ml-2"><img src="assets/img/filter-icon.png"></i>
                    </a>

                    <div class="collapse filter-nav-menu" id="filtermenu">
                        <div class="card card-body">
                            <li class="dropdown-filter-menu">
                                <a href="javascript:void(0)" class="drop-filter-title">OTOBÜS FİRMALARI</a>
                                <div class="filter-menu-info">

                                    <div class="seat2">
                                        <input type="checkbox" id="tumunusec-otobus" />
                                        <label for="tumunusec-otobus" class="filter-menu-active">Tümünü Seç</label>
                                        <!--tümünü seç derse hepsinde active classı olacak olacak -->
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Metro" />
                                        <label for="Metro">Metro Turizm</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Kamilkoc" />
                                        <label for="Kamilkoc">Kamilkoç</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Pamukkale" />
                                        <label for="Pamukkale">Pamukkale</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="GoreleSeyahat" />
                                        <label for="GoreleSeyahat">Görele Seyahat</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Ulusoy" />
                                        <label for="Ulusoy">Ulusoy</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="istanbulseyahat" />
                                        <label for="istanbulseyahat">İstanbul Seyahat</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="findikkale" />
                                        <label for="findikkale">Fındıkkale</label>
                                    </div>

                                </div>
                            </li>


                            <li class="dropdown-filter-menu">
                                <a href="javascript:void(0)" class="drop-filter-title">FİYAT ARALIKLARI</a>
                                <div class="filter-menu-info">

                                    <div class="seat2">
                                        <input type="checkbox" id="tumunusec-otobus" />
                                        <label for="tumunusec-otobus" class="filter-menu-active">Tümünü Seç</label>
                                        <!--label classı eğer tümünü seç derse olacak -->
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="tumunusec-otobus" />
                                        <label for="tumunusec-otobus">En Düşük Fiyat</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Metro" />
                                        <label for="Metro">En Yüksek Fiyat</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Metro" />
                                        <label for="Metro">En Yeniler</label>
                                    </div>
                                </div>
                            </li>


                            <li class="dropdown-filter-menu">
                                <a href="javascript:void(0)" class="drop-filter-title">KOLTUK SEÇENEKLERİ</a>
                                <div class="filter-menu-info">

                                    <div class="seat2">
                                        <input type="checkbox" id="tumunusec-otobus" />
                                        <label for="tumunusec-otobus" class="filter-menu-active">Tümünü Seç</label>
                                        <!--label classı eğer tümünü seç derse olacak -->
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="tumunusec-otobus" />
                                        <label for="tumunusec-otobus">2+1</label>
                                    </div>

                                    <div class="seat2">
                                        <input type="checkbox" id="Metro" />
                                        <label for="Metro">2+2</label>
                                    </div>

                                </div>
                            </li>

                        </div>
                    </div>

                    <!--Filtre Menü -->

                </div>

            </div>

        </div>

    </div>

    <div class="fl col-md-12 p-0 mt-4">
        <div class="container p-0">

            <div class="col-md-8 fl p-0">
                <div class="list-search">

                   <ul class="search-tabs">
                        <li>
                            <i class="mobile-none">
                                <?xml version="1.0" encoding="utf-8"?>
                                    <svg version="1.1" id="katman_1" class="search-tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 23.4 28.8" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#265979;}
                                    </style>
                                    <g id="train" transform="translate(-899.801 -242.393)">
                                        <path id="Path_24518" class="st0" d="M918.9,269.5h-14.7c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0,0,0,0,0,0h14.7
                                        c0.4,0,0.7-0.3,0.7-0.7C919.6,269.9,919.3,269.5,918.9,269.5C918.9,269.5,918.9,269.5,918.9,269.5L918.9,269.5z"/>
                                        <path id="Path_24519" class="st0" d="M922.9,269.9l-3.1-2.6c-0.1-0.1-0.1-0.1-0.2-0.1l-1.7-1.5c1.5-0.2,2.6-1.5,2.6-3.1v-16.9
                                        c0-1.3-2.6-2.4-6.2-2.8v0c0-0.3-0.2-0.5-0.5-0.5h-4.8c-0.3,0-0.5,0.2-0.5,0.5v0c-3.6,0.4-6.2,1.5-6.2,2.8v16.9
                                        c0,1.5,1.1,2.8,2.6,3.1l-1.7,1.4c-0.1,0-0.1,0.1-0.2,0.1l-3.1,2.6c-0.3,0.3-0.4,0.7-0.1,1c0.3,0.3,0.7,0.4,1,0.1c0,0,0,0,0,0l3-2.5
                                        H919l3,2.5c0.3,0.3,0.8,0.2,1-0.1C923.3,270.6,923.2,270.1,922.9,269.9L922.9,269.9z M907.7,244.9h7.5v2.1h-7.5V244.9z
                                        M904.1,250.4c0-0.9,0.8-1.7,1.7-1.7l0,0h11.4c0.9,0,1.7,0.8,1.7,1.7v0v7.2c0,0.9-0.8,1.7-1.7,1.7l0,0h-11.4
                                        c-0.9,0-1.7-0.8-1.7-1.7l0,0V250.4z M904.2,262.7c0-0.7,0.6-1.3,1.3-1.3c0.7,0,1.3,0.6,1.3,1.3s-0.6,1.3-1.3,1.3
                                        C904.8,264.1,904.2,263.5,904.2,262.7C904.2,262.7,904.2,262.7,904.2,262.7L904.2,262.7z M905.7,267.1l1.6-1.3h8.4l1.6,1.3H905.7z
                                        M916.1,262.7c0-0.7,0.6-1.3,1.3-1.3c0.7,0,1.3,0.6,1.3,1.3s-0.6,1.3-1.3,1.3C916.7,264.1,916.1,263.5,916.1,262.7
                                        C916.1,262.7,916.1,262.7,916.1,262.7L916.1,262.7z"/>
                                    </g>
                                </svg>
                            </i>
                            
                             TREN
                        </li>
                        <li class="search-tab-active">
                            <i class="mobile-none">
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg version="1.1" id="katman_1" class="search-tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.4 26.6" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#265979;}
                                    </style>
                                    <path id="bus-icon" class="st0" d="M24.6,6.1V3c0-1.6-5-3-11.2-3S2.2,1.3,2.2,3v3C1,6.2,0,7.2,0,8.5v0.7c0,1.3,1,2.4,2.2,2.6v8.3
                                    c0,0.9,0.4,1.8,1.1,2.4v2c0,1.1,0.9,2.1,2.1,2.1h0.3c1.1,0,2.1-0.9,2.1-2.1v-1.3H19v1.3c0,1.1,0.9,2.1,2.1,2.1h0.3
                                    c1.1,0,2.1-0.9,2.1-2.1v-2c0.7-0.6,1.1-1.5,1.1-2.4v-8.4c1.1-0.3,1.9-1.3,1.9-2.5V8.5C26.4,7.4,25.7,6.4,24.6,6.1z M9.6,2.1h7.6v2.1
                                    H9.6V2.1z M5.6,21.5c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4l0,0C6.9,20.9,6.3,21.5,5.6,21.5L5.6,21.5z
                                    M21.2,21.5c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4l0,0C22.6,20.9,22,21.5,21.2,21.5L21.2,21.5z M22.7,15
                                    c0,0.9-0.8,1.7-1.7,1.7h0H5.9c-0.9,0-1.7-0.8-1.7-1.7v0V7.7C4.1,6.7,4.9,6,5.9,6h0H21c0.9,0,1.7,0.8,1.7,1.7v0V15z"/>
                                </svg>
                            </i>
                             OTOBÜS
                        </li>
                        <li>
                            <i class="mobile-none">
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg version="1.1" id="katman_1" class="search-tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 33.6 32.4" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#265979;}
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
                            </i>
                             UÇAK
                        </li>
                    </ul>
                        
                    <div class="price-scroll mb-2">
                        <div class="table-box">
                            <div class="table-row">

                                <div class="position-relative fl w100">
                                    <i class="fas fa-chevron-left price-left-icon"></i>
                                </div>

                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 35%">
                                        <p>35</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 65%">
                                        <p>65</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 100%">
                                        <p>100</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>

                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 35%">
                                        <p>35</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 65%">
                                        <p>65</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table price-table-selected" style="height: 100%">
                                        <p>100</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>

                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 35%">
                                        <p>35</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 65%">
                                        <p>65</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 100%">
                                        <p>100</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>

                                <div class="table-cell">
                                    <div class="price-table" style="height: 25%">
                                        <p>25</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                <div class="table-cell">
                                    <div class="price-table" style="height: 35%">
                                        <p>35</p>
                                        <span>03 <em>Pts</em></span>
                                    </div>
                                </div>
                                
                                
                                <div class="position-relative fl w100">
                                    <i class="fas fa-chevron-right price-right-icon"></i>
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <ul class="w100 day-next-prev">
                        <li>
                            <i class="fas fa-angle-left"></i>
                            <a href="">Önceki Gün</a>
                        </li>

                        <li class="active-day">
                             22 Kasım Aralık
                        </li>

                        <li>
                            <a href="">Sonraki Gün</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                    </ul>

                    <ul class="tab-content">
                        <li>
                            <div class="tab-content-wrapper">
                                <?php include("inc/search-train.php"); ?>
                            </div>
                        </li>

                        <li class="search-tab-active">

                            <?php include("inc/search-bus.php"); ?>

                        </li>

                    	<li>
                    		<div class="tab-content-wrapper">
                    			<?php include("inc/search-fly.php"); ?>
                    		</div>
                    	</li>
            		</ul>
        	   </div>
            </div>

    		<div class="col-md-4 fr p-0 pl-4 mobile-none">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.2946126804013!2d28.89250031522625!3d41.04068597929755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba86aaaaaaab%3A0x16f276a0cf86d47e!2sAtlas%20Yaz%C4%B1l%C4%B1m%20Ve%20Bili%C5%9Fim%20Hizmetleri%20Tic.A.%C5%9E.!5e0!3m2!1str!2str!4v1578644612981!5m2!1str!2str" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    		</div>
    	</div>

    </div>

    <?php include("inc/footer.php"); ?>

	<?php include("inc/js.php"); ?>

</body>
</html>