<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>ŞİRKET SATIŞ VE TAHSİLAT RAPORU</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select">
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
		<div class="col-md-12 p-1 mt-2">

			<div class="tab-content urun-analiz-content" id="myTabContent">
				<div class="tab-pane fade show active" id="genel-ozet-chart" role="tabpanel" aria-labelledby="genel-ozet-chart-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<canvas height="200" id="satis-table"></canvas>
							</div>
							<div class="col-md-7">
								<div class="satis-table-info-area plasiyer-goster">
									<table class="table">
										<tr>
											<td>Plasiyer</td>
											<td>Satış Hedefi</td>
											<td>Gerçekleşen</td>
											<td>Kalan</td>
											<td>Prim</td>
										</tr>
										<tr>
											<td>Deniz Arslan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Mert Koç</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Can Öztürk</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Süleyman Yılamz</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Onur Ege Tan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Burak Şen</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Kerem Aksoy</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Şirket</td>
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
							<div class="col-md-5">
								<canvas height="200" id="tahsilat-table"></canvas>
							</div>
							<div class="col-md-7">
								<div class="satis-table-info-area plasiyer-goster">
									<table class="table">
										<tr>
											<td>Plasiyer</td>
											<td>Tahsilat Hedefi</td>
											<td>Gerçekleşen</td>
											<td>Gecikmiş</td>
											<td>Kalan</td>
											<td>Prim</td>
										</tr>
										<tr>
											<td>Deniz Arslan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Mert Koç</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Can Öztürk</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Süleyman Yılamz</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Onur Ege Tan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Burak Şen</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Kerem Aksoy</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Şirket</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
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
				<div class="tab-pane fade" id="sonuc-bulunamayan" role="tabpanel" aria-labelledby="sonuc-bulunamayan-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<canvas height="200" id="tahsilat-dagilim-table"></canvas>
							</div>
							<div class="col-md-7">
								<div class="satis-table-info-area">
									<table class="table plasiyer-goster">
										<tr>
											<td>Plasiyer</td>
											<td>Çek</td>
											<td>Senet</td>
											<td>Nakit</td>
											<td>Havale</td>
											<td>Pos</td>
										</tr>
										<tr>
											<td>Deniz Arslan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Mert Koç</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Can Öztürk</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Süleyman Yılamz</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Onur Ege Tan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Burak Şen</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Kerem Aksoy</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Şirket</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
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
				<div class="tab-pane fade" id="display-product-value" role="tabpanel" aria-labelledby="display-product-value-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<canvas height="200" id="alacak-dagilim-table"></canvas>
							</div>
							<div class="col-md-7">
								<div class="satis-table-info-area ">
									<table class="table plasiyer-goster">
										<tr>
											<td>Plasiyer</td>
											<td>[1-15] Gün</td>
											<td>[16-30] Gün</td>
											<td>[31-45] Gün</td>
											<td>[46-60] Gün</td>
											<td>[61+] Gün</td>
										</tr>
										<tr>
											<td>Deniz Arslan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Mert Koç</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Can Öztürk</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Süleyman Yılamz</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Onur Ege Tan</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Burak Şen</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Kerem Aksoy</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
											<td>103,00 TL</td>
											<td>213,00 TL</td>
											<td>213,00 TL</td>
										</tr>
										<tr>
											<td>Şirket</td>
											<td>190,00 TL </td>
											<td>103,00 TL</td>
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
			</div>
		</div>
	</div>
</div>
<script>

	new Chart(document.getElementById("satis-table"), {
		type: 'horizontalBar',
		data: {
			labels: ["Deniz Arslan", "Mert Koç", "Can Öztürk", "Süleyman yılmaz", "Onur Ege Tan","Burak Şen","Kerem Aksoy","Şirket"],
			datasets: [
			{
				backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
				data: [84,77,66,46,56,75,98,78]
			}
			]
		},
		options: {
			legend:{
				display: false,
			},
			title: {
				display: true,
				text: 'SATIŞ GRAFİĞİ'
			},
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.xLabel + ' %';
					}
				}
			}
		}
	});
	new Chart(document.getElementById("tahsilat-table"), {
		type: 'horizontalBar',
		data: {
			labels: ["Deniz Arslan", "Mert Koç", "Can Öztürk", "Süleyman yılmaz", "Onur Ege Tan","Burak Şen","Kerem Aksoy","Şirket"],
			datasets: [
			{
				backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
				data: [66,45,54,45,54,33,77,66]
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
						return tooltipItems.xLabel + ' %';
					}
				}
			}
		}
	});

	new Chart(document.getElementById("tahsilat-dagilim-table"), {
		type: 'pie',
		data: {
			labels: ["Çek", "Senet", "Nakit", "Havale","Pos"],
			datasets: [{
				label: "Population (millions)",
				backgroundColor: ["#3e95cd", "#8e5ea2","green","#e8c3b9","#c45550"],
				data: [2478,2267,3734,784,433]
			}]
		},
		options: {
			title: {
				display: true,
				text: 'ŞİRKET TAHSİLAT DAĞILIMI'
			},
			legend:{
				position: 'right'
			},
		}
	});

	new Chart(document.getElementById("alacak-dagilim-table"), {
		type: 'pie',
		data: {
			labels: ["[1-15] Gün", "[16-30] Gün", "[31-45] Gün", "[46-60] Gün", "[61+] Gün"],
			datasets: [{
				label: "Population (millions)",
				backgroundColor: ["#37ed00", "#e9e500","#32f1c8","red","black"],
				data: [2478,5267,734,784,433]
			}]
		},
		options: {
			title: {
				display: true,
				text: 'ŞİRKET ALACAK DAĞILIMI'
			},
			legend:{
				position: 'right'
			},
		}
	});

</script>

<?include("footer.php");?>

