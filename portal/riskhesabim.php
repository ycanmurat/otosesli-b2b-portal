<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>RİSK HESABIM</p></h4></div>
		<div class="col-md-12 p-2">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table order-plan-table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Risk Limiti</th>
							<th>Teminatı</th>
							<th>Bakiye</th>
							<th>Sipariş Risk</th>
							<th>İrsaliye Risk</th>
							<th>Senet A. risk</th>
							<th>Senet C. Risk</th>
							<th>Çek A. Risk</th>
							<th>Çek C. Risk</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>30,975,00 TL</td>
							<td>0,00 TL</td>
							<td>14,135,52 TL</td>
							<td>0,00 TL</td>
							<td>0,00 TL</td>
							<td>8,000,00 TL</td>
							<td>0,00 TL</td>
							<td>4,380,00 TL</td>
							<td>0,00 TL</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><p>Kullanılabilir Limit : </p></td>
							<td class="red"> <b> -4,710,20</b></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6"><h4 class="pagetitle"><p class="alt-pagetitle">ÇEK LİSTESİ</p></h4></div>
		<div class="col-md-12 p-2 mt-2">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table order-plan-table table-bordered table-hover text-center odenecek-liste">
					<thead>
						<tr>
							<th>Çek No</th>
							<th>Vade</th>
							<th>Tutar</th>
							<th>Banka</th>
							<th>Hesap No</th>
							<th>Şube</th>
							<th>Çek Seri no</th>
							<th>İl</th>
							<th>İlçe</th>
							<th>Verilen</th>
							<th>Tipi</th>
							<th>Durum</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odenen">
							<td>D00000000004278</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>DENİZBANK</td>
							<td>590433</td>
							<td>ARDAHAN</td>
							<td>1962956</td>
							<td>ARDAHAN</td>
							<td>MERKEZ</td>
							<td>101GRNTTEM0001</td>
							<td>ASIL</td>
							<td>Ödendi</td>
						</tr>
						<tr>
							<td>D00000000004278</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>DENİZBANK</td>
							<td>590433</td>
							<td>ARDAHAN</td>
							<td>1962956</td>
							<td>ARDAHAN</td>
							<td>MERKEZ</td>
							<td>101GRNTTEM0001</td>
							<td>ASIL</td>
							<td>Ödenmedi</td>
						</tr>
						<tr class="odenen">
							<td>D00000000004278</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>DENİZBANK</td>
							<td>590433</td>
							<td>ARDAHAN</td>
							<td>1962956</td>
							<td>ARDAHAN</td>
							<td>MERKEZ</td>
							<td>101GRNTTEM0001</td>
							<td>ASIL</td>
							<td>Ödendi</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6"><h4 class="pagetitle"><p class="alt-pagetitle">SENET LİSTESİ</p></h4></div>
		<div class="col-md-12 p-2 mt-2">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table order-plan-table table-bordered table-hover text-center odenecek-liste">
					<thead>
						<tr>
							<th>Senet No</th>
							<th>Vade</th>
							<th>Tutar</th>
							<th>Senet Yapılan Yer</th>
							<th>İl</th>
							<th>İlçe</th>
							<th>Verilen</th>
							<th>Tipi</th>
							<th>Durum</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>K000000002768</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>İSTANBUL</td>
							<td>İSTANBUL</td>
							<td>MERKEZ</td>
							<td>DJ AUTO OTOMOTİV YED.PAR.TIC.A.Ş</td>
							<td>ASIL</td>
							<td>Ödenmedi</td>
						</tr>
						<tr>
							<td>K000000002768</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>İSTANBUL</td>
							<td>İSTANBUL</td>
							<td>MERKEZ</td>
							<td>DJ AUTO OTOMOTİV YED.PAR.TIC.A.Ş</td>
							<td>ASIL</td>
							<td>Ödenmedi</td>
						</tr>
						<tr  class="odenen">
							<td>K000000002768</td>
							<td>30.11.2018</td>
							<td>4,135,52 TL</td>
							<td>İSTANBUL</td>
							<td>İSTANBUL</td>
							<td>MERKEZ</td>
							<td>DJ AUTO OTOMOTİV YED.PAR.TIC.A.Ş</td>
							<td>ASIL</td>
							<td>Ödendi</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>

