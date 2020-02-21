<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>SİPARİŞLERİM</p></h4></div>

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

			<div class="tab-content my-order-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="onay-bekleyen" role="tabpanel" aria-labelledby="onay-bekleyen-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Kalem Adeti</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Durumu</th>
									<th scope="col">Brüt Tutar</th>
									<th scope="col">İskonto</th>
									<th scope="col">Net Toplam</th>
									<th scope="col">KDV</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
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
				<div class="tab-pane fade" id="sevk-bekleyen" role="tabpanel" aria-labelledby="sevk-bekleyen-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Kalem Adeti</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Durumu</th>
									<th scope="col">Brüt Tutar</th>
									<th scope="col">İskonto</th>
									<th scope="col">Net Toplam</th>
									<th scope="col">KDV</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
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
				<div class="tab-pane fade" id="hazirlanan" role="tabpanel" aria-labelledby="hazirlanan-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Kalem Adeti</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Durumu</th>
									<th scope="col">Brüt Tutar</th>
									<th scope="col">İskonto</th>
									<th scope="col">Net Toplam</th>
									<th scope="col">KDV</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
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
				<div class="tab-pane fade" id="hazirlanmis" role="tabpanel" aria-labelledby="hazirlanmis-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Kalem Adeti</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Durumu</th>
									<th scope="col">Brüt Tutar</th>
									<th scope="col">İskonto</th>
									<th scope="col">Net Toplam</th>
									<th scope="col">KDV</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
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
				<div class="tab-pane fade" id="fatura-edilecek" role="tabpanel" aria-labelledby="fatura-edilecek-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Kalem Adeti</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Durumu</th>
									<th scope="col">Brüt Tutar</th>
									<th scope="col">İskonto</th>
									<th scope="col">Net Toplam</th>
									<th scope="col">KDV</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p class="rising">12.12.2015</p></td>
										<td><p class="rising">95 Megabyte</p></td>
										<td><p>3,731,42 TL</p></td>
										<td><p>1,509,61 TL</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>399,93 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
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
<?include("footer.php");?>