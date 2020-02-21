<?include("header.php");?>
<div class="container-fluid mt-2">
	<div class="row pl-2 pr-2">
		<div class="col-md-12 mt-3 mb-2 pr-4 pl-4">
			<ul class="nav nav-tabs nav-justified order-tab-menu analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="basket-order-tab" data-toggle="tab" href="#basket-order" role="tab" aria-controls="basket-order" aria-selected="true"><i class="fas fa-shopping-basket"></i> Sipariş Sepeti</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="siparis-tutar-bilgi-tab" data-toggle="tab" href="#siparis-tutar-bilgi" role="tab" aria-controls="siparis-tutar-bilgi" aria-selected="false"><i class="fas fa-money-check"></i>Sipariş Tutar Bilgileri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="order-send-tab" data-toggle="tab" href="#order-send" role="tab" aria-controls="order-send" aria-selected="false"><i class="fas fa-paper-plane"></i>Sipariş Gönder</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12">
			<div class="tab-content urun-analiz-content" id="myTabContent">
				<div class="tab-pane fade show active" id="basket-order" role="tabpanel" aria-labelledby="basket-order-tab">
					<table class="table table-striped final-table table-order-list">
						<thead>
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
								<th scope="col">Model</th>
								<th scope="col">Marka</th>
								<th scope="col">Tarih</th>
								<th scope="col" title="Plasiyer / Müşteri">P/M</th>
								<th scope="col">Detay</th>
								<th scope="col" width="20px">Bilgi</th>
								<th scope="col">Net</th>
								<th scope="col">Tutar</th>
								<th scope="col">Adet</th>
								<th scope="col">Güncelle</th>
								<th scope="col">Sil</th>
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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>

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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
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
								<td>
									<p class="stok-kodu-modal" data-toggle="modal" data-target="#stok-kodu-modal-open">1 BK21 1125 AC</p>
								</td>
								<td>
									<a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><p>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI)  02/-
										<br><b>( Oem Kodu: 1C 1O 6384AA )</b>-<b>( Oem Kodu: 1C 1O 6384AA )</b><br>
										<b class="table-rozet badge-info">Fırsat Ürünü</b>
										<b class="table-rozet badge-warning">Yeni Ürün</b>
									</p></a>
								</td>
								<td><p>ANAMODEL</p></td>
								<td><p>MARKA</p></td>
								<td><p>12.12.2012</p></td>
								<td><p title="Plasiyer">P</p></td>
								<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>
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
				<div class="tab-pane fade" id="siparis-tutar-bilgi" role="tabpanel" aria-labelledby="siparis-tutar-bilgi-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Sepet Puan</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Kullanılabilir Risk Limiti</td>
										<td>765,45 TL</td>
									</tr>
									<tr>
										<td>Sepet Kalem Sayısı</td>
										<td>6</td>
									</tr>
									<tr>
										<td>Sepet Kalem Adeti</td>
										<td>85</td>
									</tr>
									<tr>
										<td>Sevkiyat Ölçüsü</td>
										<td>100 desi / 15 Kg</td>
									</tr>
									<tr>
										<td>Sevkiyat Nakliye Tutarı</td>
										<td>100 TL</td>
									</tr>
									<tr>
										<td>Sepet Kar Marjı</td>
										<td>10%</td>
									</tr>
									<tr>
										<td>Sepet Karlılık</td>
										<td>14 %</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Brüt Toplam</td>
										<td>2,678,22 TL</td>
									</tr>
									<tr>
										<td>Genel İskonto</td>
										<td>22 %</td>
									</tr>
									<tr>
										<td>Ödeme İskonto</td>
										<td>12 %</td>
									</tr>
									<tr>
										<td>Bayi İskonto</td>
										<td>16 %</td>
									</tr>
									<tr>
										<td>Kampanya İskonto</td>
										<td>4 %</td>
									</tr>
									<tr>
										<td>Ara Toplam</td>
										<td>2,166,81 TL</td>
									</tr>
									<tr>
										<td>KDV (18%)</td>
										<td>311,78 TL</td>
									</tr>
									<tr>
										<td>Genel Toplam</td>
										<td>72,146,22 TL</td>
									</tr>
								</table>
							</div>

						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="order-send" role="tabpanel" aria-labelledby="order-send-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Sipariş Tipi</td>
										<td>
											<select class="custom-select">
												<option>Müşteri Siparişi</option>
												<option>Satıcı Siparişi</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Sevkiyat Tipi</td>
										<td>
											<select class="custom-select">
												<option>Acil</option>
												<option>Normal</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Sevkiyat Firma</td>
										<td>
											<select class="custom-select">
												<option>Aras Kargo</option>
												<option>MNG Kargo</option>
												<option>UPS Kargo</option>
												<option>Yurtiçi Kargo</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Gönderim Şekli</td>
										<td>Peşin Ödeme</td>
									</tr>
									<tr>
										<td>Ödeme Şekli</td>
										<td>
											Kredi Kartı İle Ödeme
										</td>
									</tr>
									<tr>
										<td>Ödeme Vadesi</td>
										<td>30.12.2018</td>
									</tr>
									<tr>
										<td>Tahsilat Vadesi</td>
										<td>12.04.2018</td>
									</tr>

								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Sipariş Notu 1</td>
										<td><input class="form-control" type="text" name="teslimat-adresi" placeholder=""></td>
									</tr>
									<tr>
										<td>Sipariş Notu 2</td>
										<td><input class="form-control" type="text" name="teslimat-adresi" placeholder=""></td>
									</tr>
									<tr>
										<td>Sipariş Notu 3</td>
										<td><input class="form-control" type="text" name="teslimat-adresi" placeholder=""></td>
									</tr>
									<tr>
										<td>Sevkiyat Adresi</td>
										<td><textarea class="form-control disabled" type="adress" name="sevkiyat-adresi" placeholder="İstasyon mah. Anafartalar Cad. Şemsibey Apt. No:23/1 Samsun/İlkadım" disabled></textarea></td>
									</tr>
									<tr>
										<td>Teslimat Adresi</td>
										<td><textarea class="form-control" type="adress" name="teslimat-adresi" placeholder="Adres yazınız.."></textarea></td>
									</tr>
								</table>
							</div>
							<div class="row m-auto w-75">
								<div class="col-md-6 col-12 m-auto text-center">
									<a class="sepet-bosalt " href="javascript:void(0);" data-toggle="modal" data-target="#modal-warning-sepet"><i class="far fa-times-circle"></i> SEPETİ BOŞALT</a>
								</div>
								<div class="col-md-6 col-12 m-auto text-center">
									<a class="sepet-onay"href="javascript:void(0);" data-toggle="modal" data-target="#modal-danger-sepet"><i class="far fa-check-circle"></i> ALIŞVERİŞİ TAMAMLA</a>
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
<div class="modal fade" id="modal-warning-sepet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content delete-alert">
			<div class="modal-header text-center">
				<h5 class="modal-title m-auto pl-5" id="exampleModalLabel">Sepet Uyarısı</h5>
				<button type="button" class="close mr-0 ml-0" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Sepetinizde <b>36</b> ürün bulunuyor !<br> Tümünü kaldırmak istediğinize emin misiniz ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Vazgeç</button>
				<button type="button" class="btn btn-secondary" >Onayla</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-danger-sepet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content danger-alert">
			<div class="modal-header text-center">
				<h5 class="modal-title m-auto pl-5" id="exampleModalLabel">Sepet Uyarısı</h5>
				<button type="button" class="close mr-0 ml-0" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<b>Risk limitiniz yetersizdir lütfen satış temsilciniz ile irtibata geçiniz. !</b><br>
				<a href="http://murat.kodakil.com/b2b/orderfinalpage.php"> Başarılı ödeme sayfası</a>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tamam</button>
			</div>
		</div>
	</div>
</div>

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

