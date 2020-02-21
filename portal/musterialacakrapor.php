<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-4"><h4 class="pagetitle"><p>MÜŞTERİ BAZLI ALACAK RAPORU</p></h4></div>
		<div class="col-md-8 mb-1 mt-3 justify-content-end">
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
			<select class="custom-select date-select w-auto mr-2">
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
							<th>Cari Kodu</th>
							<th>Cari İsim</th>
							<th>İl</th>
							<th>İlçe</th>
							<th>Vade</th>
							<th>Ödeme</th>
							<th>Güncel</th>
							<th>[1-15]</th>
							<th>[16-30]</th>
							<th>[31-45]</th>
							<th>[45-60]</th>
							<th>[61+]</th>
							<th>İşlem</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>12,020,102 TL</td>
							<td>2501-3500 TL</td>
							<td>772,61 TL </td>
							<td>772,61 TL </td>
							<td>2,104,61 TL</td>
							<td>1,333,00 TL</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>12,020,102 TL</td>
							<td>2501-3500 TL</td>
							<td>772,61 TL </td>
							<td>772,61 TL </td>
							<td>2,104,61 TL</td>
							<td>1,333,00 TL</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>12,020,102 TL</td>
							<td>2501-3500 TL</td>
							<td>772,61 TL </td>
							<td>772,61 TL </td>
							<td>2,104,61 TL</td>
							<td>1,333,00 TL</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>12,020,102 TL</td>
							<td>2501-3500 TL</td>
							<td>772,61 TL </td>
							<td>772,61 TL </td>
							<td>2,104,61 TL</td>
							<td>1,333,00 TL</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>12,020,102 TL</td>
							<td>2501-3500 TL</td>
							<td>772,61 TL </td>
							<td>772,61 TL </td>
							<td>2,104,61 TL</td>
							<td>1,333,00 TL</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#alacakbildirimi">Detay</button></td>
						</tr>
						<tr class="toplam">
							<td colspan="3">
								<div class="order-plan-footer text-center m-auto">
									<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
								</div>
							</td>
							<td colspan="3">Toplam Müşteri : 89,20 TL</td>
							<td colspan="4">Güncel Alacak  : 89,20 TL</td>
							<td colspan="3">Geçmiş Alacak  : 89,20 TL</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
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
										<th scope="col">Tahsilat Tarihi</th>
										<th scope="col">Tahsilat Tutarı</th>
										<th scope="col">Ödeme Tipi</th>
										<th scope="col">Açıklama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><input class="form-control" type="date" name="bday"></th>
										<td>
											<input class="form-control d-inline w-auto mr-2" type="number" name="tahsilat-girisi-tutar" placeholder="Tutar Giriniz.."> TL
										</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Çek</option>
												<option>Senet</option>
												<option>Havale</option>
											</select>
										</td>
										<td><textarea class="form-control" placeholder="Açıklama Giriniz.."></textarea></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
			</div>
		</div>
	</div>
</div>



<?include("footer.php");?>

