<?include("header.php");?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mb-5 mt-5">
			<h4 class="pagetitle m-auto text-center">
				<a class="passive" href="http://murat.kodakil.com/b2b/orderlist.php">SİPARİŞ SEPETİ</a>
				<a class="passive" href="http://murat.kodakil.com/b2b/orderinfo.php">SİPARİŞ TUTAR BİLGİLERİ</a>
				<a class="active" href="javascript:void(0);">SİPARİŞ GÖNDER</a>
			</h4>
		</div>
		<form class="order-send-form m-auto">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="row first-row-header">
						<div class="col-md-4">
							Sipariş Tarihi
						</div>
						<div class="col-md-4">
							Sipariş Tipi
						</div>
						<div class="col-md-4">
							Sevkiyat Tipi
						</div>
					</div>
					<div class="row first-row">
						<div class="col-md-4">
							<p>11.09.2018</p>
						</div>
						<div class="col-md-4">
							<select class="custom-select" id="">
								<option selected>Seçiniz..</option>
								<option value="1">Müşteri Siparişi</option>
								<option value="2">Satıcı Şiparişi</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="custom-select" id="">
								<option selected>Seçiniz..</option>
								<option value="1">Acil</option>
								<option value="2">Çok Acil</option>
								<option value="3">Aşırı Acil</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-10 m-auto">
					<div class="row first-row-header">
						<div class="col-md-3">
							Sevkiyat Şekli
						</div>
						<div class="col-md-3">
							Sevkiyat Firma
						</div>
						<div class="col-md-3">
							Sevkiyat Ölçüsü
						</div>
						<div class="col-md-3">
							Sevkiyat Tutarı
						</div>
					</div>
					<div class="row first-row">
						<div class="col-md-3">
							<p>11.09.2018</p>
						</div>
						<div class="col-md-3">
							<select class="custom-select">
								<option selected>Kargo Seçiniz..</option>
								<option value="1">Aras Kargo</option>
								<option value="2">MNG Kargo</option>
								<option value="3">Yurtiçi Kargo</option>
								<option value="4">UPS Transfer</option>
							</select>
						</div>
						<div class="col-md-3">
							<p>100 desi / 15 Kg</p>
						</div>
						<div class="col-md-3">
							<p>100TL</p>
						</div>

					</div>
				</div>
				<div class="col-md-12 m-auto">
					<div class="row first-row-header">
						<div class="col-md-2">
							İskonto Tipi
						</div>
						<div class="col-md-2">
							Ödeme Şekli
						</div>
						<div class="col-md-2">
							Ödeme Tipi
						</div>
						<div class="col-md-2">
							Ödeme Vadesi
						</div>
						<div class="col-md-2">
							Tahsilat Vadesi
						</div>
						<div class="col-md-2">
							Sevkiyat Adresi
						</div>
					</div>
					<div class="row first-row">
						<div class="col-md-2">
							<p>Veri Yok</p>
						</div>
						<div class="col-md-2">
							<select class="custom-select">
								<option selected>Ödeme Şekli..</option>
								<option value="1">Havale</option>
								<option value="2">Kredi Kartı</option>
								<option value="3">Nakit</option>
								<option value="4">Kapıda Ödeme</option>
							</select>
						</div>
						<div class="col-md-2">
							<p>AY+30</p>
						</div>
						<div class="col-md-2">
							<p>13.09.2018</p>
						</div>
						<div class="col-md-2">
							<p>Veri Yok</p>
						</div>
						<div class="col-md-2">
							<p>Veri Yok</p>
						</div>

					</div>
				</div>
				<div class="col-md-12 p-0">
					<form class="siparis-gonder w-100 m-auto">
						<div class="form-group m-auto text-left">
							<label for="siparis-text-area">Sipariş Notu</label>
							<textarea placeholder="Mesajınız..." class="form-control shadow" id="siparis-text-area" rows="3"></textarea>
						</div>
						<a class="sepet-onay" href="http://murat.kodakil.com/b2b/bankdetail.php"><img src="images/orderok.png"> ALIŞVERİŞİ TAMAMLA</a>
						<a class="sepet-bosalt" href="#"><img src="images/orderwrong.png"> SEPETİ BOŞALT</a>
					</form>
					<div class="guvenli-alisveris-image">
						<img src="images/sanalposguvenlik.png">
						<img src="images/rapidssl.png">
						<img src="images/ordercard2.png">
						<img src="images/ordercard1.png">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?include("footer.php");?>