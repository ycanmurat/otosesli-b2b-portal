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
	<title>GELİR TABLOSU</title>
</head>
<body>

	<!-- -->
	<div class="depo-siparis-overlay"></div>
	<!-- -->

	<div class="container-fluid fatura-edilen">
		<div class="row">
			<div class="col-md-4 mb-2"><a href="http://murat.kodakil.com/b2b/kampanyalar.php"><img class="logo" src="images/logo (1).png"></a></div>
			<div class="col-md-4"><h4 class="pagetitle text-center mt-1"><p>GELİR TABLOSU</p> </h4>
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
						<td scope="row"><p>A- BRÜT SATIŞLAR</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1- Yurt İçi Satışlar</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2- Yurt Dışı Satışlar</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3- Diğer Gelenler</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>B- SATIŞ İNDİRİMLERİ -</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1- Satıştan İadeler (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2- Satıştan İskontalar (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3- Diğer İndirimler (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>C- NET SATIŞLAR</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>D- SATIŞLARIN MALİYETİ</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>BRÜT SATIŞ KARI VEYA ZARARI</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1- Satılan Ticari Mallar Maliyeti (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2- Satılan Hizmet Maliyeti (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3- Diğer Satışların Maliyeti (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>E- FAALİYET GİDERLERİ</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>FAALİYET KARI VEYA ZARARI </p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-Araştırma ve Geliştirme Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Pazarlama, Satış ve Dağıtım Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3-Genel Yönetim Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>F- DİĞER FAALİYERDEN OLAĞAN GELİR VE KARLAR</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-İştiraklerden Temettü Gelirleri</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Bağlı Ortaklıklardan Temettü Gelirleri</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3-Faiz Gelirleri</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>4-Komisyon Gelirleri</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>5-Konusu Kalmayan Karşılıklar</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>6-Menkul Kıymet Satış Karları</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>7-Kambiyo Karları</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>8-Reeskont Faiz Gelirleri</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>9-Enflasyon Düzeltmesi Karları</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>10-Faaliyetlerle İlgili Diğer Olağan Gelir ve Karlar</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>G- DİĞER FAAL. OLAĞAN GİDER VE ZARARLAR -</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-Komisyon Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Karşılık Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3-Menkul Kıymet Satış Zararları (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>4-Kambiyo Zararları (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>5-Reeskont Faiz Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>6-Diğer olağan Gider ve Zararlar (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>H- FİNANSMAN GİDERLERİ -</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>OLAĞAN KAR VEYA ZARAR</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-Kısa Vadeli Borçlanma Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Uzun Vadeli Borçlanma Giderleri (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>I- OLAĞAN DIŞI GELİR VE KARLAR</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-Önceki Dönem Gelir ve Karları</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Diğer Olağandışı Gelir ve Karlar</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>J- OLAĞAN DIŞI GİDER VE ZARARLAR -</p></td>
						<td><p></p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td> 
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p>+990,00</p></td>
						<td><p></p></td>
						<td><p>+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>DÖNEM KARI VEYA ZARARI</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>1-Çalışmayan Kısım Gider ve Zararları (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>2-Önceki Dönem Gider ve Zararları (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="fold">
						<td scope="row"><p>3-Diğer Olağandışı Gider ve Zararlar (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>K- DÖNEM KARI VERGİ VE DİĞER YASAL YÜK.KARŞ. (-)</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
					</tr>
					<tr class="view">
						<td scope="row"><p>DÖNEM NET KARI VEYA ZARARI</p></td>
						
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
						<td><p></p></td>
						<td><p data-toggle="modal" data-target="#gelirtableModal">+990,00</p></td>
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
<div class="modal fade" id="gelirtableModal" tabindex="-1" role="dialog" aria-labelledby="gelirtableModalLabel" aria-hidden="true">
	<div class="modal-dialog iade-fatura-detay" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="gelirtableModalLabel">Gelir Tablo Detayı</h5>
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
										<th scope="col">Evrak Tarihi</th>
										<th scope="col">Kayıt Tarihi</th>
										<th scope="col">Hesap Kodu</th>
										<th scope="col">Hesap Adı</th>
										<th scope="col">Fiş No</th>
										<th scope="col">Açıklama</th>
										<th scope="col">Tutar</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">17.10.2018</th>
										<td>20.06.2018</td>
										<td>600-001-001</td>
										<td>Fatura Altı Yuvarlama</td>
										<td>456545</td>
										<td>SÜRAT KARG.FT.NIZ NO:2UB201800003960 YUVARL</td>
										<td>1,241,00 TL</td>
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
