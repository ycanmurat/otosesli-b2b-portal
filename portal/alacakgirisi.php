<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-4"><h4 class="pagetitle"><p>ALACAK TAKİBİ</p></h4></div>
		<div class="col-md-8 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select w-auto db-spy">
				<option>Sıralama Seçiniz..</option>
				<option>Alacak Tutarı Artan</option>
				<option>Alacak Tutarı Azalan</option>
				<option>İşlem Tarihi Eskiden Yeniye</option>
				<option>İşlem Tarihi Yeniden Eskiye</option>
				<option>Ödeme Tarihi Yeniden Eskiye</option>
				<option>Ödeme Tarihi Eskiden Yeniye</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option>Plasiyer Seçiniz..</option>
				<option>Murat can</option>
				<option>Kerem Aksoy</option>
				<option>Umut Er</option>
				<option>İlker Bal</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option>Ödeme Tipi Seçiniz..</option>
				<option>Nakit</option>
				<option>Çek</option>
				<option>Senet</option>
				<option>Kredi Kartı</option>
				<option>Havale</option>
			</select>
			<select class="custom-select date-select w-auto mr-2 db-spy">
				<option>Şehir Seçiniz..</option>
				<option>İstanbul</option>
				<option>Samsun</option>
				<option>İstanbul</option>
				<option>İzmir</option>
			</select>

		</div>
		<div class="col-md-12 p-2 mt-1">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table hesap-yaslandirma-table text-center bazli-satis">
					<thead>
						<tr class="final-table-head"><!-- BU BÖLÜMDEKİ RAKAMLAR ÜST UYARI İCON RENGİNİ DEĞİŞTİRECEK SİPARİŞ SEPETİNDEKİ UYARIYI DA ETKİLEYECEK -->
							<th>İşlem Tarihi</th>
							<th>Cari Kodu</th>
							<th>Cari İsim</th>
							<th>İl</th>
							<th>İlçe</th>
							<th>Plasiyer</th>
							<th>Ödeme Tarihi</th>
							<th>Tutar</th>
							<th>Durum</th>
							<th>İlgili</th>
							<th>İşlem</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>22.10.1968</td>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>Kerem Aksoy</td>
							<td>12.10.2017</td>
							<td>1,333,00 TL</td>
							<td>Beklemede</td>
							<td><p class="green">Elif CİCİ</p></td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakgirisi">Detay</button></td>
						</tr>
						<tr>
							<td>22.10.1968</td>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>Kerem Aksoy</td>
							<td>12.10.2017</td>
							<td>1,333,00 TL</td>
							<td>Beklemede</td>
							<td><p class="green">Elif CİCİ</p></td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakgirisi">Detay</button></td>
						</tr>
						<tr>
							<td>22.10.1968</td>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>Kerem Aksoy</td>
							<td>12.10.2017</td>
							<td>1,333,00 TL</td>
							<td>Beklemede</td>
							<td><p class="green">Elif CİCİ</p></td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakgirisi">Detay</button></td>
						</tr>
						<tr>
							<td>22.10.1968</td>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>Kerem Aksoy</td>
							<td>12.10.2017</td>
							<td>1,333,00 TL</td>
							<td>Beklemede</td>
							<td><p class="green">Elif CİCİ</p></td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakgirisi">Detay</button></td>
						</tr>
						<tr>
							<td>22.10.1968</td>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>Kerem Aksoy</td>
							<td>12.10.2017</td>
							<td>1,333,00 TL</td>
							<td>Beklemede</td>
							<td><p class="green">Elif CİCİ</p></td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakgirisi">Detay</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="alacakgirisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<?include("footer.php");?>

