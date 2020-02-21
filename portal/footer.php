<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 pl-5 bordered">
				<h4>Kurumsal</h4>
				<ul>
					<li><a href="http://murat.kodakil.com/b2b/hakkimizda.php"> Hakkımızda</a></li>
					<li><a href="http://murat.kodakil.com/b2b/yonetimkurulu.php"> Yönetim Kurulu</a></li>
					<li><a href="#">Organizasyon Şeması</a></li>
					<li><a href="#">Kurumsal Videolar</a></li>
					<li><a href="#">Kurumsal Görseller</a></li>
					<li><a href="#">Bayiilik Başvuru Formu</a></li>
				</ul>
			</div>
			<div class="col-md-3 pl-5 bordered">
				<h4>İletişim</h4>
				<ul>
					<li><a href="#">Toptan Satış</a></li>
					<li><a href="#">Perakende Satış Bafra Şube</a></li>
					<li><a href="#">Perakende Satış Gülsan Şube</a></li>
					<li><a href="#">Perakende Satış İlkadım Şube</a></li>
				</ul>
			</div>
			<div class="col-md-3 pl-5 bordered Social">
				<h4>Sosyal Media</h4>
				<div>
					<a href=""><i class="fab fa-facebook"></i>Facebook</a>
					<a href=""><i class="fab fa-instagram"></i>İnstagram</a>
				</div>
				<div>
					<a href=""><i class="fab fa-linkedin"></i>Linkedin</a>
					<a href=""><i class="fab fa-twitter"></i>Twitter</a>
				</div>
			</div>
			<div class="col-md-3 pl-5">
				<h4>Sözleşmeler</h4>
				<ul>
					<li><a href="#">Gizlilik Sözleşmesi</a></li>
					<li><a href="#">Bayilik Sözleşmesi</a></li>
					<li><a href="javascript:void(0);" title="Sözleşmeyi Oku" data-toggle="modal" data-target="#sozlesme">+ Sanal Pos Kullanım Sözleşmesi</a></li>
					<li><a href="#">İade Koşulları</a></li>
					<li><a href="#">Sevkiyat Politikası</a></li>
					<li><a href="#">Çerez Politikamız</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="sesli2018">
	<div class="container">
		<div class="row">
			<div class="col text-left">© 2018 - OTOSESLİ. Her Hakkı Saklıdır.</div>
			<div class="col text-right">
				<a target="_blank" href="https://kodakil.io/" class="Kodakil-Logo" rel="nofollow">
					<img src="http://kodakil.io/assets/Front/images/kodakil_footer/kodakil-white.png" alt=""/>
					<img src="http://kodakil.io/assets/Front/images/kodakil_footer/kodakil-oi.png" alt=""/>
				</a>
			</div>
		</div>
	</div>
</div>
<div id="search-overlay"></div>

<div class="lock-screen">
	<form>
		<h5><i class="fas fa-user-lock"></i> Sistem Koruma Devrede <i class="fas fa-exclamation"></i></h5>
		<p>Lütfen tekrar Giriş Yapınız</p>
		<img src="images/test-image.jpg">
		<input type="password" name="lock-screen-pw"><br>
		<button id="screen-unlocked">Giriş Yap</button><br>
		<a href="http://murat.kodakil.com/b2b/forgot.php">Şifremi Unuttum ?</a>
	</form>
</div>
<script>

	$(document).ready(function(){
		$("#overlay-active,#detay-arama-ac").click(function(){
			$('#search-overlay').fadeIn(500);
			$('.buton_input').addClass('focused');

		}); 
		$('#search-overlay').click(function(){
			$('#search-overlay').fadeOut(500);
			$('.buton_input').removeClass('focused');

		});
	});

</script>
<!--
<div class="alert-box-one">
	<ul class="list unstyled">
		<li><a href="#" onclick="Alert.success('Message','Ürün sepete eklendi',{displayDuration: 3000, pos: 'top'})">Sepet başarılı</a></li>
		<li><a href="#" onclick="Alert.info('Message','Merhaba emre bey, 10 lira risk limiti açar mısınız ? sigara alıcam.',{displayDuration: 0})">Yeni Mesaj</a></li>
		<li><a href="#" onclick="Alert.error('Yetersiz stok olduğundan ürün sepete eklenmedi !','',{displayDuration: 0})">Hata Uyarısı</a></li>
		<li><a href="#" onclick="Alert.warning('Message','Meh')">Uyarı</a></li>
		<li id="test">  </li>
	</ul>
</div>
-->
<script>
/*
	$(document).ready(function(){
		if ("#overlay-active").focus();{
			$(".search-overlay").addClass('active-show');
			else
			{
				$(".search-overlay").removeClass('active-show');
			}
		}
		
	});

	*/
	(function(){

		var shareButtons = document.querySelectorAll(".share-btn");

		if (shareButtons) {
			[].forEach.call(shareButtons, function(button) {
				button.addEventListener("click", function(event) {
					var width = 650,
					height = 450;

					event.preventDefault();

					window.open(this.href, 'Share Dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width='+width+',height='+height+',top='+(screen.height/2-height/2)+',left='+(screen.width/2-width/2));
				});
			});
		}

	})();

	$(document).ready(function(){
		$("#screen-locked").click(function(){
			$('.lock-screen').fadeIn(1700);
		}); $('#screen-unlocked').click(function(){
			$('.lock-screen').fadeToggle(110);
		});
	});


	function printPage() {
		window.print();
	}
	$(function() {
		//DATE PICKER TEXTBOX
		$("#from").datepicker({
			changeMonth: true,
			changeYear: true,
			onClose: function (selectedDate) {
				$("#to").datepicker("option", "minDate", selectedDate);
			},
		});

		$("#to").datepicker({
			changeMonth: true,
			changeYear: true,
			onClose: function (selectedDate) {
				$("#from").datepicker("option", "maxDate", selectedDate);
			},
		});

		//DATE PICKER DISPLAY
		$("#datefrom").datepicker({
			changeMonth: true,
			changeYear: true,
			onClose: function (selectedDate) {
				$("#dateto").datepicker("option", "minDate", selectedDate);
			},
		});

		$("#dateto").datepicker({
			changeMonth: true,
			changeYear: true,
			onClose: function (selectedDate) {
				$("#datefrom").datepicker("option", "maxDate", selectedDate);
			},
		});
	});
	(function () {
		$('.menu-wrapper').on('click', function() {
			$('.hamburger-menu').toggleClass('animate');
			$('li.ana-menu-item').toggleClass('show');
			$('ul.ana-menu').toggleClass('show');
			$('body').toggleClass('menu-active');
		})
	})();
	$(document).ready(function () {
		
		$('.owl-slider').owlCarousel({
			animateOut: 'lightSpeedOut',
			animateIn: 'lightSpeedIn',
			smartSpeed: 450,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			loop:true,
			margin:10,
			nav:true,
			dots:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		})
		$(document).ready(function(){

			var quantitiy=0;
			$('.quantity-right-plus').click(function(e){

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e){
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if(quantity>0){
					$('#quantity').val(quantity - 1);
				}
			});

		});

		/* alert */
		var Alert = undefined;
		(function(Alert) {

			var alert, error, info, success, warning,primary, _container;
			primary = function(message, title, options) {
				return alert("primary", message, title, "far fa-check-square", options);
			};
			info = function(message, title, options) {
				return alert("info", message, title, "icon-info-sign", options);
			};
			warning = function(message, title, options) {
				return alert("warning", message, title, "far fa-star", options);
			};
			error = function(message, title, options) {
				return alert("error", message, title, "fas fa-exclamation-triangle", options);
			};
			success = function(message, title, options) {
				return alert("success", message, title, "far fa-check-circle", options);
			};
			alert = function(type, message, title, icon, options) {
				var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
				if (typeof options === "undefined") {
					options = {};
				}
				options = $.extend({}, Alert.defaults, options);
				if (!_container) {
					_container = $("#alerts");
					if (_container.length === 0) {
						_container = $("<ul>").attr("id", "alerts").appendTo($("body"));
					}
				}
				if (options.width) {
					_container.css({
						width: options.width
					});
				}
				alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
				setTimeout(function() {
					alertElem.addClass('open');
				}, 1);
				if (icon) {
					iconElem = $("<i>").addClass(icon);
					alertElem.append(iconElem);
				}
				innerElem = $("<div>").addClass("alert-block");
				alertElem.append(innerElem);
				if (title) {
					titleElem = $("<div>").addClass("alert-title").append(title);
					innerElem.append(titleElem);
				}
				if (message) {
					messageElem = $("<div>").addClass("alert-message").append(message);
					innerElem.append(messageElem);
				}
				if (options.displayDuration > 0) {
					setTimeout((function() {
						leave();
					}), options.displayDuration);
				} else {
					innerElem.append("<em>Kapatmak İçin tıklayın</em>");
				}
				alertElem.on("click", function() {
					leave();
				});
				function leave() {
					alertElem.removeClass('open');
					alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',  function() { return alertElem.remove(); });
				}
				return _container.prepend(alertElem);
			};
			Alert.defaults = {
				width: "",
				icon: "",
				displayDuration: 3000,
				pos: ""
			};
			Alert.info = info;
			Alert.warning = warning;
			Alert.error = error;
			Alert.success = success;
			Alert.primary = primary;
			return _container = void 0;


		})(Alert || (Alert = {}));

		this.Alert = Alert;

		$('#test').on('click', function() {
			Alert.info('Message');
		});
		/* alert */

		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true,
			'albumLabel': "Oto Sesli",
			'positionFromTop': 50
		})
		/*Kampanya Card */ 
		$('.owl-banner-card').owlCarousel({
			autoplay:true,
			autoplayTimeout:7000,
			autoplayHoverPause:true,
			loop:true,
			dots:false,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});

		/* kampanya card */
		$("#pasta-report-btn").on("click", function () {
			$("#pasta-report-btn").addClass("active");
			$("#line-report-btn").removeClass("active");
			$(".pasta-report").fadeOut(300, function () {
				$(".line-report").fadeIn(300);
			});

		});

		$("#line-report-btn").on("click", function () {
			$("#pasta-report-btn").removeClass("active");
			$("#line-report-btn").addClass("active");

			$(".line-report").fadeOut(300, function () {
				$(".pasta-report").fadeIn(300);
			});

		});
		/*

		$(".occupant").click(function(){
			$(".occupantCard").fadeToggle(100);
		});


		*/
		$(document).ready(function(){
			$(".occupant").hover(function(){
				$('.occupantCard').fadeToggle(50);
			}, function(){
				$('.occupantCard').fadeToggle(50);
			});
			$("#detay-arama-ac").click(function(){
				$('#detay-select-acik').slideToggle(350);
			}, function(){
				$('#detay-select-acik').slideToggle(350);
			});

		});

		$(document).ready(function(){
			$("#urun-detay-acilir-btn").click(function(){
				$('.mobile-tab-link').slideToggle(0);
			});

			/* p-detail-ul = liste class ı li nav */ 
		});



		/*
		$("p.list-modal-button").click(function(){
			$(".overlay-body").addClass("show");

		});

		/*	$(".overlay-body").click(function(){
			$(this).removeClass("show");
			$('.list-modal-button').removeClass('open-list');
		});
		*/
		$('.list-modal-button').on('click', function (e) {
			var modalBoxSelector = '#' + $(this).attr('data-toggle-id');
			var modalBox = $(modalBoxSelector);
			if($(this).hasClass('open-list')){
				modalBox.fadeOut(300);
				$(this).removeClass('open-list');
			}else{
				$(this).addClass("open-list");
				$('.list-modal-box').fadeOut(300);
				modalBox.fadeIn(300);
			}
		});
		$(document).mouseup(function(e) {
			var divSelect = $(".list-modal-box");
			if (!divSelect.is(e.target) && divSelect.has(e.target).length === 0) {
				$('.list-modal-box').fadeOut(300);
			}
		});

		/*$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 15) {
				$(".blueHeader").addClass("FixedHead");
			} else {
				$(".blueHeader").removeClass("FixedHead");
			}
		});*/
		$(document).ready(function() {
			$("#overlay-active").keyup(function() {
				var div = $('#inputCleanBtn');
				if ($("#overlay-active").val().length > 0) {
					div.show();
				} else {
					div.hide();
				}
			});
		});
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$(".bgHeader").addClass("FixedHead");
				$("body").addClass("FixedHead-active");
				$(".blueHeader").hide()
			} else {
				$(".bgHeader").removeClass("FixedHead");
				$("body").removeClass("FixedHead-active");
				$(".blueHeader").show()
			}
		});
		/*	$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 185) {
				$(".product-fixed").addClass("product-fixed-top");
				$(".list-style-type-area").addClass("list-style-type-area-fixed-top");
			} else {
				$(".product-fixed").removeClass("product-fixed-top");
				$(".list-style-type-area").removeClass("list-style-type-area-fixed-top");
			}
		});*/

	});
</script>
<script>
	new Chart(document.getElementById("line-chart"), {
		type: 'line',
		data: {
			labels: ['08 Eylül','12 Eylül','16 Eylül','20 Eylül','24 Eylül','28 Eylül','02 Ekim','06 Ekim','10 Ekim',],
			datasets: [{ 
				data: [1,3,2,4,5,7,6,2,11,5],
				label: false,
				borderColor: "#3e95cd",
				fill: false
			},/* { 
				data: [2,4,2,6,3,4,5,8,9,14],
				label: "Asia",
				borderColor: "#8e5ea2",
				fill: false
			}, { 
				data: [2,3,5,1,1,2,1,2,3,6],
				label: "Europe",
				borderColor: "#3cba9f",
				fill: false
			}, { 
				data: [2,3,4,1,3,2,5,1,5,12],
				label: "Latin America",
				borderColor: "#e8c3b9",
				fill: false
			}, { 
				data: [6,3,2,2,7,3,2,1,6,5],
				label: "North America",
				borderColor: "#c45850",
				fill: false
			}*/
			]
		},
		options: {
			title: {
				display: true,
				text: 'Oturum İstatistiği'
			},
			legend:{
				display:false
			},
			elements:{
				line:{
					tension:0,
				}
			}
		}
	});
</script>

<script>
	$(document).ready(function() {
		var calendar = $('#calendar').fullCalendar({
			editable:true,
			header:{
				left:'prev,next today',
				center:'title',
				right:'month'
			},
			events: 'https://grubaotelbul.com/Add_otel/load',
			selectable:true,
			selectHelper:true,
			select: function(start, end, allDay)
			{
				var title = prompt("Lütfen İçerik Bilgisi Yazın");
				if(title)
				{
					var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
					var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
					$.ajax({
						url:"https://grubaotelbul.com/Add_otel/insert",
						type:"POST",
						data:{title:title, start_event:start, end_event:end},
						success:function()
						{
							calendar.fullCalendar('refetchEvents');
							alert("İçerik Başarıyla Eklendi");
						}
					})
				}
			},
			editable:true,
			eventResize:function(event)
			{
				var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
				var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"https://grubaotelbul.com/Add_otel/update",
					type:"POST",
					data:{title:title, start_event:start, end_event:end, id:id},
					success:function(){
						calendar.fullCalendar('refetchEvents');
						alert('İçerik Başarıyla Güncellendi');
					}
				})
			},

			eventDrop:function(event)
			{
				var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
				var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"https://grubaotelbul.com/Add_otel/update",
					type:"POST",
					data:{title:title, start_event:start, end_event:end, id:id},
					success:function()
					{
						calendar.fullCalendar('refetchEvents');
						alert("İçerik Başarıyla Güncellendi");
					}
				});
			},

			eventClick:function(event)
			{
				if(confirm("Silmek İstediğinize Emin Misiniz ?"))
				{
					var id = event.id;
					$.ajax({
						url:"https://grubaotelbul.com/Add_otel/delete",
						type:"POST",
						data:{id:id},
						success:function()
						{
							calendar.fullCalendar('refetchEvents');
							alert("İçerik Başarıyla Silindi !");
						}
					})
				}
			},

		});
	});
	$(function() {
		$('#calendar').fullCalendar({
			lang: 'tr'
		});

	});
	
</script>

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

</body>
</html>
