<?include("header.php");?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 p-5">
			<h4 class=" ml-5 pagetitle">İADE TAKİP</h4>
			<table id="table-iade-takip" class="order-info-table text-center">
				<thead>
					<tr>
						<th>Form No</th>
						<th>İşlem Tarihi</th>
						<th>Durum</th>
						<th>İşlem Yapan</th>
						<th>Kalem Adedi</th>
						<th>Kalem Sayısı</th>
						<th>Sevkiyat Firma</th>
						<th>Sevkiyat Şekli</th>
						<th>İade Toplam</th>
						<th>İade Detayı</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-th="Form No"><span class="bt-content">WB03000205235</span></td>
						<td data-th="İşlem Tarihi"><span class="bt-content">30.08.2018</span></td> 
						<td data-th="Durum"><span class="bt-content">30.08.2018</span></td>
						<td data-th="İşlem Yapan"><span class="bt-content">40</span></td>
						<td data-th="Kalem Adedi"><span class="bt-content">40</span></td>
						<td data-th="Kalem Sayısı"><span class="bt-content">40</span></td>
						<td data-th="Sevkiyat Firma"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="Sevkiyat Şekli"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="İade Toplam"><span class="bt-content">7,000,567</span></td>
						<td data-th="İade Detayı"><span class="bt-content">Detay</span></td>
					</tr>
					<tr>
						<td data-th="Form No"><span class="bt-content">WB03000205235</span></td>
						<td data-th="İşlem Tarihi"><span class="bt-content">30.08.2018</span></td> 
						<td data-th="Durum"><span class="bt-content">30.08.2018</span></td>
						<td data-th="İşlem Yapan"><span class="bt-content">40</span></td>
						<td data-th="Kalem Adedi"><span class="bt-content">40</span></td>
						<td data-th="Kalem Sayısı"><span class="bt-content">40</span></td>
						<td data-th="Sevkiyat Firma"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="Sevkiyat Şekli"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="İade Toplam"><span class="bt-content">7,000,567</span></td>
						<td data-th="İade Detayı"><span class="bt-content">Detay</span></td>
					</tr>
					<tr>
						<td data-th="Form No"><span class="bt-content">WB03000205235</span></td>
						<td data-th="İşlem Tarihi"><span class="bt-content">30.08.2018</span></td> 
						<td data-th="Durum"><span class="bt-content">30.08.2018</span></td>
						<td data-th="İşlem Yapan"><span class="bt-content">40</span></td>
						<td data-th="Kalem Adedi"><span class="bt-content">40</span></td>
						<td data-th="Kalem Sayısı"><span class="bt-content">40</span></td>
						<td data-th="Sevkiyat Firma"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="Sevkiyat Şekli"><span class="bt-content">Hazırlanıyor</span></td>
						<td data-th="İade Toplam"><span class="bt-content">7,000,567</span></td>
						<td data-th="İade Detayı"><span class="bt-content">Detay</span></td>
					</tr>
				</tbody>
			</table>
			<div class="print">
				<img src="images/printer.png"> Yazdır
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#table-iade-takip').basictable();

	});
</script>


<?include("footer.php");?>