<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row pl-4 pr-4">
		<div class="col-md-12"><h4 class="pagetitle"><p>CARİ PUAN</p></h4></div>
		<div class="col-md-6 mt-3">
			<div class="row">
				<div class="col-md-6 pl-1">
					<div class="content-cp">
						<p>Toplam Puan</p><b>375,000 <span>CP</span></b><!--Genel Toplam-->
					</div>
				</div>
				<div class="col-md-6"> 			
					<div class="content-cp">
						<p>Kullanılan Puan </p><b>- 245,000 <span>CP</span></b><!--Toplam Harcanan-->
					</div>
				</div>
				<div class="col-md-6 pl-1">
					<div class="content-cp">
						<p>İade Ürün Puan</p><b>- 375,000 <span>CP</span></b><!--İade Edilen Ürünler-->
					</div>
				</div>
				<div class="col-md-6"> 			
					<div class="content-cp">
						<p>İşleme Alındı</p><b>375,000 <span>CP</span></b><!--Talep Sürecinde-->
					</div>
				</div>
				<div class="col-md-12 pl-1">
					<div class="content-cp kalan">
						<p>Kalan  Puan </p><b>375,000 <span>CP</span></b><!--Puan Cüzdanım-->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-3 pr-0">
			<div class="row">
				<div class="col-md-12">
					<div class="puan-magaza">
						<div id="magaza-scroll">
							<div class="puan-magaza-urun">
								<div class="row">
									<div class="col-md-6">
										<img src="images/shell.png" width="50">
										<p>Shell  Yakıt Çeki</p>
									</div>
									<div class="col-md-6">
										<select class="custom-select">
											<option>Seçiniz..</option>
											<option>25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
										</select>
										<select class="custom-select" disabled>
											<option>1 Adet</option>
											<option>2 Adet</option>
											<option>3 Adet</option>
											<option>4 Adet</option>
											<option>5 Adet</option>
											<option>6 Adet</option>
											<option>7 Adet</option>
											<option>8 Adet</option>
											<option>9 Adet</option>
										</select>
									</div>
								</div>
							</div>
							<div class="puan-magaza-urun">
								<div class="row">
									<div class="col-md-6">
										<img src="images/shell.png" width="50">
										<p>Shell  Yakıt Çeki</p>
									</div>
									<div class="col-md-6">
										<select class="custom-select">
											<option>Seçiniz..</option>
											<option>25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
										</select>
										<select class="custom-select" disabled>
											<option>1 Adet</option>
											<option>2 Adet</option>
											<option>3 Adet</option>
											<option>4 Adet</option>
											<option>5 Adet</option>
											<option>6 Adet</option>
											<option>7 Adet</option>
											<option>8 Adet</option>
											<option>9 Adet</option>
										</select>
									</div>
								</div>
							</div>
							<div class="puan-magaza-urun">
								<div class="row">
									<div class="col-md-6">
										<img src="images/shell.png" width="50">
										<p>Shell  Yakıt Çeki</p>
									</div>
									<div class="col-md-6">
										<select class="custom-select">
											<option>Seçiniz..</option>
											<option>25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
										</select>
										<select class="custom-select" disabled>
											<option>1 Adet</option>
											<option>2 Adet</option>
											<option>3 Adet</option>
											<option>4 Adet</option>
											<option>5 Adet</option>
											<option>6 Adet</option>
											<option>7 Adet</option>
											<option>8 Adet</option>
											<option>9 Adet</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="magaza-toplam">
									<p>Toplam :<b>7500 <span>CP</span></b></p>
								</div>
								<div class="cuzdan-kalan">
									<p>Kalan Puan :<b>367,500<span>CP</span></b></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" placeholder="Açıklama"></textarea>
										<div class="magaza-send-btn">
											<button class="magaza-btn">Temizle</button>
											<button class="magaza-btn">Talep Et</button>
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

	<div class="col-md-6 pl-4"><h4 class="pagetitle"><p class="alt-pagetitle">CARİ PUAN GEÇMİŞİ</p></h4></div>
	<div class="col-md-12 pl-2 mt-2 pr-0 shadow">
		<div class="scroll-responsive">
			<div class="fixed-table-stok">
				<table class="stok-hareket-table cari-puan" cellpadding="0" cellspacing="0" border="0">
					<thead>
						<tr>
							<th scope="col">Tarih</th>
							<th scope="col">Stok Kodu</th>
							<th scope="col">Stok Adı</th>
							<th scope="col">Model</th>
							<th scope="col">Fatura no</th>
							<th scope="col">Birim Fiyatı</th>
							<th scope="col">Adet</th>
							<th scope="col">Toplam Tutar</th>
							<th scope="col">Kazanılan Puan</th>
						</tr>
					</thead>
				</table>
				<div class="tbl-content">
					<table class="stok-hareket-table cari-puan" cellpadding="0" cellspacing="0" border="0">
						<tbody>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
							</tr>
							<tr>
								<td scope="row"><p>06.11.2018</p></td>
								<td><p>EU F21194-008</p></td>
								<td><p>İNTER COOLER HORTUMU(BÜYÜK)(2.2 TDCI) FORD-MONDEO /07/</p></td>
								<td><p>SKORSKY</p></td>
								<td><p>WF5466220000A1S</p></td>
								<td><p>1,211,98 TL</p></td>
								<td><p>7</p></td>
								<td><p class="rising">8,273,68 TL</p></td>
								<td><p class="rising">80,27 <b class="cari-points">CP</b></p></td>
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
		</div>
	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="cari-puan-magaza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									<label for="fatura-kodu">Fatura no</label>
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
<?include("footer.php");?>