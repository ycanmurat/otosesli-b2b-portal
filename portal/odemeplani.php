<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>ÖDEME PLANI</p></h4></div>
		<div class="col-md-12 p-2">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table order-plan-table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Dönem Yıl</th>
							<th>Dönem Ay</th>
							<th>Ortalama Vade</th>
							<th>Kalan Gün</th>
							<th>Tutar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2018</td>
							<td>Eylül</td>
							<td>27.01.2018</td>
							<td>33</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>Ekim</td>
							<td>27.01.2019</td>
							<td>66</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>Kasım</td>
							<td>27.01.2018</td>
							<td>12</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>Aralık</td>
							<td>27.01.2018</td>
							<td>34</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>Ocak</td>
							<td>27.01.2019</td>
							<td>76</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>Şubat</td>
							<td>27.01.2019</td>
							<td>4</td>
							<td>7,620,37 TL</td>
						</tr>
						<tr>
							<td></td>
							<td class="red"></td>
							<td><p>Ortalama Vade :</p><b>76</b></td>
							<td><p>Ortalama Gün :</p><b>76</b></td>
							<td ><p>Toplam :</p><b>39,710,20</b></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="order-plan-footer mt-3">
				<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>

