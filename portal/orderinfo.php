<?include("header.php");?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 p-5">
			<h4 class="pagetitle m-auto text-center">
				<a class="passive" href="http://murat.kodakil.com/b2b/orderlist.php">SİPARİŞ SEPETİ</a>
				<a class="active" href="javascript:void(0);">SİPARİŞ TUTAR BİLGİLERİ</a>
				<a class="passive" href="http://murat.kodakil.com/b2b/ordersend.php">SİPARİŞ GÖNDER</a>
			</h4>
		</div>
		<table id="table-tutar-info" class="order-info-table">
			<thead>
				<tr>
					<th>Brüt Toplam</th>
					<th>Genel İskonto</th>
					<th>Ödeme İskonto</th>
					<th>Bayi İskonto</th>
					<th>Kampanya İskonto</th>
					<th>Net Toplam</th>
					<th>K.D.V 18%</th>
					<th>Genel Toplam</th>
					<th>Sepet Kâr Marjı</th>
					<th>Sepet Kârlılık</th>
					<th>Sepet Kalem Sayısı</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-th="Brüt Toplam"><span class="bt-content">350 TL</span></td>
					<td data-th="Genel İskonto"><span class="bt-content">350 TL</span></td> 
					<td data-th="Ödeme İskonto"><span class="bt-content">350 TL</span></td>
					<td data-th="Bayi İskonto"><span class="bt-content">350 TL</span></td>
					<td data-th="Kampanya İskonto"><span class="bt-content">350 TL</span></td>
					<td data-th="Net Toplam"><span class="bt-content">350 TL</span></td>
					<td data-th="K.D.V 18%"><span class="bt-content">350 TL</span></td>
					<td data-th="Genel Toplam"><span class="bt-content">350 TL</span></td>
					<td data-th="Sepet Kâr Marjı"><span class="bt-content">350 TL</span></td>
					<td data-th="Sepet Kârlılık"><span class="bt-content">350 TL</span></td>
					<td data-th="Sepet Kalem Sayısı"><span class="bt-content">350 TL</span></td>
				</tr>
			</tbody>
		</table>
		<form class="siparis-gonder w-100 m-auto">
			<div class="form-group m-auto p-4">
				<label for="siparis-text-area">Sipariş Notu</label>
				<textarea placeholder="Mesajınız..." class="form-control" id="siparis-text-area" rows="3"></textarea>
			</div>
			<a class="sepet-onay mr-3" href="http://murat.kodakil.com/b2b/ordersend.php"><img src="images/orderok.png"> ALIŞVERİŞE DEVAM ET</a>
			<a class="sepet-bosalt " href="#"><img src="images/orderwrong.png"> SEPETİ BOŞALT</a>
		</form>
		<div class="guvenli-alisveris-image">
			<img src="images/sanalposguvenlik.png">
			<img src="images/rapidssl.png">
			<img src="images/ordercard2.png">
			<img src="images/ordercard1.png">
		</div>
	</div>
</div>
</div>
<script>
	$(document).ready(function() {
		$('#table-tutar-info').basictable();

	});
</script>


<?include("footer.php");?>