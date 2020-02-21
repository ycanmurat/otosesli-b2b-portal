<?include("header.php");?>
<div style="background-color: #f7f7f7;" class="container-fluid mt-4">
	<div class="row pr-4 pl-4">
		<div class="col-md-12"><h4 class="pagetitle"><p>SATIN ALMA RAPORU</p></h4></div>

		<div class="col-md-4">
			<table class="table siparis-tutar-table satin-alma-table">
				<tr>
					<td>Ünite</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tedarikçi Adı</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>

			</table>
		</div>
		<div class="col-md-4">
			<table class="table siparis-tutar-table satin-alma-table">
				<tr>
					<td>Araç Marka</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Araç Tipi</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>

			</table>
		</div>
		<div class="col-md-4">
			<table class="table siparis-tutar-table satin-alma-table">
				<tr>
					<td>Araç Model</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ürün Marka</td>
					<td>
						<select class="custom-select">
							<option>Hepsinde Ara</option>
							<option>Value</option>
							<option>Value</option>
							<option>Value</option>
						</select>
					</td>
				</tr>

			</table>
		</div>
		<div class="col-md-12">

			<table class="table siparis-tutar-table satin-alma-table text-center">
				<tr>
					<td>					
						<div class="pretty p-icon p-toggle p-plain">
							<input type="radio" name="fatura-tipi"  checked />
							<div class="state p-success-o p-on">
								<i class="fas fa-eye"></i>
								<label>Satın Alma Raporu</label>
							</div>
							<div class="state p-off">
								<i class="fas fa-eye-slash"></i>
								<label>Satın Alma Raporu</label>
							</div>
						</div>
					</td>

					<td>					
						<div class="pretty p-icon p-toggle p-plain">
							<input type="radio" name="fatura-tipi"  />
							<div class="state p-success-o p-on">
								<i class="fas fa-eye"></i>
								<label>Stok İcmal Raporu</label>
							</div>
							<div class="state p-off">
								<i class="fas fa-eye-slash"></i>
								<label>Stok İcmal Raporu</label>
							</div>
						</div>
					</td>

					<td>					
						<div class="pretty p-icon p-toggle p-plain">
							<input type="radio" name="fatura-tipi"  />
							<div class="state p-success-o p-on">
								<i class="fas fa-eye"></i>
								<label>Fiyat Geçiş Raporu</label>
							</div>
							<div class="state p-off">
								<i class="fas fa-eye-slash"></i>
								<label>Fiyat Geçiş Raporu</label>
							</div>
						</div>
					</td>

					<td>					
						<div class="pretty p-icon p-toggle p-plain">
							<input type="radio" name="fatura-tipi"  />
							<div class="state p-success-o p-on">
								<i class="fas fa-eye"></i>
								<label>Kar Marjı Raporu</label>
							</div>
							<div class="state p-off">
								<i class="fas fa-eye-slash"></i>
								<label>Kar Marjı Raporu</label>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-12 text-center">
			<div class="sabit-bilgi-btn text-center">
				<button class="sabit-btn-kaydet">Temizle</button>
				<button class="sabit-btn-guncelle">Arama Yap</button>
			</div>
		</div>
	</div>
	<hr>
</div>


<!-- görünüm 1 -->
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p class="alt-pagetitle">ARAMA SONUÇLARI</p></h4></div>
		<div class="col-md-12 p-0 mt-2">
			<div class="ProductSearch">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 p-1">
							<div class="scroll-responsive">
								<table class="table table-striped final-table satin-alma">
									<thead>
										<tr>
											<th scope="col">Durum</th>
											<th scope="col">Stok Kodu</th>
											<th scope="col">Stok Adı</th>
											<th scope="col">Model</th>
											<th scope="col">Üretici Kodu</th>
											<th scope="col">Asgari Stok</th>
											<th scope="col">Müş. Siparişi</th>
											<th scope="col">Satıcı Şiparişi</th>

											<th scope="col">Stok Bakiye</th>
											<th scope="col">Paket Adeti</th>
											<th scope="col">Öneri Sipariş</th>
											<th scope="col"></th>
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
																		<a class="nav-link active" id="depo-bakiye-tab" data-toggle="tab" href="#depo-bakiye" role="tab" aria-controls="depo-bakiye" aria-selected="true">
																			Depo Bakiye Listesi
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="msatis-liste-tab" data-toggle="tab" href="#msatis-liste" role="tab" aria-controls="msatis-liste" aria-selected="false">
																			Müşteri Satış Listesi
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="temsilci-satis-tab" data-toggle="tab" href="#temsilci-satis" role="tab" aria-controls="temsilci-satis" aria-selected="false">
																			Fiyat Bilgileri
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="sirket-satis-tab" data-toggle="tab" href="#sirket-satis" role="tab" aria-controls="sirket-satis" aria-selected="false">
																			Şirket Satış Listesi
																		</a>
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
																		<select class="custom-select date-select mr-1">
																			<option selected="">Hepsi</option>
																			<option>Deniz Arslan</option>
																			<option>Serkan Kurt</option>
																			<option>Can Öztürk</option>
																			<option>Burak Şen</option>
																			<option>Onur Tan</option>
																			<option>Mert Koç</option>
																		</select>
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
											<td><p>FO-107-R1</p></td>
											<td><p>60 AD.</p></td>
											<td><p>0 AD.</p></td>
											<td><p>0 AD.</p></td>
											<td><p>46 AD.</p></td>
											<td><p>2 AD.</p></td>
											<td><p>2 AD.</p></td>
											<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
											</td>
											<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 0})">
												<p><i class="fas fa-shopping-cart"></i></p>
											</td><!--Sepete Ekleyecek -->
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?include("footer.php");?>

