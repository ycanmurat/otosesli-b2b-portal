<?include("header.php");?>

<div class="container-fluid product-fixed">
	<div class="row">
		<div class="col-md-6"><h4 class="pagetitle ml-5 mb-0 mt-4">ARAMA SONUÇLARI</h4></div>
		<div class="col-md-6">
			<ul class="nav justify-content-end mr-4 nav-tabs list-style-type mt-4" id="myTab" role="tablist">
				<li class="nav-item">
					<select class="custom-select">
						<option selected>Akıllı Sıralama</option>
						<option>Kampanyalıları önce göster</option>
						<option>Yeni Ürünleri Önce göster</option>
						<option>Stok Durumuna Göre (Çoktan Aza)</option>
						<option>Stok Durumuna Göre (Azdan Çoğa)</option>
						<option>Fiyata göre (önce en düşük)</option>
						<option>Fiyata göre (önce en yüksek)</option>
						<option>Modele göre ( Z - A )</option>
						<option>Modele göre ( A - Z )</option>
						<option>Ürün Markasına göre ( Z - A )</option>
						<option>Ürün Markasına göre ( A - Z )</option>
					</select>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="type-list-tab" data-toggle="tab" href="#list-type" role="tab" aria-controls="type-list" aria-selected="true"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="type-block-tab" data-toggle="tab" href="#type-block" role="tab" aria-controls="type-block" aria-selected="false"><i class="fas fa-th"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="type-broad-tab" data-toggle="tab" href="#type-broad" role="tab" aria-controls="type-broad" aria-selected="false"><i class="fas fa-th-list"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>


<div class="tab-content list-style-type-area" id="myTabContent">
	<div class="tab-pane fade show active" id="list-type" role="tabpanel" aria-labelledby="type-list-tab"><!-- Liste Görünüm -->
		<div class="ProductSearch">
			<div class="container-fluid">
				
				<div class="row">
					<table class="table table-striped final-table">
						<thead>
							<tr>
								<th scope="col">Durum</th>
								<th scope="col">Stok Kodu</th>
								<th scope="col">Stok Adı</th>
								<th scope="col">Model</th>
								<th scope="col">Marka</th>
								<th scope="col">Detay</th>
								<th scope="col">Görsel</th>
								<th scope="col">Net Fiyat</th>
								<th scope="col" width="20px">Bilgi</th>
								<th scope="col">Sepet</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><p data-text="Stokta yok" id="stok-yok" "><i class="fas fa-times-circle"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
										<b class="table-rozet badge-danger">Kampanya Ürünü</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-var" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 0})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>
							<tr>
								<th scope="row"><p data-text="Stokta var" id="stok-var" ><i class="fas fa-check-circle"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-yok" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>
							<tr>
								<th scope="row"><p data-text="Ürün tedarik sürecinde" id="tedarik-bekliyor"><i class="fas fa-exclamation-circle"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-yok" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>
							<tr>
								<th scope="row"><p data-text="Tedarikçide yok" id="tedarikcide-yok"><i class="fas fa-plus-circle"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-var" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>
							<tr>
								<th scope="row"><p data-text="Tedarikçide var" id="tedarikcide-var"><i class="fas fa-plus-circle green"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-yok" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>
							<tr>
								<th scope="row"><p data-text="Ürün mal kabülde" id="mal-kabulde"><i class="fas fa-clock"></i></p></th>
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>

									<div class="modal fade" id="stok-kodu-modal-open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content stok-kodu-modal-area">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Stok Kodu : 1 BK 1125 AC</h5>
													<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">Depo Bakiye Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">Müşteri Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">Temsilci Satış Listesi</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">Şirket Satış Listesi</a>
														</li>
													</ul>
													<div class="tab-content" id="myTabContent">
														<div class="p-2 tab-pane fade show active" id="depo-bakiye" role="tabpanel" aria-labelledby="depo-bakiye-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Depo Adı</th>
																		<th scope="col">Giriş Adeti</th>
																		<th scope="col">Giriş Tutarı</th>
																		<th scope="col">Çıkış Adeti</th>
																		<th scope="col">Çıkış Tutarı</th>
																		<th scope="col">Kalan</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Merkez Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Mal Kabul Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Ayrılmış Stok</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">İade Depo</th>
																		<td>200 Adet</td>
																		<td>2.000 TL</td>
																		<td class="stok-p-color-red">30 Adet</td>
																		<td class="stok-p-color-red">500 TL</td>
																		<td>170 Adet</td>
																	</tr>
																	<tr>
																		<th scope="row">Satıcı Sipariş Adeti :</th>
																		<td>50 Adet</td>
																	</tr>
																	<tr>
																		<td class="table-information stok-p-color-green"><b>31.10.2018</b> Tarihinde <b> 50 </b> Adet Gelecek </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="msatis-liste" role="tabpanel" aria-labelledby="msatis-liste-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="temsilci-satis" role="tabpanel" aria-labelledby="temsilci-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Temsilci</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Deniz Arslan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Serkan Kurt</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Can Öztürk</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Burak Şen</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Onur Tan</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Mert Koç</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="p-2 tab-pane fade" id="sirket-satis" role="tabpanel" aria-labelledby="sirket-satis-tab">
															<table class="table table-bordered depo-bakiye-table">
																<thead>
																	<tr>
																		<th scope="col">Müşteri</th>
																		<th scope="col">İade Adeti</th>
																		<th scope="col">İade Tutarı</th>
																		<th scope="col">Satış Adeti</th>
																		<th scope="col">Satış Tutarı</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Bugün</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Hafta</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Ay</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Bu Yıl</th>
																		<td class="stok-p-color-red">200 Adet</td>
																		<td class="stok-p-color-red">2.000 TL</td>
																		<td>30 Adet</td>
																		<td>500 TL</td>
																	</tr>
																	<tr>
																		<th scope="row">Toplam Satış Adedi :</th>
																		<td>50 Adet</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
									</p></a>
								</td>
								<td><p>V362</p></td>
								<td><p>OTOSAN</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
								<td>
									<p>
										<a  href="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" data-lightbox="example-set" data-title="Parça İsmi"><i class="fas fa-camera pic-var" src="http://eurocraft.com.tr/Sayfa/Orjinal/RM1F78TR.jpg" alt="" ></i>
										</a>
									</p>
								</td>
								<td class="info-area-open">
									<p>2999,97 TL</p>
									<div class="info-area shadow">
										<span>
											<h6>Fiyat Bilgisi</h6>
											<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
											<span>Genel İskonto</span><span>100,00 TL</span>
											<span>Bayi İskonto</span><span>50,00 TL</span>
											<span>Net Fiyat</span><span>300,00 TL</span>
											<span>Kdv(%18)</span><span>35,00 TL</span>
											<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
											<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
										</span>
									</div>

								</td>
								<td class="paket-info-area-open"  width="20px">
									<p>
										<i class="fas fa-info-circle"></i>
									</p>
									<div class="paket-info-area">
										<span>Takım Fiyatıdır.</span>
										<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
									</div>
								</td>
								<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
								</td>
								<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
									<p><i class="fas fa-shopping-cart"></i></p>
								</td><!--Sepete Ekleyecek -->
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="type-block" role="tabpanel" aria-labelledby="type-block-tab"><!-- Kutu Görünüm -->
		<div class="product-search-block ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p class="yeni-badge">YENİ</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a onclick="Alert.success('1 Adet Sepete Eklendi.','Stok Kodu : DAY 097 RO 198H',{displayDuration: 3000, pos: 'top'})"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p class="firsat-badge">FIRSAT</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a onclick="Alert.success('1 Adet Sepete Eklendi.','Stok Kodu : DAY 097 RO 198H',{displayDuration: 3000, pos: 'top'})"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p class="kampanya-badge">KAMPANYA</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p>YENİ</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a onclick="Alert.success('1 Adet Sepete Eklendi.','Stok Kodu : DAY 097 RO 198H',{displayDuration: 3000, pos: 'top'})"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p>YENİ</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
						<div class="product-block">
							<span>
								<p>YENİ</p>
								<i class="far fa-check-circle"></i>
							</span>
							<img src="images/turbocharger.png">
							<div class="product-block-middle">
								<p>7S618B081 AB</p>
								<p>EU EF24171-083</p>
								<p>Yedek Su Depo Hortumu (V184) 02/-</p>
							</div>
							<div class="product-block-footer">
								<p>%10 İndirim</p>
								<p>149.99 ₺</p>
								<p>129.99₺</p>
							</div>
							<div class="hover-active">
								<div class="row m-auto">
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="type-broad" role="tabpanel" aria-labelledby="type-broad-tab"><!-- Geniş Görünüm -->
		<div class="product-search-broad">
			<div class="container-fluid">
				<div class="product-board shadow-lg">
					<div class="row">
						<div class="col-md-2 product-image">
							<i class="far fa-check-circle"></i>
							<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
								<img src="images/amort.png">
							</a>
							<img class="modal-search" src="images/search.png">
						</div>
						<div class="col-md-8 ">
							<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
							<div class="row pt-2 mt-2">
								<div class="col-md-4">
									<ul>
										<li><p>Stok Kodu</p><p>: EU F21194-008</p></li>
										<li><p>Önceki Stok Kodu</p><p>: </p></li>
										<li><p>Oem Kodu</p><p>: 7354179</p></li>
										<li><p>Oem Kodu</p><p>: 95VB 6038 BF</p></li>
										<li><p>Ürün Marka</p><p>: EUROCRAFT</p></li>
									</ul>
								</div>
								<div class="col-md-4 bordered-ul">
									<ul>
										<li><p>Araç Marka</p><p>: FORD</p></li>
										<li><p>Araç Model</p><p>: TURBO</p></li>
										<li><p>Araç Model 2</p><p>:</p></li>
										<li><p>Araç Yılı</p><p>: 97-02</p></li>
										<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul>
										<li><p>Ana Grup</p><p>: Motor Parçaları</p></li>
										<li><p>Alt Grup</p><p>: Motor Bağlantı Takozları</p></li>
										<li><p>Birim</p><p>: AD</p></li>
										<li><p>Paket Adeti</p><p>: 1</p></li>
										<li class="info-area-open"><p>Fiyat Bilgisi</p>
											<p>: <i class="fas fa-info-circle"></i></p>
											<div class="info-area product-order-area shadow">
												<span>
													<h6>Fiyat Bilgisi</h6>
													<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
													<span>Genel İskonto</span><span>100,00 TL</span>
													<span>Bayi İskonto</span><span>50,00 TL</span>
													<span>Net Fiyat</span><span>300,00 TL</span>
													<span>Kdv(%18)</span><span>35,00 TL</span>
													<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
													<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
												</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 p-0 product-last-right">
							<span>
								<p class="firsat-badge-big">FIRSAT</p>
								<p class="kampanya-badge-big ">KAMPANYA</p>
								<p class="yeni-badge-big invisible">YENİ</p>
							</span>
							<div>
								<p>149.99 ₺</p>
								<p>%10 İndirim</p>
								<p>129.99 ₺</p>
							</div>
							<div class="product-board-last-footer">
								<div class="row m-0 p-0">
									<div class="col-md-3 col-3 m-0 p-0">
										<a onclick="Alert.success('1 Adet Sepete Eklendi.','Stok Kodu : DAY 097 RO 198H',{displayDuration: 3000, pos: 'top'})"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-search-broad">
			<div class="container-fluid">
				<div class="product-board shadow-lg">
					<div class="row">
						<div class="col-md-2 product-image">
							<i class="far fa-check-circle"></i>
							<img src="images/amort.png">
							<img class="modal-search" src="images/search.png">
						</div>
						<div class="col-md-8 ">
							<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
							<div class="row pt-2 mt-2">
								<div class="col-md-4">
									<ul>
										<li><p>Stok Kodu</p><p>: EU F21194-008</p></li>
										<li><p>Önceki Stok Kodu</p><p>: </p></li>
										<li><p>Oem Kodu</p><p>: 7354179</p></li>
										<li><p>Oem Kodu</p><p>: 95VB 6038 BF</p></li>
										<li><p>Ürün Marka</p><p>: EUROCRAFT</p></li>
									</ul>
								</div>
								<div class="col-md-4 bordered-ul">
									<ul>
										<li><p>Araç Marka</p><p>: FORD</p></li>
										<li><p>Araç Model</p><p>: TURBO</p></li>
										<li><p>Araç Model 2</p><p>:</p></li>
										<li><p>Araç Yılı</p><p>: 97-02</p></li>
										<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul>
										<li><p>Ana Grup</p><p>: Motor Parçaları</p></li>
										<li><p>Alt Grup</p><p>: Motor Bağlantı Takozları</p></li>
										<li><p>Birim</p><p>: AD</p></li>
										<li><p>Paket Adeti</p><p>: 1</p></li>
										<li class="open-info-area">
											<p>Fiyat Bilgisi</p><p>: <i class="fas fa-info-circle"></i></p>
											<div class="info-area shadow">
												<span>
													<h6>Fiyat Bilgisi</h6>
													<span>Brüt Satış Fiyatı</span><span>400,00 TL</span>
													<span>Genel İskonto</span><span>100,00 TL</span>
													<span>Bayi İskonto</span><span>50,00 TL</span>
													<span>Net Fiyat</span><span>300,00 TL</span>
													<span>Kdv(%18)</span><span>35,00 TL</span>
													<span>Kdv Dahil Net Fiyat</span><span>355,00 TL</span>
													<span>Tavsiye Edilen Satış Fiyatı</span><span>500,00 TL</span>
												</span>
											</div>
										</li>
									</ul> 
								</div>
							</div>
						</div>
						<div class="col-md-2 p-0 product-last-right">
							<span>
								<p class="firsat-badge-big">FIRSAT</p>
								<p class="kampanya-badge-big ">KAMPANYA</p> 
								<p class="yeni-badge-big invisible">YENİ</p><!-- olmayacak ise invisible class ı eklenecek  -->
							</span>
							<div>
								<p>149.99 ₺</p>
								<p>%10 İndirim</p>
								<p>129.99 ₺</p>
							</div>
							<div class="product-board-last-footer">
								<div class="row m-0 p-0">
									<div class="col-md-3 col-3 m-0 p-0">
										<a onclick="Alert.success('1 Adet Sepete Eklendi.','Stok Kodu : DAY 097 RO 198H',{displayDuration: 3000, pos: 'top'})"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-search-broad">
			<div class="container-fluid">
				<div class="product-board shadow-lg">
					<div class="row">
						<div class="col-md-2 product-image">
							<i class="far fa-check-circle"></i>
							<img src="images/amort.png">
							<img class="modal-search" src="images/search.png">
						</div>
						<div class="col-md-8 ">
							<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
							<div class="row pt-2 mt-2">
								<div class="col-md-4">
									<ul>
										<li><p>Stok Kodu</p><p>: EU F21194-008</p></li>
										<li><p>Önceki Stok Kodu</p><p>: </p></li>
										<li><p>Oem Kodu</p><p>: 7354179</p></li>
										<li><p>Oem Kodu</p><p>: 95VB 6038 BF</p></li>
										<li><p>Ürün Marka</p><p>: EUROCRAFT</p></li>
									</ul>
								</div>
								<div class="col-md-4 bordered-ul">
									<ul>
										<li><p>Araç Marka</p><p>: FORD</p></li>
										<li><p>Araç Model</p><p>: TURBO</p></li>
										<li><p>Araç Model 2</p><p>:</p></li>
										<li><p>Araç Yılı</p><p>: 97-02</p></li>
										<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
									</ul>
								</div>
								<div class="col-md-4 ">
									<ul>
										<li><p>Ana Grup</p><p>: Motor Parçaları</p></li>
										<li><p>Alt Grup</p><p>: Motor Bağlantı Takozları</p></li>
										<li><p>Birim</p><p>: AD</p></li>
										<li><p>Paket Adeti</p><p>: 1</p></li>
										<li><p>Fiyat Bilgisi</p><p>: <i class="fas fa-info-circle"></i></p></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 p-0 product-last-right">
							<span>
								<p class="firsat-badge-big">FIRSAT</p>
								<p class="kampanya-badge-big">KAMPANYA</p>
								<p class="yeni-badge-big">YENİ</p>
							</span>
							<div>
								<p>149.99 ₺</p>
								<p>%10 İndirim</p>
								<p>129.99 ₺</p>
							</div>
							<div class="product-board-last-footer">
								<div class="row m-0 p-0">
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-shopping-cart"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="fas fa-search"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0">
										<a href="#"><i class="far fa-star"></i></a>
									</div>
									<div class="col-md-3 col-3 m-0 p-0 borderless">
										<a href="#"><i class="fas fa-share-alt"></i></a>
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





<?include("footer.php");?>