<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

	<!-- Lightbox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">


	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/userlogin.css">

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/icon.png"/>
	<title>Oto Sesli B2B- Kullanıcı Girişi</title>
</head>
<div class="loginPage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/logo.png">
			</div>
			<div class="col-md-12">
				<form>

					<div class="group">      
						<input type="text" required>
						<span class="highlight"></span>
						<label>Email adresi</label>
					</div>
					<button>Gönder</button>
					<div class="uyari onay">E-Mail Adresinizi Kontrol ediniz.</div>
					<!-- <div class="uyari">Hatalı Giriş</div> -->
					<style>.onay {width: 260px;background-color: #2bb56d;font-weight: bold;}</style>
				</form>
				<p>Giriş Sayfasına Dönmek İçin <b><a href="http://murat.kodakil.com/b2b/userlogin.php">Tıklayınız</a></b></p>
			</div>
			<div class="Copyright"><p>©2018. Tüm Hakları Saklıdır.</p></div>
			<div class="loginPageSocial">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
</div>
<script>
	var $inputItem = $(".js-inputWrapper");
	$inputItem.length && $inputItem.each(function() {
		var $this = $(this),
		$input = $this.find(".formRow--input"),
		placeholderTxt = $input.attr("placeholder"),
		$placeholder;

		$input.after('<span class="placeholder">' + placeholderTxt + "</span>"),
		$input.attr("placeholder", ""),
		$placeholder = $this.find(".placeholder"),

		$input.val().length ? $this.addClass("active") : $this.removeClass("active"),

		$input.on("focusout", function() {
			$input.val().length ? $this.addClass("active") : $this.removeClass("active");
		}).on("focus", function() {
			$this.addClass("active");
		});
	});
</script>
</body>
</html>
