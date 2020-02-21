<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-12"><h4 class="pagetitle"><p>PLASİYER RAPORLARI GİRİŞİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="tahsilat-girisi-tab" data-toggle="tab" href="#tahsilat-girisi" role="tab" aria-controls="tahsilat-girisi" aria-selected="true"><i class="far fa-chart-bar"></i> Tahsilat Girişi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="gider-girisi-tab" data-toggle="tab" href="#gider-girisi" role="tab" aria-controls="gider-girisi" aria-selected="false"><i class="fas fa-search-plus"></i> Gider Girişi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="alacak-bildirimi-tab" data-toggle="tab" href="#alacak-bildirimi" role="tab" aria-controls="alacak-bildirimi" aria-selected="false"><i class="fas fa-search-minus"></i> Alacak Bildirimleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="verimlilik-grafik-tab" data-toggle="tab" href="#verimlilik-grafik" role="tab" aria-controls="verimlilik-grafik" aria-selected="false"><i class="fas fa-eye"></i> Verimlilik Grafiği</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12">

			<div class="tab-content my-order-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="tahsilat-girisi" role="tabpanel" aria-labelledby="tahsilat-girisi-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Makbuz Tarih</td>
										<td>
											<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
										</td>
									</tr>
									<tr>
										<td>Makbuz No</td>
										<td><input class="form-control" type="text" name="aylik-ortalama-gun" placeholder="Makbuz Numarasını Giriniz..."></td>
									</tr>
									<tr>
										<td>Firma Seçiniz</td>
										<td>
											<select class="custom-select">
												<option>Firma Seçiniz..</option>
												<option>Firma Seçiniz..</option>
												<option>Firma Seçiniz..</option>
												<option>Firma Seçiniz..</option>
												<option>Firma Seçiniz..</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Ödeme Şekli</td>
										<td>
											<div class="pretty p-icon p-round">
												<input type="radio" name="icon_solid" checked="" />
												<div class="state p-primary">
													<i class="icon mdi mdi-check"></i>
													<label> Nakit </label>
												</div>
											</div> 
											<div class="pretty p-icon p-round">
												<input type="radio" name="icon_solid" />
												<div class="state p-primary">
													<i class="icon mdi mdi-check"></i>
													<label> Çek </label>
												</div>
											</div> 
											<div class="pretty p-icon p-round">
												<input type="radio" name="icon_solid" />
												<div class="state p-primary">
													<i class="icon mdi mdi-check"></i>
													<label> Senet </label>
												</div>
											</div>
										</td>
									</tr>

								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Ödeme Miktarı</td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar Giriniz.."> TL
										</td>
									</tr>
									<tr>
										<td>Açıklama</td>
										<td>
											<textarea class="form-control" placeholder="Açıklama Giriniz.."></textarea>
										</td>
									</tr>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Gönder</button>
								</div>
							</div>

							<!-- Çek Seçeneği-->
							<div class="col-md-12 mt-5">
								<table class="table siparis-tutar-table tahsilat-in-table">
									<tr>
										<td></td>
										<td>Çek tipi</td>
										<td>Ciro Adı</td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td>Banka</td>
										<td>Şube</td>
										<td>Hesap No</td>
										<td>Çek No</td>
										<td>Çek Vadesi</td>
										<td>Tutar</td>

									</tr>
									<tr>
										<td>1</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Banka.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Şube.."></td>
										<td><input class="form-control" type="number" name="hesap-adi" placeholder="Hesap no.."></td>
										<td><input class="form-control" type="number" name="cek-adi" placeholder="Çek no.."></td>
										<td><input class="form-control" type="number" name="cek-vadesi" placeholder="Çek vadesi.."></td>
										<td>
											<input class="form-control d-inline w-75 mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Banka.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Şube.."></td>
										<td><input class="form-control" type="number" name="hesap-adi" placeholder="Hesap no.."></td>
										<td><input class="form-control" type="number" name="cek-adi" placeholder="Çek no.."></td>
										<td><input class="form-control" type="number" name="cek-vadesi" placeholder="Çek vadesi.."></td>
										<td>
											<input class="form-control d-inline w-75 mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Banka.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Şube.."></td>
										<td><input class="form-control" type="number" name="hesap-adi" placeholder="Hesap no.."></td>
										<td><input class="form-control" type="number" name="cek-adi" placeholder="Çek no.."></td>
										<td><input class="form-control" type="number" name="cek-vadesi" placeholder="Çek vadesi.."></td>
										<td>
											<input class="form-control d-inline w-75 mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Banka.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Şube.."></td>
										<td><input class="form-control" type="number" name="hesap-adi" placeholder="Hesap no.."></td>
										<td><input class="form-control" type="number" name="cek-adi" placeholder="Çek no.."></td>
										<td><input class="form-control" type="number" name="cek-vadesi" placeholder="Çek vadesi.."></td>
										<td>
											<input class="form-control d-inline w-75 mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Banka.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Şube.."></td>
										<td><input class="form-control" type="number" name="hesap-adi" placeholder="Hesap no.."></td>
										<td><input class="form-control" type="number" name="cek-adi" placeholder="Çek no.."></td>
										<td><input class="form-control" type="number" name="cek-vadesi" placeholder="Çek vadesi.."></td>
										<td>
											<input class="form-control d-inline w-75 mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
								</table>
							</div>
							<!-- Senet Seçeneği-->
							<div class="col-md-12 mt-5">
								<table class="table siparis-tutar-table tahsilat-in-table">
									<tr>
										<td></td>
										<td>Senet tipi</td>
										<td>Ciro Adı</td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td>Senet Vadesi</td>
										<td>Düzenlenen Yer</td>
										<td>Senet Masrafı</td>
										<td>Tutar</td>
									</tr>
									<tr>
										<td>1</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Senet Vade.."></td>
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Düzenlenen Yer.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Senet Masrafı.."></td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Senet Vade.."></td>
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Düzenlenen Yer.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Senet Masrafı.."></td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Senet Vade.."></td>
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Düzenlenen Yer.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Senet Masrafı.."></td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Senet Vade.."></td>
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Düzenlenen Yer.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Senet Masrafı.."></td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td><select class="form-control w-auto"><option>ASIL</option><option>CİRO</option></select></td>
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Ciro adı..."></td><!-- Çek Tipi ASIL ise Bu td kapanacak-->
										<td><input class="form-control" type="text" name="ciro-adi" placeholder="Senet Vade.."></td>
										<td><input class="form-control" type="text" name="banka-adi" placeholder="Düzenlenen Yer.."></td>
										<td><input class="form-control" type="text" name="sube-adi" placeholder="Senet Masrafı.."></td>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar .."> TL
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="gider-girisi" role="tabpanel" aria-labelledby="gider-girisi-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Şehir</td>
										<td>
											<select class="custom-select">
												<option>Samsun</option>
												<option>Ankara</option>
												<option>Trabzon</option>
												<option>İstanbul</option>
												<option>İzmir</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Gider Tipi</td>
										<td>
											<select class="custom-select">
												<option>Konaklama</option>
												<option>Yemek</option>
												<option>Akaryakıt</option>
												<option>Araç Bakım Onarım</option>
												<option>Araç Kiralama</option>
												<option>Araç HGS</option>
												<option>Araç MTV</option>
												<option>Araç Kasko Sigorta</option>
												<option>Maaş</option>
												<option>Sigorta</option>
												<option>Prim</option>
												<option>Telefon & İnternet</option>
												<option>Nakliye</option>
												<option>Diğer</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Gider Tutar</td>
										<td><input class="form-control d-inline w-auto mr-2" type="number" name="aylik-ortalama-gun" placeholder="Tutar belirtiniz..">TL</td>
									</tr>
									<tr>
										<td>Gider Tarihi</td>
										<td>
											<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="ldate">
										</td>
									</tr>

								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Belge No</td>
										<td>
											<input class="form-control date-picker" placeholder="Belge no giriniz.." name="belgeno">
										</td>
									</tr>
									<tr>
										<td>Ödeme Tipi</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Çek</option>
												<option>Havale</option>
												<option>Senet</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Açıklama</td>
										<td>
											<textarea class="form-control" placeholder="Açıklama giriniz.."></textarea>
										</td>
									</tr>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Ekle</button>
								</div>
							</div>
							<div class="col-md-12 mt-4">
								<table class="table gider-islem-table tahsilat-in-table">
									<thead>
										<tr>
											<th scope="col">İşlem</th>
											<th scope="col">Gider Tipi</th>
											<th scope="col">Şehir</th>
											<th scope="col">Gider Tarih</th>
											<th scope="col">Belge  No</th>
											<th scope="col">Tutar</th>
											<th scope="col">Ödeme Tipi</th>
											<th scope="col">Açıklama</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td scope="row"><button class="silindi">Sil</button></td>
											<td>
												<select class="custom-select">
													<option>Konaklama</option>
													<option selected>Yakıt</option>
													<option>Yemek</option>
												</select>
											</td>
											<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
											<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate"></td>
											<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
											<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
											<td>
												<select class="custom-select">
													<option>Nakit</option>
													<option>Kredi Kartı</option>
													<option>Havale</option>
													<option>Çek</option>
													<option>Senet</option>
												</select>
											</td>
											<td>
												<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
											</td>
										</tr>
										<tr>
											<td scope="row"><button class="silindi">Sil</button></td>
											<td>
												<select class="custom-select">
													<option>Konaklama</option>
													<option selected>Yakıt</option>
													<option>Yemek</option>
												</select>
											</td>
											<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
											<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate"></td>
											<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
											<td><input class="form-control" type="number" name="gider-tutar" value="200">TL</td>
											<td>
												<select class="custom-select">
													<option>Nakit</option>
													<option>Kredi Kartı</option>
													<option>Havale</option>
													<option>Çek</option>
													<option>Senet</option>
												</select>
											</td>
											<td>
												<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
											</td>
										</tr>

										<tr>
											<td scope="row"><button class="silindi">Sil</button></td>
											<td>
												<select class="custom-select">
													<option>Konaklama</option>
													<option selected>Yakıt</option>
													<option>Yemek</option>
												</select>
											</td>
											<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
											<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate"></td>
											<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
											<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
											<td>
												<select class="custom-select">
													<option>Nakit</option>
													<option>Kredi Kartı</option>
													<option>Havale</option>
													<option>Çek</option>
													<option>Senet</option>
												</select>
											</td>
											<td>
												<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
											</td>
										</tr>

										<tr>
											<td scope="row"><button class="silindi">Sil</button></td>
											<td>
												<select class="custom-select">
													<option>Konaklama</option>
													<option selected>Yakıt</option>
													<option>Yemek</option>
												</select>
											</td>
											<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
											<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate"></td>
											<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
											<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
											<td>
												<select class="custom-select">
													<option>Nakit</option>
													<option>Kredi Kartı</option>
													<option>Havale</option>
													<option>Çek</option>
													<option>Senet</option>
												</select>
											</td>
											<td>
												<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Gönder</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="alacak-bildirimi" role="tabpanel" aria-labelledby="alacak-bildirimi-tab">
					<ul class="nav justify-content-end mr-4 nav-tabs list-style-type mt-0 tab-in-select" id="myTab" role="tablist">
						<li class="nav-item">
							<form>
								<select class="custom-select date-select w-auto">
									<option>Sıralama Seçiniz..</option>
									<option>Alacak Tutarı Artan</option>
									<option>Alacak Tutarı Azalan</option>
									<option>İşlem Tarihi Eskiden Yeniye</option>
									<option>İşlem Tarihi Yeniden Eskiye</option>
									<option>Ödeme Tarihi Yeniden Eskiye</option>
									<option>Ödeme Tarihi Eskiden Yeniye</option>
								</select>
								<select class="custom-select date-select w-auto mr-2">
									<option>Ödeme Tipi Seçiniz..</option>
									<option>Nakit</option>
									<option>Çek</option>
									<option>Senet</option>
									<option>Kredi Kartı</option>
									<option>Havale</option>
								</select>
								<select class="custom-select date-select w-auto mr-2">
									<option>Şehir Seçiniz..</option>
									<option>İstanbul</option>
									<option>Samsun</option>
									<option>İstanbul</option>
									<option>İzmir</option>
								</select>
							</form>
						</li>
					</ul>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table plasiyer-rapor-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarihi</th>
									<th scope="col">Cari Kodu</th>
									<th scope="col">Cari İsim</th>
									<th scope="col">İl</th>
									<th scope="col">İlçe</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">İlgili</th>
									<th scope="col">Durum</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table plasiyer-rapor-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>12.10.2018  <br>15:30</p></td>
										<td><p>120.07.004</p></td>
										<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
										<td><p>Samsun</p></td>
										<td><p>İlkadım</p></td>
										<td><p>Kerem Aksoy</p></td>
										<td><p class="rising">Ece Aydın</p></td>
										<td><p>Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
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
				<div class="tab-pane fade" id="verimlilik-grafik" role="tabpanel" aria-labelledby="verimlilik-grafik-tab">
					<canvas id="verimlilik-chart" height="90"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="alacakbildirimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-medium" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alacak Bildirimi</h5>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body iade-fatura-detay">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h6>Borç Bilgisi</h6>
							<table class="table fatura-iskonto ">
								<thead>
									<tr>
										<th scope="col">Güncel</th>
										<th scope="col">[ 1 - 15 Gün ]</th>
										<th scope="col">[ 16 - 30 Gün ]</th>
										<th scope="col">[ 31 - 45 Gün ]</th>
										<th scope="col">[ 45 - 60 Gün ]</th>
										<th scope="col">[ 61 Günden Fazla ]</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">3,900,00 TL</th>
										<td>900,80 TL</td>
										<td>900,80 TL</td>
										<td>900,80 TL</td>
										<td>900,80 TL</td>
										<td>900,80 TL</td>
									</tr>
								</tbody>
							</table>
						</div>
						<hr>
						<div class="col-md-12">
							<table class="table fatura-iskonto alacak-bildirim">
								<thead>
									<tr>
										<th scope="col">Ödeme Yapacağı Tarih</th>
										<th scope="col">Ödeme Yapacağı Tutar</th>
										<th scope="col">Ödeme Tipi</th>
										<th scope="col">Açıklama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">32.12.2018</th>
										<td>5,000,00 TL</td>
										<td>Nakit</td>
										<td>allah belamı versinki ödicem abi çoluğumun çocuğumun üstüne yemin mi edeyim ödicem dedim canımı mı alcaksınız</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tamamlandı</button>
			</div>
		</div>
	</div>
</div>


<script>
	new Chart(document.getElementById("verimlilik-chart"), {
		responsive: true,
		type: 'pie',
		responsive: true,
		data: {
			labels: ["Konaklama", "Yemek", "Akaryakıt", "Araç Bakım Onarım", "Araç Kiralama", "Araç HGS", "Araç MTV", "Araç Kasko Sigorta", "Maaş", "Sigorta", "Prim", "Telefon & İnternet", "Nakliye","Diğer"],
			datasets: [{
				label: "Gider",
				backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#c45550","#3cba9f","red","orange","purple","yellow","green","blue"],
				data: [2478,5267,734,784,433,433,433,2433,1433,6433,2433,233,900,600]
			}]
		},
		options: {
			title: {
				display: false,
				text: 'Yıllık verimlilik pasta grafiği'
			},
			legend:{
				position: 'right'
			},
			tooltips: {
				mode: 'label',
				callbacks: {
					label: function(tooltipItem, data) { 
						var indice = tooltipItem.index;                 
						return  data.labels[indice] +': '+data.datasets[0].data[indice] + ' TL';
					}
				}
			}
		}
	});
</script>


<?include("footer.php");?>

