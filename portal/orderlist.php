<?include("header.php");?>

<div class="ProductSearch">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 p-5">
				<h4 class="pagetitle m-auto text-center">
					<a class="active" href="javascript:void(0);">SİPARİŞ SEPETİ</a>
					<a class="passive" href="http://murat.kodakil.com/b2b/orderinfo.php">SİPARİŞ TUTAR BİLGİLERİ</a>
					<a class="passive" href="http://murat.kodakil.com/b2b/ordersend.php">SİPARİŞ GÖNDER</a>
				</h4>
			</div>
			<table class="table table-striped final-table table-order-list">
				<thead>
					<tr>
						<tr>
							<th width="10px" scope="col">
								<div class="pretty p-icon p-default">
									<input type="checkbox" />
									<div class="state p-primary">
										<i class="icon mdi fas fa-check"></i>
										<label>&nbsp</label>
									</div>
								</div>
							</th>
							<th scope="col">Durum</th>
							<th width="40px" scope="col">Stok Kodu</th>
							<th scope="col">Stok Adı</th>
							<th scope="col">Tarih</th>
							<th scope="col">Model</th>
							<th scope="col">Marka</th>
							<th scope="col">Detay</th>
							<th scope="col" width="20px">Bilgi</th>
							<th scope="col">Net</th>
							<th scope="col">Tutar</th>
							<th scope="col">Adet</th>
							<th scope="col">Güncelle</th>
							<th scope="col">Sil</th>
						</tr>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th scope="row"><p data-text="Ürün mal kabülde" id="mal-kabulde"><i class="fas fa-clock"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>

						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p>
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter" onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p >
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th><p data-text="Stokta var" id="stok-var" ><i class="fas fa-check-circle"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle"" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p >
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter"  onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p>
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th scope="row"><p data-text="Stokta yok" id="stok-yok" "><i class="fas fa-times-circle"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p >
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter" onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p>
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th scope="row"><p data-text="Ürün tedarik sürecinde" id="tedarik-bekliyor"><i class="fas fa-exclamation-circle"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p >
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter"  onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p>
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th scope="row"><p data-text="Tedarikçide yok" id="tedarikcide-yok"><i class="fas fa-plus-circle"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p >
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter"  onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p>
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
					<tr>
						<th width="10px" scope="row">
							<div class="pretty p-icon p-default">
								<input type="checkbox" />
								<div class="state p-primary">
									<i class="icon mdi fas fa-check"></i>
									<label>&nbsp</label>
								</div>
							</div>
						</th>
						<th scope="row"><p data-text="Tedarikçide var" id="tedarikcide-var"><i class="fas fa-plus-circle green"></i></p></th>
						<td width="40px">
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
								<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
								<b class="table-rozet badge-info">Fırsat Ürünü</b>
								<b class="table-rozet badge-warning">Yeni Ürün</b>
							</p></a>
						</td>
						<td><p>12.12.2012</p></td>
						<td><p>ANAMODEL</p></td>
						<td><p>MARKA</p></td>
						<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
						<td class="paket-info-area-open"  width="20px">
							<p>
								<i class="fas fa-info-circle"></i>
							</p>
							<div class="paket-info-area">
								<span>Takım Fiyatıdır.</span><br>
								<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
							</div>
						</td>
						<td class="info-area-open"><p>2999,97 TL</p>
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
						<td><p>1299,98 TL</p></td>
						<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
						</td>
						<td class="shuffle" onclick="Alert.success('Adet güncelleme başarılı.','',{displayDuration: 3000})">
							<p >
								<i class="fas fa-sync-alt"></i>
							</p>
						</td>
						<td class="letter"  onclick="Alert.error('Ürün Sepetten Çıkartıldı.','',{displayDuration: 0})">
							<p>
								<img src="images/letter-x.png">
							</p>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="siparis-gonder w-100 m-auto">
					<div class="form-group m-auto p-4">
						<label for="siparis-text-area">Sipariş Notu</label>
						<textarea placeholder="Mesajınız..." class="form-control" id="siparis-text-area" rows="3"></textarea>
					</div>
					<a class="sepet-onay mr-3" href="http://murat.kodakil.com/b2b/orderinfo.php"><img src="images/orderok.png"> ALIŞVERİŞE DEVAM ET</a>
					<a class="sepet-bosalt" href="#"><img src="images/orderwrong.png"> SEPETİ BOŞALT</a>
				</form>
				<div class="guvenli-alisveris-image">
					<img src="images/sanalposguvenlik.png">
					<img src="images/rapidssl.png">
					<img src="images/ordercard2.png">
					<img src="images/ordercard1.png">
				</div>
			</div>
		</div>
	</div>
</div>

<?include("footer.php");?>