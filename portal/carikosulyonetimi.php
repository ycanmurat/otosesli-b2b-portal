<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row pr-4 pl-4">
		<div class="col-md-8"><h4 class="pagetitle"><p>CARİ KOŞUL YÖNETİMİ</p></h4></div>
		<div class="col-md-12 p-1">
			<div class="scroll-responsive">
				<table class="table sanal-banka">
					<tr>
						<td>Aylık Satış Hedefi</td>
						<td>Ödeme Tipi</td>
						<td>Ödeme Vadesi</td>
						<td>İskonto Tipi</td>
						<td>Gönderim Şekli</td>
						<td>Risk Limiti</td>
						<td>İşlem</td>
					</tr>
					<tr>
						<td>
							<p>0-1500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
							<select class="custom-select" >
								<option>Vadeli</option>
								<option>Nakit</option>
							</select>
						</td>
						<td>
							<select class="custom-select" disabled>
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
							<select class="custom-select" disabled>
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" disabled>
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
							<select class="custom-select" disabled>
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" disabled>
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
							<select class="custom-select" disabled>
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<div>
								<input class="form-control w-auto d-inline " type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
							</div>
							<div>
								<input class="form-control w-auto d-inline " type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
							</div>
						</td>

						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>1501 - 2500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<div>
								<input class="form-control w-auto d-inline " type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
							</div>
							<div>
								<input class="form-control w-auto d-inline " type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
							</div>
						</td>

						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>2501-3500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<input class="form-control w-auto d-inline" type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
						</td>
						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>3501-4500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<input class="form-control w-auto d-inline" type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
						</td>
						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>4501-5500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<input class="form-control w-auto d-inline" type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
						</td>
						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>2501-3500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<input class="form-control w-auto d-inline" type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
						</td>
						<td><button class="update">Kaydet</button></td>
					</tr>
					<tr>
						<td>
							<p>2501-3500 TL</p>
						</td>
						<td>
							<select class="custom-select" >
								<option>Nakit</option>
								<option>Vadeli</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>AY030</option>
								<option>AY060</option>
								<option>AY090</option>
								<option>AY120</option>
								<option>AY150</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>KA</option>
								<option>KN</option>
								<option>KC</option>
								<option>KD</option>
							</select>
						</td>
						<td>
							<select class="custom-select" >
								<option>Fatura Altı</option>
								<option>Peşin Ödeme</option>
							</select>
						</td>
						<td>
							<input class="form-control w-auto d-inline" type="text" name="risklimiti" value="5,310,00"><p class="d-inline ml-2"> <b>TL</b></p>
						</td>
						<td><button class="update">Kaydet</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<!--<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>-->
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






