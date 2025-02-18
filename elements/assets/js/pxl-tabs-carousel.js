( function( $ ) {
    'use strict';
    var PXLTabsCarouselHandler = function( $scope, $ ) {
        var settings = $scope.find(".sntravel-tabs-carousel").first().data("settings");
        $scope.find(".sntravel-tabs-carousel").first().slick({
            infinite: false,
            fade: settings["fade"],
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            nextArrow: $scope.find(".sntravel-swiper-arrow-next"),
            prevArrow: $scope.find(".sntravel-swiper-arrow-prev"),
            swipe: settings["swipe"],
            dots: settings["dots"],
            infinite: settings["infinite"],
            autoplay: settings["autoplay"],
            waitForAnimate: false,
            customPaging : function(slider, i) {
                return '<span class="sntravel-swiper-pagination-bullet ' + settings['dots_style'] + '"></span>';
            },
        });
    };
    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_tabs_carousel.default', PXLTabsCarouselHandler );
    } );
} )( jQuery );