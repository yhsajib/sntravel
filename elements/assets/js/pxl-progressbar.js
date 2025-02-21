( function( $ ) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */

    'use strict';
    var PXLProgressBarHandler = function( $scope, $ ) {
        elementorFrontend.waypoint($scope.find('.sntravel-progress-bar'), function () {
            $(this).progressbar();
        });

    };

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_progressbar.default', PXLProgressBarHandler );
    } );
} )( jQuery );