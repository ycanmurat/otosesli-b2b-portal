<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>CARİ BİLGİLERİM</p></h4></div>
		<div class="col-md-12 mb-1 p-2">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="sabit-bilgiler-tab" data-toggle="tab" href="#sabit-bilgiler" role="tab" aria-controls="sabit-bilgiler" aria-selected="true"><i class="fas fa-address-book"></i> Sabit Bilgiler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="carihesap-bilgiler-tab" data-toggle="tab" href="#carihesap-bilgiler" role="tab" aria-controls="carihesap-bilgiler" aria-selected="false"><i class="fas fa-user-tie"></i>Cari Hesap Bilgileri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="gorseller-pics-tab" data-toggle="tab" href="#gorseller-pics" role="tab" aria-controls="gorseller-pics" aria-selected="false"><i class="fas fa-images"></i>Görseller</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="password-setting-tab" data-toggle="tab" href="#password-setting" role="tab" aria-controls="password-setting" aria-selected="false"><i class="fas fa-key"></i>Şifre İşlemleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="yetkili-bilgileri-tab" data-toggle="tab" href="#yetkili-bilgileri" role="tab" aria-controls="yetkili-bilgileri" aria-selected="false"><i class="fas fa-address-card"></i>Yetkili Bilgileri</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-0">
			<div class="tab-content urun-analiz-content" id="myTabContent">
				<div class="tab-pane fade show active" id="sabit-bilgiler" role="tabpanel" aria-labelledby="sabit-bilgiler-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Cari Kodu</td>
										<td><input class="form-control" type="text" name="carikodu" placeholder="12055.053" disabled></td>
									</tr>
									<tr>
										<td>Cari Adı</td>
										<td><input class="form-control" type="text" name="cariadi" placeholder="OTO SESLİ YED. PAR." disabled></td>
									</tr>
									<tr>
										<td>Kayıt Tarihi</td>
										<td><input class="form-control" type="number" name="kayit-tarihi" placeholder="01.01.1970" disabled></td>
									</tr>
									<tr>
										<td>Cari Grubu</td>
										<td>
											<select class="custom-select" disabled>
												<option>Alıcı</option>
												<option>Satıcı</option>
												<option>Depocu</option>
												<option>Manav</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Firma tipi</td>
										<td>
											<select class="custom-select" disabled>
												<option>Şahıs</option>
												<option>Limited</option>
												<option>Anonim</option>
												<option>Paravan</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Firma Sahibi</td>
										<td><input class="form-control" type="text" name="firma-sahibi" placeholder="Murat CAN" disabled></td>
									</tr>
									<tr>
										<td>TC No</td>
										<td><input class="form-control" type="number" name="tcno" placeholder="55555555555" disabled></td>
									</tr>
									<tr>
										<td>Vergi No</td>
										<td><input class="form-control" type="number" name="vergino" placeholder="546541616" disabled></td>
									</tr>
									<tr>
										<td>Vergi Dairesi</td>
										<td><input class="form-control" type="text" name="vergidaire" placeholder="BAFRA" disabled></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>İl</td>
										<td><input class="form-control" type="text" name="city" placeholder="SAMSUN" disabled></td>
									</tr>
									<tr>
										<td>İlçe</td>
										<td><input class="form-control" type="text" name="city-alt" placeholder="TEKKEKÖY" disabled></td>
									</tr>
									<tr>
										<td>Ülke</td>
										<td><input class="form-control" type="text" name="country" placeholder="TÜRKİYE" disabled></td>
									</tr>
									<tr>
										<td>Adres</td>
										<td><input class="form-control" type="text" name="adress1" placeholder="İSTASYON MAH. NO:23" disabled></td>
									</tr>
									<tr>
										<td>Telefon</td>
										<td><input class="form-control" type="number" name="telephone" placeholder="0555 000 00 00" disabled></td>
									</tr>
									<tr>
										<td>Fax</td>
										<td><input class="form-control" type="number" name="faxphone" placeholder="0555 000 00 00" disabled></td>
									</tr>
									<tr>
										<td>Web</td>
										<td><input class="form-control" type="text" name="website" placeholder="murat.kodakil.com" disabled></td>
									</tr>
									<tr>
										<td>Kurumsal E-Posta(KEP)</td>
										<td><input class="form-control" type="text" name="kepadress" placeholder="info@otosesli.com" disabled></td>
									</tr>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Güncelle</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="carihesap-bilgiler" role="tabpanel" aria-labelledby="carihesap-bilgiler-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Aylık Ortalama Satış</td>
										<td><input class="form-control" type="text" name="aylik-ortalama-gun" value="7,000,13 TL"></td>
									</tr>
									<tr>
										<td>Aylık Satış Hedefi</td>
										<td>
											<select class="custom-select">
												<option>0 - 1500 TL</option>
												<option>1,500 - 2,500 TL</option>
												<option>2,500 - 5,000 TL</option>
												<option>5,000 - 10,000 TL</option>
												<option>10,0000 TL +</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Ödeme Tipi</td>
										<td>
											<select class="custom-select">
												<option>Nakit (Kredi Kartı)</option>
												<option>Çek</option>
												<option>Senet</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Vade Tipi</td>
										<td><input class="form-control" type="text" name="vade-type" value="AY030"></td>
									</tr>
									<tr>
										<td>İskonto Tipi</td>
										<td><input class="form-control" type="text" name="iskonto-type" value="NKA ( 22+5+7 )"></td>
									</tr>
									<tr>
										<td>Risk Limiti</td>
										<td><input class="form-control" type="text" name="risk-limiti" value="4,620,21 TL"></td>
									</tr>
									<tr>
										<td>Gönderim Şekli</td>
										<td>
											<select class="custom-select">
												<option>Peşin Ödeme</option>
												<option>Ücret Alıcı</option>
												<option>Fatura Altı</option>
											</select>
										</td>
									</tr>

								</table>
							</div>
							<div class="col-md-6">
								<table class="table siparis-tutar-table">

									<tr>
										<td>Kilit</td>
										<td>
											<select class="custom-select">
												<option>Açık</option>
												<option>Fatura İşlemleri Kilit</option>
												<option>Bütün İşlemlerde Kilit</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Hesap Tipi</td>
										<td>
											<select class="custom-select">
												<option>Yaşlandırma</option>
												<option>Özel Hesap Kapatma</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Tahsilat Gün</td>
										<td><input class="form-control" type="number" name="tahsilat-gun" value="32"></td>
									</tr>


									<tr>
										<td>Kar Marjı %</td>
										<td><input class="form-control" type="number" name="kar-marji" value="23"></td>
									</tr>
									<tr>
										<td>Teminat Limiti</td>
										<td><input class="form-control" type="text" name="teminat-limiti" value="7,365,40 TL"></td>
									</tr>
									<tr>
										<td>Ödeme Şekli</td>
										<td>
											<select class="custom-select">
												<option>Ön Ödemeli</option>
												<option>Cari Hesaba Mahsuben</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Sevkiyat Firma</td>
										<td>
											<select class="custom-select">
												<option>Aras Kargo</option>
												<option>Mng Kargo</option>
												<option>KargoKar</option>
												<option>Sürat Kargo</option>
												<option>Ambar Kargo</option>
											</select>
										</td>
									</tr>

								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Güncelle</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="gorseller-pics" role="tabpanel" aria-labelledby="gorseller-pics-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="cari-gorsel-item">
									<a href="images/shopimg1.jpg" data-lightbox="example-set" data-title="OTOSESLİ İÇ/DIŞ MEKAN ÇEKİMLERİ">
										<img src="images/shopimg1.jpg">
									</a>
									<div class="btn-up-del">
										<input type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label for="inputGroupFile01"><i class="fas fa-upload"></i></label>
										<button class="del-btn"><i class="fas fa-trash-alt"></i></button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="cari-gorsel-item">
									<a href="images/shopimg2.jpg" data-lightbox="example-set" data-title="OTOSESLİ İÇ/DIŞ MEKAN ÇEKİMLERİ">
										<img src="images/shopimg2.jpg">
									</a>
									<div class="btn-up-del">
										<input type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label for="inputGroupFile01"><i class="fas fa-upload"></i></label>
										<button class="del-btn"><i class="fas fa-trash-alt"></i></button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="cari-gorsel-item">
									<a href="https://fakeimg.pl/1260/" data-lightbox="example-set" data-title="OTOSESLİ İÇ/DIŞ MEKAN ÇEKİMLERİ">
										<img src="https://fakeimg.pl/1260/">
									</a>
									<div class="btn-up-del">
										<input type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label for="inputGroupFile01"><i class="fas fa-upload"></i></label>
										<button class="del-btn"><i class="fas fa-trash-alt"></i></button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="cari-gorsel-item image-up">
									<input type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label for="inputGroupFile01"><i class="far fa-images"></i></label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="password-setting" role="tabpanel" aria-labelledby="password-setting-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<td>B2B Kullanıcı Kodu</td>
										<td><input class="form-control" type="number" name="b2b-pass" value="854485"></td>
									</tr>
									<tr>
										<td>B2B Mevcut Şifre</td>
										<td><input class="form-control" type="password" name="b2b-pass" value="123456789"></td>
									</tr>
									<tr>
										<td>B2B Yeni Şifre</td>
										<td><input class="form-control" type="password" name="new-b2b-pass" placeholder="Yeni B2B Şifresi"></td>
									</tr>
									<tr>
										<td>B2B Yeni Şifre Tekrar</td>
										<td><input class="form-control" type="password" name="new2-b2b-pass" placeholder="Yeni B2B Şifresi Tekrar"></td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Güvenlik Şifre</td>
										<td><input class="form-control" type="password" name="guvenlik-pass" value="123456789"></td>
									</tr>
									<tr>
										<td>Güvenlik Yeni Şifre</td>
										<td><input class="form-control" type="password" name="new-guvenlik-pass" placeholder="Yeni Güvenlik Şifresi"></td>
									</tr>
									<tr>
										<td>Güvenlik Yeni Şifre Tekrar</td>
										<td><input class="form-control" type="password" name="new2-guvenlik-pass" placeholder="Yeni Güvenlik Şifresi Tekrar"></td>
									</tr>
									<tr>
										<td>Şifre Değişiklik Süresi</td>
										<td>
											<select class="custom-select">
												<option>1 Ay</option>
												<option>3 Ay</option>
												<option>6 Ay</option>
												<option>1 Yıl</option>
											</select>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Maksimum Kullanıcı Sayısı</td>
										<td><input class="form-control" type="number" name="b2b-pass" value="6"></td>
									</tr>
									<tr>
										<td>Oturum Açık Kalma Süresi</td>
										<td>
											<select class="custom-select">
												<option>Oturum Açık Kalsın</option>
												<option>5 Dakika</option>
												<option>15 Dakika</option>
												<option>30 Dakika</option>
												<option>1 Saat</option>
												<option>2 Saat</option>
											</select>
										</td>
									</tr>
									<tr>
										<td title="Yanlış Şifre Tekrarında Sistem Kilitlensin">Sistem Koruması</td>
										<td>					
											<label  title="Yanlış Şifre Tekrarında Sistem Kilitlensin" class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Güncelle</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="yetkili-bilgileri" role="tabpanel" aria-labelledby="yetkili-bilgileri-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="yetkili-gorseli">
									<a href="images/test-image.jpg" data-lightbox="example-set" data-title="OTOSESLİ YETKİLİ FOTOĞRAFI">
										<img src="images/test-image.jpg">
									</a>
									<div class="btn-up-del">
										<input type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label for="inputGroupFile01"><i class="fas fa-upload"></i></label>
										<button class="del-btn"><i class="fas fa-trash-alt"></i></button>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<table class="table siparis-tutar-table">
									<tr>
										<td>Adı Soyadı</td>
										<td><input class="form-control" type="text" name="yetkili-name-surname" value="Murat Can YÖRÜSÜN"></td>
									</tr>
									<tr>
										<td>Ünvan</td>
										<td><input class="form-control" type="text" name="unvan" value="Front-End Developer"></td>
									</tr>
									<tr>
										<td>Doğum Tarihi</td>
										<td><input class="form-control" type="date" name="birth-date" value="birth-date"></td>
									</tr>
									<tr>
										<td>Telefon</td>
										<td><input class="form-control" type="text" name="phone-number" value="0362 542 55 44"></td>
									</tr>
									<tr>
										<td>Cep Telefonu</td>
										<td><input class="form-control" type="text" name="phone-number2" value="0555 000 00 00"></td>
									</tr>
									<tr>
										<td>Cep Telefonu 2</td>
										<td><input class="form-control" type="text" name="phone-number3" value="0555 000 00 00"></td>
									</tr>
									<tr>
										<td>Kişisel E-Posta</td>
										<td><input class="form-control" type="e-mail" name="personal-eposta" value="m.yorusun@kodakil.io"></td>
									</tr>
									<tr>
										<td>Kişisel E-Posta 2</td>
										<td><input class="form-control" type="e-mail" name="personal-eposta2" value="demo@example.com"></td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<th></th>
										<th>Site İçi</th>
										<th>E-Posta</th>
									</tr>
									<tr>
										<td>Genel Bildirimler</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Bakiye Ürün Takibi</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Kampanya Bülteni</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
								</table>
								<div class="sabit-bilgi-btn text-right">
									<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
									<button class="sabit-btn-guncelle">Güncelle</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- KALDIRILDI<div class="tab-pane fade" id="bildirimlerim" role="tabpanel" aria-labelledby="bildirimlerim-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<th></th>
										<th>Site İçi</th>
										<th>E-Posta</th>
									</tr>
									<tr>
										<td>Sipariş Durumu</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Bakiye Ürün Takibi</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>İade Ürün Takibi</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Favori Ürün Takibi</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Ürün Soru Cevap</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<th></th>
										<th>Site İçi</th>
										<th>E-Posta</th>
									</tr>
									<tr>
										<td>Pos Ödeme İşlemleri</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Tahsilat İşlemleri ( Çek/Senet )</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Gecikmiş Borç Bilidirimi</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Ödenecek Çek/Senet Hatırlatma</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Hesap Mutabakat</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
								<table class="table siparis-tutar-table">
									<tr>
										<th></th>
										<th>Site İçi</th>
										<th>E-Posta</th>
									</tr>
									<tr>
										<td>Şifre İşlemleri</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Diğer Bilidirimler2</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
									<tr>
										<td>Diğer Bilidirimler3</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox" checked>
												<span class="slider-tg round"></span>
											</label>
										</td>
										<td>					
											<label class="toggle-switch-btn">
												<input type="checkbox">
												<span class="slider-tg round"></span>
											</label>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>-->
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
				<b>Risk limitiniz yetersizdir lütfen satış temsilciniz ile irtibata geçiniz. !</b>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tamam</button>
			</div>
		</div>
	</div>
</div>


<?include("footer.php");?>

