<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>PLASİYER SANAL POS ANALİZ</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select w-auto mr-2">
				<option selected="">Bu Hafta</option>
				<option>Bu Ay</option>
				<option>Bu Yıl</option>
			</select>
			<select class="custom-select date-select w-auto mr-2">
				<option selected="">Plasiyer Seçiniz</option>
				<option>Fatih demir</option>
				<option>Kerem Aksoy</option>
				<option>Kerem Aksoy</option>
				<option>Kerem Aksoy</option>
				<option>Kerem Aksoy</option>
			</select>
		</div>
		<div class="col-md-12 p-2" >
			<canvas class="plasiyer-sanal-pos-analiz" id="line-chart-pos" aria-label="Hello aria labelcım" style="position: relative; height:40vh; width:80vw"></canvas>
		</div>
	</div>
</div>
<script>
	new Chart(document.getElementById("line-chart-pos"), {
		type: 'line',
		responsive: true,
		data: {
			labels: ["1 Kasım","2 Kasım","3 Kasım","4 Kasım","5 Kasım","6 Kasım","7 Kasım"],
			datasets: [{ 
				data: [20333,28000,39000,31000,12000,21000,44000],
				label: "Başarılı İşlem",
				borderColor: "green",
				backgroundColor : "rgba(0, 153, 0 ,0.2)",
				fill: "start"
			}, { 
				data: [4500,2600,7500,6000,8000,2000,15000],
				label: "Başarısız İşlem",
				borderColor: "red",
				backgroundColor : "rgba(255, 0, 0,0.2)",
				fill: "start"
			}
			]
		},
		options: {
			title: {
				display: true,
				text: 'Haftalık Sanal Pos Analizi'
			},
			elements:{
				line:{
					tension:0,
				}
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return "" + Number(tooltipItem.yLabel) + " TL";
					},

				}
			},
		}
	});
</script>
<?include("footer.php");?>

