<?include("header.php");?>
<div class="container-fluid">
	<div class="row pr-4 pl-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>İŞ AKIŞ ONAY</p></h4></div>

		<div class="col-md-12 p-0">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="musteri-siparis-tab" data-toggle="tab" href="#musteri-siparis" role="tab" aria-controls="musteri-siparis" aria-selected="true"><i class="fas fa-feather-alt"></i> Müşteri Siparişleri <b> (10)</b> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="satici-siparis-tab" data-toggle="tab" href="#satici-siparis" role="tab" aria-controls="satici-siparis" aria-selected="false"><i class="fas fa-hand-point-up"></i> Satıcı Siparişleri <b> (12)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sanal-pos-islem-tab" data-toggle="tab" href="#sanal-pos-islem" role="tab" aria-controls="sanal-pos-islem" aria-selected="false"><i class="fas fa-sign-in-alt"></i> Sanal Pos İşlemleri <b> (10)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tahsilat-islem-tab" data-toggle="tab" href="#tahsilat-islem" role="tab" aria-controls="tahsilat-islem" aria-selected="false"><i class="fas fa-reply-all"></i> Tahsilat İşlemleri <b> (8)</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="gider-islem-tab" data-toggle="tab" href="#gider-islem" role="tab" aria-controls="gider-islem" aria-selected="false"><i class="fas fa-external-link-alt"></i> Gider İşlemleri <b> (3)</b></a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-0 pr-1">

			<div class="tab-content my-order-tab is-akis" id="myTabContent">
				<div class="tab-pane fade show active" id="musteri-siparis" role="tabpanel" aria-labelledby="musteri-siparis-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Sipariş No</th>
									<th scope="col">Durumu</th>
									<th scope="col">İlgili</th>
									<th scope="col">Tutar</th>
									<th scope="col">Adet</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">Durum</th>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-xs"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-sm"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-md"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-lg"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-xs"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-lg"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-xs"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-md"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-xl"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
										<td>
											<div class="durum-info-area">
												<i class="fas fa-exclamation-triangle delay-xl"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>Ha pu nedu ya pu nedu gadaşim.</b></p></span>
											</div>
										</td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#musterisiparisModal">Detay</button></td>
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
				<div class="tab-pane fade" id="satici-siparis" role="tabpanel" aria-labelledby="satici-siparis-tab">
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Sipariş No</th>
									<th scope="col">Ünite</th>
									<th scope="col">İlgili</th>
									<th scope="col">Tutar</th>
									<th scope="col">Teslim Tarihi</th>
									<th scope="col">Ödeme Tarihi</th>
									<th scope="col">Adet</th>
									<th scope="col">Plasiyer</th>
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
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#saticisiparisModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>WB2000000002777224</p></td>
										<td><p>Yurt İçi</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>12.12.2012</p></td>
										<td><p>99</p></td>
										<td><p>Onur Ege Tan</p></td>
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
				</div>
				<div class="tab-pane fade" id="sanal-pos-islem" role="tabpanel" aria-labelledby="sanal-pos-islem-tab">
					<form class="gider-islem-filtre">
						<select class="custom-select w-auto">
							<option selected="">Başarılı</option>
							<option>Başarısız</option>
						</select>
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>
					</form>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">İşlem No</th>
									<th scope="col">İşlem Tipi</th>
									<th scope="col">Tutar</th>
									<th scope="col">Sonuç</th>
									<th scope="col">Banka</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">İlgili</th>
									<th scope="col">Durum</th>
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
										<td><p>65465654</p></td>
										<td><p>Tek Çekim</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Tek Çekim</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Tek Çekim</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Taksitli</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Taksitli</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Taksitli</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#sanalposModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>65465654</p></td>
										<td><p>Taksitli</p></td>
										<td><p>209,00 TL</p></td>
										<td><p>Başarılı</p></td>
										<td><p>AKBANK</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p class="rising">Murat Can</p></td>
										<td><p class="rising">Onaylandı</p></td>
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
				</div>
				<div class="tab-pane fade" id="tahsilat-islem" role="tabpanel" aria-labelledby="tahsilat-islem-tab">
					<form class="gider-islem-filtre">
						<select class="custom-select w-auto">
							<option selected="">Beklemede</option>
							<option>Onaylandı</option>
						</select>
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>
					</form>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table finans-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Cari Açıklama</th>
									<th scope="col">Makbuz Tarihi</th>
									<th scope="col">İlgili</th>
									<th scope="col">Tutar</th>
									<th scope="col">Ödeme Tipi</th>
									<th scope="col">Vade Tarihi</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">Bilgi</th>
									<th scope="col">Durum</th>
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
										<td><p>01.12.2004</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>Çek</p></td>
										<td><p>10.08.2013</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td><p class="down">Beklemede</p></td>

										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>01.12.2004</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>Çek</p></td>
										<td><p>10.08.2013</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>01.12.2004</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>Çek</p></td>
										<td><p>10.08.2013</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>01.12.2004</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>Çek</p></td>
										<td><p>10.08.2013</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p>120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)<br>ANKARA/SİNCAN</p></td>
										<td><p>01.12.2004</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>12,245,45 TL</p></td>
										<td><p>Çek</p></td>
										<td><p>10.08.2013</p></td>
										<td><p>Onur Ege Tan</p></td>
										<td>
											<div class="durum-info-area">
												<i class="fas fa-info-circle"></i>
												<span class="durum-info"><p><b>[99 - 99] Gün Gecikmiş borç var.</b></p></span>
											</div>
										</td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#tahsilatModal">Detay</button></td>
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
				<div class="tab-pane fade" id="gider-islem" role="tabpanel" aria-labelledby="gider-islem-tab">
					<form class="gider-islem-filtre">
						<select class="custom-select w-auto">
							<option selected="">Plasiyer Seçiniz..</option>
							<option>Murat Can</option>
							<option>Kerem Aksoy</option>
							<option>Kerem Aksoy</option>
							<option>Kerem Aksoy</option>
						</select>
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>

					</form>
					<div class="fixed-table-stok">
						<table class="stok-hareket-table" cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th scope="col">İşlem Tarih</th>
									<th scope="col">Plasiyer</th>
									<th scope="col">İl</th>
									<th scope="col">İlçe</th>
									<th scope="col">Tutar</th>
									<th scope="col">İlgili</th>
									<th scope="col">Durum</th>
									<th scope="col">Detay</th>
								</tr>
							</thead>
						</table>
						<div class="tbl-content">
							<table class="stok-hareket-table " cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="down">Beklemede</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
									</tr>
									<tr>
										<td scope="row"><p>31.10.2018 <br> 22:33</p></td>
										<td><p class="rising">Kerem AKSOY</p></td>
										<td><p>ANKARA</p></td>
										<td><p>MERKEZ</p></td>
										<td><p>100,00 TL</p></td>
										<td><p class="rising">Rahmi Kulanoğlu</p></td>
										<td><p class="rising">Onaylandı</p></td>
										<td><button class="set-product-button" data-toggle="modal" data-target="#giderModal">Detay</button></td>
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
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
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



<!-- Gider İşlemleri Modal -->
<div class="modal fade" id="giderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog giderModal" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Gider İşlemleri</h5>
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
							<table class="table gider-islem-table">
								<thead>
									<tr>
										<th scope="col">İşlem</th>
										<th scope="col">Gider Tipi</th>
										<th scope="col">Şehir</th>
										<th scope="col">Gider Tarih</th>
										<th scope="col">Belge  No</th>
										<th scope="col">Tutar</th>
										<th scope="col">Ödeme Tipi</th>
										<th scope="col">Açıklama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td scope="row"><button class="silindi">Sil</button></td>
										<td>
											<select class="custom-select">
												<option>Konaklama</option>
												<option selected>Yakıt</option>
												<option>Yemek</option>
											</select>
										</td>
										<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
										<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate" value="12.10.2018"></td>
										<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
										<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Havale</option>
												<option>Çek</option>
												<option>Senet</option>
											</select>
										</td>
										<td>
											<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
										</td>
									</tr>
									<tr>
										<td scope="row"><button class="silindi">Sil</button></td>
										<td>
											<select class="custom-select">
												<option>Konaklama</option>
												<option selected>Yakıt</option>
												<option>Yemek</option>
											</select>
										</td>
										<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
										<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate" value="12.10.2018"></td>
										<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
										<td><input class="form-control" type="number" name="gider-tutar" value="200">TL</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Havale</option>
												<option>Çek</option>
												<option>Senet</option>
											</select>
										</td>
										<td>
											<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
										</td>
									</tr>

									<tr>
										<td scope="row"><button class="silindi">Sil</button></td>
										<td>
											<select class="custom-select">
												<option>Konaklama</option>
												<option selected>Yakıt</option>
												<option>Yemek</option>
											</select>
										</td>
										<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
										<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate" value="12.10.2018"></td>
										<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
										<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Havale</option>
												<option>Çek</option>
												<option>Senet</option>
											</select>
										</td>
										<td>
											<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
										</td>
									</tr>

									<tr>
										<td scope="row"><button class="silindi">Sil</button></td>
										<td>
											<select class="custom-select">
												<option>Konaklama</option>
												<option selected>Yakıt</option>
												<option>Yemek</option>
											</select>
										</td>
										<td><input class="form-control" type="text" name="belge-no" value="Samsun"></td>
										<td><input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate" value="12.10.2018"></td>
										<td><input class="form-control" type="text" name="belge-no" value="AC0-400-0001000214"></td>
										<td><input class="form-control" type="number" name="gider-tutar" value="200,00">TL</td>
										<td>
											<select class="custom-select">
												<option>Nakit</option>
												<option>Kredi Kartı</option>
												<option>Havale</option>
												<option>Çek</option>
												<option>Senet</option>
											</select>
										</td>
										<td>
											<textarea class="form-control" >Kodların ustası , yazılımın dehası , gözlerinin hastasıyım.</textarea>
										</td>
									</tr>
								</tbody>
							</table>
							<button class="gider-kayit-btn">Değişiklikleri Kaydet</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Onayla</button>
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
									<td>İşlem Yapılan Banka</td>
									<td>Garanti Bankası</td>
								</tr>
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

<!--Müşteri Sİpariş Modal -->
<div class="print-pos-makbuz modal fade" id="musterisiparisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Müşteri Siparişi</h5>

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
									<th scope="col">Cari Ünvanı</th>
									<th scope="col">İl / İlçe</th>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Plasiyer</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)</th>
									<td>ANKARA/SİNCAN</td>
									<td>WB0000555 000 00 0021</td>
									<td>15.10.2018</td>
									<td>Kerem AKSOY</td>
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
									<td>: 7,076,70 TL</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<h6>İskontolar</h6>
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
						<h6>Risk Limiti</h6>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Risk Limiti</th>
									<th scope="col">Teminatı</th>
									<th scope="col">Bakiye</th>
									<th scope="col">Sipariş Risk</th>
									<th scope="col">İrsaliye Risk</th>
									<th scope="col">Senet A. Risk</th>
									<th scope="col">Senet C. Risk</th>
									<th scope="col">Çek A. Risk</th>
									<th scope="col">Çek C. Risk</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">5,310,00 TL</th>
									<td>0,00 TL</td>
									<td>4,002,58 TL</td>
									<td>1,665,68 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
								</tr>
								<tr class="fatura-toplam">
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>Kullanılabilir Limit</td>
									<td>: 12,076,70 TL</td>
								</tr>
							</tbody>
						</table>
						<h6>Hesap Yaşlandırma</h6>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Toplam Bakiye</th>
									<th scope="col">Güncel Bakiye</th>
									<th scope="col">[ 1 - 15 Gün ]</th>
									<th scope="col">[ 16 - 30 Gün ]</th>
									<th scope="col">[ 31 - 45 Gün ]</th>
									<th scope="col">[ 45 - 60 Gün ]</th>
									<th scope="col">[ 61 Günden Fazla ]</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1,069,58 TL</th>
									<td>936,95 TL</td>
									<td>4,002,58 TL</td>
									<td>1,665,68 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th><p>Not 1</p></th>
									<th><p>Not 2</p></th>
									<th><p>Not 3</p></th>
									<th><p>Teslimat Adresi</p></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<p><b>Lorem İpsumLorem İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsumLorem İpsumLorem İpsum Lorem İpsum</b></p>
									</td>
									<td>
										<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsu</b></p>
									</td>
									<td>
										<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
									</td>
									<td>
										<p><b>m İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsum İpsumLorem İpsumLorem İpsum Lorem İpsum Lorem İpsuL</b></p>
									</td>
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

<!--Satıcı Sİpariş Modal -->
<div class="print-pos-makbuz modal fade" id="saticisiparisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Satıcı Siparişi</h5>

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
									<th scope="col">Cari Ünvanı</th>
									<th scope="col">İl / İlçe</th>
									<th scope="col">Sipariş No</th>
									<th scope="col">Sipariş Tarihi</th>
									<th scope="col">Plasiyer</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">120.06.073 / ÖRNEK OTOMOTİV (ŞUBE1)</th>
									<td>ANKARA/SİNCAN</td>
									<td>WB0000555 000 00 0021</td>
									<td>15.10.2018</td>
									<td>Kerem AKSOY</td>
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
									<td>: 7,076,70 TL</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<h6>İskontolar</h6>
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
						<h6>Risk Limiti</h6>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Risk Limiti</th>
									<th scope="col">Teminatı</th>
									<th scope="col">Bakiye</th>
									<th scope="col">Sipariş Risk</th>
									<th scope="col">İrsaliye Risk</th>
									<th scope="col">Senet A. Risk</th>
									<th scope="col">Senet C. Risk</th>
									<th scope="col">Çek A. Risk</th>
									<th scope="col">Çek C. Risk</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">5,310,00 TL</th>
									<td>0,00 TL</td>
									<td>4,002,58 TL</td>
									<td>1,665,68 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
								</tr>
							</tbody>
						</table>
						<h6>Hesap Yaşlandırma</h6>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Toplam Bakiye</th>
									<th scope="col">Güncel Bakiye</th>
									<th scope="col">[ 1 - 15 Gün ]</th>
									<th scope="col">[ 16 - 30 Gün ]</th>
									<th scope="col">[ 31 - 45 Gün ]</th>
									<th scope="col">[ 45 - 60 Gün ]</th>
									<th scope="col">[ 61 Günden Fazla ]</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1,069,58 TL</th>
									<td>936,95 TL</td>
									<td>4,002,58 TL</td>
									<td>1,665,68 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
									<td>0,00 TL</td>
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