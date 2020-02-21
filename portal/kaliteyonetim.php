<?include("header.php");?>
<div class="container-fluid">
	<div class="row pl-4 pr-4">
		<div class="col-md-6"><h4 class="pagetitle"><p>KALİTE YÖNETİM SİSTEMİ</p></h4></div>
	</div>
	<div class="row pl-2 pr-2">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-justified analiz-menu" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="ky-talimatlar-tab" data-toggle="tab" href="#ky-talimatlar" role="tab" aria-controls="ky-talimatlar" aria-selected="true"><i class="far fa-compass"></i> Talimatlar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-prosedur-tab" data-toggle="tab" href="#ky-prosedur" role="tab" aria-controls="ky-prosedur" aria-selected="false"><i class="fas fa-puzzle-piece"></i> Prosedürler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-surecler-tab" data-toggle="tab" href="#ky-surecler" role="tab" aria-controls="ky-surecler" aria-selected="false"><i class="fas fa-project-diagram"></i> Süreçler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-gorev-tanimlari-tab" data-toggle="tab" href="#ky-gorev-tanimlari" role="tab" aria-controls="ky-gorev-tanimlari" aria-selected="false"><i class="fas fa-tasks"></i> Görev Tanımları</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-formlar-tab" data-toggle="tab" href="#ky-formlar" role="tab" aria-controls="ky-formlar" aria-selected="false"><i class="fas fa-clipboard-list"></i> Formlar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-yonetmelikler-tab" data-toggle="tab" href="#ky-yonetmelikler" role="tab" aria-controls="ky-yonetmelikler" aria-selected="false"><i class="fas fa-cogs"></i> Yönetmelikler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="ky-ozlukbilgi-tab" data-toggle="tab" href="#ky-ozlukbilgi" role="tab" aria-controls="ky-ozlukbilgi" aria-selected="false"><i class="fas fa-info"></i> Özlük Bilgilerim</a>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-3">

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="ky-talimatlar" role="tabpanel" aria-labelledby="ky-talimatlar-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-prosedur" role="tabpanel" aria-labelledby="ky-prosedur-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-surecler" role="tabpanel" aria-labelledby="ky-surecler-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-gorev-tanimlari" role="tabpanel" aria-labelledby="ky-gorev-tanimlari-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-formlar" role="tabpanel" aria-labelledby="ky-formlar-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-yonetmelikler" role="tabpanel" aria-labelledby="ky-yonetmelikler-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
										<td colspan="2"><button class="update">Ekle</button></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ky-ozlukbilgi" role="tabpanel" aria-labelledby="ky-ozlukbilgi-tab">
					<div class="container-fluid fatura-edilen">
						<div class="row">
							<div class="col-md-12 p-1">
								<table class="table sanal-banka ky-sistem-table">
									<tr>
										<td>Sıra</td>
										<td>Dosya Adı</td>
										<td>Dosya Uzantısı</td>
										<td>Dosya Boyutu</td>
										<td>Yükleme Tarihi</td>
										<td>İşlem</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Örnek Dosya Adı</td>
										<td>.PDF</td>
										<td>176 kb</td>
										<td>29.11.2018</td>
										<td><button class="sil">Sil</button></td>
									</tr>
									<tr><!-- Sabit Yeni ekleme satırı olarak kullanılacak -->
										<td><select class="custom-select">
											<option>Sıra Seçiniz</option>
											<option>1</option>
											<option>2</option>
											<option>...</option>
										</select></td>
										<td colspan="3">
											<input class="form-control w-100" type="file">
										</td>
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

