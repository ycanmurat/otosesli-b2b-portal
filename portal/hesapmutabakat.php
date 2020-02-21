<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>HESAP MUTABAKATI</p></h4></div>
		<div class="col-md-12 p-2 mt-1">
			<button class="set-product-button mutabakat-button" data-toggle="modal" data-target="#exampleModal">Mutabakat Yap</button>
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table hesap-yaslandirma-table text-center">
					<thead>
						<tr class="final-table-head"><!-- BU BÖLÜMDEKİ RAKAMLAR ÜST UYARI İCON RENGİNİ DEĞİŞTİRECEK SİPARİŞ SEPETİNDEKİ UYARIYI DA ETKİLEYECEK -->
							<th>Cari Kodu</th>
							<th>Cari Ünvanı</th>
							<th>İl </th>
							<th>İlçe</th>
							<th>Tarih</th>
							<th>Borç</th>
							<th>İşlem Yapan</th>
							<th>Durum</th>
							<th>Detay</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN </td>
							<td>MERKEZ</td>
							<td>05.11.2018 16:27</td>
							<td>2,374,82</td>
							<td>Müşteri</td>
							<td class="green">Onaylıyorum</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN </td>
							<td>MERKEZ</td>
							<td>05.11.2018 16:27</td>
							<td>2,374,82</td>
							<td>Müşteri</td>
							<td class="green">Onaylıyorum</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN </td>
							<td>MERKEZ</td>
							<td>05.11.2018 16:27</td>
							<td>2,374,82</td>
							<td>Müşteri</td>
							<td class="red">Onaylamıyorum</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN </td>
							<td>MERKEZ</td>
							<td>05.11.2018 16:27</td>
							<td>2,374,82</td>
							<td>Müşteri</td>
							<td class="red">Onaylamıyorum</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
						</tr>
						<tr>
							<td>10.55.053</td>
							<td>(GÜLSAN) OTO SESLİ SAN.TİC.LTD.ŞTİ.(ŞUBE2)</td>
							<td>SAMSUN </td>
							<td>MERKEZ</td>
							<td>05.11.2018 16:27</td>
							<td>2,374,82</td>
							<td>Müşteri</td>
							<td class="red">Onaylamıyorum</td>
							<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog hesap-mutabakat" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">HESAP MUTABAKATI</h5>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<img src="images/logo.png">
							<h6>MUTABAKAT MEKTUBU</h6>
							<p>Muhasebe Bölümünün dikkatine</p>
							<p><b>Sayın , ATEŞ FİLTLRE OTOMOTİV ENERJİ İNŞ.MAK.ELEK.SAN.TİC.LTD.ŞTİ.</b></p>
							<p>Konu: Hesap Mutabakatı Hakkında</p>
							<p><b>31/08/2018</b> Tarihi itibariyle şirketimizdeki cari hesabınız ___________ TL Alacak/Borç Bakiyesi vermektedir.</p>
							<p>Mütabık Olup Olmadığınızı bildirmenizi rica ederiz.</p>
							<p>Saygılarımızla -<b>OTO SESLİ LTD.ŞTİ.</b></p>
							<p>Durum : <b>Onaylamıyorum</b></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Onaylamıyorum</button>
				<button type="button" class="btn btn-primary">Onaylıyorum</button>
			</div>
		</div>
	</div>
</div>

<?include("footer.php");?>

