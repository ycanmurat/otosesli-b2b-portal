<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>İL BAZINDA SATIŞ VE TAHSİLAT RAPORU</p></h4></div>
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
					<a class="nav-link" id="sonuc-bulunamayan-tab" data-toggle="tab" href="#sonuc-bulunamayan" role="tab" aria-controls="sonuc-bulunamayan" aria-selected="false"><i class="fas fa-undo-alt"></i> İade Dağılımı</a>
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
							<div class="col-md-12">
								<canvas height="70" id="satis-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="bulunan-sonuc" role="tabpanel" aria-labelledby="bulunan-sonuc-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<canvas height="70" id="tahsilat-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="sonuc-bulunamayan" role="tabpanel" aria-labelledby="sonuc-bulunamayan-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<canvas height="70" id="iade-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="display-product-value" role="tabpanel" aria-labelledby="display-product-value-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<canvas height="70" id="alacak-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	new Chart(document.getElementById("satis-chart"), {
		type: 'bar',
		
		data: {
			labels: ["Samsun", "İstanbul", "Ankara", "İzmir","Kocaeli","Trabzon","Hakkari","Şanlıurfa","Adıyaman","Sakarya","Sinop","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari"],
			datasets: [{
				label: "Satis ",
				type: "bar",
				backgroundColor: "#3333ff",
				data: [408,547,675,734,332,547,458,408,547,675,734,332,547,458,675,734,332,547],
				fill: false
			}
			]
		},
		options: {
			responsive: true,
			title: {
				display: false,
				text: 'BUNEMKYA'
			},
			legend: { display: false },
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + ' TL';
					}
				}
			}

		}
	});

	new Chart(document.getElementById("tahsilat-chart"), {
		type: 'bar',
		data: {
			labels: ["Samsun", "İstanbul", "Ankara", "İzmir","Kocaeli","Trabzon","Hakkari","Şanlıurfa","Adıyaman","Sakarya","Sinop","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari"],
			datasets: [{
				label: "Satis ",
				type: "bar",
				backgroundColor: "#009900",
				data: [408,547,675,734,332,547,458,408,547,675,734,332,547,458,675,734,332,547],
				fill: false
			}
			]
		},
		options: {
			title: {
				display: false,
				text: 'BUNEMKYA'
			},
			legend: { display: false },
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + ' TL';
					}
				}
			}

		}
	});

	new Chart(document.getElementById("iade-chart"), {
		type: 'bar',
		data: {
			labels: ["Samsun", "İstanbul", "Ankara", "İzmir","Kocaeli","Trabzon","Hakkari","Şanlıurfa","Adıyaman","Sakarya","Sinop","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari"],
			datasets: [{
				label: "Tahsilat ",
				type: "bar",
				backgroundColor: "#ff3333",
				data: [408,547,675,734,332,547,458,408,547,675,734,332,547,458,675,734,332,547],
				fill: false
			}
			]
		},
		options: {
			title: {
				display: false,
				text: 'BUNEMKYA'
			},
			legend: { display: false },
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + ' TL';
					}
				}
			}

		}
	});

	new Chart(document.getElementById("alacak-chart"), {
		type: 'bar',
		data: {
			labels: ["Samsun", "İstanbul", "Ankara", "İzmir","Kocaeli","Trabzon","Hakkari","Şanlıurfa","Adıyaman","Sakarya","Sinop","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari","Hakkari"],
			datasets: [{
				label: "Alacak ",
				type: "bar",
				backgroundColor: "#ff751a",
				data: [408,547,675,734,332,547,458,408,547,675,734,332,547,458,675,734,332,547],
				fill: false
			}
			]
		},
		options: {
			title: {
				display: false,
				text: 'BUNEMKYA'
			},
			legend: { display: false },
			tooltips: {
				enabled: true,
				mode: 'single',
				callbacks: {
					label: function(tooltipItems, data) { 
						return tooltipItems.yLabel + ' TL';
					}
				}
			}

		}
	});

</script>



<?include("footer.php");?>

