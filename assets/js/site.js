(function($) {
    $(document).ready(function() {

        var path = location.pathname.split('/'); // url path array
        var url = window.location.pathname; // full url

        if (url == '/') {
            const swiper = new Swiper('.swiper', {
                // Parameters
                direction: 'horizontal',
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },

                autoplay: {
                    delay: 5000
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

        // if ( path[1] !== '' ) {
        //     $('.nav-menu--link[href^="/' + path[1] + '"]').addClass('active');
        // } else {
        //     $('.home').addClass('active');
        // }

    });
})(jQuery);
