<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-4"><h4 class="pagetitle"><p>GÜNLÜK İŞLEMLER</p></h4></div>
		<div class="col-md-12 p-0">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="gunluk-faturalar-tab" data-toggle="tab" href="#gunluk-faturalar" role="tab" aria-controls="gunluk-faturalar" aria-selected="true"><i class="fas fa-file-invoice"></i> Günlük Faturalar <b> (10)</b> 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="gunluk-tahsilat-tab" data-toggle="tab" href="#gunluk-tahsilat" role="tab" aria-controls="gunluk-tahsilat" aria-selected="false"><i class="fas fa-hand-holding-usd"></i> Günlük Tahsilatlar <b> (12)</b>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="fatura-karlilik-tab" data-toggle="tab" href="#fatura-karlilik" role="tab" aria-controls="fatura-karlilik" aria-selected="false"><i class="fas fa-chart-line"></i> Günlük Fatura Karlılık <b> (10)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="gunluk-ziyaretci-tab" data-toggle="tab" href="#gunluk-ziyaretci" role="tab" aria-controls="gunluk-ziyaretci" aria-selected="false"><i class="fas fa-coffee"></i> Günlük Ziyaretçi <b> (8)</b></a>
				</li><!--
				<li class="nav-item">
					<a class="nav-link" id="fatura-edilecek-tab" data-toggle="tab" href="#fatura-edilecek" role="tab" aria-controls="fatura-edilecek" aria-selected="false"><i class="far fa-edit"></i> Fatura Edilecek <b> (3)</b></a>
				</li>-->
			</ul>
		</div>
		<div class="col-md-12 p-0">
			<div class="tab-content my-order-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="gunluk-faturalar" role="tabpanel" aria-labelledby="gunluk-faturalar-tab">
					<ul class="nav justify-content-end mr-1 nav-tabs list-style-type mt-0 tab-in-select" id="myTab" role="tablist">
						<li class="nav-item">
							<form>
								<select class="custom-select w-auto">
									<option selected="">Fatura Tipi</option>
									<option>Satış Faturası</option>
									<option>Satış İade Faturası</option>
									<option>Alış Faturası</option>
									<option>Alış İade Faturası</option>
								</select>
								<select class="custom-select w-auto">
									<option selected="">Plasiyer Seçiniz</option>
									<option>Murat Can</option>
									<option>Kerem Aksoy</option>
									<option>Umut Er</option>
									<option>İlker Bal</option>
									<option>Serdar Aşan</option>
								</select>
								<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
								<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
								<button class="date-picker-btn"><i class="fas fa-search"></i></button>
							</form>
						</li>
					</ul>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Fatura No</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Fatura Tarihi</th>
									<th scope="col">Kalem Adedi</th>
									<th scope="col">Fatura Tipi</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Puan</th>
									<th scope="col">Net Tutar</th>
									<th scope="col">Kargom</th>
									<th scope="col">Genel Toplam</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>A00000000799835</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>8 Adet</p></td>
										<td><p>Alış İade Faturası</p></td>
										<td><p>12.12.2015</p></td>
										<td><p>95 Megabyte</p></td>
										<td><p>2,221,81 TL</p></td>
										<td><p>Nerede</p></td>
										<td><p>2,621,74 TL</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#faturaedilenModal">Detay</button></td>
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
					<table class="table gunluk-islem-total text-center">
						<tr>
							<td>Toplam Kalem</td>
							<td>Toplam Müşteri Sayısı</td>
							<td>Toplam Kdv Hariç Tutar</td>
							<td>Toplam Kdv Dahil Tutar</td>
						</tr>
						<tr>
							<td>85</td>
							<td>135</td>
							<td>116,000,00 TL</td>
							<td>116,000,00 TL</td>
						</tr>
					</table>
				</div>
				<div class="tab-pane fade" id="gunluk-tahsilat" role="tabpanel" aria-labelledby="gunluk-tahsilat-tab">
					<ul class="nav justify-content-end mr-1 nav-tabs list-style-type mt-0 tab-in-select" id="myTab" role="tablist">
						<li class="nav-item">
							<form>
								<select class="custom-select w-auto">
									<option selected="">Ödeme tipi</option>
									<option>Çek</option>
									<option>Senet</option>
									<option>Pos</option>
									<option>Nakit</option>
									<option>Havale</option>
								</select>
								<select class="custom-select w-auto">
									<option selected="">Plasiyer Seçiniz</option>
									<option>Murat Can</option>
									<option>Kerem Aksoy</option>
									<option>Umut Er</option>
									<option>İlker Bal</option>
									<option>Serdar Aşan</option>
								</select>
								<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
								<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
								<button class="date-picker-btn"><i class="fas fa-search"></i></button>
							</form>
						</li>
					</ul>
					<div class="fixed-table-stok ">
						<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Cari Kodu</th>
									<th scope="col">Cari Adı</th>
									<th scope="col">İl</th>
									<th scope="col">İlçe</th>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">Ödeme Tipi</th>
									<th scope="col">Tutar</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Çek</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Senet</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Nakit</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Pos</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Pos</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p>ÖRNEK OTOMOTİV (ŞUBE1) ÖRNEK OTOMOTİV (ŞUBE1)</p></td>
										<td><p>ANKARA</p></td>
										<td ><p>31.10.2018 <br> 22:33</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>Pos</p></td>
										<td><p>99,000,00 TL</p></td>
										<td><p>AY120</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>

								</tbody>
							</table>
							<script>
								$(window).on("load resize ", function() {
									var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
									$('.tbl-header').css({'':scrollWidth});
								}).resize();
							</script>
						</div>
					</div>
					<table class="table gunluk-islem-total text-center">
						<tr>
							<td>Tahsilat Adeti</td>
							<td>Toplam Tahsilat</td>

						</tr>
						<tr>
							<td>85</td>
							<td>116,000,00 TL</td>
						</tr>
					</table>
				</div>
				<div class="tab-pane fade" id="fatura-karlilik" role="tabpanel" aria-labelledby="fatura-karlilik-tab">
					<ul class="nav justify-content-end mr-1 nav-tabs list-style-type mt-0 tab-in-select" id="myTab" role="tablist">
						<li class="nav-item">
							<form>
								<select class="custom-select w-auto">
									<option selected="">Fatura Tipi</option>
									<option>Satış Faturası</option>
									<option>Satış İade Faturası</option>
									<option>Alış Faturası</option>
									<option>Alış İade Faturası</option>
								</select>
								<select class="custom-select w-auto">
									<option selected="">Plasiyer Seçiniz</option>
									<option>Murat Can</option>
									<option>Kerem Aksoy</option>
									<option>Umut Er</option>
									<option>İlker Bal</option>
									<option>Serdar Aşan</option>
								</select>
								<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
								<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
								<button class="date-picker-btn"><i class="fas fa-search"></i></button>
							</form>
						</li>
					</ul>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Fatura No</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Fatura Tarihi</th>
									<th scope="col">Fatura Tipi</th>
									<th scope="col">Adet</th>
									<th scope="col">Plasiyer</th>

									<th scope="col">Kar Tutar</th>
									<th scope="col">Kar Yuzde</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>WB200000000277</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>12.10.2015</p></td>
										<td><p>Satış İade Faturası</p></td>
										<td><p>10 Ad.</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>

										<td><p>66,68 TL</p></td>
										<td><p><b>60,07%</b></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
								</tbody>
							</table>
							<script>
								$(window).on("load resize ", function() {
									var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
									$('.tbl-header').css({'':scrollWidth});
								}).resize();
							</script>
						</div>
					</div>
					<table class="table gunluk-islem-total text-center">
						<tr>
							<td>Toplam Kalem</td>
							<td>Toplam Müşteri Sayısı</td>
							<td>Toplam Alış Maliyet</td>
							<td>Toplam Satış Maliyet</td>
							<td>Toplam Kar</td>
							<td>Toplam Yuzde</td>
						</tr>
						<tr>
							<td>85</td>
							<td>135</td>
							<td>116,000,00 TL</td>
							<td>25,000,00 TL</td>
							<td>12,000,00 TL</td>
							<td>36,35%</td>
						</tr>
					</table>
				</div>
				<div class="tab-pane fade" id="gunluk-ziyaretci" role="tabpanel" aria-labelledby="gunluk-ziyaretci-tab">
					<ul class="nav justify-content-end mr-1 nav-tabs list-style-type mt-0 tab-in-select" id="myTab" role="tablist">
						<li class="nav-item">
							<form>
								<select class="custom-select w-auto">
									<option selected="">Fatura Tipi</option>
									<option>Satış Faturası</option>
									<option>Satış İade Faturası</option>
									<option>Alış Faturası</option>
									<option>Alış İade Faturası</option>
								</select>
								<select class="custom-select w-auto">
									<option selected="">Plasiyer Seçiniz</option>
									<option>Murat Can</option>
									<option>Kerem Aksoy</option>
									<option>Umut Er</option>
									<option>İlker Bal</option>
									<option>Serdar Aşan</option>
								</select>
								<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
								<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
								<button class="date-picker-btn"><i class="fas fa-search"></i></button>
							</form>
						</li>
					</ul>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">Cari Kodu</th>
									<th scope="col">Cari Adı</th>
									<th scope="col">İl</th>
									<th scope="col">İlçe</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">Giriş Zamanı</th>
									<th scope="col">Giriş Sayısı</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table mal-kabul-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>120.06.073</p></td>
										<td><p> ÖRNEK OTOMOTİV (ŞUBE1)/ ÖRNEK OTOMOTİV (ŞUBE1) </p></td>
										<td><p>ANKARA</p></td>
										<td><p>SİNCAN</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>31.10.2018 <br> 22:33</p></td>
										<td><p>66</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#UGURMODALYAPCANIM">Detay</button></td>
									</tr>
								</tbody>
							</table>
							<script>
								$(window).on("load resize ", function() {
									var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
									$('.tbl-header').css({'':scrollWidth});
								}).resize();
							</script>
						</div>
					</div>
				</div>
				<!--<div class="tab-pane fade" id="fatura-edilecek" role="tabpanel" aria-labelledby="fatura-edilecek-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Makbuz No</th>
									<th scope="col">Makbuz Tarihi</th>
									<th scope="col">İlgili</th>
									<th scope="col">Tutar</th>
									<th scope="col">İşlem Tipi</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">Bilgi</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>ACİL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>ACİL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>ACİL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>NORMAL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>NORMAL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>NORMAL</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><p><i class="fas fa-info-circle"></i></p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#exampleModal">Detay</button></td>
									</tr>
								</tbody>
							</table>
							<script>
								$(window).on("load resize ", function() {
									var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
									$('.tbl-header').css({'':scrollWidth});
								}).resize();
							</script>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>

<!-- Modal1 ??????-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">İade Sepeti Ürün Ekleme</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="iade-modal-form">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="name-tedarikci">Tedarikçi</label>
								</div>
								<div class="col-md-8">
									<input type="email" class="form-control shadow" id="name-tedarikci" disabled placeholder="EUROCRAFT">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="input-stok-kodu">Stok kodu</label>
								</div>
								<div class="col-md-8">
									<input type="email" class="form-control shadow" id="input-stok-kodu" disabled placeholder="EU F21247-002">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="isim-stok">Stok Adı</label>
								</div>
								<div class="col-md-8">
									<textarea height="70" class="form-control shadow" id="isim-stok" rows="3" disabled placeholder="TURBO ŞARJ (4 DELİK) (2.5TD) DELİKSİZLERİ ÜRETİLMİYOR ZATEN"></textarea>
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="fatura-kodu">Sipariş No</label>
								</div>
								<div class="col-md-8">
									<input type="email" class="form-control shadow" id="fatura-kodu" disabled placeholder="A00000000799787">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label>İade Türü</label>
								</div>
								<div class="col-md-8">
									<select class="custom-select shadow">
										<option selected="">Seçiniz..</option>
										<option>Sağlam</option>
										<option>Arızalı</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label>İade Türü</label>
								</div>
								<div class="col-md-8">
									<div class="input-group">
										<span class="input-group-btn">
											<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
												<span class="glyphicon glyphicon-minus">-</span>
											</button>
										</span>
										<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
										<span class="input-group-btn">
											<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
												<span class="glyphicon glyphicon-plus">+</span>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label>Açıklama</label>
								</div>
								<div class="col-md-8">
									<select class="custom-select shadow">
										<option selected="">Seçiniz..</option>
										<option>doldururuz abem</option>
										<option>canım abem</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">İade Sepeti Ürün Ekle</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="print-pos-makbuz modal fade" id="faturaedilenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">SATIŞ FATURASI</h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body inv-modal">
				<div class="row">
					<div class="fatura-bg"><img src="images/logo (1).png"></div>
					<div class="col-md-4">
						<div class="fatura-header first">
							<img src="images/logo (1).png">
							<h6>İRSALİYELİ FATURA</h6>
							<p>Sayın,<br><b>AKSU OTO YEDEK PARÇA AYŞE KAYA-ŞÜKRİYE DUMAN ORTAKLIĞI<br>İSTASYON MAH. ANAFARTALAR CAD. ŞEMSİBEY APT. NO:234/1 SAMSUN/İLKADIM</b></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="fatura-header second">
							<p></p>
							<p>Fatura No</p>
							<p>A00000000799835</p>
							<p>Oto sesli Yedek Parça Servis Bakım Hiz.San ve Tic.Ltd.Şti <br>BAFRA V.D.:649 011 1655</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="fatura-header third">
							<h6>OTO SESLİ</h6>
							<p><b>Yedek Parça Servis Bakım Hiz. San. ve Tic. Ltd. Şti.</b></p>
							<div class="sesli-adress">
								<p><b>Toptan Satış</b>Örnek Sanayi Sitesi Kirazlık Mahallesi Sahil Caddesi No:51 Tekkeköy/SAMSUN<br>Tel : 0362 266 59 73(pbx) - 266 59 74 Fax : 0362 266 59 84</p>

								<p>E-mail: info@otosesli.com  Web:  www.otosesli.com - www.eurocraft.com.tr<br>Bafra V.D. 649 011 1655 Tic.Sic.No.:3179 Mersis No.:0-6490-1116-5500019<br>Online Sipariş: b2b.otosesli.com Sermaye:35.000.000TL </p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<table class="table fatura-vergi">
							<thead>
								<tr>
									<th scope="col">Vergi Dairesi</th>
									<th scope="col">Vergi Numarası</th>
									<th scope="col">Düzenleme Tarihi</th>
									<th scope="col">Düzenleme Saati</th>
									<th scope="col">Fiili Sevk Tarihi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KALEKAPI</th>
									<td>1230501345</td>
									<td>06.11.2018</td>
									<td>15:54:19</td>
									<td>06.11.2018</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<table class="table fatura-urun">
							<thead>
								<tr>
									<th scope="col">Stok Kodu</th>
									<th scope="col">Stok Adı</th>
									<th scope="col">Miktar</th>
									<th scope="col">Brüt Fiyat</th>
									<th scope="col">İsk 1</th>
									<th scope="col">İsk 2</th>
									<th scope="col">İsk 3</th>
									<th scope="col">İsk 4</th>
									<th scope="col">İsk 5</th>
									<th scope="col">Net Fiyat</th>
									<th scope="col">Net Tutar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
								</tr>
								<tr class="fatura-toplam">
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>Toplam</td>
									<td>: 76,70 TL</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Brüt Toplam </th>
									<th scope="col">Genel İskonto ( 22% ) </th>
									<th scope="col">Ödeme İsk ( 0% )</th>
									<th scope="col">Bayi İsk ( 0% )</th>
									<th scope="col">Özel Fiyat İsk ( 0% )</th>
									<th scope="col">Ek İsk ( 0% )</th>
									<th scope="col">Net Tutar</th>
									<th scope="col">Nakliye</th>
									<th scope="col">%18 KDV</th>
									<th scope="col">Genel Toplam</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">289,20</th>
									<td>63,62 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>72,18 TL</td>
									<td>0,00 TL</td>
									<td>153,40 TL</td>
									<td>0,00 TL</td>
									<td>27,61 TL</td>
									<td>181,01 TL</td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Satış Temsilcisi</th>
									<th scope="col">Siparişi Hazırlayan</th>
									<th scope="col">Kontrol Eden</th>
									<th scope="col">Paketleyen</th>
									<th scope="col">Sevkiyat Firma</th>
									<th scope="col">Gönderim Şekli</th>
									<th scope="col">Paket Bilgisi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Kerem AKSOY</th>
									<td>Tolga ÇELİK</td>
									<td>Tolga ÇELİK</td>
									<td>Kaan SÖNMEZ</td>
									<td>ARAS KARGO</td>
									<td>Peşit Ödeme (PÖ)</td>
									<td>1 Parça / 4 Desi</td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th><p>Yalnız</p></th>
									<th><p>Cari Hesap Bakiyeniz</p></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p><b>YÜZSEKSENBİR TL BİR KR</b></p></td>
									<td><p><b>13,458,00 TL</b></p></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<table class="table iban-table">
							<tr>
								<td>AKBANK</td>
								<td>TR22 0004 6010 9788 8000 0021 24 </td>
								<td>İŞ BANK</td>
								<td>TR90 0006 4000 0017 3060 1652 50 </td>
								<td>ALBARAKA</td>
								<td>TR18 0020 3000 0229 5720 0000 01 </td>
							</tr>
							<tr>
								<td>HALK BANK</td>
								<td>TR89 0001 2001 3860 0010 1002 28 </td>
								<td>FİNANS BANK</td>
								<td>TR59 0011 1000 0000 0033 7652 43 </td>
								<td>ZİRAAT BANK</td>
								<td>TR55 0001 0020 9660 4947 4650 06 </td>
							</tr>
							<tr>
								<td>T.FİNANS BANK</td>
								<td>TR30 0020 6000 4699 2134 4000 02 </td>
								<td>KUVEYT TÜRK</td>
								<td>TR60 0020 5000 0084 1186 4000 01 </td>
								<td>YAPI KREDİ</td>
								<td>TR42 0006 7010 0000 0091 1995 18 </td>
							</tr>
							<tr>
								<td>TEB</td>
								<td>TR54 0003 2000 0000 0009 5620 82 </td>
								<td>VAKIF BANK</td>
								<td>TR11 0001 5001 5800 7303 5030 97 </td>
								<td>GARANTİ</td>
								<td>TR27 0006 2001 1630 0006 2987 50  </td>
							</tr>
						</table>
					</div>
					<div class="col-md-7">
						<div class="fatura-footer-left">
							<p>* Fatura münderecatına ve fatura kamsamında teslim edilen ürünlere 8 gün içerisinde itiraz edilmediği taktirde, fatura tüm unsurları ile birlikte kabul edilmiş sayılır.</p>
							<p>* Vadesinde ödenmeyen faturalara aylık %2 oranında vade farkı uygulanır.</p>
							<p>* İhtilaf halinde SAMSUN Mahkeme ve İcra daireleri yetLilidir.</p>
							<p>* Bu belgenin sevk edilen malla birlikte bulunması halinde ayrıca sevk irsaliyesi aranmaz.</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="fatura-footer-right"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tahsilat Modal -->
<div class="modal fade" id="tahsilatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog giderModal" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tahsilat İşlemleri</h5>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body giderModal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<table class="table siparis-tutar-table tahsilat-in-table text-center">
								<tr>
									<td>Tahsil Eden</td>
									<td>Cari Kodu</td>
									<td>Cari Adı</td>
									<td>Makbuz No</td>
									<td>Ödeme Şekli</td>
									<td>Makbuz Tarihi</td>
									<td>Tutar</td>
								</tr>
								<tr>
									<td>Fatih DEMİR</td>
									<td>120.00</td>
									<td>LOREM LOOREM LOREM LOREM LOREM</td>
									<td>0505538</td>
									<td>Çek</td>
									<td>12.10.2018</td>
									<td>250,000,00 TL</td>
								</tr>
							</table>
							<!--<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>-->
						</div>
						<div class="col-md-12 mt-5">
							<table class="table siparis-tutar-table tahsilat-in-table text-center">
								<tr>
									<td></td>
									<td>Çek tipi</td>
									<td>Ciro Adı</td>
									<td>Banka</td>
									<td>Şube</td>
									<td>Hesap No</td>
									<td>Çek No</td>
									<td>Çek Vadesi</td>
									<td>Tutar</td>
								</tr>
								<tr>
									<td>1</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>AKBANK</td>
									<td>Çiftlik</td>
									<td>564564214321</td>
									<td>33333333</td>
									<td>12.10.2015</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>2</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>AKBANK</td>
									<td>Çiftlik</td>
									<td>564564214321</td>
									<td>33333333</td>
									<td>12.10.2015</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>3</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>AKBANK</td>
									<td>Çiftlik</td>
									<td>564564214321</td>
									<td>33333333</td>
									<td>12.10.2015</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>4</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>AKBANK</td>
									<td>Çiftlik</td>
									<td>564564214321</td>
									<td>33333333</td>
									<td>12.10.2015</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>5</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>AKBANK</td>
									<td>Çiftlik</td>
									<td>564564214321</td>
									<td>33333333</td>
									<td>12.10.2015</td>
									<td>900,00 TL</td>
								</tr>
							</table>
							<!--<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>-->
						</div>
						<div class="col-md-12 mt-5">
							<table class="table siparis-tutar-table tahsilat-in-table text-center">
								<tr>
									<td></td>
									<td>Senet tipi</td>
									<td>Ciro Adı</td>
									<td>Senet Vadesi</td>
									<td>Düzenlenen Yer</td>
									<td>Senet Masrafı</td>
									<td>Tutar</td>
								</tr>
								<tr>
									<td>1</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>10.10.2016</td>
									<td>Samsun / İlkadım</td>
									<td>200,00 TL</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>2</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>10.10.2016</td>
									<td>Samsun / İlkadım</td>
									<td>200,00 TL</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>3</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>10.10.2016</td>
									<td>Samsun / İlkadım</td>
									<td>200,00 TL</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>4</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>10.10.2016</td>
									<td>Samsun / İlkadım</td>
									<td>200,00 TL</td>
									<td>900,00 TL</td>
								</tr>
								<tr>
									<td>5</td>
									<td>ASIL</td>
									<td>CİRO ADI BURADA</td>
									<td>10.10.2016</td>
									<td>Samsun / İlkadım</td>
									<td>200,00 TL</td>
									<td>900,00 TL</td>
								</tr>
							</table>
							<!--<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>-->
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Sil</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
			</div>
		</div>
	</div>
</div>

<!-- Sanal Pos Modal -->
<div class="modal fade" id="sanalposModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog giderModal" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sanal Pos İşlemleri</h5>
				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body giderModal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<table class="table sanalpos-akis">
								<tr>
									<td>Sonuç</td>
									<td>BAŞARILI</td>
								</tr>
								<tr>
									<td>Cari Kodu</td>
									<td>120.00.2100.2</td>
								</tr>
								<tr>
									<td>Cari Adı</td>
									<td>LOREM LOOREM LOREM LOREM LOREM İPSUM DOLOR SİT AMET</td>
								</tr>
								<tr>
									<td>İl</td>
									<td>SAMSUN</td>
								</tr>
								<tr>
									<td>İlçe</td>
									<td>İLKADIM</td>
								</tr>
								<tr>
									<td>İşlem No</td>
									<td>65465132357</td>
								</tr>
								<tr>
									<td>İşlem Tarihi</td>
									<td>12.10.2018</td>
								</tr>
								<tr>
									<td>İşlem Tipi</td>
									<td>TAKSİTLİ</td>
								</tr>
							</table>
							<!--<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>-->
						</div>
						<div class="col-md-6">
							<table class="table sanalpos-akis">
								<tr>
									<td>İşlem Yapan</td>
									<td>Ben yaptım ben</td>
								</tr>
								<tr>
									<td>Tutar</td>
									<td>120,000,00 TL</td>
								</tr>
								<tr>
									<td>Açıklama</td>
									<td>Kuruşu kuruşuna ödedim gözüm arkada değil. Ölsemde gam yemem</td>
								</tr>
								<tr>
									<td>İp no</td>
									<td>58.168.200.164</td>
								</tr>
								<tr>
									<td>Provizyon No</td>
									<td>WA654560000000145</td>
								</tr>
								<tr>
									<td>Kart Sahibi Ad Soyad</td>
									<td>KEREM AKSOY</td>
								</tr>
								<tr>
									<td>Telefon Numarası</td>
									<td>0555 000 00 00</td>
								</tr>
							</table>
							<!--<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>-->
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Sil</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
			</div>
		</div>
	</div>
</div>

<!--Satıcı Sİpariş Modal -->
<div class="print-pos-makbuz modal fade" id="saticisiparisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Günlük Fatura Karlılık</h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body inv-modal">
				<div class="row">
					<div class="col-md-12">
						<table class="table fatura-vergi">
							<thead>
								<tr>
									<th scope="col">Vergi Dairesi</th>
									<th scope="col">Vergi No</th>
									<th scope="col">Düzenlenme Tarihi</th>
									<th scope="col">Düzenlenme Saati</th>
									<th scope="col">Fiili Sevk Tarihi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">SAMSUN ZAFER VERGİ DAİRESİ</th>
									<td>244 000 45021</td>
									<td>12.10.2015</td>
									<td>22:14</td>
									<td>19:18</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<table class="table fatura-urun">
							<thead>
								<tr>
									<th scope="col">Stok Kodu</th>
									<th scope="col">Stok Adı</th>
									<th scope="col">Adet</th>
									<th scope="col">Brüt Fiyat</th>
									<th scope="col">İsk 1</th>
									<th scope="col">İsk 2</th>
									<th scope="col">İsk 3</th>
									<th scope="col">İsk 4</th>
									<th scope="col">İsk 5</th>
									<th scope="col">Net Fiyat</th>
									<th scope="col">Birim Ort. Mal.</th>
									<th scope="col">Kar</th>
									<th scope="col">Yuzde</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
									<td>76,70 TL</td>
									<td>60.12 %</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
									<td>76,70 TL</td>
									<td>60.12 %</td>
								</tr>
								<tr>
									<th scope="row">EUF22100-062EUF22100-062</th>
									<td>HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-HİDROLİK DİREKSİYON YAĞ DEPOSU (BORULU)(1.4 TDCI) 02/-</td>
									<td>2 AD</td>
									<td>72,30 TL</td>
									<td>22%</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>0 %</td>
									<td>38,35 TL</td>
									<td>76,70 TL</td>
									<td>76,70 TL</td>
									<td>60.12 %</td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="col-md-12 ">
						<table class="table fatura-vergi">
							<thead>
								<tr>
									<th scope="col">Alış Maliyeti</th>
									<th scope="col">Satış Maliyeti</th>
									<th scope="col">Kar Tutarı</th>
									<th scope="col">Kar Marı</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">289,20 TL</th>
									<td>63,62 TL</td>
									<td>292,00 TL</td>
									<td>63,01 %</td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Siparişi Hazırlayan</th>
									<th scope="col">Kontrol Eden</th>
									<th scope="col">Sevkiyat Firma</th>
									<th scope="col">Gönderim Şekli</th>
									<th scope="col">Koli Adet Desi/Ağırlık</th>
									<th scope="col">İskonto Kodu</th>
									<th scope="col">Vade Kodu</th>
									<th scope="col">Ödeme Tarihi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Tolga ÇELİK</th>
									<td>Tevrat ALTUN</td>
									<td>ARAS KARGO</td>
									<td>Fatura Altı(FA)</td>
									<td>3</td>
									<td>KB</td>
									<td>AY030</td>
									<td>30.12.2018</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Onayla</button>
			</div>
		</div>
	</div>
</div>

<?include("footer.php");?>