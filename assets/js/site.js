(function($) {
    $(document).ready(function() {

        /**
         * Initialize AOS and set base options
        */
        AOS.init({
            duration: 750,
            offset: 50,
            once: true,
            mirror: false,
            easing: 'ease-out'
        });

        /**
         * Setup URL path and full URL variables
         * Add active class to nav menu item based on current url
         * Adjust homepage Swiper settings
        */
        var path = location.pathname.split('/'); // url path array
        var url = window.location.pathname; // full url

        /**
         * Set active menu item based on URL path
        */
        if ( path[1] !== '' ) {
            $('.nav-menu--link[href^="/' + path[1] + '"]').addClass('active');
        } else {
            $('.home').addClass('active');
        }

        // homepage only
        if (url == '/') {
            // play/pause buttons
            var pause = $('.swiper-pause-button');
            var play = $('.swiper-play-button');

            // autoplay progess container
            const progressContent = document.querySelector(".autoplay-progress span");

            // initial play state
            play.addClass('btn-active');

            // setup slideshow
            const swiper = new Swiper('.swiper', {
                direction: 'horizontal',
                loop: true,

                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },

                autoplay: {
                    delay: 7000
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                on: {
                    autoplayTimeLeft(s, time) {
                        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                    }
                }
            });

            // allow user to pause slideshow
            $(pause).on('click', function() {
                swiper.autoplay.stop();
                $(this).addClass('btn-active');
                play.removeClass('btn-active');
            });

            // allow user to resume slideshow
            $(play).on('click', function() {
                swiper.autoplay.start();
                $(this).addClass('btn-active');
                pause.removeClass('btn-active');
            });
        }

        $('.open-slider-navigation').on('click', function() {
            $('.slider-navigation').toggleClass('navigation-open');
        });

        /**
         * Smooth scroll to anchor links
        */
        $('a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			if(
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				&& 
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

				if(target.length) {
					event.preventDefault();

					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function() {

						var $target = $(target);
						$target.focus();

						if($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						}
					});
				}
			}
		});

    });
})(jQuery);
