<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>HABER YÖNETİMİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="banner-yonetim-tab" data-toggle="tab" href="#banner-yonetim" role="tab" aria-controls="banner-yonetim" aria-selected="true"><i class="fas fa-image"></i> Banner Yönetimi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="popup-yonetim-tab" data-toggle="tab" href="#popup-yonetim" role="tab" aria-controls="popup-yonetim" aria-selected="false"><i class="fas fa-chalkboard"></i> Pop-up Yönetimi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="uyaribildirim-yonetim-tab" data-toggle="tab" href="#uyaribildirim-yonetim" role="tab" aria-controls="uyaribildirim-yonetim" aria-selected="false"><i class="fas fa-bolt"></i> Uyarı Bildirim Yönetimi</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-2">

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="banner-yonetim" role="tabpanel" aria-labelledby="banner-yonetim-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka haber-yonetim-table">
									<tr>
										<td>Sıra</td>
										<td>Görsel</td>
										<td>Görsel Boyutu</td>
										<td>Link</td>
										<td>Durum</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										
										<td>
											<img src="images/autobanner1.jpg" height="40">
										</td>
										<td>392 kb</td>
										<td><a href="http://murat.kodakil.com/b2b/productdetail.php">http://murat.kodakil.com/b2b/productdetail.php</a></td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="sil">Sil</button></td>
									</tr>


									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td colspan="2">
											<input type="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										</td>
										<td><input class="form-control" type="text" placeholder="Görsel Bağlantı Yolu.."></td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="popup-yonetim" role="tabpanel" aria-labelledby="popup-yonetim-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka haber-yonetim-table">
									<tr>
										<td>Sıra</td>
										<td>Görsel</td>
										<td>Görsel Boyutu</td>
										<td>Link</td>
										<td>Durum</td>
										<td>Yayın Yeri</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										
										<td>
											<img src="images/autobanner1.jpg" height="40">
										</td>
										<td>392 kb</td>
										<td><a href="http://murat.kodakil.com/b2b/productdetail.php">http://murat.kodakil.com/b2b/productdetail.php</a></td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><select class="custom-select">
											<option>Sayfa Yüklendiğinde</option>
											<option>Tüm Sayfalara Bildirim</option>
										</select></td>
										<td><button class="sil">Sil</button></td>
									</tr>


									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td colspan="2">
											<input type="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										</td>
										<td><input class="form-control" type="text" placeholder="Görsel Bağlantı Yolu.."></td>
										<td colspan="2"><select class="custom-select">
											<option>Sayfa Yüklendiğinde</option>
											<option>Tüm Sayfalara Bildirim</option>
										</select></td>
										<td ><button class="update">Ekle</button></td>
									</tr>

								</table>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tamekrandemo">
									Tam Ekran Demo
								</button>
								<button id="sagalt-demo-btn">
									Sağ Alt Demo
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="uyaribildirim-yonetim" role="tabpanel" aria-labelledby="uyaribildirim-yonetim-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka haber-yonetim-table">
									<tr>
										<td>Sıra</td>
										<td>İçerik</td>
										<td>Link</td>
										<td>Durum</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td><input class="form-control w-auto m-auto" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"></td>
										<td>Hesap Mutabakatı</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="2"></td>
										<td>Favori Ürün Sepeti</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="3"></td>
										<td>Sipariş Sepeti</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="4"></td>
										<td>Oturum 1 Dakika Sonra Kapanacak</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="5"></td>
										<td>Kullanıcı Sayısı Aşıldı</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="6"></td>
										<td>Şifre Kullanım Süresi Doldu</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="7"></td>
										<td>Gecikmiş Borç Bulunmakta [16 - 31]</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="8"></td>
										<td>Şifre Kullanım Süresi Doldu</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td><input type="number" name="ekrana-gelme-sirasi" value="8"></td>
										<td>İnternet Bağlantısı Kesildi</td>
										<td>DETAY İNPUT VE AÇILIRLARI GELECEK BU SAYFA MODAL DOLACAK</td>
										<td>    
											<div class="pretty p-switch p-fill">
												<input type="checkbox" checked="" />
												<div class="state p-warning">
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><button class="update">Güncelle</button></td>
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



<!-- Tam Ekran demo -->
<div class="modal fade popup-open-area" id="tamekrandemo" tabindex="-1" role="dialog" aria-labelledby="tamekrandemoTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body p-0 popup-open">
				<a href="http://murat.kodakil.com/b2b/productdetail.php"><img src="images/autobanner1.jpg"></a>
			</div>
		</div>
	</div>
</div>

<!-- Sağ alt Demo -->
<div class="sagaltpopup active">
	<span id="sagaltpopup-close"><i class="far fa-times-circle"></i></span>
	<a href="http://murat.kodakil.com/b2b/productdetail.php"><img src="images/autobanner1.jpg"></a>
</div>


<script type="text/javascript">

	$(document).ready(function(){
		$("#sagalt-demo-btn").click(function(){
			$('.sagaltpopup').fadeIn(1700);
		});

		$('#sagaltpopup-close').click(function(){
			$('.sagaltpopup').fadeOut(1700);
		});
	});
</script>
<?include("footer.php");?>


