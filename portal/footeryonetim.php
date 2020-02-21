<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>KURUMSAL BAŞLIK YÖNETİMİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="genel-ozet-chart-tab" data-toggle="tab" href="#genel-ozet-chart" role="tab" aria-controls="genel-ozet-chart" aria-selected="true"><i class="far fa-chart-bar"></i> Kurumsal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="bulunan-sonuc-tab" data-toggle="tab" href="#bulunan-sonuc" role="tab" aria-controls="bulunan-sonuc" aria-selected="false"><i class="fas fa-search-plus"></i> İletişim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sonuc-bulunamayan-tab" data-toggle="tab" href="#sonuc-bulunamayan" role="tab" aria-controls="sonuc-bulunamayan" aria-selected="false"><i class="fas fa-search-minus"></i> Sosyal Medya</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="display-product-value-tab" data-toggle="tab" href="#display-product-value" role="tab" aria-controls="display-product-value" aria-selected="false"><i class="fas fa-eye"></i> Sözleşmeler</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-1">

			<div class="tab-content urun-analiz-content" id="myTabContent">
				<div class="tab-pane fade show active" id="genel-ozet-chart" role="tabpanel" aria-labelledby="genel-ozet-chart-tab">

					<canvas height="70" id="mixed-chart"></canvas>
				</div>
				<div class="tab-pane fade" id="bulunan-sonuc" role="tabpanel" aria-labelledby="bulunan-sonuc-tab">
					<table class="table table-hover table-striped analiz-table">
						<thead>
							<tr>
								<th scope="col">Aranan Kelime</th>
								<th scope="col">Arayan</th>
								<th scope="col">Tarih</th>
								<th scope="col">Saat</th>
								<th scope="col">Bulunan Ürün Sayısı</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="sonuc-bulunamayan" role="tabpanel" aria-labelledby="sonuc-bulunamayan-tab">
					<table class="table table-hover table-striped analiz-table">
						<thead>
							<tr>
								<th scope="col">Aranan Kelime</th>
								<th scope="col">Arayan</th>
								<th scope="col">Tarih</th>
								<th scope="col">Saat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>

							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>

							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>

							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="display-product-value" role="tabpanel" aria-labelledby="display-product-value-tab">
					<table class="table table-hover table-striped analiz-table">
						<thead>
							<tr>
								<th scope="col">Aranan Kelime</th>
								<th scope="col">Arayan</th>
								<th scope="col">Tarih</th>
								<th scope="col">Saat</th>
								<th scope="col">Görüntülenen Ürün</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:05</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Temsilci</td>
								<td>31.10.2018</td>
								<td>12:16:02</td>
								<td><b>46</b></td>
							</tr>
							<tr>
								<td>Ürün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmiÜrün İsmi</td>
								<td>Müşteri</td>
								<td>31.10.2018</td>
								<td>12:16:04</td>
								<td><b>46</b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="siparis-edilen-analiz" role="tabpanel" aria-labelledby="siparis-edilen-analiz-tab">
					<table class="table table-hover table-striped analiz-table siparis-edilen-table">
						<thead>
							<tr>
								<th scope="col">Sipariş No</th>
								<th scope="col">Stok Kodu</th>
								<th scope="col">Stok Adı</th>
								<th scope="col">Model</th>
								<th scope="col">Marka</th>
								<th scope="col">Tarih</th>
								<th scope="col">Saat</th>
								<th scope="col">Kullanıcı</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Temsilci</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Müşteri</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Temsilci</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Temsilci</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Müşteri</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Müşteri</b></td>
							</tr>
							<tr>
								<td>WB00000456214</td>
								<td>1 BK21 1125 AC</td>
								<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/</td>
								<td>ANAMODEL</td>
								<td>DJ PARTS</td>
								<td>12.10.2014</td>
								<td><b>04:14</b></td>
								<td><b>Müşteri</b></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

	new Chart(document.getElementById("mixed-chart"), {
		type: 'bar',
		data: {
			labels: ["01:00", "02:00", "03:00", "04:00","05:00","06:00","07:00"],
			datasets: [{
				label: "Sonuç Bulunanlar",
				type: "bar",
				backgroundColor: "#3333ff",
				data: [408,547,675,734,332,547,458],
				fill: false
			}, {
				label: "Sonuç Bulunamayanlar",
				type: "bar",
				backgroundColor: "red",
				data: [212,166,422,50,215,295,253],
				fill: false
			}, {
				label: "Görüntülenen Ürünler",
				type: "bar",
				backgroundColor: "#ff6600",
				data: [350,420,675,444,222,156,777],
			}, {
				label: "Satın Alınan Ürünler",
				type: "bar",
				backgroundColor: "green",
				data: [126,235,355,77,134,142,256],
			}
			]
		},
		options: {
			title: {
				display: false,
				text: 'ANALİZ BAŞLIĞI BURADA YER ALACAK'
			},
			legend: { display: true }
		}
	});

</script>



<?include("footer.php");?>

