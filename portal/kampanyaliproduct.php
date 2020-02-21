<?include("header.php");?>
<div class="container-fluid product-fixed">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>KAMPANYALI ÜRÜNLER</p></h4></div>
		<div class="col-md-6">
			<ul class="nav justify-content-end  nav-tabs list-style-type" id="myTab" role="tablist">
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
					<a class="nav-link" id="type-list-tab" data-toggle="tab" href="#list-type" role="tab" aria-controls="type-list" aria-selected="true"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="type-block-tab" data-toggle="tab" href="#type-block" role="tab" aria-controls="type-block" aria-selected="false"><i class="fas fa-th"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="type-broad-tab" data-toggle="tab" href="#type-broad" role="tab" aria-controls="type-broad" aria-selected="false"><i class="fas fa-th-list"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="tab-content list-style-type-area" id="myTabContent">
				<div class="tab-pane fade" id="list-type" role="tabpanel" aria-labelledby="type-list-tab"><!-- Liste Görünüm -->
					<div class="ProductSearch">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
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
												<th scope="col"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row"><p data-text="Stokta yok" id="stok-yok" "><i class="fas fa-times-circle"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>

											<tr>
												<th scope="row"><p data-text="Stokta var" id="stok-var" ><i class="fas fa-check-circle"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>

											<tr>
												<th scope="row"><p data-text="Ürün tedarik sürecinde" id="tedarik-bekliyor"><i class="fas fa-exclamation-circle"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>

											<tr>
												<th scope="row"><p data-text="Tedarikçide yok" id="tedarikcide-yok"><i class="fas fa-plus-circle"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>

											<tr>
												<th scope="row"><p data-text="Tedarikçide var" id="tedarikcide-var"><i class="fas fa-plus-circle green"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>

											<tr>
												<th scope="row"><p data-text="Ürün mal kabülde" id="mal-kabulde"><i class="fas fa-clock"></i></p></th>
												<td>
													<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
												</td>
												<td>
													<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
														<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b>
													</p></a>
												</td>
												<td>
													<p>V362</p>
												</td>
												<td>
													<p>OTOSAN</p>
												</td>
												<td>
													<p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p>
												</td>
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
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</td>
												<td>
													<p><input style="width: 40px" type="number" name="basketnumber"></p>
												</td>
												<td class="sepete-gonder"  onclick="Alert.error('Adet Olarak 2 ve Katlarını Sepete Ekleyebilirsiniz.','',{displayDuration: 0})">
													<p><i class="fas fa-shopping-cart"></i></p>
												</td><!--Sepete Ekleyecek -->
												<td class="favori-ekle" onclick="Alert.warning('1 BK21 1125 AC.','Başarıyla favorilere eklendi.',{displayDuration: 0})">
													<p><i class="fas fa-star"></i></p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade  show active" id="type-block" role="tabpanel" aria-labelledby="type-block-tab"><!-- Kutu Görünüm -->
					<div class="product-search-block ">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Stokta yok" id="stok-yok" class="fas fa-times-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Ürün tedarik sürecinde" id="tedarik-bekliyor" class="fas fa-exclamation-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Tedarikçide yok" id="tedarikcide-yok" class="fas fa-plus-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Tedarikçide var" id="tedarikcide-var" class="fas fa-plus-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Stokta var" id="mal-kabulde" class="fas fa-clock"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
									<div class="product-block">
										<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
											<span>
												<p class="yeni-badge">YENİ</p>
												<p class="firsat-badge">FIRSAT</p>
												<div class="box-info-area">
													<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
													<i class="fas fa-info-circle paket-bilgi-key">
														<div class="paket-info-area">
															<span>Takım Fiyatıdır.</span>
															<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
															<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
														</div>
													</i>
												</div>
											</span>
											<img src="images/turbocharger.png">
										</a>
										<div class="product-block-middle">
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">7S618B081 AB</p>
											<p data-toggle="modal" data-target="#stok-kodu-modal-open">EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
										<div class="hover-active">
											<div class="row m-auto">
												<div class="col-md-3 col-3 m-0 p-0">
													<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0">
													<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
												</div>
												<div class="col-md-3 col-3 m-0 p-0 borderless">
													<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 mb-5">
								<div class="product-block">
									<a class="product-detail-link" href="http://murat.kodakil.com/b2b/productdetail.php">
										<span>
											<p class="yeni-badge">YENİ</p>
											<p class="firsat-badge">FIRSAT</p>
											<div class="box-info-area">
												<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
												<i class="fas fa-info-circle paket-bilgi-key">
													<div class="paket-info-area">
														<span>Takım Fiyatıdır.</span>
														<span>Bir Pakette 5 Adet Bulunmaktadır.</span>
														<span>Bu üründen <b>1.02 <b>CP</b></b> Kazanacaksınız.</span>
													</div>
												</i>
											</div>
										</span>
										<img src="images/turbocharger.png">
										<div class="product-block-middle">
											<p>7S618B081 AB</p>
											<p>EU EF24171-083</p>
											<p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</p>
										</div>
										<div class="product-block-footer pt-2">
											<p>%10 İndirim</p>
											<p>149.99 ₺</p>
											<p>129.99₺</p>
										</div>
									</a>
									<div class="hover-active">
										<div class="row m-auto">
											<div class="col-md-3 col-3 m-0 p-0">
												<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="javascript:void(0);"  onclick="Alert.warning('Ürünü Başarıyla Favorilere Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})"><i class="far fa-star"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0 borderless">
												<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
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
									<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img src="images/amort.png">
									</a>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img class="modal-search" src="images/search.png">
									</a>
								</div>
								<div class="col-md-8 ">
									<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
									<div class="row pt-2 mt-2">
										<div class="col-md-4">
											<ul>
												<li class="stok-modal-hover" data-toggle="modal" data-target="#stok-kodu-modal-open"><p>Stok Kodu</p><p>: EU F21194-008</p></li>
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
												<li><p>Araç Yılı</p><p>: 97-02</p></li>
												<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
												<li class="cp-info"><p>Kazanılacak Cari Puan</p><p>: 1.29 <b>CP</b></p></li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul>
												<li><p>Ana Grup</p><p>: Motor Parçaları</p></li>
												<li><p>Alt Grup</p><p>: Motor Bağlantı Takozları</p></li>
												<li><p>Birim</p><p>: AD</p></li>
												<li><p>Paket Adeti</p><p>: 1</p></li>
												<li class="info-area-open"><p>Fiyat Bilgisi</p>
													<p >: <i class="fas fa-info-circle"></i>
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
													</p>
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
												<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="javascript:void(0);" onclick="Alert.warning('Ürün Favorilere Eklendi','Başarılı')"><i class="far fa-star"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0 borderless">
												<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
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
									<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img src="images/amort.png">
									</a>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img class="modal-search" src="images/search.png">
									</a>
								</div>
								<div class="col-md-8 ">
									<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
									<div class="row pt-2 mt-2">
										<div class="col-md-4">
											<ul>
												<li class="stok-modal-hover" data-toggle="modal" data-target="#stok-kodu-modal-open"><p>Stok Kodu</p><p>: EU F21194-008</p></li>
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
												<li><p>Araç Yılı</p><p>: 97-02</p></li>
												<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
												<li class="cp-info"><p>Kazanılacak Cari Puan</p><p>: 1.29 <b>CP</b></p></li>
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
												<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="javascript:void(0);" onclick="Alert.warning('Ürün Favorilere Eklendi','Başarılı')"><i class="far fa-star"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0 borderless">
												<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
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
									<i data-text="Stokta var" id="stok-var" class="fas fa-check-circle"></i>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img src="images/amort.png">
									</a>
									<a  href="images/amort.png" data-lightbox="example-set" data-title="İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-">
										<img class="modal-search" src="images/search.png">
									</a>
								</div>
								<div class="col-md-8 ">
									<h6>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/-</h6>
									<div class="row pt-2 mt-2">
										<div class="col-md-4">
											<ul>
												<li class="stok-modal-hover" data-toggle="modal" data-target="#stok-kodu-modal-open"><p>Stok Kodu</p><p>: EU F21194-008</p></li>
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
												<li><p>Araç Yılı</p><p>: 97-02</p></li>
												<li><p>Araç Tipi</p><p>: Hafif Ticari</p></li>
												<li class="cp-info"><p>Kazanılacak Cari Puan</p><p>: 1.29 <b>CP</b></p></li>
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
												<a data-toggle="modal" data-target="#product-valueModal"><i class="fas fa-shopping-cart"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="http://murat.kodakil.com/b2b/productdetail.php"><i class="fas fa-search"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0">
												<a href="javascript:void(0);" onclick="Alert.warning('Ürün Favorilere Eklendi','Başarılı')"><i class="far fa-star"></i></a>
											</div>
											<div class="col-md-3 col-3 m-0 p-0 borderless">
												<a data-toggle="modal" data-target="#share-socialModal"><i class="fas fa-share-alt"></i></a>
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

	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="product-valueModal" tabindex="-1" role="dialog" aria-labelledby="product-valueModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sepet Uyarısı</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Kaç adet satın almak istersiniz ?
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
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
				<button type="button" class="btn btn-primary" onclick="Alert.success('Ürünü 8 Adet Başarıyla Sepete Eklendi.','7S618B081 AB',{displayDuration: 3000, pos: 'top'})">Sepete Ekle</button>
			</div>
		</div>
	</div>
</div>
<!-- Stok kodu modal -- STOK KODU MODALLARININ TAMAMI BUNU KULLANACAK !!!! -->
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
						<canvas id="urun-fiyat-analiz-chart" height="80"></canvas>

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
<!-- Modal 2 PAYLAŞAMA MODALININ TAMAMI BURADAN KULLANILACAK !!-->
<div class="modal fade" id="share-socialModal" tabindex="-1" role="dialog" aria-labelledby="share-socialModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Paylaş</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="share-box-area">
					<a class="whatsapp" target="_blank"  href="https://www.addtoany.com/add_to/whatsapp?linkurl=http%3A%2F%2Fmurat.kodakil.com%2Fb2b%2Fuserlogin.php%20&type=page&linkname=&linknote="
					title=" Whatsapp Paylaş"><i class="fab fa-whatsapp"></i> Whatsapp</a>
					<a class="facebook" target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=murat.kodakil.com/b2b/userlogin.php"
					title=" Facebook Paylaş"><i class="fab fa-facebook-f"></i> Facebook</a>
					<a class="Pinterest" target="_blank"  href="mailto:?subject=Share Buttons Demo&body=murat.kodakil.com/b2b/userlogin.php"
					title="E-Posta Gönder"><i class="far fa-envelope"></i> E-Posta</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tamam</button>
			</div>
		</div>
	</div>
</div>


<script>
	new Chart(document.getElementById("urun-fiyat-analiz-chart"), {
		type: 'line',
		data: {
			labels: ['1 - 7 Kasım','8 - 15 Kasım','16 - 23 Kasım','23 - 30 Kasım','Günümümüz'],
			datasets: [{ 
				data: [199.99,219.99,249.99,239.99,219.99],
				borderColor: "#3e95cd",
				fill: false
			}
			]
		},
		options: {
			legend:{
				display: false,
			},
			title: {
				display: true,
				text: 'İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/- Ürünü Fiyat Analizi'
			},
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + ' TL';
					}
				}
			},
		}
	});
</script>

<?include("footer.php");?>
