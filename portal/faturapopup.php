<?include("header.php");?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-10 m-auto">
			<!-- Large modal -->
			<button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Fatura</button>

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
						<div id="content" class="modal-body inv-modal">
							<div class="row">
								<div class="fatura-bg"><img src="images/logo (1).png"></div>
								<div class="col-md-4">
									<div class="fatura-header first">
										<img src="images/logo (1).png">
										<h6>İRSALİYELİ FATURA</h6>
										<p>Sayın,<br><b>AKSU OTO YEDEK PARÇA AYŞE KAYA-ŞÜKRİYE DUMAN ORTAKLIĞI<br>İSTASYON MAH. ANAFARTALAR CAD. ŞEMSİBEY APT. NO:234/1 SAMSUN/İLKADIM</b></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="fatura-header second">
										<img src="images/maliye.png">
										<p>SERİ B SIRA NO.</p>
										<p>201612</p>
										<p>Oto sesli Yedek Parça Servis Bakım Hiz.San ve Tic.Ltd.Şti <br>BAFRA V.D.:649 011 1655</p>
									</div>
								</div>
								<div class="col-md-5">
									<div class="fatura-header third">
										<h6>OTO SESLİ</h6>
										<p><b>Yedek Parça Servis Bakım Hiz. San. ve Tic. Ltd. Şti.</b></p>
										<div class="sesli-adress">
											<p><b>Toptan Satış</b>Örnek Sanayi Sitesi Kirazlık Mahallesi Sahil Caddesi No:51 Tekkeköy/SAMSUN<br>Tel : 0362 266 59 73(pbx) - 266 59 74 Fax : 0362 266 59 84</p>
											<p><b>Perakende  Satış İlkadım</b>İlkadım Sanayi Sitesi 51. Sokak No:4 Tekkeköy/SAMSUN<br>Tel : 0362 266 59 75</p>
											<p><b>Perakende  Satış Gülsan</b>Gülsan Sanayi Sitesi Vatan Caddesi No:8/A Canik/SAMSUN<br>Tel : 0362 266 59 75</p>
											<p><b>Perakende  Satış Bafra(Merkez)</b>Fevzi Çakmak Mah. Küçük Sanayi Sitesi No:31 Bafra/SAMSUN<br>Tel : 0362 544 01 61 - 0362 544 17 42 Fax : 0362 544 01 62</p>
											<p>E-mail: info@otosesli.com  Web:  www.otosesli.com - www.eurocraft.com.tr<br>Bafra V.D. 649 011 1655 Tic.Sic.No.:3179 Mersis No.:0-6490-1116-5500019<br>Online Sipariş: b2b.otosesli.com Sermaye:35.000.000TL </p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<table class="table fatura-vergi">
										<thead>
											<tr>
												<th scope="col">Vergi Dairesi</th>
												<th scope="col">Vergi Numarası</th>
												<th scope="col">Düzenleme Tarihi</th>
												<th scope="col">Düzenleme Saati</th>
												<th scope="col">Fiili Sevk Tarihi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">KALEKAPI</th>
												<td>1230501345</td>
												<td>06.11.2018</td>
												<td>15:54:19</td>
												<td>06.11.2018</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<table class="table fatura-urun">
										<thead>
											<tr>
												<th scope="col">Stok Kodu</th>
												<th scope="col">Stok Adı</th>
												<th scope="col">Miktar</th>
												<th scope="col">Brüt Fiyat</th>
												<th scope="col">İsk 1</th>
												<th scope="col">İsk 2</th>
												<th scope="col">İsk 3</th>
												<th scope="col">İsk 4</th>
												<th scope="col">İsk 5</th>
												<th scope="col">Net Fiyat</th>
												<th scope="col">Net Tutar</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">EUF22100-062</th>
												<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
												<td>2 AD</td>
												<td>72,30 TL</td>
												<td>22%</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>38,35 TL</td>
												<td>76,70 TL</td>
											</tr>
											<tr>
												<th scope="row">EUF22100-062</th>
												<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
												<td>2 AD</td>
												<td>72,30 TL</td>
												<td>22%</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>38,35 TL</td>
												<td>76,70 TL</td>
											</tr>
											<tr class="fatura-toplam">
												<th scope="row"></th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>Toplam</td>
												<td>: 76,70 TL</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-8">
									<table class="table fatura-iskonto">
										<thead>
											<tr>
												<th scope="col">Genel İskonto ( 22% ) </th>
												<th scope="col">Ödeme İsk ( 0% )</th>
												<th scope="col">Bayi İsk ( 0% )</th>
												<th scope="col">Özel Fiyat İsk ( 0% )</th>
												<th scope="col">Ek İsk ( 0% )</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">63,62 TL</th>
												<td>0,00 TL</td>
												<td>0,00 TL</td>
												<td>72,18 TL</td>
												<td>0,00 TL</td>
											</tr>
										</tbody>
									</table>
									<table class="table fatura-iskonto">
										<thead>
											<tr>
												<th scope="col">Siparişi Hazırlayan</th>
												<th scope="col">Kontrol Eden</th>
												<th scope="col">Sevkiyat Firma</th>
												<th scope="col">Sevkiyat Şekli</th>
												<th scope="col">Paket Bilgisi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Tolga ÇELİK</th>
												<td>Kaan SÖNMEZ</td>
												<td>ARAS KARGO</td>
												<td>Peşit Ödeme (PÖ)</td>
												<td>1 Parça / 4 Desi</td>
											</tr>
										</tbody>
									</table>
									<table class="table fatura-iskonto">
										
										<thead>
											<tr>
												<th><p>Yalnız</p></th>
												<th><p>Cari Hesap Bakiyeniz</p></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><p><b>YÜZSEKSENBİR TL BİR KR</b></p></td>
												<td><p><b>13,458,00 TL</b></p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-4">
									<table class="table fatura-total">
										<tr>
											<td>Brüt Toplam</td>
											<td>289,20 TL</td>
										</tr>
										<tr>
											<td>İskontolar Toplam</td>
											<td>135,81 TL</td>
										</tr>
										<tr>
											<td>Net Tutar</td>
											<td>153,40 TL</td>
										</tr>
										<tr>
											<td>Nakliye</td>
											<td>0,00 TL</td>
										</tr>
										<tr>
											<td>% 18 KDV</td>
											<td>27,61 TL</td>
										</tr>
										<tr>
											<td>Genel Toplam</td>
											<td>181,01 TL</td>
										</tr>
									</table>
								</div>
								<div class="col-md-12">
									<table class="table iban-table">
										<tr>
											<td>AKBANK</td>
											<td>TR22 0004 6010 9788 8000 0021 24 </td>
											<td>İŞ BANK</td>
											<td>TR90 0006 4000 0017 3060 1652 50 </td>
											<td>ALBARAKA</td>
											<td>TR18 0020 3000 0229 5720 0000 01 </td>
										</tr>
										<tr>
											<td>HALK BANK</td>
											<td>TR89 0001 2001 3860 0010 1002 28 </td>
											<td>FİNANS BANK</td>
											<td>TR59 0011 1000 0000 0033 7652 43 </td>
											<td>ZİRAAT BANK</td>
											<td>TR55 0001 0020 9660 4947 4650 06 </td>
										</tr>
										<tr>
											<td>T.FİNANS BANK</td>
											<td>TR30 0020 6000 4699 2134 4000 02 </td>
											<td>KUVEYT TÜRK</td>
											<td>TR60 0020 5000 0084 1186 4000 01 </td>
											<td>YAPI KREDİ</td>
											<td>TR42 0006 7010 0000 0091 1995 18 </td>
										</tr>
										<tr>
											<td>TEB</td>
											<td>TR54 0003 2000 0000 0009 5620 82 </td>
											<td>VAKIF BANK</td>
											<td>TR11 0001 5001 5800 7303 5030 97 </td>
											<td>GARANTİ</td>
											<td>TR27 0006 2001 1630 0006 2987 50  </td>
										</tr>
									</table>
								</div>
								<div class="col-md-7">
									<div class="fatura-footer-left">
										<p>* Fatura münderecatına ve fatura kamsamında teslim edilen ürünlere 8 gün içerisinde itiraz edilmediği taktirde, fatura tüm unsurları ile birlikte kabul edilmiş sayılır.</p>
										<p>* Vadesinde ödenmeyen faturalara aylık %2 oranında vade farkı uygulanır.</p>
										<p>* İhtilaf halinde SAMSUN Mahkeme ve İcra daireleri yetkilidir.</p>
										<p>* Bu belgenin sevk edilen malla birlikte bulunması halinde ayrıca sevk irsaliyesi aranmaz.</p>
									</div>
								</div>
								<div class="col-md-5">
									<div class="fatura-footer-right"></div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?include("footer.php");?>

