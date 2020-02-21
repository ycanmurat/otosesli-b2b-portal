

	/* MenuMobile */
	jQuery(document).ready(function($) {
		var width = $(window).width();
		if (width < 992) {
			$('.Dropdown > a.Link').click(function(e) {

				if ($(this).closest('.Dropdown').hasClass('show-dropdown')){
					$('.Dropdown-Area, .Dropdown-Small').slideUp();
					$(this).closest('.Dropdown').removeClass('show-dropdown');
					return false;
				} 

				$('.Dropdown').removeClass('show-dropdown');
				$(this).closest('.Dropdown').addClass('show-dropdown');

				$('.Dropdown-Area, .Dropdown-Small').slideUp();
				$(this).closest('.Dropdown').find('.Dropdown-Area, .Dropdown-Small').slideDown();
			});
		}

		$('.Hamburger').click(function(){
			$(this).toggleClass('Active');
			$('.NavList').toggleClass('Show');
			$('body').toggleClass('show');
		});
		$('.overlay').click(function(){
			$('.Hamburger').removeClass('Active');
			$('.NavList').removeClass('Show');
			$('body').removeClass('show');
		});
	});


	/* Fixed Head */
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 38) {
			$("body").addClass("FixedHead");
		}else{
			$("body").removeClass("FixedHead");
		}
	});

	$('.owl-one').owlCarousel({
		loop:true,
		nav:true,
		navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		dots:true,
		margin:0,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			700:{
				items:3
			},
			1100:{
				items:6
			},
			1300:{
				items:9
			}
		}
	});

	// Accordian Action
	var action = 'click';
	var speed = "500";


	$(document).ready(function(){

// Question handler
$('li.q').on(action, function(){

    // gets next element
    // opens .a of selected question
    $(this).next().slideToggle(speed)
    
    // selects all other answers and slides up any open answer
    .siblings('li.a').slideUp();
    
    // Grab img from clicked question
    var img = $(this).children('img');

    // remove Rotate class from all images except the active
    $('img').not(img).removeClass('rotate');

    // toggle rotate class
    img.toggleClass('rotate');

});

});

	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
	});

	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}

	$('.owl-six').owlCarousel({
		loop:true,
		margin:0,
		dots:false,
		lazyLoad:true,
		video:true,
		nav:true,
		navText:['<i class="fas fa-chevron-left vid-chev"></i>','<i class="fas fa-chevron-right vid-chev1"></i>'],
		center:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			},
			1920:{
				items:5
			}
		}
	})

	$("document").ready(function() {
		setTimeout(function() {
			$(".click-clicked").trigger('click');
		},10);
	});
