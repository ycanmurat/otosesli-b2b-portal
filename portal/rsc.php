<?include("header.php");?>
<div class="container-fluid rsc-area">
	<div class="row pr-4 pl-4">
		<div class="col-md-12"><h4 class="pagetitle"><p>ÖNERİ İSTEK ŞİKAYET FORMU</p></h4></div>
		<div class="col-md-6 mt-3">
			<table class="table siparis-tutar-table">
				<tr>
					<td>İşlem Tipi</td>
					<td><select class="form-control">
						<option>Seçiniz..</option>
						<option>Teşekkür</option>
						<option>Şikayet</option>
						<option>Yardım</option>
						<option>İstek</option>
						<option>Öneri</option>
					</select></td>
				</tr>
				<tr>
					<td>Adınız Soyadınız</td>
					<td><input class="form-control" type="text" name="isim-soyisim" placeholder="İsim Soyisim.."></td>
				</tr>
				<tr>
					<td>E-Posta</td>
					<td><input class="form-control" type="email" name="new-b2b-pass" placeholder="E-Posta Adresiniz.."></td>
				</tr>
				<tr>
					<td><label for="rsc-file-upload-input">Dosya yükle</label></td>
					<td><input type="file" class="form-control-file" id="rsc-file-upload-input"></td>
				</tr>
			</table>
		</div>
		<div class="col-md-6 mt-3">
			<table class="table siparis-tutar-table">
				<tr>
					<td>Departman</td>
					<td><select class="form-control">
						<option>Seçiniz..</option>
						<option>Şirket Yönetim</option>
						<option>Muhasebe Birimi</option>
						<option>Depo Sevkiyat Birimi</option>
						<option>Satış Pazarlama Birimi</option>
						<option>Satın Alma Birimi</option>
					</select></td>
				</tr>
				<tr>
					<td>Konu</td>
					<td><input class="form-control" type="text" name="konune" placeholder="Konu.. ?"></td>
				</tr>
				<tr>
					<td>Mesaj</td>
					<td><textarea class="form-control" type="text" name="mesajiniz"  placeholder="Mesajınız.."></textarea></td>
				</tr>

			</table>

			<div class="sabit-bilgi-btn text-right">
				<!--<button class="sabit-btn-kaydet">Düzenle</button>-->
				<button class="sabit-btn-guncelle">Gönder</button>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>

