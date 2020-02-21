<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>PLASİYER PRİM YÖNETİMİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="genel-ozet-chart-tab" data-toggle="tab" href="#genel-ozet-chart" role="tab" aria-controls="genel-ozet-chart" aria-selected="true"><i class="far fa-chart-bar"></i> Plasiyer Satış Hedefleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="plasiyer-tahsilat-tab" data-toggle="tab" href="#plasiyer-tahsilat" role="tab" aria-controls="plasiyer-tahsilat" aria-selected="false"><i class="fas fa-search-plus"></i> Plasiyer Tahsilat Hedefleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tedarik-tesvik-tab" data-toggle="tab" href="#tedarik-tesvik" role="tab" aria-controls="tedarik-tesvik" aria-selected="false"><i class="fas fa-search-minus"></i> Tedarik Teşvik Hedefleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="display-product-value-tab" data-toggle="tab" href="#display-product-value" role="tab" aria-controls="display-product-value" aria-selected="false"><i class="fas fa-eye"></i> Şirket Satış ve Tahsilat Hedefleri</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-2">

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="genel-ozet-chart" role="tabpanel" aria-labelledby="genel-ozet-chart-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka">
									<tr>
										<td>Plasiyer Kodu</td>
										<td>Plasiyer Adı</td>
										<td>Durum</td>
										<td>Düzenle</td>
										<td>İncele</td>
									</tr>
									<tr>
										<td>335- 001</td>
										<td>Deniz Arslan</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button  data-toggle="modal" data-target="#satishedef" class="update">Düzenle</button></td>
										<td><button  data-toggle="modal" data-target="#satishedefincele" class="update">İncele</button></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="plasiyer-tahsilat" role="tabpanel" aria-labelledby="plasiyer-tahsilat-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka">
									<tr>
										<td>Plasiyer Kodu</td>
										<td>Plasiyer Adı</td>
										<td>Durum</td>
										<td>Düzenle</td>
										<td>İncele</td>
									</tr>
									<tr>
										<td>335- 001</td>
										<td>Deniz Arslan</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button  data-toggle="modal" data-target="#tahsilathedef" class="update">Düzenle</button></td>
										<td><button  data-toggle="modal" data-target="#tahsilathedefincele" class="update">İncele</button></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tedarik-tesvik" role="tabpanel" aria-labelledby="tedarik-tesvik-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka">
									<tr>
										<td>Plasiyer Kodu</td>
										<td>Plasiyer Adı</td>
										<td>Durum</td>
										<td>Düzenle</td>
										<td>İncele</td>
									</tr>
									<tr>
										<td>335- 001</td>
										<td>Deniz Arslan</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button  data-toggle="modal" data-target="#plasiyerorani" class="update">Düzenle</button></td>
										<td><button  data-toggle="modal" data-target="#plasiyeroraniincele" class="update">İncele</button></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="display-product-value" role="tabpanel" aria-labelledby="display-product-value-tab">

				</div>
			</div>
		</div>
	</div>
</div>





<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->
<div class="modal fade" id="satishedef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tahsilat Hedef Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">
							<select class="custom-select w-auto">
								<option>Yıl Seçiniz..</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
							</select>
							<select class="custom-select w-auto">
								<option>Ay Seçiniz..</option>
								<option>Şubat</option>
								<option>Mart</option>
								<option>Nisan</option>
								<option>Mayıs</option>
							</select>
							<select class="custom-select w-auto">
								<option>Durum Seçiniz..</option>
								<option>Aktif</option>
								<option>Pasif</option>
							</select>
							<table class="table">
								<tr>
									<th colspan="5">Satış Hedefi</th>
								</tr>
								<tr>
									<td>
										<input class="form-control w-auto" type="number" name="" value="200,000" placeholder="Satış Hedefi Giriniz..">

									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
						<button type="button" class="btn btn-primary">Onayla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--Plasiyer Satış hedefleri  Modal -->
<div class="modal fade" id="satishedefincele" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg mw-100" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tedarik Teşvik Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">

							<table class="table sanal-banka oran-table">
								<tr>
									<td >Hedef</td>
									<td>Plasiyer Kodu</td>
									<td>Plasiyer Adı</td>
									<td>Ay</td>
									<td>Yıl</td>
									<td>Durum(Ay)</td>
									<td>Satış Hedefi</td>
									<td>İşlem</td>
								</tr>

								<tr>
									<td>200,000,00 TL</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Aktif</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>

								<tr>
									<td>200,000,00 TL</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Pasif</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
						<button type="button" class="btn btn-primary">Tamamla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->
<!--Plasiyer Satış hedefleri  Modal -->




<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->
<div class="modal fade" id="tahsilathedef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tahsilat Hedef Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">
							<select class="custom-select w-auto">
								<option>Yıl Seçiniz..</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
							</select>
							<select class="custom-select w-auto">
								<option>Ay Seçiniz..</option>
								<option>Şubat</option>
								<option>Mart</option>
								<option>Nisan</option>
								<option>Mayıs</option>
							</select>
							<table class="table">
								<tr>
									<th colspan="5">Oran Dağılım</th>
								</tr>
								<tr>
									<th>Oran 1</th>
									<th>Oran 2</th>
									<th>Oran 3</th>
									<th>Oran 4</th>
								</tr>
								<tr>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="text" name="" value="> üzeri" disabled><!--burayı disabled bırak -->
										<input class="form-control" type="number" name="" value="0.0">
									</td>

								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
						<button type="button" class="btn btn-primary">Onayla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--Plasiyer tahsilat hedefleri  Modal -->
<div class="modal fade" id="tahsilathedefincele" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg mw-100" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tedarik Teşvik Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">

							<table class="table sanal-banka oran-table">
								<tr>
									<td class="oran-table-head">Oranlar</td>
									<td>Plasiyer Kodu</td>
									<td>Plasiyer Adı</td>
									<td>Ay</td>
									<td>Yıl</td>
									<td>Durum(Ay)</td>
									<td>Satış Hedefi</td>
									<td>İşlem</td>
								</tr>

								<tr>
									<td class="oran-td">
										<div class="oran-area">
											<p>Oran 1 : </p><p>0 - 35 = 1%</p>
										</div>
										<div class="oran-area">
											<p>Oran 2 : </p><p>36 - 48 = 2%</p>
										</div>
										<div class="oran-area">
											<p>Oran 3 : </p><p>49 - 80 = 3%</p>
										</div>
										<div class="oran-area">
											<p>Oran 4 : </p><p>80 > üzeri= 4%</p>
										</div>
									</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Aktif</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>

								<tr>
									<td class="oran-td">
										<div class="oran-area">
											<p>Oran 1 : </p><p>0 - 35 = 1%</p>
										</div>
										<div class="oran-area">
											<p>Oran 2 : </p><p>36 - 48 = 2%</p>
										</div>
										<div class="oran-area">
											<p>Oran 3 : </p><p>49 - 80 = 3%</p>
										</div>
										<div class="oran-area">
											<p>Oran 4 : </p><p>80 > üzeri= 4%</p>
										</div>
									</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Pasif</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
						<button type="button" class="btn btn-primary">Tamamla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->
<!--Plasiyer tahsilat hedefleri  Modal -->







<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->
<div class="modal fade" id="plasiyerorani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tedarik Teşvik Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">
							<select class="custom-select w-auto">
								<option>Yıl Seçiniz..</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
							</select>
							<select class="custom-select w-auto">
								<option>Ay Seçiniz..</option>
								<option>Şubat</option>
								<option>Mart</option>
								<option>Nisan</option>
								<option>Mayıs</option>
							</select>
							<select class="custom-select w-auto">
								<option>Tedarikçi Seçiniz..</option>
								<option>CABU</option>
								<option>EUROCRAFT</option>
								<option>DJ PARTS</option>
								<option>URUNMARKA</option>
							</select>
							<table class="table">
								<tr>
									<th>Genel Satış Hedefi</th>
									<th>Tedarikçi Yüzdesi</th>
									<th>Hedef</th>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="" value="200.000.00 ₺" disabled>
									</td>
									<td>
										<input class="form-control" type="number" name="" value="0">
									</td>
									<td>
										<input class="form-control" type="text" name="" value="28.000.00 ₺" disabled>
									</td>
								</tr>
							</table>
							<table class="table">
								<tr>
									<th colspan="5">Oran Dağılım</th>
								</tr>
								<tr>
									<th>Oran 1</th>
									<th>Oran 2</th>
									<th>Oran 3</th>
									<th>Oran 4</th>
								</tr>
								<tr>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control" type="number" name="" value="0.0">
									</td>
									<td>
										<input class="form-control oranlar-cnm" type="number" name="" value="0">
										<input class="form-control oranlar-cnm" type="text" name="" value="> üzeri" disabled><!--burayı disabled bırak -->
										<input class="form-control" type="number" name="" value="0.0">
									</td>

								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
						<button type="button" class="btn btn-primary">Onayla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--Plasiyer tedarik teşvik İncele Modal -->
<div class="modal fade" id="plasiyeroraniincele" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg mw-100" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tedarik Teşvik Oranları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="oran-form">
					<div class="row">
						<div class="col-md-12">

							<table class="table sanal-banka oran-table">
								<tr>
									<td class="oran-table-head">Oranlar</td>
									<td>Plasiyer Kodu</td>
									<td>Plasiyer Adı</td>
									<td>Ay</td>
									<td>Yıl</td>
									<td>Durum(Ay)</td>
									<td>Tedarikçi</td>
									<td>Satış Hedefi</td>
									<td>İşlem</td>
								</tr>

								<tr>
									<td class="oran-td">
										<div class="oran-area">
											<p>Oran 1 : </p><p>0 - 35 = 1%</p>
										</div>
										<div class="oran-area">
											<p>Oran 2 : </p><p>36 - 48 = 2%</p>
										</div>
										<div class="oran-area">
											<p>Oran 3 : </p><p>49 - 80 = 3%</p>
										</div>
										<div class="oran-area">
											<p>Oran 4 : </p><p>80 > üzeri= 4%</p>
										</div>
									</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Aktif</td>
									<td>CABU</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>

								<tr>
									<td class="oran-td">
										<div class="oran-area">
											<p>Oran 1 : </p><p>0 - 35 = 1%</p>
										</div>
										<div class="oran-area">
											<p>Oran 2 : </p><p>36 - 48 = 2%</p>
										</div>
										<div class="oran-area">
											<p>Oran 3 : </p><p>49 - 80 = 3%</p>
										</div>
										<div class="oran-area">
											<p>Oran 4 : </p><p>80 > üzeri= 4%</p>
										</div>
									</td>
									<td>335- 001</td>
									<td>Deniz Arslan</td>
									<td>Mayıs</td>
									<td>2017</td>
									<td>Pasif</td>
									<td>CABU</td>
									<td>16,000 TL</td>
									<td><button class="sil">Sil</button></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
						<button type="button" class="btn btn-primary">Tamamla</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->
<!--Plasiyer tedarik teşvik Oranı Modal -->











<?include("footer.php");?>

