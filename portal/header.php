<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- Jquery Ui -->
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<script src="js/jquery-ui.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<!-- Check Box -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	<!-- Basic Responsive Table Plugin -->
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />
	<script src="js/jquery.basictable.min.js"></script>
	<!-- Lightbox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
	<!-- kodakil Logo -->
	<link rel="stylesheet" href="https://kodakil.io/assets/Front/images/kodakil_footer/kodakil_logo.css">
	<!-- Chart JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<!-- Full Calender JS -->
	<link href='css/fullcalendar.min.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/gcal.min.js'></script>
	<script src='js/tr.js'></script>
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/icon.png"/>
	<title>OTO SESLİ 2018</title>
</head>
<body>
	<header>
		<div class="blueHeader">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-lg-3 col-sm-3 col-4">
						<a class="notification" href="">
							<i class="far fa-bell"></i><span>6</span>
						</a>
						<div class="User">
							<a id="user-menu-open" class="list-modal-button" data-toggle-id="user-menu-modal" href="javascript:void(0);">
								<img src="images/user.png">
								<span>
									Kerem AKSOY 
									<i class="fas fa-sort-down"></i>
								</span>
							</a>
						</div>
					</div>
					<div id="user-menu-modal" class="userMenu shadow list-modal-box">
						<div class="container">
							<div class="row">
								<div class="col-md-12 p-1">
									<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Bana Özel Özet</a>
										</li>
										<!--<li class="nav-item ">
											<a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Şifre İşlemleri</a>
										</li>-->
										<li class="nav-item">
											<a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">Hesap Hareketlerim</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="quality-tab" data-toggle="tab" href="#quality" role="tab" aria-controls="quality" aria-selected="false">Kalite Yönetim Sistemi</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="false">Raporlar </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="kullanici-bilgileri-tab" data-toggle="tab" href="#kullanici-bilgileri" role="tab" aria-controls="kullanici-bilgileri" aria-selected="false">Üyeliğim </a>
										</li>
									</ul>
									<div class="tab-content " id="myTabContent">
										<div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
											<div class="row p-3 ad-hoc">
												<div class="col-md-6 col-4 p-2">
													<a class="successWait" href="http://murat.kodakil.com/b2b/musterisiparisrapor.php">
														<div>
															<i class="fas fa-user-clock"></i>
															<p>Onay Bekleyen</p>
															<h5>233</h5>
														</div>
													</a>
												</div>
												<div class="col-md-6 col-4 p-2">
													<a class="transferWait" href="http://murat.kodakil.com/b2b/musterisiparisrapor.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="fas fa-user-edit"></i>
															<p>Sevk Bekleyen</p>
															<h5>155</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-4 p-2">
													<a class="readyWait" href="http://murat.kodakil.com/b2b/musterisiparisrapor.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="far fa-clock"></i>
															<p>Hazırlanan</p>
															<h5>155</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-4 p-2">
													<a class="readyWait" href="http://murat.kodakil.com/b2b/musterisiparisrapor.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="far fa-calendar-check"></i>
															<p>Hazırlanmış</p>
															<h5>845</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-4 p-2">
													<a class="readyWait" href="http://murat.kodakil.com/b2b/musterisiparisrapor.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="fas fa-file-invoice"></i>
															<p>Fatura Edilecek</p>
															<h5>222</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-4 p-2">
													<a class="readyOkey" href="http://murat.kodakil.com/b2b/gunlukistatistik.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="fas fa-coffee"></i>
															<p>Bugünki Ziyaretçi Sayınız</p>
															<h5>45</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-6 p-2">
													<a class="readyOkey" href="http://murat.kodakil.com/b2b/gunlukistatistik.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="fas fa-chart-line"></i>
															<p>Bugünki Satışınız</p>
															<h5>333</h5>
														</div>
													</a>
												</div>
												<div class="col-md-4 col-6 p-2">
													<a class="readyOkey" href="http://murat.kodakil.com/b2b/gunlukistatistik.php"><!-- Gittiği sayafadaki active değişecek sadece -->
														<div>
															<i class="fas fa-hand-holding-usd"></i>
															<p>Bugünki Tahsilatınız</p>
															<h5>444</h5>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
											<div class="container-fluid fatura-edilen">
												<div class="row">
													<div class="col-md-12 p-1">
														<select class="custom-select date-select w-auto mr-2">
															<option>Ay Seçiniz..</option>
															<option>Ocak</option>
															<option>Şubat</option>
														</select>
														<input class="form-control  w-auto date-select hh-pass" type="password" name="" placeholder="Şifre Giriniz..">
														<table class="table sanal-banka hesap-hareket-table">
															<tr>
																<th scope="col"></th>
																<th scope="col">BORÇ TUTARI</th>
																<th scope="col">ALACAK TUTARI</th>
																<th scope="col">BAKİYE TUTAR</th>
																<th scope="col">DETAY</th>
															</tr>
															<tr>
																<td scope="row">Maaş</td>
																<td>3000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Avans</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Prim</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Mesai</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">İzin</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Kâr Payı</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Kesinti</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
															<tr>
																<td scope="row">Kasa</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
																<td>2000 ₺</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="quality" role="tabpanel" aria-labelledby="quality-tab">
											<div class="row m-0">
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="far fa-compass"></i> 
														<h6>Talimatlar</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-puzzle-piece"></i>
														<h6>Prosedürler</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-project-diagram"></i>
														<h6>Süreçler</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-tasks"></i>
														<h6>Görev Tanımları</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-clipboard-list"></i>
														<h6>Formlar</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-cogs"></i>
														<h6>Yönetmelikler</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-12 m-auto">
													<div class="admin-control">
														<i class="fas fa-info"></i> 
														<h6>Özlük Bilgilerim</h6>
														<p>Lorem ipsum Dolor Sit Amet</p>
														<ul class="kalite-yonetim-download">
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-pdf"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-excel"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
															<li><a href="#" target="_blank"><i class="far fa-file-word"></i><p>LoremipsumDolorsitAmet Kurallardosyası</p></a></li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
											<div class="row line-report">
												<div class="col-md-12">
													<input class="form-control w-25 d-inline" type="date" name="reporttab-date-before" >
													<input class="form-control w-25 d-inline" type="date" name="reporttab-date-after">
													<canvas id="line-chart"></canvas>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="kullanici-bilgileri" role="tabpanel" aria-labelledby="kullanici-bilgileri-tab">
											<div class="container-fluid">
												<div class="row">
													<div class="col-md-3 col-3">
														<div class="ozel-uyeligim">
															<a href="images/test-image.jpg" data-lightbox="example-set" data-title="OTOSESLİ YETKİLİ FOTOĞRAFI">
																<img src="images/test-image.jpg">
															</a>
														</div>
													</div>
													<div class="col-md-5 col-5">
														<table class="table siparis-tutar-table text-left">
															<tr>
																<td>Adı Soyadı</td>
																<td>Murat Can YÖRÜSÜN</td>
															</tr>
															<tr>
																<td>Ünvan</td>
																<td>Front-End Developer</td>
															</tr>
															<tr>
																<td>Doğum Tarihi</td>
																<td>03.10.1994</td>
															</tr>
															<tr>
																<td>Telefon</td>
																<td>0362 542 55 44</td>
															</tr>
															<tr>
																<td>Cep Telefonu</td>
																<td>0555 000 00 00</td>
															</tr>
															<tr>
																<td>Kişisel E-Posta</td>
																<td>m.yorusun@kodakil.io</td>
															</tr>
														</table>
													</div>
													<div class="col-md-4 col-4">
														<table class="table siparis-tutar-table text-left">
															<tr>
																<td>Mevcut Şifre</td>
																<td><input class="form-control w-75" type="password" name="yetkili-name-surname" value="123456789"></td>
															</tr>
															<tr>
																<td>Yeni Şifre</td>
																<td><input class="form-control w-75" type="password" name="unvan" ></td>
															</tr>
															<tr>
																<td>Yeni Şifre Tekrar</td>
																<td><input class="form-control w-75" type="password" name="birth-date" ></td>
															</tr>

														</table>
														<div class="sabit-bilgi-btn text-right">
															<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
															<button class="sabit-btn-guncelle">Güncelle</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-6 col-sm-6 col-4">
						<span data-toggle-id="company-modal" class="company list-modal-button">10.55.053 / (GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2) / SAMSUN - MERKEZ</span>
						<div id="company-modal" class="subeDetay shadow list-modal-box">
							<div class="row">
								<div class="col-md-5 col-5 pr-0 border-gradient">
									<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<a class="nav-link active" id="comp-yetkili-tab" data-toggle="pill" href="#comp-yetkili" role="tab" aria-controls="comp-yetkili" aria-selected="false">Yetkili</a>
										<a class="nav-link" id="comp-sifre-tab" data-toggle="pill" href="#comp-sifre" role="tab" aria-controls="comp-sifre" aria-selected="true">Şifre</a>
										<a class="nav-link" id="comp-cari-info-tab" data-toggle="pill" href="#comp-cari-info" role="tab" aria-controls="comp-cari-info" aria-selected="false">Cari Bilgileri</a>
										<a class="nav-link" id="comp-iskonto-info-tab" data-toggle="pill" href="#comp-iskonto-info" role="tab" aria-controls="comp-iskonto-info" aria-selected="false">İskonto Bilgi</a>
										<a class="nav-link" id="comp-satis-info-tab" data-toggle="pill" href="#comp-satis-info" role="tab" aria-controls="comp-satis-info" aria-selected="false">Satış Bilgileri</a>
										<a class="nav-link" id="comp-risk-info-tab" data-toggle="pill" href="#comp-risk-info" role="tab" aria-controls="comp-risk-info" aria-selected="false">Risk Bilgileri</a>
										<a class="nav-link" id="comp-sevkiyat-tab" data-toggle="pill" href="#comp-sevkiyat" role="tab" aria-controls="comp-sevkiyat" aria-selected="false">Sevkiyat Bilgileri</a>
									</div>
								</div>
								<div class="col-md-7 col-7 pl-0 pr-4">
									<div class="tab-content pt-4" id="v-pills-tabContent">
										<div class="tab-pane fade" id="comp-sifre" role="tabpanel" aria-labelledby="comp-sifre-tab"> 
											<div class="subedetay-comment-area">
												<p>Kullanıcı Kodu</p><b>120.55.017</b>
												<p>Kullanıcı Sayısı</p><b>6</b>
												<p>B2b Şifre</p><b>**017</b>
												<p>Evrak Şifre</p><b>**017</b>
											</div>
										</div>
										<div class="tab-pane fade show active" id="comp-yetkili" role="tabpanel" aria-labelledby="comp-yetkili-tab">
											<div class="subedetay-comment-area">
												<img src="images/test-image.jpg">
												<p>Yetkili Adı Soyadı</p><b>Kerem AKSOY</b>
												<p>Firma Telefon Numara</p><b>(362) 999 55 55</b>
												<p>Yetkili Gsm Numara</p><b>555 555 55 55</b>
												<p>Yetkili E Posta Adresi</p><b>eposta@otosesli.com</b>
											</div>
										</div>
										<div class="tab-pane fade" id="comp-cari-info" role="tabpanel" aria-labelledby="comp-cari-info-tab">
											<div class="subedetay-comment-area">
												<p>Cari Borç</p><b class="down">3.500 ₺</b>
												<p>Cari Alacak</p><b class="rising">1.200 ₺</b>
												<p>Cari Bakiye</p><b>2.200 ₺</b>
												<p>Cari Puan</p><b>27.000 CP</b>
											</div>
										</div>
										<div class="tab-pane fade" id="comp-iskonto-info" role="tabpanel" aria-labelledby="comp-iskonto-info-tab">
											<div class="subedetay-comment-area">
												<p>İskonto Tipi</p><b>KA</b>
												<p>Vade Tipi</p><b>AY030</b>
												<p>Ödeme Tipi</p><b>NAKİT</b>
												<p>Ödeme Şekli</p><b>Cari Hesaba Mahsuben</b>
											</div>
										</div>
										<div class="tab-pane fade" id="comp-satis-info" role="tabpanel" aria-labelledby="comp-satis-info-tab">
											<div class="subedetay-comment-area">
												<p>Aylık Satış Hedefi</p><b>1500 ₺ - 2500 ₺</b>
												<p>Aylık Gerçekleşen</p><b class="rising">2.200 ₺ <i class="fas fa-sort-up"></i></b>
												<p>Aylık Ortalama</p><b class="down">1.200 ₺ <i class="fas fa-sort-down"></i></b>
												<p>Kar Marjı</p><b>%23.19</b>
											</div>
										</div>
										<div class="tab-pane fade" id="comp-risk-info" role="tabpanel" aria-labelledby="comp-risk-info-tab">
											<div class="subedetay-comment-area">
												<p>Risk Limiti</p><b>5.300 ₺</b>
												<p>Risk Teminat Limiti</p><b>1.500 ₺</b>
												<p>Kullanılan Limit</p><b>3.500 ₺</b>
												<p>Kullanılabilir Limit</p><b>2.800 ₺</b>
											</div>
										</div>
										<div class="tab-pane fade" id="comp-sevkiyat" role="tabpanel" aria-labelledby="comp-sevkiyat-tab">
											<div class="subedetay-comment-area">
												<p>Sevkiyat Şekli</p><b>Peşin Ödeme</b>
												<p>Sevkiyat Firma</p><b>MNG KARGO</b>
												<p>Sevkiyat Adresi</p><b>İstasyon mah. Anafartalar Cad. No:283/2</b>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3 col-sm-3 col-4">
						<ul class="bhRighticons">
							<li>
								<a id="envelope" class="list-modal-button" data-toggle-id="envelope-modal" href="javascript:void(0);"><i class="far fa-envelope"></i>
									<span>35</span>
								</a>

								<div id="envelope-modal" class="envelopeTab shadow list-modal-box">
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-siparis-tab" data-toggle="pill" href="#pills-siparis" role="tab" aria-controls="pills-siparis" aria-selected="true">Sipariş Bildirimleri<b>(5)</b></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-iade-tab" data-toggle="pill" href="#pills-iade" role="tab" aria-controls="pills-iade" aria-selected="false">İade Ürün Bildirimleri<b>(15)</b></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-odeme-tab" data-toggle="pill" href="#pills-odeme" role="tab" aria-controls="pills-odeme" aria-selected="false">Ödeme Bildirimleri<b>(15)</b></a>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-siparis" role="tabpanel" aria-labelledby="pills-siparis-tab">
											<a target="mesajlari-temizle" href="javascript:void(0);">Tümünü okundu olarak işaretle</a>
											<ul class="liststyle">
												<li>Favori ürününüzün fiyatı düşmüştür.</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li class="msg-readed">xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li class="msg-readed">xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li class="msg-readed">xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
												<li class="msg-readed">xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz onay beklemektedir.</li>
											</ul>
										</div>
										<div class="tab-pane fade" id="pills-iade" role="tabpanel" aria-labelledby="pills-iade-tab">
											<a target="mesajlari-temizle" href="javascript:void(0);">Tümünü okundu olarak işaretle</a>
											<ul>
												<li>xxxx no lu ürün iade talebi bekliyor..</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz iade edilmiştir.</li>
												<li>xxxx tarihli xxxx numaraları xxx tutarındaki siparişiniz iadesi tamamlanmıştır..</li>
											</ul>
										</div>
										<div class="tab-pane fade" id="pills-odeme" role="tabpanel" aria-labelledby="pills-odeme-tab">
											<a target="mesajlari-temizle" href="javascript:void(0);">Tümünü okundu olarak işaretle</a>
											<ul>
												<li>SH4389SA0 kodlu ürün ödemesi alındı.</li>
												<li>SH4389SA0 kodlu ürün ödeme bekleniyor.</li>
												<li>SH4389SA0 kodlu ürün ödeme bekleniyor.</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="excla-open">
								<a href="javascript:void(0);"><i class="fas fa-exclamation-triangle delay-md"></i></a>
								<!--.delay-xs  (gecikme 1-15)-->
								<!--.delay-sm (gecikme 16-30) -->
								<!-- .delay-md  (gecikme 31-45)  --> 
								<!--.delay-lg (gecikme 46-60)-->
								<!--.delay-xl ( gecikme 61+ ) -->
								<!--.risk-limiti ( gecikme 61+ ) -->
								<div class="exclamation-information shadow">
									<p><b>[16-30]</b> Gün aralığında <b>330,59 TL</b> gecikmiş borcunuz bulunmaktadır.</p>
									<p><b>[31-45]</b> Gün aralığında <b>660,77 TL</b> gecikmiş borcunuz bulunmaktadır.</p>
									<p><b>Risk limitiniz yetersizdir. Satış Temsilciniz ile irtibata geçiniz.</b></p>
								</div>
							</li>
							<li>
								<a id="comment-alt" class="list-modal-button" data-toggle-id="online-user-modal" href="javascript:void(0);">
									<i class="fas fa-users"></i>
								</a>
								<div id="online-user-modal" class="online-user shadow list-modal-box">
									<h4>Online Üyeler</h4>
									<h5><b>4 </b> Online Kullanıcı</h5>
									<div id="scroll-custom" class="onlineUsers">
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO SESLİ SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / BAFRA</p>
										</div>
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO TESTESTTESTETESTTSETSET SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / BAFRA</p>
										</div>
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO MURAT SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / BAFRA</p>
										</div>
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO İBO SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / ÇARŞAMBA</p>
										</div>
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO İBO SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / ÇARŞAMBA</p>
										</div>
										<div id="scroll-custom">
											<i class="fas fa-user-circle"></i>
											<p>OTO İBO SAN.TİC.LTD.STİ(ŞUBE1)</p>
											<p>SAMSUN / ÇARŞAMBA</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bgHeader">
			<div class="secondHeader">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-3 text-center"><a href="http://murat.kodakil.com/b2b/kampanyalar.php"><img class="logo" src="images/logo (1).png"></a></div>
						<div class="col-md-6 col-sm-6 col-7">
							<div class="buton_input">
								<form autocomplete="off">
									<div id="detay-arama-ac" class="buton_Detay">Detaylı Arama <i class="fas fa-sort-down"></i></div>
									<div id="detay-select-acik" class="DetaySelect shadow">

										<div class="form-row">
											<div class="form-group col-md-4">
												<select id="pr-marka" class="form-control">
													<option selected>Ürün Marka</option>
													<option>EUROCRAFT</option>
													<option>CABU</option>
													<option>CONTİTECH</option>
													<option>DJ PARTS</option>
													<option>GUNES</option>
													<option>MAXTEL</option>
													<option>MONTAJ</option>
													<option>OTOSAN</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<select id="vh-marka" class="form-control">
													<option selected>Araç Marka</option>
													<option>FORD</option>
													<option>BMW</option>
													<option>OPEL</option>
													<option>FİAT</option>
													<option>WOLSWAGEN</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<select id="vh-type-alt" class="form-control">
													<option selected>Ürün Alt Grup</option>
													<option>FREN SİLİNDİR VE AKSAMI</option>
													<option>FREN DİSK AYNALARI</option>
													<option>FREN KAMPANA</option>
													<option>FREN TABLASI</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
												<select id="vh-mother" class="form-control">
													<option selected>Ürün Ana Grup</option>
													<option>MOTOR PARÇALARI</option>
													<option>FREN SİSTEMİ</option>
													<option>AYDINLATMA AKSAMI</option>
													<option>KAPORTA PARÇALARI</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<select id="vh-type" class="form-control">
													<option selected>Araç Tipi</option>
													<option>TİCARİ</option>
													<option>BİNEK</option>
													<option>SUV / ARAZİ</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<select id="vh-model" class="form-control">
													<option selected>Araç Model</option>
													<option>FOCUS</option>
													<option>EGEA</option>
													<option>CLİO</option>
													<option>520i</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="pretty p-default p-round p-smooth m-auto">
												<input type="checkbox" />
												<div class="state p-success-o">
													<label>Stokta Olanlar</label>
												</div>
											</div>
											<div class="pretty p-default p-round p-smooth m-auto">
												<input type="checkbox" />
												<div class="state p-danger-o">
													<label>Kampanyalı Olanlar</label>
												</div>
											</div>
											<div class="pretty p-default p-round p-smooth m-auto">
												<input type="checkbox" />
												<div class="state p-warning-o">
													<label>Yeni Ürünler</label>
												</div>
											</div>
										</div>
									</div>
									<input id="overlay-active" type="text" name="name" placeholder="STOK KODU, STOK ADI, OEM, MARKA, MODEL'E GÖRE ARAMA YAP">
									<button id="inputCleanBtn" class="input-trash">Temizle</button>
									<button class="input-search">Ara <img src="images/search.png"></button>
								</form>
							</div>
						</div>
						<div class="col-md-3 col-sm-2 col-2 ">
							<div class="occupant">
								<img src="images/temsilcim.png">
								<div class="occupantCard shadow">
									<div class="row">
										<div class="col-5">
											<img src="images/temsilcim.png">
											<h4>Satış Temsilcisi</h4>
										</div>
										<div class="col-7">
											<p><b>Onur Ege Tan</b></p>
											<p>sadikcabuk@otosesli.com</p>
											<p>0555 000 00 00</p>

											<p><b class="sorumlum">Satış Destek Sorumlusu</b></p>
											<p><b>Onur Ege Tan</b></p>
											<p>sadikcabuk@otosesli.com</p>
											<p>0555 000 00 00</p>
										</div>
									</div>
								</div>
							</div>
							<div class="header-sepet">
								<div data-toggle-id="basket-modal" class="Basket list-modal-button">
									<i class="fas fa-shopping-basket"></i>
									<span>6</span>
								</div>
								<div id="basket-modal" class="BasketOpen list-modal-box">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="sepet-tab" data-toggle="tab" href="#sepet" role="tab" aria-controls="sepet" aria-selected="true">Sipariş Sepetim <b>12</b></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="favSepet-tab" data-toggle="tab" href="#favSepet" role="tab" aria-controls="favSepet" aria-selected="false">Favori Sepetim <b>15</b></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="sepetİade-tab" data-toggle="tab" href="#sepetİade" role="tab" aria-controls="sepetİade" aria-selected="false">İade Sepetim <b>4</b></a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="sepet" role="tabpanel" aria-labelledby="sepet-tab">
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="Total">
												<div>
													<p>Toplam (KDV Dâhil)</p>
													<p>129.99 ₺</p>
												</div>
												<a href="http://murat.kodakil.com/b2b/ordertab.php">Sepete Git</a>
											</div>
										</div>
										<div class="tab-pane fade" id="favSepet" role="tabpanel" aria-labelledby="favSepet-tab">
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#" onclick="Alert.warning('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 3000})"><i class="far fa-times-circle"></i></a>
													<a href="#" onclick="Alert.success('Ürün Sepete Gönderildi.','',{displayDuration: 3000})"><i class="fas fa-shopping-cart"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<a href="#"><i class="fas fa-shopping-cart"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<a href="#"><i class="fas fa-shopping-cart"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<a href="#"><i class="fas fa-shopping-cart"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>
													<span>Stokta var</span>
													<a href="#"><i class="far fa-times-circle"></i></a>
													<a href="#"><i class="fas fa-shopping-cart"></i></a>
													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="Total">
												<div>
													<p></p>
													<p></p>
												</div>
												<a href="http://murat.kodakil.com/b2b/favoriler.php">Favorilere Git</a>
											</div>
										</div>
										<div class="tab-pane fade" id="sepetİade" role="tabpanel" aria-labelledby="sepetİade-tab">
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>

													<a href="#" onclick="Alert.warning('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 3000})"><i class="far fa-times-circle"></i></a>

													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>

													<a href="#"><i class="far fa-times-circle"></i></a>

													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>

													<a href="#"><i class="far fa-times-circle"></i></a>

													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>

													<a href="#"><i class="far fa-times-circle"></i></a>

													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="sepetProduct">
												<img src="https://fakeimg.pl/300/">
												<div>
													<p>7S618B081AB</p>
													<p>EU EF24171-083</p>
													<p>EURO CRAFT</p>
													<p>Adet : 5</p>
												</div>
												<div>

													<a href="#"><i class="far fa-times-circle"></i></a>

													<h5>29.99 ₺</h5>
												</div>
											</div>
											<div class="Total">
												<div>
													<p></p>
													<p></p>
												</div>
												<a href="http://murat.kodakil.com/b2b/iadesepeti.php">İade Sepetine Git</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- İşlem Menüsü -->
		<div class="megaMenu">
			<div class="container-fluid">
				<ul class="ana-menu">
					<div class="menu-wrapper">
						<div class="hamburger-menu"></div>	  
					</div>
					<li class="ana-menu-item"><a class="ana-menu-link" href="http://murat.kodakil.com/b2b/kampanyalar.php">Anasayfa</a></li>
					<li class="ana-menu-item">Yönetim<i class="fas fa-sort-down"></i></a>
						<ul class="alt-menu">
							<li class="yonetim-link"> Finans
								<ul class="yonetim-menu">
									<li><a href="http://murat.kodakil.com/b2b/isakis.php"> İş Akış Onay</a></li>
									<li><a href="http://murat.kodakil.com/b2b/finansalacaklar.php"> Alacaklar ve Borçlar</a></li>
									<li><a href="http://murat.kodakil.com/b2b/alacakgirisi.php"> Alacak Takibi</a></li>
									<li><a target="_blank" href="http://murat.kodakil.com/b2b/gelirtable.php"> Gelir Tablosu</a></li>
									<li><a target="_blank" href="http://murat.kodakil.com/b2b/nakitakis.php"> Nakit Akış Tablosu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/maasyonetim.php"> Maaş Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/demirbas.php"> Demirbaş Listesi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/satistahsilatchart.php"> Şirket Satış ve Tahsilat Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/plasiyersanalposanaliz.php"> Plasiyer Sanal Pos Analizi</a></li>
								</ul>
							</li>
							<li class="yonetim-link"> Satın Alma
								<ul class="yonetim-menu">
									<li><a href="http://murat.kodakil.com/b2b/satinalmaraporu.php">  Satın Alma Raporu</a></li>
									<li><a href=""> Satın Alma Bütçe</a></li>
									<li><a href="http://murat.kodakil.com/b2b/saticisiparisrapor.php"> Satıcı Sipariş Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/saticisepeti.php"> Satıcı Sipariş Sepeti</a></li>
									<li><a href="http://murat.kodakil.com/b2b/saticibakiye.php"> Satıcı Bakiye Siparişler</a></li>
									<li><a href="http://murat.kodakil.com/b2b/urunyonetimi.php"> Ürün Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/productanswer.php"> Ürün Sorularım</a></li>
								</ul>
							</li>
							<li class="yonetim-link"> Satış Pazarlama
								<ul class="yonetim-menu">
									<li><a href="http://murat.kodakil.com/b2b/musterisiparisrapor.php"> Müşteri Sipariş Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/musterisepeti.php"> Müşteri Sipariş Sepeti</a></li>
									<li><a href="http://murat.kodakil.com/b2b/musterifavorileri.php"> Müşteri Favori Ürün Sepeti</a></li>
									<li><a href="http://murat.kodakil.com/b2b/musteribakiye.php"> Müşteri Bakiye Siparişler</a></li>
									<li><a href="http://murat.kodakil.com/b2b/musterisatisirapor.php"> Müşteri Bazlı Satış Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/musterialacakrapor.php"> Müşteri Bazlı Alacak Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/ilsatistahsilat.php"> İl Bazında Satış ve Tahsilat Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/plasiyersatistahsilat.php"> Plasiyer Satış ve Tahsilat Raporu</a></li>
									<li><a href="http://murat.kodakil.com/b2b/satisraporgirisi.php"> Plasiyer Raporları Girişi</a></li>

									<li><a href="http://murat.kodakil.com/b2b/gunlukistatistik.php"> Günlük İşlemler</a></li>
								</ul>
							</li>
							<li class="yonetim-link"> Depo Sevkiyat
								<ul class="yonetim-menu">
									<!--<li><a href=""> Onay Bekleyen</a></li>
									<li><a href=""> Sevk Bekleyen</a></li>
									<li><a href=""> Hazırlanan</a></li>
									<li><a href=""> Hazırlanmmış</a></li>
									<li><a href=""> Fatura Edilecek</a></li>-->
									<li><a href="http://murat.kodakil.com/b2b/iadeislemleri.php"> İade İşlemleri</a></li>
									<li><a href="http://murat.kodakil.com/b2b/malkabul.php"> Mal Kabul</a></li>
									<li><a target="_blank" href="http://murat.kodakil.com/b2b/deposiparis.php"> Sipariş Durumu</a></li>
									<li><a href=""> Ürün Etiket Basım</a></li>
									<li><a href=""> Adres Etiket Basım</a></li>
								</ul>
							</li>
							<li class="yonetim-link"> Ayarlar
								<ul class="yonetim-menu">
									<li><a href="http://murat.kodakil.com/b2b/isakisyonetimi.php"> İş Akış Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/haberyonetimi.php"> Haber Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/kullaniciislemleri.php"> Kullanıcı Tanımlama</a></li>
									<li><a href="http://murat.kodakil.com/b2b/carikosulyonetimi.php"> Cari Koşul Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/takipemail.php"> Takip E-Mail Adresleri</a></li>
									<li><a href="http://murat.kodakil.com/b2b/sanalposyonetim.php"> Sanal Pos Oranları</a></li>
									<li><a href="http://murat.kodakil.com/b2b/kaliteyonetim.php"> Kalite Yönetim Sistemi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/ekstralaryonetimi.php"> Ekstralar Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/footeryonetim.php"> Kurumsal Başlık Yönetimi</a></li>
									<li><a href="http://murat.kodakil.com/b2b/plasiyerprimyonetimi.php"> Plasiyer Prim Yönetimi</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Ürün Arama<i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/kampanyaliproduct.php"> Kampanyalı Ürünler</a></li>
							<li><a href="http://murat.kodakil.com/b2b/stogagirenler.php"> Stoğumuza Girenler</a></li>
							<li><a href="http://murat.kodakil.com/b2b/yenieklenenler.php"> Yeni Eklenenler</a></li>
							<li><a href="http://murat.kodakil.com/b2b/urungrupara.php"> Ürün Grubuna Göre Ara</a></li>
							<li><a href="http://murat.kodakil.com/b2b/productanaliz.php"> Ürün Arama Analiz</a></li>
							<li><a href="http://murat.kodakil.com/b2b/productquestions.php"> Ürün Sorularım <b>(2)</b></a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Siparişler <i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/myorder.php"> Sipariş Durumu<b> (22) </b></a></li>
							<li><a href="http://murat.kodakil.com/b2b/faturaedilen.php"> Fatura Edilen</a></li>
							<li><a href="http://murat.kodakil.com/b2b/bakiyesiparisler.php"> Bakiye Siparişlerim<b> (4) </b></a></li>
							<li><a href="http://murat.kodakil.com/b2b/favoriler.php"> Favori Ürün Sepetim <b>(10)</b></a></li>
							<li><a href="http://murat.kodakil.com/b2b/ordertab.php"> Sipariş Sepeti</a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Cari Hesap<i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/carisayfa.php"> Cari Bilgilerim</a></li>
							<li><a href="http://murat.kodakil.com/b2b/cariekstre.php"> Hesap Özeti</a></li>
							<li><a href="http://murat.kodakil.com/b2b/hesapyaslandirma.php"> Hesap Yaşlandırma</a></li>
							<li><a href="http://murat.kodakil.com/b2b/hesapmutabakat.php"> Hesap Mutabakatı</a></li>
							<li><a href="http://murat.kodakil.com/b2b/odemeplani.php"> Ödeme Planı</a></li>
							<li><a href="http://murat.kodakil.com/b2b/riskhesabim.php"> Risk Hesabım</a></li>
							<li><a href="http://murat.kodakil.com/b2b/caripuan.php"> Cari Puan</a></li>
							<li><a href="http://murat.kodakil.com/b2b/satistahsilat.php"> Satış ve Tahsilat Analiz</a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						İade İşlemleri <i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/iadedurumu.php"> İade Durumu</a></li>
							<li><a href="http://murat.kodakil.com/b2b/iadeson.php"> İade Faturalarım</a></li>
							<li><a href="http://murat.kodakil.com/b2b/iadesepeti.php"> İade Sepeti<b> (10)</b></a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Sanal Pos<i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/bankdetail.php"> Sanal Pos Ödeme</a></li>
							<li><a href="http://murat.kodakil.com/b2b/posreport.php"> Sanal Pos Raporları</a></li>
							<li><a href="http://murat.kodakil.com/b2b/sanalposoran.php"> Sanal Pos Oranları</a></li>
							<li><a href="http://murat.kodakil.com/b2b/sanalposanaliz.php"> Sanal Pos Ödeme Analiz</a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Ekstralar<i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/hesapnumaralari.php"> Hesap Numaralarımız</a></li>
							<li><a href="http://murat.kodakil.com/b2b/rsc.php"> Öneri İstek Şikayet</a></li>
							<li><a href="#">Dosyalar</a></li>
							<li><a href="#">B2B Kısayol</a></li>
						</ul>
					</li>
					<li class="ana-menu-item">
						Çıkış<i class="fas fa-sort-down"></i>
						<ul class="alt-menu">
							<li><a href="http://murat.kodakil.com/b2b/userlogin.php"> Çıkış</a></li>
							<li><a href="http://murat.kodakil.com/b2b/cariarama.php"> Cari Değiştir</a></li>
							<li><a id="screen-locked" href="javascript:void(0);"> Ekranı Kilitle</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>

