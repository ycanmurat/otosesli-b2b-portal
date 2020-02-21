<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>SATIŞ İADE TAHSİLAT ANALİZİ</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select">
				<option>Bu Hafta</option>
				<option>Bu Ay</option>
				<option>Bu Yıl</option>
			</select>
		</div>
		<div class="col-md-12 p-0">
			<canvas id="line-chart-satis" style="height:40vh; width:80vw"></canvas>
		</div>
	</div>
</div>
<script>
	new Chart(document.getElementById("line-chart-satis"), {
		type: 'line',
		data: {
			labels: ["1 Kasım","2 Kasım","3 Kasım","4 Kasım","5 Kasım","6 Kasım","7 Kasım"],
			datasets: [{ 
				data: [112,114,105,240,36,90,266],
				label: "Satış",
				borderColor: "#4869AE",
				fill: "start",
			}, { 
				data: [77,77,105,220,20,88,44],
				label: "Tahsilat",
				borderColor: "#FD720D",
				backgroundColor : "rgba(255, 102,0,0.2)",
				fill: "start"
			}, { 
				data: [5,12,7,28,4,0,5],
				label: "İade",
				borderColor: "red",
				backgroundColor : "rgba(255, 0, 0,0.2)",
				fill: "start"
			}
			]
		},
		options: {
			responsive:true,
			title: {
				display: true,
				text: 'Haftalık Satış ve Tahsilat Analizi'
			},
			elements:{
				line:{
					tension:0,
				}
			},
		}
	});
</script>
<?include("footer.php");?>

