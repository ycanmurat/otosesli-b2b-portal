<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>EKSTRALAR YÖNETİMİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="dosyalar-tab" data-toggle="tab" href="#dosyalar" role="tab" aria-controls="dosyalar" aria-selected="true"><i class="fas fa-file-upload"></i> Dosyalar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="hesap-numaralari-tab" data-toggle="tab" href="#hesap-numaralari" role="tab" aria-controls="hesap-numaralari" aria-selected="false"><i class="fas fa-pen-nib"></i> Hesap Numaraları</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="btob-kisayol-tab" data-toggle="tab" href="#btob-kisayol" role="tab" aria-controls="btob-kisayol" aria-selected="false"><i class="fas fa-thumbtack"></i> B2b Kısayol</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sistem-on-off-tab" data-toggle="tab" href="#sistem-on-off" role="tab" aria-controls="sistem-on-off" aria-selected="false"><i class="fas fa-power-off"></i> Sistem Durdurma</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="iade-aciklamalari-tab" data-toggle="tab" href="#iade-aciklamalari" role="tab" aria-controls="iade-aciklamalari" aria-selected="false"><i class="fas fa-comment-alt"></i> İade Açıklamaları</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="hediye-cek-tanimi-tab" data-toggle="tab" href="#hediye-cek-tanimi" role="tab" aria-controls="hediye-cek-tanimi" aria-selected="false"><i class="fas fa-gift"></i> Hediye Çek Tanımları</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="display-product-value-tab" data-toggle="tab" href="#display-product-value" role="tab" aria-controls="display-product-value" aria-selected="false"><i class="fas fa-calculator"></i>? Hediye Puan Hesabı</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-1">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="dosyalar" role="tabpanel" aria-labelledby="dosyalar-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="file-upload-button">
									<label for="file-upload-select">Dosya Yükle <i class="fas fa-plus"></i></label>
									<input id="file-upload-select" type="file" name="file-upload">
									<p>Seçildi :<b>ŞİRKET KURALLARI.pdf</b></p>
									<input class="form-control" type="text" id="file-title" name="file-title" placeholder="Dosya Başlığı" />
									<textarea class="form-control" placeholder="Dosya Açıklaması"></textarea>
									<button class="upload-file-btn">Yükle</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="uploaded file">
									<p>Dosya Başlığı:<b>Muhasebe Kuralları</b></p>
									<p>Dosya Açıklaması:<b>Muhasebe işleyişi ve yeni yönergelerin açıklaması.</b></p>
									<p>Dosya Adı:<b>Muhasebeİşleyiş29112018</b></p>
									<p>Dosya Boyutu:<b>1211 kb</b></p>
									<p>Dosya Uzantısı:<b>.pdf</b></p>
									<p>Dosya Linki:<b><a target="_blank" href="#">www.downloads.otosesli/muhasebe.pdf</a></b></p>
									<button class="delete-file-btn">Sil</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="uploaded file">
									<p>Dosya Başlığı:<b>Muhasebe Kuralları</b></p>
									<p>Dosya Açıklaması:<b>Muhasebe işleyişi ve yeni yönergelerin açıklaması.</b></p>
									<p>Dosya Adı:<b>Muhasebeİşleyiş29112018</b></p>
									<p>Dosya Boyutu:<b>1211 kb</b></p>
									<p>Dosya Uzantısı:<b>.pdf</b></p>
									<p>Dosya Linki:<b><a target="_blank" href="#">www.downloads.otosesli/muhasebe.pdf</a></b></p>
									<button class="delete-file-btn">Sil</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="uploaded file">
									<p>Dosya Başlığı:<b>Muhasebe Kuralları</b></p>
									<p>Dosya Açıklaması:<b>Muhasebe işleyişi ve yeni yönergelerin açıklaması.</b></p>
									<p>Dosya Adı:<b>Muhasebeİşleyiş29112018</b></p>
									<p>Dosya Boyutu:<b>1211 kb</b></p>
									<p>Dosya Uzantısı:<b>.pdf</b></p>
									<p>Dosya Linki:<b><a target="_blank" href="#">www.downloads.otosesli/muhasebe.pdf</a></b></p>
									<button class="delete-file-btn">Sil</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="uploaded file">
									<p>Dosya Başlığı:<b>Muhasebe Kuralları</b></p>
									<p>Dosya Açıklaması:<b>Muhasebe işleyişi ve yeni yönergelerin açıklaması.</b></p>
									<p>Dosya Adı:<b>Muhasebeİşleyiş29112018</b></p>
									<p>Dosya Boyutu:<b>1211 kb</b></p>
									<p>Dosya Uzantısı:<b>.pdf</b></p>
									<p>Dosya Linki:<b><a target="_blank" href="#">www.downloads.otosesli/muhasebe.pdf</a></b></p>
									<button class="delete-file-btn">Sil</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="hesap-numaralari" role="tabpanel" aria-labelledby="hesap-numaralari-tab">

					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<button id="yeni-banka-ekle" class="yeni-ekle-btn">Yeni Banka Ekle</button>
								<div class="scroll-responsive">
									<table class="table sanal-banka">
										<tr>
											<td>Banka Resmi</td>
											<td>Banka</td>
											<td>Şube</td>
											<td>Şube Kodu</td>
											<td>Hesap No</td>
											<td>IBAN No</td>
											<td>Hesap Cinsi</td>
											<td>Durum</td>
											<td>İşlem</td>
										</tr>
										<tr class="yeni-banka">
											<td class="sanal-banka-image">
												<img src="images/akbanka.png">
												<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</td>
											<td><input type="text" name="bank-name" value="AKBANK" placeholder="Banka Adı.."></td>
											<td><input type="text" name="sube" value="Sanayi sitesi (Samsun)" placeholder="Şube.."></td>
											<td><input type="text" name="sube-kod" value="7306" placeholder="Şube Kodu.."></td>
											<td><input type="text" name="hesap-no" value="165250" placeholder="Hesap No.."></td>
											<td><input type="text" name="iban-no" value="TR90 0006 4000 0017 3060 1652 50" placeholder="Hesap No.."></td>
											<td><select class="custom-select">
												<option>TL (₺)</option>
												<option>USD ($)</option>
												<option>EURO (€)</option>
											</select></td>
											<td><button class="update">Pasif</button></td>
											<td><button  data-toggle="modal" data-target="#sanalposModal" class="sil">Sil</button></td>
											<tr class="yeni-banka">
											</tr>
											<td class="sanal-banka-image">
												<img src="images/akbanka.png">
												<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</td>
											<td><input type="text" name="bank-name" value="AKBANK" placeholder="Banka Adı.."></td>
											<td><input type="text" name="sube" value="Sanayi sitesi (Samsun)" placeholder="Şube.."></td>
											<td><input type="text" name="sube-kod" value="7306" placeholder="Şube Kodu.."></td>
											<td><input type="text" name="hesap-no" value="165250" placeholder="Hesap No.."></td>
											<td><input type="text" name="iban-no" value="TR90 0006 4000 0017 3060 1652 50" placeholder="Hesap No.."></td>
											<td><select class="custom-select">
												<option>TL (₺)</option>
												<option>USD ($)</option>
												<option>EURO (€)</option>
											</select></td>
											<td><button class="update">Pasif</button></td>
											<td><button  data-toggle="modal" data-target="#sanalposModal" class="sil">Sil</button></td>
										</tr>
										<tr class="yeni-banka">
											<td class="sanal-banka-image">
												<img src="images/akbanka.png">
												<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</td>
											<td><input type="text" name="bank-name" value="AKBANK" placeholder="Banka Adı.."></td>
											<td><input type="text" name="sube" value="Sanayi sitesi (Samsun)" placeholder="Şube.."></td>
											<td><input type="text" name="sube-kod" value="7306" placeholder="Şube Kodu.."></td>
											<td><input type="text" name="hesap-no" value="165250" placeholder="Hesap No.."></td>
											<td><input type="text" name="iban-no" value="TR90 0006 4000 0017 3060 1652 50" placeholder="Hesap No.."></td>
											<td><select class="custom-select">
												<option>TL (₺)</option>
												<option>USD ($)</option>
												<option>EURO (€)</option>
											</select></td>
											<td><button class="update">Pasif</button></td>
											<td><button  data-toggle="modal" data-target="#sanalposModal" class="sil">Sil</button></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="btob-kisayol" role="tabpanel" aria-labelledby="btob-kisayol-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="b2b-shortcut">
									<input type="file" name="b2b-shortcut">
									<button>Yükle</button>
									<p>Seçili Kısayol :<b> B2b Kısayol</b></p>
									<p>Seçili Link <a href="#" target="_blank"></a> </p>
									<button>Kaldır</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="sistem-on-off" role="tabpanel" aria-labelledby="sistem-on-off-tab">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 mt-5">
								<div class="pretty p-icon p-toggle">
									<input type="checkbox" / checked="">
									<div class="state p-on">
										<i class="fas fa-lock-open"></i>
										<label>Sistem Açık</label>
									</div>
									<div class="state  p-off">
										<i class="fas fa-lock "></i>
										<label>Sistem Kapalı</label>
									</div>
								</div>
								<textarea class="sistem-onoff-info" placeholder="Açıklama giriniz..">Yıl sonu devir işlemlerinden dolayı sistemimiz kısa süre kullanılamayacaktır. En Kısa süre de tekrar deneyiniz ...</textarea>
								<button class="sistem-onoff-update">İşleme Al</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="iade-aciklamalari" role="tabpanel" aria-labelledby="iade-aciklamalari-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">

								<select class="custom-select date-select float-right mr-2">
									<option>Tüm Şablonlar</option>
									<option>Arızalı Şablonları</option>
									<option>Sağlam Şablonları</option>
								</select>
								<div class="all-select-button d-inline float-right mr-3 mt-3">
									<button>Yeni Başlık Ekle</button>
									<button>Tümünü Seç</button>
									<button>Seçili Olanları Sil</button>
								</div>
								<table class="table sanal-banka">
									<tr>
										<td>Seç</td>
										<td>Başlık</td>
										<td>Kategori</td>
										<td>Sıra</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>  
											<div class="pretty p-icon p-smooth">
												<input type="checkbox" />
												<div class="state p-danger-o">
													<i class="icon fas fa-check"></i>
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Tahsilat / Ödeme Sorunu"></td>
										<td><select class="custom-select">
											<option>Sağlam</option>
											<option>Arızalı</option>
										</select></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td>  
											<div class="pretty p-icon p-smooth">
												<input type="checkbox" />
												<div class="state p-danger-o">
													<i class="icon fas fa-check"></i>
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Fiyat Sorunu"></td>
										<td><select class="custom-select">
											<option>Sağlam</option>
											<option>Arızalı</option>
										</select></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><button  class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td>  
											<div class="pretty p-icon p-smooth">
												<input type="checkbox" />
												<div class="state p-danger-o">
													<i class="icon fas fa-check"></i>
													<label>&nbsp</label>
												</div>
											</div>
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Ayar Tutmuyor"></td>
										<td><select class="custom-select">
											<option>Sağlam</option>
											<option selected>Arızalı</option>
										</select></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><button  class="update">Güncelle</button></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="hediye-cek-tanimi" role="tabpanel" aria-labelledby="hediye-cek-tanimi-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka">
									<tr>
										<td>Hediye Logosu</td>
										<td>Hediye Açıklaması</td>
										<td>Grup</td>
										<td>Tutar</td>
										<td colspan="2">İşlem</td>
									</tr>
									<tr>
										<td>
											<img src="images/shell.png" height="40">
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Shell Yakıt Çeki"></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><select class="custom-select">
											<option>10 TL</option>
											<option selected="">25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
											<option>150 TL</option>
											<option>200 TL</option>
										</select></td>
										<td><button class="sil">Sil</button></td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td>
											<img src="images/shell.png" height="40">
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Shell Yakıt Çeki"></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><select class="custom-select">
											<option>10 TL</option>
											<option>25 TL</option>
											<option selected="">50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
											<option>150 TL</option>
											<option>200 TL</option>
										</select></td>
										<td><button class="sil">Sil</button></td>
										<td><button class="update">Güncelle</button></td>
									</tr>
									<tr>
										<td>
											<img src="images/shell.png" height="40">
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" value="Shell Yakıt Çeki"></td>
										<td><select class="custom-select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><select class="custom-select">
											<option>10 TL</option>
											<option>25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option selected="">100 TL</option>
											<option>150 TL</option>
											<option>200 TL</option>
										</select></td>
										<td><button class="sil">Sil</button></td>
										<td><button class="update">Güncelle</button></td>
									</tr>



									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td>
											<input type="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										</td>
										<td><input class="form-control" type="text" name="iade-aciklama-baslik-bir" placeholder="Açıklama Giriniz.."></td>
										<td><select class="custom-select">
											<option>Grup Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
										</select></td>
										<td><select class="custom-select">
											<option>Tutar Seçiniz</option>
											<option>10 TL</option>
											<option>25 TL</option>
											<option>50 TL</option>
											<option>75 TL</option>
											<option>100 TL</option>
											<option>150 TL</option>
											<option>200 TL</option>
										</select></td>
										<td colspan="2"><button class="update">Ekle</button></td>
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




<?include("footer.php");?>

