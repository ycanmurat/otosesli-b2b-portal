<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>PLASİYER SATIŞ VE TAHSİLAT RAPORU</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select">
				<option>Bu Hafta</option>
				<option>Bu Ay</option>
				<option>Bu Yıl</option>
				<option>Hepsi</option>
			</select>
			<select class="custom-select date-select mr-2">
				<option>Plasiyer Seçiniz..</option>
				<option>Murat can</option>
				<option>Kerem Aksoy</option>
				<option>Umut Er</option>
				<option>İlker Bal</option>
			</select>
		</div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="genel-ozet-chart-tab" data-toggle="tab" href="#genel-ozet-chart" role="tab" aria-controls="genel-ozet-chart" aria-selected="true"><i class="fas fa-chart-line"></i> Satış Tablosu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="bulunan-sonuc-tab" data-toggle="tab" href="#bulunan-sonuc" role="tab" aria-controls="bulunan-sonuc" aria-selected="false"><i class="fas fa-chart-bar"></i> Tahsilat Tablosu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sonuc-bulunamayan-tab" data-toggle="tab" href="#sonuc-bulunamayan" role="tab" aria-controls="sonuc-bulunamayan" aria-selected="false"><i class="fas fa-chart-pie"></i> Tahsilat Dağılımı</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="display-product-value-tab" data-toggle="tab" href="#display-product-value" role="tab" aria-controls="display-product-value" aria-selected="false"><i class="fas fa-chart-pie"></i> Alacak Dağılımı</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-2">

			<div class="tab-content urun-analiz-content" id="myTabContent">
				<div class="tab-pane fade show active" id="genel-ozet-chart" role="tabpanel" aria-labelledby="genel-ozet-chart-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<canvas  id="satis-table"></canvas>
							</div>
							<div class="col-md-7">
								<div class="satis-table-info-area">
									<table class="table plasiyer-info">
										<tr>
											<td>Tedarikçi</td>
											<td>Satış Hedefi</td>
											<td>Gerçekleşen</td>
											<td>İade</td>
											<td>Kalan</td>
											<td>Prim</td>
										</tr>
										<tr>
											<td>GENEL</td>
											<td>190,00 TL </td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>EUROCRAFT</td>
											<td>190,00 TL </td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>DJ PARTS</td>
											<td>190,00 TL </td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>DİĞER</td>
											<td>190,00 TL </td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>TOPLAM</td>
											<td>190,00 TL </td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="bulunan-sonuc" role="tabpanel" aria-labelledby="bulunan-sonuc-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<canvas height="130" id="tahsilat-table"></canvas>
							</div>
							<div class="col-md-6">
								<div class="satis-table-info-area">
									<table class="table plasiyer-info">
										<tr>
											<td colspan="2">Deniz Arslan</td>
										</tr>
										<tr>
											<td>Tahsilat Hedefi</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Gerçekleşen</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Gecikmiş</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Net Tahsilat</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Kalan</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Prim</td>
											<td>190,00 TL </td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="sonuc-bulunamayan" role="tabpanel" aria-labelledby="sonuc-bulunamayan-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<canvas height="160" id="dagilim-table"></canvas>
							</div>
							<div class="col-md-6">
								<div class="satis-table-info-area">
									<table class="table plasiyer-info">
										<tr>
											<td colspan="2">Mutlu Demir</td>
										</tr>
										<tr>
											<td>Çek</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Senet</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Nakit</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Havale</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Pos</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Toplam</td>
											<td>1100,00 TL</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="display-product-value" role="tabpanel" aria-labelledby="display-product-value-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<canvas height="160" id="alacak-table"></canvas>
							</div>
							<div class="col-md-6">
								<div class="satis-table-info-area">
									<table class="table plasiyer-info">
										<tr>
											<td colspan="2">Ahmet Demir</td>
										</tr>
										<tr>
											<td>Güncel</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>[1-15] Gün</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>[16-30] Gün</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>[31-45] Gün</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>[46-60] Gün</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>[61+] Gün</td>
											<td>190,00 TL </td>
										</tr>
										<tr>
											<td>Toplam</td>
											<td>1100,00 TL</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	new Chart(document.getElementById("satis-table"), {
		responsive: true,
		type: 'bar',
		data: {
			labels: ["Genel","DJ PARTS", "EUROCRAFT","DİĞER","İADE"],
			datasets: [
			{
				backgroundColor: ["#3e95cd","#3cba9f", "#8e5ea2","orange","red"],
				data: [190,103,213,45,25]
			}
			]
		},
		options: {
			legend:{
				display: false,
			},
			title: {
				display: true,
				text: 'TAHSİLAT GRAFİĞİ'
			},
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + 'TL Kota | %86 | 100% > +1%';
					}
				}
			}
		}
	});


	new Chart(document.getElementById("tahsilat-table"), {
		responsive: true,
		type: 'horizontalBar',
		data: {
			labels: ["Tahsilat Hedefi","Gerçekleşen", "Gecikmiş","Net Tahsilat", "Kalan"],
			datasets: [
			{
				backgroundColor: ["#3e95cd","#3cba9f", "#8e5ea2","orange","#99cc00"],
				data: [190,103,213,45,25]
			}
			]
		},
		options: {
			legend:{
				display: false,
			},
			title: {
				display: true,
				text: 'TAHSİLAT GRAFİĞİ'
			},
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.xLabel + ' TL | %76';
					}
				}
			}
		}
	});


	new Chart(document.getElementById("dagilim-table"), {
		responsive: true,
		type: 'pie',
		data: {
			labels: ["Çek","Nakit","Senet", "Havale","Pos"],
			datasets: [{
				label: "Population (millions)",
				backgroundColor: ["#3e95cd", "#8e5ea2","green","#e8c3b9","#c45550"],
				data: [2478,2267,3734,784,433]
			}]
		},
		options: {
			title: {
				display: true,
				text: 'PLASİYER TAHSİLAT DAĞILIMI'
			},
			legend:{
				position: 'right'
			},
			tooltips: {
				mode: 'label',
				callbacks: {
					label: function(tooltipItem, data) { 
						var indice = tooltipItem.index;                 
						return  data.labels[indice] +': '+data.datasets[0].data[indice] + ' TL';
					}
				}
			},
		}
	});

	new Chart(document.getElementById("alacak-table"), {
		responsive: true,
		type: 'pie',
		data: {
			labels: ["Güncel","[1-15] Gün","[16-30] Gün", "[31-45] Gün", "[46-60] Gün", "[61+] Gün"],
			datasets: [{
				label: "Population (millions)",
				backgroundColor: ["gray","#37ed00", "#e9e500","#32f1c8","red","black"],
				data: [2310,2478,5267,734,784,433]
			}]
		},
		options: {
			title: {
				display: true,
				text: 'PLASİYER ALACAK DAĞILIMI'
			},
			legend:{
				position: 'right'
			},
			tooltips: {
				mode: 'label',
				callbacks: {
					label: function(tooltipItem, data) { 
						var indice = tooltipItem.index;                 
						return  data.labels[indice] +': '+data.datasets[0].data[indice] + ' TL';
					}
				}
			},
		}
	});

</script>

<?include("footer.php");?>

