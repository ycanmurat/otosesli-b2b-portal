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
	<title>NAKİT AKIŞ TABLOSU</title>
</head>
<body>

	<!-- -->
	<div class="depo-siparis-overlay"></div>
	<!-- -->

	<div class="container-fluid fatura-edilen">
		<div class="row">
			<div class="col-md-4 mb-2"><a href="http://murat.kodakil.com/b2b/kampanyalar.php"><img class="logo" src="images/logo (1).png"></a></div>
			<div class="col-md-4"><h4 class="pagetitle text-center mt-1"><p>NAKİT AKIŞ</p> </h4>
				<div id="myClockDisplay" class="clock"></div>
			</div>
			<div class="col-md-4">

				<ul class="nav justify-content-end mr-3 nav-tabs list-style-type mt-1" id="myTab" role="tablist">
					<li class="nav-item">
						<form>
							<select class="custom-select w-auto">
								<option selected="">Şirket Seçiniz..</option>
								<option>OTOSESLİ 2018</option>
								<option>KODAKIL 2018</option>
							</select>
						<!--
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">-->
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>
					</form>
					<button class="reload-page mt-2" onclick="reloadPage()"><i class="fas fa-redo-alt"></i> Yenile</button>

				</li>
			</ul>
		</div>
		<div class="col-md-12 pr-4 pl-4 shadow">
			<table class="table siparis-tutar-table hesap-yaslandirma-table gelir-tablo fold-table">
				<thead>
					<tr class="final-table-head">
						<th scope="col"></th>
						<th scope="col"><a href="#"><i class="fas fa-backward"></i></a></th>
						<th scope="col">OCA 17</th>
						<th scope="col">ŞUB 17</th>
						<th scope="col">MAR 17</th>
						<th scope="col">NİS 17</th>
						<th scope="col">MAY 17</th>
						<th scope="col">HAZ 17</th>
						<th scope="col">TEM 17</th>
						<th scope="col">AĞU 17</th>
						<th scope="col">EYL 17</th>
						<th scope="col">EKİ 17</th>
						<th scope="col">KAS 17</th>
						<th scope="col">ARA 17</th>
						<th scope="col"><a href="#"><i class="fas fa-forward"></i></a></th>
						<th scope="col">Toplam</th>
					</tr>
				</thead>
				<tbody>
					<tr class="view">
						<td scope="row"><p>A- ALACAKLAR</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Dönem Başı Alacak Devir</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Müşteri Alacaklar</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>ÇEK / SENET</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Portföy Çek</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Portföy Senet</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Tahsil Çek</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Tahsil Senet</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Teminat Çek</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Teminat Senet</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>MEVDUAT</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Vadesiz Mevduat ( TL )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Vadesiz Mevduat ( USD )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Vadesiz Mevduat ( EUR )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>KASA</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Merkez Kasa ( TL )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Merkez Kasa ( USD )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Merkez Kasa ( EUR )</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Plasiyer Kasa</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Pos Kasa</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view totalled">
						<td scope="row"><p> NAKİT GİRİŞLERİ TOPLAMI</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>B- BORÇLAR</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Dönem Başı Borç Devir</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Tedarikçi Borçlar</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Hizmet Alımı Borçlar</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>ÇEK / SENET</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Borç Çek (TL)</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Borç Çek (USD)</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Borç Senet</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>KREDİLER</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Ticari Kredi Kartı</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Dbs / Dts</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Taksitli Kredi</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Taksitli Kredi (Planlı)</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Taksitli Kredi (Proje)</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view totalled">
						<td scope="row"><p>NAKİT ÇIKIŞLARI TOPLAMI</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>C- FARK</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Kümülatif Fark</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>FAALİYET GİDERLERİ</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Satış ve Pazarlama Giderleri</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Genel Yönetim Giderleri</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>Finansman Giderleri</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
					<tr class="view totalled">
						<td scope="row"><p>KÜMÜLATİF DENGE</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
						<td><p></p></td>
						<td><p  data-toggle="modal" data-target="#nakitakisModal">+990,00</p></td>
					</tr>
				</tbody>
			</table>
			<div class="order-plan-footer mt-2 mb-2">
				<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="nakitakisModal" tabindex="-1" role="dialog" aria-labelledby="nakitakisModalLabel" aria-hidden="true">
	<div class="modal-dialog iade-fatura-detay" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="nakitakisModalLabel">Nakit Akış Detayı</h5>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body iade-fatura-detay">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<img height="50" class="mb-4" src="images/logo (1).png">
						</div>
						<hr>
						<div class="col-md-12">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Vadesiz Mevduat</th>
										<th scope="col">Cari Kodu</th>
										<th scope="col">Cari İsim</th>
										<th scope="col">Ciro Adı</th>
										<th scope="col">Tipi</th>
										<th scope="col">Kapatılmış Tutar</th>
										<th scope="col">Bakiye</th>
										<th scope="col">Vade Tarihi</th>
										<th scope="col">Test Name</th>
										<th scope="col">Test Name 2</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Lorem İpsum</th>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsumLorem İpsum</td>
										<td>SLorem İpsumLorem İpsumLorem İpsumLorem İpsumRL</td>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
										<td>Lorem İpsumLorem İpsumLorem İpsumLorem İpsumLorem İpsum</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tamam</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(function(){
		$(".fold-table tr.view").on("click", function(){
			$(this).toggleClass("openshow").nextUntil(".view").toggleClass("openshow");
		});
	});
</script>

<script>
	function reloadPage() {
		location.reload();
	}

function clock() {// We create a new Date object and assign it to a variable called "time".
var time = new Date(),

    // Access the "getHours" method on the Date object with the dot accessor.
    hours = time.getHours(),
    
    // Access the "getMinutes" method with the dot accessor.
    minutes = time.getMinutes(),
    
    
    seconds = time.getSeconds();

    document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);

    function harold(standIn) {
    	if (standIn < 10) {
    		standIn = '0' + standIn
    	}
    	return standIn;
    }
}
setInterval(clock, 1000);
function printPage() {
	window.print();
}

</script>
</body>
</html>
