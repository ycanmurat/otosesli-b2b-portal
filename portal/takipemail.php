<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row pr-4 pl-4">
		<div class="col-md-8"><h4 class="pagetitle"><p>TAKİP E-MAİL ADRESLERİ</p></h4></div>
		<div class="col-md-12 p-1">
			<div class="scroll-responsive">
				<table class="table sanal-banka">
					<tr>
						<td>İşlem Adı</td>
						<td>Sorumlu / Sorumlular</td>
						<td>İşlem</td>
					</tr>
					<tr>
						<td>Öneri İstek Şikayet</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Müşteri Siparişleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Satıcı Siparişleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Kredi Kartı Ödemeleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Bayilik Başvuru Ödemeleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Cari Bilgi Güncelleme</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Alacak Bildirimi</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Plasiyer Gider İşlemleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>İade İşlemleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Mutabakat İşlemleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Hediye Çeki İşlemleri</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Ürün Soruları</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Tahsilat Makbuzları</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Şirket Satış ve Tahsilat Raporu</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
					<tr>
						<td>Şirket Gelir Tablosu</td>
						<td>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
							<p>demo@example.com</p>
						</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="sanalposModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Öneri İstek Şikayet Sorumluları</h5>
				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="iade-modal-form">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group col-md-12 m-2 form-inline">
								<textarea class="form-control">demo@example.com,demo@example.com,demo@example.com</textarea>
							</div>
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

<script>
	$(document).ready(function(){
		$("#yeni-banka-ekle").click(function(){
			$(".yeni-banka").clone().appendTo(".sanal-banka");
		});
	});
</script>

<?include("footer.php");?>






