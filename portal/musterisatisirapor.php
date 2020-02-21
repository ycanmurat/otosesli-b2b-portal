<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-5"><h4 class="pagetitle"><p>MÜŞTERİ BAZLI SATIŞ RAPORU</p></h4></div>
		<div class="col-md-7 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select w-auto">
				<option>Akıllı Sıralama</option>
				<option>Hedef Artan</option>
				<option>Hedef Azalan</option>
				<option>Ortalama Artan</option>
				<option>Ortalama Azalan</option>
				<option>Satış Artan</option>
				<option>Satış Azalan</option>
				<option>Fark Artan</option>
				<option>Fark Azalan</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option>Plasiyer Seçiniz..</option>
				<option>Murat can</option>
				<option>Kerem Aksoy</option>
				<option>Umut Er</option>
				<option>İlker Bal</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option>Tüm Aylar</option>
				<option>Ocak</option>
				<option>Şubat</option>
				<option>Mart</option>
				<option>Nisan</option>
				<option>Mayıs</option>
				<option>Haziran</option>
				<option>Temmuz</option>
				<option>Ağustos</option>
				<option>Eylül</option>
				<option>Ekim</option>
				<option>Kasım</option>
				<option>Aralık</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option>Şehir Seçiniz..</option>
				<option>Ankara</option>
				<option>Samsun</option>
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
							<th>İskonto</th>
							<th>Vade</th>
							<th>Ödeme</th>
							<th>Hafta</th>
							<th>Hedef</th>
							<th>Ortalama</th>
							<th>Satış</th>
							<th>Fark</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="green">772,61 TL  <i class="fas fa-chevron-up"></i></td>
							<td class="red">2,104,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">1,333,00 TL <i class="fas fa-chevron-up"></i></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="red">772,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">2,104,61 TL <i class="fas fa-chevron-up"></i></td>
							<td class="red">1,333,00 TL <i class="fas fa-chevron-down"></i></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="green">772,61 TL<i class="fas fa-chevron-up"></i></td>
							<td class="red">2,104,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">1,333,00 TL <i class="fas fa-chevron-up"></i></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="green">772,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="red">2,104,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">1,333,00 TL <i class="fas fa-chevron-up"></i></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="green">772,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="red">2,104,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">1,333,00 TL <i class="fas fa-chevron-up"></i></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN</td>
							<td>İLKADIM</td>
							<td><b>KB</b></td>
							<td>AY030</td>
							<td>Nakit</td>
							<td>2. Hafta</td>
							<td >2501-3500 TL</td>
							<td class="green">772,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="red">2,104,61 TL <i class="fas fa-chevron-down"></i></td>
							<td class="green">1,333,00 TL <i class="fas fa-chevron-up"></i></td>
						</tr>
						<tr class="toplam">
							<td colspan="3">
								<div class="order-plan-footer text-center m-auto">
									<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
								</div>
							</td>
							<td colspan="3">Toplam Ortalama : 44,289,20 TL</td>
							<td colspan="3">Toplam Satış : 81,186,83 TL</td>
							<td colspan="3">Toplam Fark : 36,209,96 TL</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




<?include("footer.php");?>

