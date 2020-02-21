<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row">
		<div class="col-md-3"><h4 class="pagetitle ml-3 mb-0 mt-4">HESAP ÖZETİ</h4></div>
		<div class="col-md-4 text-center mt-4 cari-hesap-bakiyesi"><h6>Cari Hesap Bakiyeniz : <b> -36,402,84 TL</b></h6></div>
		<div class="col-md-5">
			<ul class="nav justify-content-end mr-3 nav-tabs list-style-type mt-4" role="tablist">
				<li class="nav-item">
					<form>
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>
					</form>
				</li>
			</ul>
		</div>
		<div class="col-md-12 pr-4 pl-4">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table hesap-yaslandirma-table text-center">
					<thead>
						<tr class="final-table-head"><!-- BU BÖLÜMDEKİ RAKAMLAR ÜST UYARI İCON RENGİNİ DEĞİŞTİRECEK SİPARİŞ SEPETİNDEKİ UYARIYI DA ETKİLEYECEK -->
							<th>Faturalar Toplamı</th>
							<th>Ödemeler</th>
							<th>Güncel Bakiye</th>
							<th>Gecikmiş Bakiye</th>
							<th>Toplam Borç</th>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td>1,069,58 TL</td>
							<td>936,95 TL</td>
							<td>132,63 TL</td>
							<td>0,00 TL</td>
							<td>0,00 TL</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-12 p-4 shadow">
			<div class="scroll-responsive">
				<div class="fixed-table-stok">
					<table class="stok-hareket-table hesap-ozeti" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th scope="col">Tarih</th>
								<th scope="col">Belge No</th>
								<th scope="col">İşlem Tipi</th>
								<th scope="col">Açıklama</th>
								<th scope="col">Vade</th>
								<th scope="col">Borç</th>
								<th scope="col">Alacak</th>
								<th scope="col">Bakiye</th>
								<th scope="col">Kargom</th>
								<th scope="col">Puan</th>
								<th scope="col">B / A</th>
								<th scope="col">Detay</th>
							</tr>
						</thead>
					</table>
					<div class="tbl-content">
						<table class="stok-hareket-table hesap-ozeti" cellpadding="0" cellspacing="0" border="0">
							<tbody>
								<tr class="red">
									<td scope="row"><p>Genel Toplam</p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p>1,509,61 TL</p></td>
									<td><p class="rising">2,221,81 TL</p></td>
									<td><p class="rising">399,93 TL</p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p class="rising">Alacak</p></td>
									<td></td>
								</tr>
								<tr>
									<td scope="row"><p>03.11.2017</p></td>
									<td><p>A00000000799835</p></td>
									<td><p>Tahsilat</p></td>
									<td><p>FT.MIZ MUSSIP000396886 (NKA)</p></td>
									<td><p>30.12.2017</p></td>
									<td><p>1,509,61 TL</p></td>
									<td><p>2,221,81 TL</p></td>
									<td><p>399,93 TL</p></td>
									<td><p>Nerede</p></td>
									<td><p>17 <b class="cari-points">CP</b></p></td>
									<td><p>Alacak</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
								</tr>
								<tr>
									<td scope="row"><p>03.11.2017</p></td>
									<td><p>A00000000799835</p></td>
									<td><p>Satış Faturası</p></td>
									<td><p>FT.MIZ MUSSIP000396886 (NKA)</p></td>
									<td><p>30.12.2017</p></td>
									<td><p>1,509,61 TL</p></td>
									<td><p>2,221,81 TL</p></td>
									<td><p>399,93 TL</p></td>
									<td><p>Nerede</p></td>
									<td><p>17 <b class="cari-points">CP</b></p></td>
									<td><p>Alacak</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#faturaModal">Detay</button></td>
								</tr>
								<tr>
									<td scope="row"><p>03.11.2017</p></td>
									<td><p>A00000000799835</p></td>
									<td><p>Dekont</p></td>
									<td><p>FT.MIZ MUSSIP000396886 (NKA)</p></td>
									<td><p>30.12.2017</p></td>
									<td><p>1,509,61 TL</p></td>
									<td><p>2,221,81 TL</p></td>
									<td><p>399,93 TL</p></td>
									<td><p>Nerede</p></td>
									<td><p>17 <b class="cari-points">CP</b></p></td>
									<td><p>Alacak</p></td>
									<td><button class="set-product-button" data-toggle="modal" data-target="#kredikartiModal">Detay</button></td>
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
<div class="print-pos-makbuz tahsilat modal fade" id="tahsilatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">TAHSİLAT MAKBUZU</h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body inv-modal">
				<div class="row">
					<div class="fatura-bg"><img src="images/logo (1).png"></div>
					<div class="col-md-5">
						<div class="fatura-header first">
							<img src="images/logo (1).png">
							<p><span></span>AKSU OTO YEDEK PARÇA AYŞE KAYA-ŞÜKRİYE DUMAN ORTAKLIĞAKSU OTO YEDEK PARÇA AYŞE KAYA-ŞÜKRİYE DUMAN ORTAKLIĞı<span></span></p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="fatura-header third">
							<p><b>Yedek Parça Servis Bakım Hiz. San. ve Tic. Ltd. Şti.</b></p>
							<div class="sesli-adress">
								<p>Örnek Sanayi Sitesi Kirazlık Mahallesi Sahil Caddesi No:51 Tekkeköy/SAMSUN<br>Tel : 0362 266 59 73(pbx) - 266 59 74 Fax : 0362 266 59 84</p>

								<p>E-mail: info@otosesli.com  Web:  www.otosesli.com - www.eurocraft.com.tr<br>Bafra V.D. 649 011 1655 Tic.Sic.No.:3179 Mersis No.:0-6490-1116-5500019<br>Online Sipariş: b2b.otosesli.com Sermaye:35.000.000TL </p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<table class="table fatura-vergi">
							<thead>
								<tr>
									<th scope="col">Tahsil Eden</th>
									<th scope="col">Tarih</th>
									<th scope="col">Cari Kodu</th>
									<th scope="col">Ödeme Şekli</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KEREM AKSOY</th>
									<td>12.10.2014 <br> 09:24 </td>
									<td>120.14.70</td>
									<td>Çek</td>

								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12"><!--
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th><p>Makbuz No</p></th>
									<th><p>Tipi</p></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p><b>123542</b></p></td>
									<td><p><b>13,458,00 TL</b></p></td>
								</tr>
							</tbody>
						</table>-->
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Banka</th>
									<th scope="col">Şube</th>
									<th scope="col">Hesap No</th>
									<th scope="col">Çek No</th>
									<th scope="col">Çek Vadesi</th>
									<th scope="col">Tutar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">YAPIKREDİ</th>
									<td>IĞDIR</td>
									<td>12710081</td>
									<td>6953469</td>
									<td>31.05.2019</td>
									<td>8,600,00</td>
								</tr>
							</tbody>
						</table>

					</div>
					<div class="col-md-12 d-none">
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

<div class="print-pos-makbuz modal fade" id="faturaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">SATIŞ FATURASI</h5>

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
							<p></p>
							<p>Fatura No</p>
							<p>A00000000799835</p>
							<p>Oto sesli Yedek Parça Servis Bakım Hiz.San ve Tic.Ltd.Şti <br>BAFRA V.D.:649 011 1655</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="fatura-header third">
							<h6>OTO SESLİ</h6>
							<p><b>Yedek Parça Servis Bakım Hiz. San. ve Tic. Ltd. Şti.</b></p>
							<div class="sesli-adress">
								<p><b>Toptan Satış</b>Örnek Sanayi Sitesi Kirazlık Mahallesi Sahil Caddesi No:51 Tekkeköy/SAMSUN<br>Tel : 0362 266 59 73(pbx) - 266 59 74 Fax : 0362 266 59 84</p>

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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
									<th scope="row">EUF22100-062EUF22100-062</th>
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
					<div class="col-md-12">
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Brüt Toplam </th>
									<th scope="col">Genel İskonto ( 22% ) </th>
									<th scope="col">Ödeme İsk ( 0% )</th>
									<th scope="col">Bayi İsk ( 0% )</th>
									<th scope="col">Özel Fiyat İsk ( 0% )</th>
									<th scope="col">Ek İsk ( 0% )</th>
									<th scope="col">Net Tutar</th>
									<th scope="col">Nakliye</th>
									<th scope="col">%18 KDV</th>
									<th scope="col">Genel Toplam</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">289,20</th>
									<td>63,62 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>72,18 TL</td>
									<td>0,00 TL</td>
									<td>153,40 TL</td>
									<td>0,00 TL</td>
									<td>27,61 TL</td>
									<td>181,01 TL</td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Satış Temsilcisi</th>
									<th scope="col">Siparişi Hazırlayan</th>
									<th scope="col">Kontrol Eden</th>
									<th scope="col">Paketleyen</th>
									<th scope="col">Sevkiyat Firma</th>
									<th scope="col">Gönderim Şekli</th>
									<th scope="col">Paket Bilgisi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Kerem AKSOY</th>
									<td>Tolga ÇELİK</td>
									<td>Tolga ÇELİK</td>
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
							<p>* İhtilaf halinde SAMSUN Mahkeme ve İcra daireleri yetLilidir.</p>
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

<div class="print-pos-makbuz modal fade" id="kredikartiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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