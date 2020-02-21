<?include("header.php");?>

<div class="container-fluid ">
	<div class="row pl-4 pr-4">
		<div class="col-md-12"><h4 class="pagetitle"><p>SANAL POS ÖDEME</p></h4></div>
		<div class="col-lg-4 col-md-6  p-0 card-responsive-close">
			<div class="checkout">
				<div class="credit-card-box">
					<div class="flip">
						<div class="front">
							<div class="chip"></div>
							<div class="logo">
							</div>
							<div class="number"></div>
							<div class="card-holder">
								<label>Kart Sahibi</label>
								<div></div>
							</div>
							<div class="card-expiration-date">
								<label>SKT</label>
								<div></div>
							</div>
						</div>
						<div class="back">
							<div class="strip"></div>
							<div class="ccv">
								<label>CCV</label>
								<div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-12 pl-3 pr-3 mt-1">
			<form class="form" autocomplete="off" novalidate>
				<fieldset>
					<label for="card-number">Kart Numarası</label>
					<input type="num" id="card-number" class="input-cart-number" maxlength="4" />
					<input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
					<input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
					<input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
				</fieldset>
				<fieldset>
					<label for="card-holder">Kart Sahibi</label>
					<input type="text" id="card-holder" />
				</fieldset>
				<fieldset class="fieldset-expiration">
					<label for="card-expiration-month">Son Kullanma Tarihi</label>
					<div class="select">
						<select class="custom-select" id="card-expiration-month">
							<option>Ay</option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
					<div class="select">
						<select class="custom-select" id="card-expiration-year">
							<option>Yıl</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</div>
				</fieldset>
				<fieldset class="fieldset-ccv">
					<label for="card-ccv">CCV</label>
					<input type="text" id="card-ccv" maxlength="3" />
				</fieldset>
			</form>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-2 pr-3">
			<form class="sanal-pos-form">
				<div class="row">
					<label for="odeme-tutari" class="col-sm-4 col-form-label">Ödeme Tutarı</label>
					<div class="col-sm-6 col-8">
						<input type="number" class="form-control" id="odeme-tutari" placeholder="0">
					</div>
					<div class="col-sm-2 col-4 p-0">
						<input type="number" class="form-control" id="odeme-tutari2" placeholder="00">
					</div>
				</div>

				<div class="row">
					<label for="odeme-tutari" class="col-sm-4 col-form-label">Ödeme Tipi</label>
					<div class="col-sm-4">
						<div class="pretty p-default p-round">
							<input type="checkbox" name="amount-type" value="one-order" checked="">
							<div class="state p-primary">
								<i class="icon mdi mdi-check"></i>
								<label>Tek Çekim</label>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<select class="custom-select" disabled>
							<option>Taksit</option>
							<option>3 Taksit</option>
							<option>2 Taksit</option>
							<option>4 Taksit</option>
							<option>3 + 3 Taksit</option>
							<option>9 Taksit</option>
							<option>12 Taksit</option>
						</select>
					</div>
				</div>

				<div class="row">

				</div>
				<div class="row">
					<label for="isim-soyisim" class="col-sm-4 col-form-label">Ad Soyad</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="isim-soyisim" placeholder="İsminiz..">
					</div>
				</div>
				<div class="row">
					<label for="gsm-no" class="col-sm-4 col-form-label">GSM</label>
					<div class="col-sm-8">
						<input type="number" class="form-control" id="gsm-no" placeholder="Telefon numaranız..">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="pretty p-svg p-curve">
							<input type="checkbox" />
							<div class="state p-success">
								<label>3D Secure Özelliğini Kullanmak İstiyorum</label>
								<!-- svg path -->
								<svg class="svg svg-icon" viewBox="0 0 20 20">
									<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
								</svg>

							</div>
						</div>
						<button title="Sözleşmeyi Oku" type="button" class="sozlesme-btn" data-toggle="modal" data-target="#sozlesme">
							<i class="fas fa-question"></i>
						</button>
						<div class="pretty p-svg p-curve">
							<input type="checkbox" />
							<div class="state p-success">
								<label>Sözleşmeyi Okudum ve Kabul Ediyorum</label>
								<!-- svg path -->
								<svg class="svg svg-icon" viewBox="0 0 20 20">
									<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
								</svg>

							</div>
						</div>
					</div>
					<div class=" col-lg-4 col-md-12 col-sm-12 col-12">
						<a href="odemeonayi.php" class="sanal-pos-ode">Ödeme Yap</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<script>
	$('.input-cart-number').on('keyup change', function(){
		$t = $(this);

		if ($t.val().length > 3) {
			$t.next().focus();
		}

		var card_number = '';
		$('.input-cart-number').each(function(){
			card_number += $(this).val() + ' ';
			if ($(this).val().length == 4) {
				$(this).next().focus();
			}
		})

		$('.credit-card-box .number').html(card_number);
	});

	$('#card-holder').on('keyup change', function(){
		$t = $(this);
		$('.credit-card-box .card-holder div').html($t.val());
	});

	$('#card-holder').on('keyup change', function(){
		$t = $(this);
		$('.credit-card-box .card-holder div').html($t.val());
	});

	$('#card-expiration-month, #card-expiration-year').change(function(){
		m = $('#card-expiration-month option').index($('#card-expiration-month option:selected'));
		m = (m < 10) ? '0' + m : m;
		y = $('#card-expiration-year').val().substr(2,2);
		$('.card-expiration-date div').html(m + '/' + y);
	})

	$('#card-ccv').on('focus', function(){
		$('.credit-card-box').addClass('hover');
	}).on('blur', function(){
		$('.credit-card-box').removeClass('hover');
	}).on('keyup change', function(){
		$('.ccv div').html($(this).val());
	});


/*--------------------
CodePen Tile Preview
--------------------*/
setTimeout(function(){
	$('#card-ccv').focus().delay(1000).queue(function(){
		$(this).blur().dequeue();
	});
}, 500);

function getCreditCardType(accountNumber) {
	if (/^5[1-5]/.test(accountNumber)) {
		result = 'mastercard';
	} else if (/^4/.test(accountNumber)) {
		result = 'visa';
	} else if ( /^(5018|5020|5038|6304|6759|676[1-3])/.test(accountNumber)) {
		result = 'maestro';
	} else {
		result = 'unknown'
	}
	return result;
}

$('#card-number').change(function(){
	console.log(getCreditCardType($(this).val()));
})
</script>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="sozlesme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">SÖZLEŞME</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<h6>Gizlilik</h6>
				<p>Kredi Kartı bilgileriniz sistem tarafından saklanmamaktadır. Kredi kartı bilgileri ve kişisel bilgileriniz 3. kişiler ile paylaşılmamaktadır. Kredi kartı bilgileriniz de dahil olmak üzere tüm bilgiler 128 bit SSL ile şifrelenerek iletilmektedir. Bu, SSL serfikası tarafından onaylanmış ve güvence altına alınmıştır. İşlemler sırasında kredi kartı bilgilerinizin 3. kişiler ile paylaşmanız bilgilerinizin kötü amaçlar ile kullanılmasına yol açabilir. Bu durumdan OTO SESLİ LTD. ŞTİ. sorumlu değildir. </p>
				<br>
				<h6>Ürün Teslimi</h6>
				<p>Ürünler anlaşmalı kargo firmaları tarafından 1-2 iş günü içersinde teslim edilir. Ürün teslimi ile ilgili hükümler OTO SESLİ LTD ŞTİ. ile daha önce yapılmış anlaşmalarca belirlenmiştir. </p>
				<br>
				<h6>İade Koşulları</h6>
				<p>Teslim edilen ürünler 5 iş günü içersinde iade edilebilirler. </p>
				<br>
				<h6>Sipariş İptali</h6>
				<p>Siparişler aynı gün içersinde kargoya verilmeden önce iptal edebilirsiniz. Bunun için telefon veya mail adresinden başvurulabilirsiniz. </p>
				<br>
				<h6>Garanti</h6>
				<p>Satılan tüm ürünler üretici firmalarca garanti altındadır. Ürünlerin arızalı olması halinde değişimi üretici firma tarafından yapılmaktadır.</p>
			</div>
		</div>
	</div>
</div>



<?include("footer.php");?>

