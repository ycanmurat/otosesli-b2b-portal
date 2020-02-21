<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>İADE DURUMU</p></h4></div>

		<div class="col-md-12 p-0">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="onay-bekleyen-tab" data-toggle="tab" href="#onay-bekleyen" role="tab" aria-controls="onay-bekleyen" aria-selected="true"><i class="fas fa-user-clock"></i> Onay Bekleniyor <b> (10)</b> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="teslimat-bekleyen-tab" data-toggle="tab" href="#teslimat-bekleyen" role="tab" aria-controls="teslimat-bekleyen" aria-selected="false"><i class="fas fa-luggage-cart"></i> Teslimat Bekleyen <b> (12)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="incelenen-tab" data-toggle="tab" href="#incelenen" role="tab" aria-controls="incelenen" aria-selected="false"><i class="fab fa-searchengin"></i> İncelenen <b> (10)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tamamlanan-tab" data-toggle="tab" href="#tamamlanan" role="tab" aria-controls="tamamlanan" aria-selected="false"><i class="fas fa-calendar-check"></i> Tamamlanan <b> (8)</b></a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-0">
			<div class="tab-content my-order-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="onay-bekleyen" role="tabpanel" aria-labelledby="onay-bekleyen-tab">
					<div class="scroll-responsive">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">Form No</th>
										<th scope="col">İşlem Tarihi</th>
										<th scope="col">Kalem Adeti</th>
										<th scope="col">Sevkiyat Firma</th>
										<th scope="col">Gönderim Şekli</th>
										<th scope="col">İşlem Yapan</th>
										<th scope="col">Genel Toplam</th>
										<th scope="col">Durumu</th>
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
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Onay Bekliyor</p></td>
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
				<div class="tab-pane fade" id="teslimat-bekleyen" role="tabpanel" aria-labelledby="teslimat-bekleyen-tab">
					<div class="scroll-responsive">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">Form No</th>
										<th scope="col">İşlem Tarihi</th>
										<th scope="col">Kalem Adeti</th>
										<th scope="col">Sevkiyat Firma</th>
										<th scope="col">Gönderim Şekli</th>
										<th scope="col">İşlem Yapan</th>
										<th scope="col">Genel Toplam</th>
										<th scope="col">Durumu</th>
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
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Teslimat Bekliyor</p></td>
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
				<div class="tab-pane fade" id="incelenen" role="tabpanel" aria-labelledby="incelenen-tab">
					<div class="scroll-responsive">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">Form No</th>
										<th scope="col">İşlem Tarihi</th>
										<th scope="col">Kalem Adeti</th>
										<th scope="col">Sevkiyat Firma</th>
										<th scope="col">Gönderim Şekli</th>
										<th scope="col">İşlem Yapan</th>
										<th scope="col">Genel Toplam</th>
										<th scope="col">Durumu</th>
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
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>İncelemede</p></td>
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
				<div class="tab-pane fade" id="tamamlanan" role="tabpanel" aria-labelledby="tamamlanan-tab">
					<div class="scroll-responsive">
						<div class="fixed-table-stok">
							<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th scope="col">Form No</th>
										<th scope="col">İşlem Tarihi</th>
										<th scope="col">Kalem Adeti</th>
										<th scope="col">Sevkiyat Firma</th>
										<th scope="col">Gönderim Şekli</th>
										<th scope="col">İşlem Yapan</th>
										<th scope="col">Genel Toplam</th>
										<th scope="col">Durumu</th>
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
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
											<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
										</tr>
										<tr>
											<td scope="row"><p>A00000000799835</p></td>
											<td><p>12.12.2012</p></td>
											<td><p>8 Adet</p></td>
											<td><p>Aras Kargo</p></td>
											<td><p>Peşin Ödeme</p></td>
											<td><p>Müşteri</p></td>
											<td><p>399,93 TL</p></td>
											<td><p>Tamamlandı</p></td>
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
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog iade-fatura-detay" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">İade Detayı</h5>
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
							<img src="images/logo (1).png">
						</div>
						<div class="col-md-8">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Form No</th>
										<th scope="col">Tarih</th>
										<th scope="col">Durum</th>
										<th scope="col">İşlem Yapan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">VV6A00XWD</th>
										<td>17.10.2018</td>
										<td>Beklemede</td>
										<td>Müşteri</td>
									</tr>
								</tbody>
							</table>
						</div>
						<hr>
						<div class="col-md-12">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">İşlem Tarihi</th>
										<th scope="col">Fatura Tarihi</th>
										<th scope="col">Fatura No</th>
										<th scope="col">Stok Kodu</th>
										<th scope="col">Stok Adı</th>
										<th scope="col">Ürün Marka</th>
										<th scope="col">Adet</th>
										<th scope="col">Net Fiyat</th>
										<th scope="col">Net Tutar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">17.10.2018</th>
										<td>20.06.2018</td>
										<td>A00000000799416</td>
										<td>EU F21247-005</td>
										<td>TURBO ŞARJ (1.4 TDCI)/FIESTA 02-08</td>
										<td>EUROCRAFT</td>
										<td>1</td>
										<td>440,53 TL</td>
										<td>440,53 TL</td>
									</tr>
									<tr class="iade-aciklama">
										<th scope="row">Durum :</th>
										<td colspan="8">Arızalı Ses yapıyor değişik değişik bişeyler yapıyor anlamadık.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Ara Toplam </th>
										<th scope="col">Kdv 18% </th>
										<th scope="col">Genel Toplam </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">657,29 TL</th>
										<td>118,31 TL</td>
										<td>775,60 TL</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tamamlandı</button>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>