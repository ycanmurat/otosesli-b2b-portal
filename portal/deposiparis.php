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
	<title>DEPO SEVKİYAT SİPARİŞ DURUMU</title>
</head>
<body>

	<div class="depo-siparis-overlay"></div>
	<div class="container-fluid">
		<div class="row pr-4 pl-4">
			<div class="col-md-4 mb-2"><a href="http://murat.kodakil.com/b2b/kampanyalar.php"><img class="logo" src="images/logo (1).png"></a></div>
			<div class="col-md-4">
				<h4 class="pagetitle text-center"><p>DEPO SEVKİYAT SİPARİŞ DURUMU</p> </h4>
				<div id="myClockDisplay" class="clock"></div>
			</div>
			<div class="col-md-4"><button class="reload-page" onclick="reloadPage()"><i class="fas fa-redo-alt"></i> Yenile</button></div>
			<div class="col-md-12 p-0">
				<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="onay-bekleyen-tab" data-toggle="tab" href="#onay-bekleyen" role="tab" aria-controls="onay-bekleyen" aria-selected="true"><i class="fas fa-user-clock"></i> Onay Bekleyen <b> (10)</b> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="sevk-bekleyen-tab" data-toggle="tab" href="#sevk-bekleyen" role="tab" aria-controls="sevk-bekleyen" aria-selected="false"><i class="fas fa-paperclip"></i> Sevk Bekleyen <b> (12)</b></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="hazirlanan-tab" data-toggle="tab" href="#hazirlanan" role="tab" aria-controls="hazirlanan" aria-selected="false"><i class="fas fa-users-cog"></i> Hazırlanan <b> (10)</b></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="hazirlanmis-tab" data-toggle="tab" href="#hazirlanmis" role="tab" aria-controls="hazirlanmis" aria-selected="false"><i class="far fa-thumbs-up"></i> Hazırlanmış <b> (8)</b></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="fatura-edilecek-tab" data-toggle="tab" href="#fatura-edilecek" role="tab" aria-controls="fatura-edilecek" aria-selected="false"><i class="far fa-edit"></i> Fatura Edilecek <b> (3)</b></a>
					</li>
				</ul>
			</div>
			<div class="col-md-12 p-0">

				<div class="tab-content p-0 my-order-tab depo-siparisi-tab mt-3" id="myTabContent">
					<div class="tab-pane fade p-0 show active" id="onay-bekleyen" role="tabpanel" aria-labelledby="onay-bekleyen-tab">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">İşlem Tarih</th>
										<th scope="col">Cari Açıklama</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">Sevkiyat Tipi</th>
										<th scope="col">İlgili</th>
										<th scope="col">Tutar</th>
										<th scope="col">Adet</th>
										<th scope="col">Plasiyer</th>
										<th scope="col">Durum</th>
										<th scope="col">Bilgi</th>
										<th scope="col">Detay</th>
									</tr>
								</thead>
							</table>
							<div class="tbl-content">
								<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-xs"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-sm"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-md"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-lg"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-xs"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-lg"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-xs"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-md"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-xl"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-exclamation-triangle delay-xl"></i>
													<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
												</div>
											</td>
											<td>
												<div class="durum-info-area">
													<i class="fas fa-info-circle"></i>
													<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
												</div>
											</td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
									</tbody>
								</table>
								<script>
									$(window).on("load resize ", function() {
										var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
										$('.tbl-header').css({'':scrollWidth});
									}).resize();
								</script>
							</div>
						</div>
					</div>
					<div class="tab-pane fade p-0" id="sevk-bekleyen" role="tabpanel" aria-labelledby="sevk-bekleyen-tab">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">İşlem Tarih</th>
										<th scope="col">Cari Açıklama</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">Sevkiyat Tipi</th>
										<th scope="col">Tutar</th>
										<th scope="col">Adet</th>
										<th scope="col">Plasiyer</th>
										<th scope="col">Onay Tarihi</th>
										<th scope="col">Bilgi</th>
										<th scope="col">Detay</th>
									</tr>
								</thead>
							</table>
							<div class="tbl-content">
								<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p>10.10.2010</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
										</tr>
									</tbody>
								</table>
								<script>
									$(window).on("load resize ", function() {
										var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
										$('.tbl-header').css({'':scrollWidth});
									}).resize();
								</script>
							</div>
						</div>
					</div>
					<div class="tab-pane fade p-0" id="hazirlanan" role="tabpanel" aria-labelledby="hazirlanan-tab">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">İşlem Tarih</th>
										<th scope="col">Cari Açıklama</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">Sevkiyat Tipi</th>
										<th scope="col">İrsaliye No</th>
										<th scope="col">Tutar</th>
										<th scope="col">Adet</th>
										<th scope="col">Plasiyer</th>
										<th scope="col">Bilgi</th>
										<th scope="col">Detay</th>
									</tr>
								</thead>
							</table>
							<div class="tbl-content">
								<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlananModal">Detay</button></td>
										</tr>
									</tbody>
								</table>
								<script>
									$(window).on("load resize ", function() {
										var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
										$('.tbl-header').css({'':scrollWidth});
									}).resize();
								</script>
							</div>
						</div>
					</div>
					<div class="tab-pane fade p-0" id="hazirlanmis" role="tabpanel" aria-labelledby="hazirlanmis-tab">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">İşlem Tarih</th>
										<th scope="col">Cari Açıklama</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">Sevkiyat Tipi</th>
										<th scope="col">İrsaliye No</th>
										<th scope="col">Tutar</th>
										<th scope="col">Adet</th>
										<th scope="col">Plasiyer</th>
										<th scope="col">Bilgi</th>
										<th scope="col">Detay</th>
									</tr>
								</thead>
							</table>
							<div class="tbl-content">
								<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p>SB00000154</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>76 Ad.</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
									</tbody>
								</table>
								<script>
									$(window).on("load resize ", function() {
										var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
										$('.tbl-header').css({'':scrollWidth});
									}).resize();
								</script>
							</div>
						</div>
					</div>
					<div class="tab-pane fade p-0" id="fatura-edilecek" role="tabpanel" aria-labelledby="fatura-edilecek-tab">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">İşlem Tarih</th>
										<th scope="col">Cari Açıklama</th>
										<th scope="col">Makbuz No</th>
										<th scope="col">Makbuz Tarihi</th>
										<th scope="col">İlgili</th>
										<th scope="col">Tutar</th>
										<th scope="col">İşlem Tipi</th>
										<th scope="col">Plasiyer</th>
										<th scope="col">Bilgi</th>
										<th scope="col">Detay</th>
									</tr>
								</thead>
							</table>
							<div class="tbl-content">
								<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>ACİL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
											<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
											<td><p>WB2000000002777224</p></td>
											<td><p>NORMAL</p></td>
											<td><p class="rising">Kerem AKSOY</p></td>
											<td><p>12,245,45 TL</p></td>
											<td><p>99</p></td>
											<td><p>Onur Ege Tan</p></td>
											<td><p><i class="fas fa-info-circle"></i></p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#hazirlanmisModal">Detay</button></td>
										</tr>
									</tbody>
								</table>
								<script>
									$(window).on("load resize ", function() {
										var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
										$('.tbl-header').css({'':scrollWidth});
									}).resize();
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">İade Sepeti Ürün Ekleme</h5>
					<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="iade-modal-form">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label for="name-tedarikci">Tedarikçi</label>
									</div>
									<div class="col-md-8">
										<input type="email" class="form-control shadow" id="name-tedarikci" disabled placeholder="EUROCRAFT">
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label for="input-stok-kodu">Stok kodu</label>
									</div>
									<div class="col-md-8">
										<input type="email" class="form-control shadow" id="input-stok-kodu" disabled placeholder="EU F21247-002">
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label for="isim-stok">Stok Adı</label>
									</div>
									<div class="col-md-8">
										<textarea height="70" class="form-control shadow" id="isim-stok" rows="3" disabled placeholder="TURBO ŞARJ (4 DELİK) (2.5TD) DELİKSİZLERİ ÜRETİLMİYOR ZATEN"></textarea>
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label for="fatura-kodu">Sipariş No</label>
									</div>
									<div class="col-md-8">
										<input type="email" class="form-control shadow" id="fatura-kodu" disabled placeholder="A00000000799787">
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label>İade Türü</label>
									</div>
									<div class="col-md-8">
										<select class="custom-select shadow">
											<option selected="">Seçiniz..</option>
											<option>Sağlam</option>
											<option>Arızalı</option>
										</select>
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label>İade Türü</label>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-btn">
												<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
													<span class="glyphicon glyphicon-minus">-</span>
												</button>
											</span>
											<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
											<span class="input-group-btn">
												<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
													<span class="glyphicon glyphicon-plus">+</span>
												</button>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group col-md-12 m-2 form-inline">
									<div class="col-md-4">
										<label>Açıklama</label>
									</div>
									<div class="col-md-8">
										<select class="custom-select shadow">
											<option selected="">Seçiniz..</option>
											<option>doldururuz abem</option>
											<option>canım abem</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">İade Sepeti Ürün Ekle</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!--Müşteri Sİpariş Modal -->
	<div class="print-pos-makbuz modal fade" id="musterisiparisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Müşteri Siparişi</h5>

					<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
					<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

					<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div id="content" class="modal-body inv-modal">
					<div class="row">
						<div class="col-md-12">
							<table class="table fatura-vergi">
								<thead>
									<tr>
										<th scope="col">Cari Ünvanı</th>
										<th scope="col">İl / İlçe</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">Sipariş Tarihi</th>
										<th scope="col">Plasiyer</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)</th>
										<td>ANKARA/SİNCAN</td>
										<td>WB0000555 000 00 0021</td>
										<td>15.10.2018</td>
										<td>Kerem AKSOY</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-urun">
								<thead>
									<tr>
										<th scope="col">Stok Kodu</th>
										<th scope="col">Stok Adı</th>
										<th scope="col">Miktar</th>
										<th scope="col">Brüt Fiyat</th>
										<th scope="col">İsk 1</th>
										<th scope="col">İsk 2</th>
										<th scope="col">İsk 3</th>
										<th scope="col">İsk 4</th>
										<th scope="col">İsk 5</th>
										<th scope="col">Net Fiyat</th>
										<th scope="col">Net Tutar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>2 AD</td>
										<td>72,30 TL</td>
										<td>22%</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>38,35 TL</td>
										<td>76,70 TL</td>
									</tr>
									<tr class="fatura-toplam">
										<th scope="row"></th>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Toplam</td>
										<td>: 7,076,70 TL</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-iskonto">
								<thead>
									<tr>
										<th><p>Not 1</p></th>
										<th><p>Not 2</p></th>
										<th><p>Not 3</p></th>
										<th><p>Teslimat Adresi</p></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p><b>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsumLorem İpsumLorem İpsum Lorem İpsum</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsu</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
				</div>
			</div>
		</div>
	</div>
	<!--hazirlanan Sİpariş Modal -->
	<div class="print-pos-makbuz modal fade" id="hazirlananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hazırlanan Sevkiyat</h5>

					<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
					<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

					<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div id="content" class="modal-body inv-modal">
					<div class="row">
						<div class="col-md-12">
							<table class="table fatura-vergi">
								<thead>
									<tr>
										<th scope="col">Cari Ünvanı</th>
										<th scope="col">İl / İlçe</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">İrsaliye No</th>
										<th scope="col">Sipariş Tarihi</th>
										<th scope="col">İrsaliye Tarihi</th>
										<th scope="col">Plasiyer</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)</th>
										<td>ANKARA/SİNCAN</td>
										<td>WB0000555 000 00 0021</td>
										<td>WDG0000555 000 00 0021</td>
										<td>15.10.2018</td>
										<td>16.10.2018</td>
										<td>Kerem AKSOY</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-urun">
								<thead>
									<tr>
										<th scope="col">Stok Kodu</th>
										<th scope="col">Stok Adı</th>
										<th scope="col">Model</th>
										<th scope="col">Miktar</th>
										<th scope="col">Üretici Kodu</th>
										<th scope="col">Hücre 1</th>
										<th scope="col">Hücre 2</th>
										<th scope="col">Depo 1</th>
										<th scope="col">Depo 2</th>
										<th scope="col">Depo 3</th>
										<th scope="col">Depo 4</th>
										<th scope="col">Kontrol</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr class="fatura-toplam">
										<th scope="row"></th>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-iskonto">
								<thead>
									<tr>
										<th><p>Not 1</p></th>
										<th><p>Not 2</p></th>
										<th><p>Not 3</p></th>
										<th><p>Teslimat Adresi</p></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p><b>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsumLorem İpsumLorem İpsum Lorem İpsum</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsu</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<select class="custom-select w-auto mt-2">
						<option>Hazırlayanı Seçiniz..</option>
						<option>Deniz Arslan</option>
						<option>Murat Can</option>
						<option>Kerem Aksoy</option>
					</select>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
				</div>
			</div>
		</div>
	</div>
	<!--hazirlanmis Sİpariş Modal -->
	<div class="print-pos-makbuz modal fade" id="hazirlanmisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hazırlanmış Sevkiyat</h5>

					<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
					<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

					<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div id="content" class="modal-body inv-modal">
					<div class="row">
						<div class="col-md-12">
							<table class="table fatura-vergi">
								<thead>
									<tr>
										<th scope="col">Cari Ünvanı</th>
										<th scope="col">İl / İlçe</th>
										<th scope="col">Sipariş No</th>
										<th scope="col">İrsaliye No</th>
										<th scope="col">Sipariş Tarihi</th>
										<th scope="col">İrsaliye Tarihi</th>
										<th scope="col">Plasiyer</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)</th>
										<td>ANKARA/SİNCAN</td>
										<td>WB0000555 000 00 0021</td>
										<td>WDG0000555 000 00 0021</td>
										<td>15.10.2018</td>
										<td>16.10.2018</td>
										<td>Kerem AKSOY</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-urun">
								<thead>
									<tr>
										<th scope="col">Stok Kodu</th>
										<th scope="col">Stok Adı</th>
										<th scope="col">Model</th>
										<th scope="col">Miktar</th>
										<th scope="col">Üretici Kodu</th>
										<th scope="col">Hücre 1</th>
										<th scope="col">Hücre 2</th>
										<th scope="col">Depo 1</th>
										<th scope="col">Depo 2</th>
										<th scope="col">Depo 3</th>
										<th scope="col">Depo 4</th>
										<th scope="col">Kontrol</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr>
										<th scope="row">EUF22100-062EUF22100-062</th>
										<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
										<td>SKORSKY</td>
										<td>2 AD</td>
										<td>SF-001-0005</td>
										<td>B1 05</td>
										<td>B1 05</td>
										<td>10</td>
										<td>0</td>
										<td>20</td>
										<td>0</td>
										<td> </td>
									</tr>
									<tr class="fatura-toplam">
										<th scope="row"></th>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<table class="table fatura-iskonto">
								<thead>
									<tr>
										<th><p>Not 1</p></th>
										<th><p>Not 2</p></th>
										<th><p>Not 3</p></th>
										<th><p>Teslimat Adresi</p></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p><b>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsumLorem İpsumLorem İpsum Lorem İpsum</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsu</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
										<td>
											<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<select class="custom-select w-auto mt-2">
						<option>Hazırlayanı Seçiniz..</option>
						<option>Deniz Arslan</option>
						<option>Murat Can</option>
						<option>Kerem Aksoy</option>
					</select>
					<select class="custom-select w-auto mt-2">
						<option>Sevkiyat Firma..</option>
						<option>KARGOKAR</option>
						<option>ARAS KARGO</option>
						<option>MNG KARGO</option>
					</select>
					<select class="custom-select w-auto mt-2">
						<option>Gönderim Şekli..</option>
						<option>Fatura Altı (FA)</option>
						<option>Fatura Üstü (FÜ)</option>
						<option>Fatura Yanı (FY)</option>
					</select>
					<input class="form-control mt-2 w-auto" width="30px" type="number" name="adet" placeholder="Parça Adeti Giriniz">
					<select class="custom-select w-auto mt-2">
						<option>Koli Adet Desi/Ağırlık</option>
						<option>ARAS*01 - DOSYA 3,25TL</option>
						<option>ARAS*01 - DOSYA 3,25TL</option>
						<option>ARAS*01 - DOSYA 3,25TL</option>
						<option>ARAS*01 - DOSYA 3,25TL</option>
					</select>		
					<select class="custom-select w-auto mt-2">
						<option>Paketleyeni Seçiniz..</option>
						<option>Deniz Arslan</option>
						<option>Murat Can</option>
						<option>Kerem Aksoy</option>
					</select>
					<select class="custom-select w-auto mt-2">
						<option>Kontrol Eden Seçiniz..</option>
						<option>Deniz Arslan</option>
						<option>Murat Can</option>
						<option>Kerem Aksoy</option>
					</select>		
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
				</div>
			</div>
		</div>
	</div>

<!--HAZIRLANMIŞ MODALI FATURA EDİLCEK MODALIYLA AYNI OLACAK -->

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
</script>
</body>
</html>
