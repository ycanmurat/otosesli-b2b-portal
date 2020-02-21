<?include("header.php");?>
<style>
@media print{
	@page{
		size: landscape;
	}
}
</style>
<div class="container-fluid fatura-edilen">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>SANAL POS RAPORLARI</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select w-auto">
				<option selected>En Yeni</option>
				<option>Son 2 Hafta</option>
				<option>Son 1 Ay</option>
				<option>Son 3 Ay</option>
				<option>Son 6 Ay</option>
				<option>Son 1 Yıl</option>
				<option>Son 2 Yıl</option>
				<option>Tüm Faturalar</option>
				<option>Eskiden Yeniye Göre Sırala</option>
				<option>Yeniden Eskiye Göre Sırala</option>
				<option>Beni de Sırala</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option selected>Durum Seçiniz..</option>
				<option>Başarılı</option>
				<option>Başarısız</option>
			</select>
		</div>
		<div class="col-md-12 p-0 shadow">
			<div class="scroll-responsive">
				<div class="fixed-table-stok">
					<table class="stok-hareket-table pos-report-table" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th scope="col">Tarih</th>
								<th scope="col">İşlem No</th>
								<th scope="col">İşlem Tipi</th>
								<th scope="col">Banka</th>
								<th scope="col">Tutar</th>
								<th scope="col">Durum</th>
								<th scope="col">Sonuç</th>
								<th scope="col">Makbuz</th>
							</tr>
						</thead>
					</table>
					<div class="tbl-content">
						<table class="stok-hareket-table pos-report-table" cellpadding="0" cellspacing="0" border="0">
							<tbody>
								<tr class="reddedildi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARISIZ</p></td>
									<td><p>HATA KODU :61 KART LİMİTİ YETERSİZ </p></td>
									<td></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>TEK ÇEKİM</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
								<tr class="reddedildi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARISIZ</p></td>
									<td><p>HATA KODU :82 CVV HATALI </p></td>
									<td></td>
								</tr>
								<tr class="reddedildi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARISIZ</p></td>
									<td><p>HATA KODU :18 KART KAPALIDIR. TEKRAR DENEMEYİN.</p></td>
									<td></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
								<tr class="onaylandi">
									<td><p>07.11.2018 / 11:52</p></td>
									<td><p>7236542</p></td>
									<td><p>3 + 3 TAKSİT</p></td>
									<td><p>FİNANSBANK</p></td>
									<td><p>2500 TL</p></td>
									<td><p>BAŞARILI</p></td>
									<td><p>ONAY KODU : 7541125496</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Makbuz</button></td>
								</tr>
							</tbody>
						</table>
					</div>
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

<!-- Modal -->
<div class="print-pos-makbuz modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">TAHSİLAT MAKBUZU </h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body">
				<div class="row">
					<div class="col-md-6" id="pos-makbuz-one">
						<div class="pos-makbuz">
							<div class="makbuz-header">
								<p>OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ</p>
								<table>
									<tr>
										<td><p>Adres </p></td>
										<td><b>: GÜLSAN SAN. SİT. VATAN CAD. NO:8/A</b></td>
									</tr>
									<tr>
										<td><p>Tel </p></td>
										<td><b>: 0362 228 55 78</b></td>
									</tr>
									<tr>
										<td><p>Faks </p></td>
										<td><b>: VAHİT KARAKUS İLGİLİ</b></td>
									</tr>
								</table>
								<p style="position: relative;top: 7px;font-size:10px;">Bu belgenin kart sahibi tarafından imzalatılıp saklanması gerekir.</p>
							</div>
							<div class="makbuz-body">
								<p>Kart Sahibinin :</p> <p>Makbuz no: <b>:  005141 </b></p>
								<table>
									<tr>
										<td><p>Ad Soyad yada Ünvan  </p></td>
										<td><b>: Ercan TORUN</b></td>
									</tr>
									<tr>
										<td><p>İletişim Telefonu  </p></td>
										<td><b>: 0555 000 00 00</b></td>
									</tr>
									<tr>
										<td><p>TC Kimlik No  </p></td>
										<td><b>: 12345678912</b></td>
									</tr>
									<tr>
										<td><p>Kredi Kartı No  </p></td>
										<td><b>: 5549 60** **** 3013</b></td>
									</tr>
									<tr>
										<td><p>Tutar  </p></td>
										<td><b>: 75,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Vade Farkı  </p></td>
										<td><b>: 0,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Genel Toplam  </p></td>
										<td><b>: 75,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Genel Toplam Yazıyla  </p></td>
										<td><b>:  Yetmişbeş türklirası</b></td>
									</tr>
									<tr>
										<td><p>Taksit  </p></td>
										<td><b>: 2 Taksit +3 Taksit</b></td>
									</tr>
									<tr>
										<td><p>Ödeme Zamanı </p> </td>
										<td><b>: 01.11.2015 PAZAR 18:50</b></td>
									</tr>
									<tr>
										<td><p>Ödeme Kayıt No  </p></td>
										<td><b>: SP050005141(GRT)</b></td>
									</tr>
								</table>
							</div>
							<div class="makbuz-footer">
								<h6>Muvafakatname / Taahütname</h6>
								<p>
									Kullanmakta olduğum, adıma düzenlenmiş yukarıda yazılı Kredi Kartımdan OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ 'nin DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ' ne olan
									cari hesap borcuna bahsuben <b> 75,00 TL </b> Çekim yapılmasına muvafakatım vardır. DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ. ile aramda herhangi bir alışverişe dayanmayan ancak OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ' dan satın aldığım mal/hizmet karşılığında düzenlenmiş olan fatura/yazar kasa fişi toplam tutarı olan <b> 75,00 TL </b> borcumu DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ ' ne ait Sanal POS'dan yapılan çekim ile ödemiş bulunmaktayım. Kredi kartımdan yapılan işbu tahsilattan dolayı DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ' ni şimdiden gayrikabili rücu ile ibra ederim.
								</p>
								<div style="background-color: #ffda61" class="imza-area">
									<p>Kart Sahibi Ad ve İmza</p>
									<b>ERCAN TORUN</b>
								</div>
								<p>DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.'ne olan Cari Hesap borcuma mahsuben yukarıda belirtilen kredi kartı ile yapılan ödeme işlemine ait işbu muvafakatnamenin huzurumda kart sahibi tarafından imzalandığını DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.' ne karşı garanti eder. bu hususta DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.'nın uğrayacağı her türlü idari-mali zararları bila ihtar karşılayacağımı taahhüt ederim.</p>
								<div style="background-color: #ffda61" class="imza-area">
									<p>Kart Sahibi Ad ve İmza</p>
									<b>OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ</b>
								</div>
								<p>Not:  Ek taksit kampanyaları bankaların inisiyatifindedir ve ilgili bankaların belirlediği şartlar çerçevesinde kartınıza yansıtılacaktır.</p>
							</div>
						</div>
					</div>

					<div class="cut">
						<i class="fas fa-cut"></i>
					</div>

					<div class="col-md-6">
						<div class="pos-makbuz">
							<div class="makbuz-header">
								<p>OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ</p>
								<table>
									<tr>
										<td><p>Adres </p></td>
										<td><b>: GÜLSAN SAN. SİT. VATAN CAD. NO:8/A</b></td>
									</tr>
									<tr>
										<td><p>Tel </p></td>
										<td><b>: 0362 228 55 78</b></td>
									</tr>
									<tr>
										<td><p>Faks </p></td>
										<td><b>: VAHİT KARAKUS İLGİLİ</b></td>
									</tr>
								</table>
								<p style="position: relative;top: 7px;font-size:10px;">Bu belgenin kart sahibi tarafından imzalatılıp saklanması gerekir.</p>
							</div>
							<div class="makbuz-body">
								<p>Kart Sahibinin :</p> <p>: Makbuz no <b>: 005141 </b></p>
								<table>
									<tr>
										<td><p>Ad Soyad yada Ünvan  </p></td>
										<td><b>: Ercan TORUN</b></td>
									</tr>
									<tr>
										<td><p>İletişim Telefonu  </p></td>
										<td><b>: 0555 000 00 00</b></td>
									</tr>
									<tr>
										<td><p>TC Kimlik No  </p></td>
										<td><b>: 12345678912</b></td>
									</tr>
									<tr>
										<td><p>Kredi Kartı No  </p></td>
										<td><b>: 5549 60** **** 3013</b></td>
									</tr>
									<tr>
										<td><p>Tutar  </p></td>
										<td><b>: 75,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Vade Farkı  </p></td>
										<td><b>: 0,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Genel Toplam  </p></td>
										<td><b>: 75,00 TL</b></td>
									</tr>
									<tr>
										<td><p>Genel Toplam Yazıyla  </p></td>
										<td><b>:  Yetmişbeş türklirası</b></td>
									</tr>
									<tr>
										<td><p>Taksit  </p></td>
										<td><b>: 2 Taksit +3 Taksit</b></td>
									</tr>
									<tr>
										<td><p>Ödeme Zamanı </p> </td>
										<td><b>: 01.11.2015 PAZAR 18:50</b></td>
									</tr>
									<tr>
										<td><p>Ödeme Kayıt No  </p></td>
										<td><b>: SP050005141(GRT)</b></td>
									</tr>
								</table>
							</div>
							<div class="makbuz-footer">
								<h6>Muvafakatname / Taahütname</h6>
								<p>
									Kullanmakta olduğum, adıma düzenlenmiş yukarıda yazılı Kredi Kartımdan OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ 'nin DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ' ne olan
									cari hesap borcuna bahsuben <b> 75,00 TL </b> Çekim yapılmasına muvafakatım vardır. DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ. ile aramda herhangi bir alışverişe dayanmayan ancak OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ' dan satın aldığım mal/hizmet karşılığında düzenlenmiş olan fatura/yazar kasa fişi toplam tutarı olan <b> 75,00 TL </b> borcumu DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ ' ne ait Sanal POS'dan yapılan çekim ile ödemiş bulunmaktayım. Kredi kartımdan yapılan işbu tahsilattan dolayı DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ' ni şimdiden gayrikabili rücu ile ibra ederim.
								</p>
								<div style="background: #ffda61" class="imza-area">
									<p>Kart Sahibi Ad ve İmza</p>
									<b>ERCAN TORUN</b>
								</div>
								<p>DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.'ne olan Cari Hesap borcuma mahsuben yukarıda belirtilen kredi kartı ile yapılan ödeme işlemine ait işbu muvafakatnamenin huzurumda kart sahibi tarafından imzalandığını DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.' ne karşı garanti eder. bu hususta DİNAMİK OTOMOTİV GIDA TEKS. İTH.İHR.SAN. VE TİC.LTD.ŞTİ.'nın uğrayacağı her türlü idari-mali zararları bila ihtar karşılayacağımı taahhüt ederim.</p>
								<div style="background: #ffda61" class="imza-area">
									<p>Kart Sahibi Ad ve İmza</p>
									<b>OTO SESLİ YEDEK PARÇA SERVİS BAKIM HİZ. SAN. VE TİC.LTD.ŞTİ</b>
								</div>
								<p>Not:  Ek taksit kampanyaları bankaların inisiyatifindedir ve ilgili bankaların belirlediği şartlar çerçevesinde kartınıza yansıtılacaktır.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?include("footer.php");?>






