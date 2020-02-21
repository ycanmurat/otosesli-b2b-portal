<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>FAVORİ SEPETİM</p></h4></div>
		<div class="col-md-6 mt-4">
			<div class="all-select-button">
				<button>Tümünü Sepete Gönder</button>
				<button>Tümünü Sil</button>
			</div>
		</div>
		<div class="col-md-12 p-1 mt-3">
			<div class="scroll-responsive">
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
								<th scope="col">Model</th>
								<th scope="col">Marka</th>
								<th scope="col">Tarih</th>
								<th scope="col" title="Plasiyer / Müşteri">P/M</th>
								<th scope="col">Detay</th>
								<th scope="col" width="20px">Bilgi</th>
								<th scope="col">Net</th>
								<th scope="col">Sil</th>
								<th scope="col">Adet</th>
								<th scope="col">Sepet</th>
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
							<td><p title="Müşteri">P</p></td>
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
							<td class="letter" onclick="Alert.error('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 0})">
								<p >
									<img src="images/letter-x.png">
								</p>
							</td>
							<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
							</td>
							<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
								<p><i class="fas fa-shopping-cart"></i></p>
							</td><!--Sepete Ekleyecek -->
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
							<td><p title="Müşteri">P</p></td>
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
							<td class="letter" onclick="Alert.error('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 0})">
								<p >
									<img src="images/letter-x.png">
								</p>
							</td>
							<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
							</td>
							<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
								<p><i class="fas fa-shopping-cart"></i></p>
							</td><!--Sepete Ekleyecek -->
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
							<td><p title="Müşteri">P</p></td>
							<td><p><a href="http://murat.kodakil.com/b2b/productdetail.php" target="_blank"><i class="fas fa-search"></i></a></p></td>

							<td class="paket-info-area-open"  width="20px">
								<p>
									<i class="fas fa-info-circle"></i>
								</p>
								<div class="paket-info-area">
									<span>Takım Fiyatıdır.</span>
									<span>Bir Pakette 5 Adet Bulunmaktadır.</span><br>
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
							<td class="letter" onclick="Alert.error('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 0})">
								<p >
									<img src="images/letter-x.png">
								</p>
							</td>
							<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
							</td>
							<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
								<p><i class="fas fa-shopping-cart"></i></p>
							</td><!--Sepete Ekleyecek -->
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
							<td><p title="Müşteri">P</p></td>
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
							<td class="letter" onclick="Alert.error('Ürün Favorilerden Çıkartıldı.','',{displayDuration: 0})">
								<p >
									<img src="images/letter-x.png">
								</p>
							</td>
							<td><p><input style="width: 40px" type="number" name="basketnumber"></p>
							</td>
							<td class="sepete-gonder"  onclick="Alert.success('1 BK21 1125 AC.','Başarıyla sepete eklendi.',{displayDuration: 3000})">
								<p><i class="fas fa-shopping-cart"></i></p>
							</td><!--Sepete Ekleyecek -->
						</tr>
					</tbody>
				</table>
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