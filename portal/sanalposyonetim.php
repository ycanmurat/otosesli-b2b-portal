<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row pr-4 pl-4">
		<div class="col-md-8"><h4 class="pagetitle"><p>SANAL POS YÖNETİMİ</p></h4></div>
		<div class="col-md-12 p-1">
			<button id="yeni-banka-ekle" class="yeni-ekle-btn">Yeni Banka Ekle</button>
			<div class="scroll-responsive">
				<table class="table sanal-banka">
					<tr>
						<td>Banka Resmi</td>
						<td>Kart İsmi</td>
						<td>Açıklama</td>
						<td>Taksit</td>
						<td>Birincil</td>
						<td>İşlem</td>
						<td>Durum</td>
					</tr>
					<tr class="yeni-banka">
						<td class="sanal-banka-image">
							<img src="images/akbanka.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="AKBANK" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/isbank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="TÜRKİYE İŞ BANKASI" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/yapibank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="YAPIKREDİ" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/finans.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="FİNANSBANK" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/garantibank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="GARANTİ" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/garantibank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="GARANTİ" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/garantibank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="GARANTİ" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
					</tr>
					<tr>
						<td class="sanal-banka-image">
							<img src="images/garantibank.png">
							<label for="exampleFormControlFile1"><i class="fas fa-upload"></i></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</td>
						<td><input type="text" name="kart-name" value="GARANTİ" placeholder="Kart İsmi.."></td>
						<td><textarea>100 TL VE ÜZERİ ALIŞVERİŞLERDE</textarea></td>
						<td>Açık</td>
						<td>Aktif</td>
						<td><button  data-toggle="modal" data-target="#sanalposModal" class="update">Düzenle</button></td>
						<td><button class="sil">Pasif</button></td>
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
								<div class="col-md-4">
									<label for="birincil-durum">Birincil</label>
								</div>
								<div class="col-md-8">
									<select class="form-control" id="birincil-durum">
										<option>Aktif</option>
										<option selected>Pasif</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="taksit">Taksit</label>
								</div>
								<div class="col-md-8">
									<select class="form-control" id="taksit">
										<option>Pasif</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
							</div>
							<hr>
							<h6><b>6</b>Taksit Oranları</h6>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="oran-bir">1. Oran</label>
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control" id="oran-bir"  value="0.00">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label for="oran-iki">2. Oran</label>
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control" id="oran-iki"  value="0.00">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label>İndirim Oranı</label>
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control" id="indirim-oran"  value="0.0">
								</div>
							</div>
							<div class="form-group col-md-12 m-2 form-inline">
								<div class="col-md-4">
									<label>Ekstra Taksit</label>
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control" id="ekstra-taksit"  value="0">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="bankayi-sil">Bankayı Sil</button>
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






