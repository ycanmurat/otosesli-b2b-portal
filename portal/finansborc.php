<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>BORÇ RAPORU</p></h4></div>
		<div class="col-md-6 mb-1 mt-3 justify-content-end">
			<select class="custom-select date-select w-auto">
				<option>Şirket</option>
				<option>Plasiyer İsmi</option>
				<option>Plasiyer İsmi</option>
				<option>Plasiyer İsmi</option>
			</select>
		</div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified finans-report" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="toplam-borc-tab" data-toggle="tab" href="#toplam-borc" role="tab" aria-controls="toplam-borc" aria-selected="true">
						<div class="progress-area">
							<h6>TOPLAM BORÇ</h6>
							<div class="progress-box">
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 100%;background-color: #3f9f1f;">
								</div>
							</div>
							<p><b>328,307,80 TL</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="guncel-borc-tab" data-toggle="tab" href="#guncel-borc" role="tab" aria-controls="guncel-borc" aria-selected="false">
						<div class="progress-area">
							<h6>GÜNCEL</h6>
							<div class="progress-box">
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 78%;background-color: #37ed00;">
								</div>
							</div>
							<p>221.038.08 TL</p><p><b>61</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="bir-onbes-tab" data-toggle="tab" href="#bir-onbes" role="tab" aria-controls="bir-onbes" aria-selected="false">
						<div class="progress-area">
							<h6>[1-15] GÜN</h6>
							<div class="progress-box">
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 66%;background-color: #e9e500;">
								</div>
							</div>
							<p>80.429.18 TL</p><p><b>36</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="onalti-otuz-tab" data-toggle="tab" href="#onalti-otuz" role="tab" aria-controls="onalti-otuz" aria-selected="false">
						<div class="progress-area">
							<h6>[16-30] GÜN</h6>
							<div class="progress-box">
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 24%;background-color: #F47723;">
								</div>
							</div>
							<p>80.429.18 TL</p><p><b>36</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="otuzbir-kirkbes-tab" data-toggle="tab" href="#otuzbir-kirkbes" role="tab" aria-controls="otuzbir-kirkbes" aria-selected="false">
						<div class="progress-area">
							<h6>[31-45] GÜN</h6>
							<div class="progress-box" >
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 12%;background-color: #A52F7D;">
								</div>
							</div>
							<p>80.429.18 TL</p><p><b>36</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="kirkalti-atmis-tab" data-toggle="tab" href="#kirkalti-atmis" role="tab" aria-controls="kirkalti-atmis" aria-selected="false">
						<div class="progress-area">
							<h6>[46-60] GÜN</h6>
							<div class="progress-box" >
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 8%;background-color: red;">
								</div>
							</div>
							<p>80.429.18 TL</p><p><b>36</b></p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="atmisbir-tab" data-toggle="tab" href="#atmisbir" role="tab" aria-controls="atmisbir" aria-selected="false">
						<div class="progress-area">
							<h6>[61+] GÜN</h6>
							<div class="progress-box" >
								<div class="progress-info progress-bar-striped progress-bar-animated" style="height: 6%;background-color: black;">
								</div>
							</div>
							<p>80.429.18 TL</p><p><b>36</b></p>
						</div>
					</a>
				</li>

			</ul>
		</div>
		<div class="col-md-12">
			<div class="tab-content finans-area" id="myTabContent">
				<div class="tab-pane fade show active" id="toplam-borc" role="tabpanel" aria-labelledby="toplam-borc-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">TOPLAM BORÇ</h4></div>
							<div class="col-md-12 ">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>
									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
								</div>
								<div class="order-plan-footer mt-2 mb-2">
									<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
									<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="guncel-borc" role="tabpanel" aria-labelledby="guncel-borc-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">GÜNCEL GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="bir-onbes" role="tabpanel" aria-labelledby="bir-onbes-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">[ 1 - 15 ] GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="onalti-otuz" role="tabpanel" aria-labelledby="onalti-otuz-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">[ 16 - 30 ] GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="otuzbir-kirkbes" role="tabpanel" aria-labelledby="otuzbir-kirkbes-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">[ 31 - 45 ] GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="kirkalti-atmis" role="tabpanel" aria-labelledby="kirkalti-atmis-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">[ 46 - 60 ] GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="atmisbir" role="tabpanel" aria-labelledby="atmisbir-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12"><h4 class="pagetitle ml-3 mb-0 mt-4">[ 61 + ] GÜN BORÇ</h4></div>
							<div class="col-md-12">
								<div class="fixed-table-stok">
									<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												<th scope="col">Cari Kodu</th>
												<th scope="col">Cari Ünvanı</th>
												<th scope="col">İl</th>
												<th scope="col">İlçe</th>
												<th scope="col">Vade Tipi</th>
												<th scope="col">Ödeme Tipi</th>
												<th scope="col">İskonto Tipi</th>
												<th scope="col">Bakiye</th>
												<th scope="col">Detay</th>
											</tr>
										</thead>
									</table>
									<div class="tbl-content">
										<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KA</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Çek</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KC</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Senet</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
												<tr>
													<td scope="row"><p>120.07.004</p></td>
													<td><p>TAŞ-PAR İLETKUY OTOMOTİV İNŞ.TURİZ.TİC.LTD.ŞTİ.</p></td>
													<td><p>SAMSUN</p></td>
													<td><p>İLKADIM</p></td>
													<td><p>AY120</p></td>
													<td><p>Nakit</p></td>
													<td><p>KB</p></td>
													<td><p>2,693,86 TL</p></td>
													<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
												</tr>
											</tbody>
										</table>

									</div>
									<script>
										$(window).on("load resize ", function() {
											var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
											$('.tbl-header').css({'':scrollWidth});
										}).resize();
									</script>
									<div class="order-plan-footer mt-2 mb-2">
										<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
										<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
@media print{
	table.table.siparis-tutar-table.hesap-yaslandirma-table{visibility: visible;}
}
</style>
<!-- MODAL -->
<div class="print-pos-makbuz modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">TOPLAM BORÇ ALANI</h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body inv-modal">
				<div class="container-fluid">
					<div class="row pr-4 pl-4">

						<div class="col-md-12 p-2 mt-5">
							<table class="table siparis-tutar-table hesap-yaslandirma-table">
								<thead>
									<tr class="final-table-head">
										<th>Fatura Tarihi</th>
										<th>Tahsilat Tarihi</th>
										<th>Belge No</th>
										<th>Açıklama</th>
										<th>Vade Tipi</th>
										<th>Vade Tarihi</th>
										<th>Borç</th>
										<th>Kapatılmış</th>
										<th>Bakiye</th>
										<th>Gün</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>19.09.2018</td>
										<td>19.09.2018</td>
										<td>B0000000000201674</td>
										<td>FT.MIZ MUSSIP000407279(NKD)</td>
										<td>AY030</td>
										<td>201.82 TL</td>
										<td>69,71 TL</td>
										<td>132,63 TL</td>
										<td>132,63 TL</td>
										<td>23</td>
									</tr>
									<tr>
										<td>19.09.2018</td>
										<td>19.09.2018</td>
										<td>B0000000000201674</td>
										<td>FT.MIZ MUSSIP000407279(NKD)</td>
										<td>AY030</td>
										<td>201.82 TL</td>
										<td>69,71 TL</td>
										<td>132,63 TL</td>
										<td>132,63 TL</td>
										<td>23</td>
									</tr>
									<tr>
										<td>19.09.2018</td>
										<td>19.09.2018</td>
										<td>B0000000000201674</td>
										<td>FT.MIZ MUSSIP000407279(NKD)</td>
										<td>AY030</td>
										<td>201.82 TL</td>
										<td>69,71 TL</td>
										<td>132,63 TL</td>
										<td>132,63 TL</td>
										<td>23</td>
									</tr>
									<tr>
										<td>19.09.2018</td>
										<td>19.09.2018</td>
										<td>B0000000000201674</td>
										<td>FT.MIZ MUSSIP000407279(NKD)</td>
										<td>AY030</td>
										<td>201.82 TL</td>
										<td>69,71 TL</td>
										<td>132,63 TL</td>
										<td>132,63 TL</td>
										<td>23</td>
									</tr>
									<tr>
										<td>19.09.2018</td>
										<td>19.09.2018</td>
										<td>B0000000000201674</td>
										<td>FT.MIZ MUSSIP000407279(NKD)</td>
										<td>AY030</td>
										<td>201.82 TL</td>
										<td>69,71 TL</td>
										<td>132,63 TL</td>
										<td>132,63 TL</td>
										<td>23</td>
									</tr>
									<tr class="yaslandirma-toplam">
										<td>Ortalama Gün</td>
										<td>37</td>
										<td></td>
										<td></td>
										<td></td>
										<td>Geçmiş Toplam</td>
										<td>651,44 TL</td>
										<td>344,541 TL</td>
										<td>4,421,21 TL</td>
										<td></td>
									</tr>
									<tr class="yaslandirma-toplam">
										<td>Ortalama Vade Hesabı</td>
										<td>12.12.2018</td>
										<td></td>
										<td></td>
										<td></td>
										<td>Güncel Toplam</td>
										<td>4,421,21 TL</td>
										<td>344,541 TL</td>
										<td>3,651,44 TL</td>
										<td></td>
									</tr>
									<tr class="yaslandirma-toplam">
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Genel Toplam</td>
										<td>14,421,21 TL</td>
										<td>23,651,44 TL</td>
										<td>2,344,541 TL</td>
										<td></td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?include("footer.php");?>