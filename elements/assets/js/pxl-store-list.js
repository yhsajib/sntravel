( function( $ ) {
    'use strict';
    var PXLStoreListHander = function( $scope, $ ) {
        $scope.find('.sntravel-store').on('click', function() {
            $(this).addClass('selected').siblings().removeClass('selected');
            $scope.find('.btn.store-submit').attr('href', $(this).data('url'));
            $scope.find('.btn.store-submit').css('cursor', 'pointer');
        });
        $scope.find('.btn.store-submit').on('click', function() {   
            if ($(this).attr('href') != 'javascript:void(0)') {
                $scope.find('.sntravel-store-list').addClass('loading');
            }
        });
    };
    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_store_list.default', PXLStoreListHander );
    } );
} )( jQuery );