<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

	<!-- Lightbox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
	<!-- table js -->
	<script type="text/javascript" src="js/jquery.basictable.min.js"></script>

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/cariarama.css">
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- 
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/fh-3.1.4/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/fh-3.1.4/datatables.min.js"></script> -->

	<link rel="shortcut icon"  href="images/icon.png"/>
	<title>Oto Sesli B2B- Cari Arama</title>
</head>
<body>
	<div class="cariArama">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12 Logo">
					<a href="http://murat.kodakil.com/b2b/kampanyalar.php">
						<img src="images/logo.png">
					</a>
				</div>
				<div class="col-md-12">
					<p class="welcomeUser">Hoşgeldiniz - <b>Kerem AKSOY</b></p>
					<p>Lütfen Bayi Adını veya Bayi Kodunu Giriniz</p>
					<input id="myInput" type="text" placeholder="Sanayi">
				</div>
			</div>
		</div>
	</div>
	<section class=""><!-- veri basıldığında class eklenecek -- cari-arama-page  -->
		<!--for demo wrap-->
		<div class="tbl-header">
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<th></th>
						<th><div>CARİ KODU</div></th>
						<th><div>CARİ İSİM</div></th>
						<th><div>SON GİRİŞ</div></th>
						<th><div>HEDEF</div></th>
						<th><div>İL</div></th>
						<th><div>İLÇE</div></th>
						<th><div>YETKİLİ</div></th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="tbl-content"
		>			<table cellpadding="0" cellspacing="0" border="0">
			<tbody id="myTable">
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>GAZİANTEP</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>ÇARŞAMBA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>ÇARŞAMBA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>ÇARŞAMBA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-unlock"></i></td>
					<td>495SD41444</a></td>
					<td>AYDIN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</a></td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-down"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
				<tr>
					<td><i class="fas fa-lock"></i></td>
					<td>495SD41444</td>
					<td>CEYHAN AKGÜR MOTORLU ARAÇLAR TİCARET VE SANAYİ</td>
					<td>20.06.2018</td>
					<td><i class="fas fa-arrow-circle-up"></i></td>
					<td>SAMSUN</td>
					<td>BAFRA</td>
					<td>Kerem AKSOY<br>0555 000 00 00</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<script>
	$(window).on("load resize ", function() {
		var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
		$('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
	$('.tbl-header').scroll(function(){
		$('.tbl-content').scrollLeft($(this).scrollLeft());    
	})
	$('.tbl-content').scroll(function(){
		$('.tbl-header').scrollLeft($(this).scrollLeft());    
	})
</script>
</body>
</html>