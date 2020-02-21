<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row pr-4 pl-4">
		<div class="col-md-8"><h4 class="pagetitle"><p>TAKİP E-MAİL ADRESLERİ</p></h4></div>
		<div class="col-md-12 p-1">
			<table class="table sanal-banka">
				<tr>
					<td>İşlem Adı</td>
					<td>Sorumlu / Sorumlular</td>
					<td>İşlem</td>
				</tr>
				<tr>
					<td>Cari Puan Beklemede</td>
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


<!-- Modal -->
<div class="modal fade" id="sanalposModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sanal Pos Ayarları</h5>
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






