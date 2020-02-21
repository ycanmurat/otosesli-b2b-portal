<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>KULLANICI İŞLEMLERİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="musteri-tanimlama-tab" data-toggle="tab" href="#musteri-tanimlama" role="tab" aria-controls="musteri-tanimlama" aria-selected="true"><i class="fas fa-user-friends"></i> Müşteri Tanımlama</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="kulllanici-tanimlama-tab" data-toggle="tab" href="#kulllanici-tanimlama" role="tab" aria-controls="kulllanici-tanimlama" aria-selected="false"><i class="fas fa-user-tie"></i> Kullanıcı Tanımlama</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 pr-3 pl-3">

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="musteri-tanimlama" role="tabpanel" aria-labelledby="musteri-tanimlama-tab">
					<div class="row">
						<div class="col-md-4">
							<table class="table siparis-tutar-table uye-ayarlari">
								<tr>
									<td>Ad Soyad</td>
									<td><input class="form-control" type="text" name="yetkili-name-surname" value="Murat Can YÖRÜSÜN"></td>
								</tr>
								<tr>
									<td>TEST TEST TEST</td>
									<td><input class="form-control" type="text" name="yetkili-name-surname" value="Murat Can YÖRÜSÜN"></td>
								</tr>
								<tr>
									<td>TEST TEST TEST TEST</td>
									<td><select class="custom-select">
										<option>Select</option>
										<option>option</option>
										<option>id</option>
										<option>< ?< ? $retVal = (condition) ? a : b ;</option>
									</select></td>
								</tr>
							</table>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<h6 class="sayfa-ic-baslik">Cari İle İlgili Yetkiler</h6>
									<table class="table siparis-tutar-table uye-ayarlari">
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Çarpılı Yetki</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Olabilecek En Uzun Yetki İsmi</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Cari Risk Analiz Raporu</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Giriş Tüm Carileri Görsün</label>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-4">
									<h6 class="sayfa-ic-baslik">Satış Raporu Yetkileri</h6>
									<table class="table siparis-tutar-table uye-ayarlari">
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Çarpılı Yetki</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Olabilecek En Uzun Yetki İsmi</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Cari Risk Analiz Raporu</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Giriş Tüm Carileri Görsün</label>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-4">
									<h6 class="sayfa-ic-baslik">Raporlar ile İlgili Yetkiler</h6>
									<table class="table siparis-tutar-table uye-ayarlari">
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label> Detaylı Fatura Sorgulama</label>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="pretty p-icon p-smooth">
													<input type="checkbox" />
													<div class="state p-primary-o">
														<i class="icon fas fa-check"></i>
														<label>Olabilecek En Uzun Yetki İsmi</label>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="kulllanici-tanimlama" role="tabpanel" aria-labelledby="kulllanici-tanimlama-tab">


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

