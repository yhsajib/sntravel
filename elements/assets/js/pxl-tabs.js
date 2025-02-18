( function( $ ) {
    'use strict';
    function basilico_tabs_handler($scope){
        var link_to_tabs_carousel_id = $scope.find('.link-to-tabs-carousel-id').text().trim();

        function basilico_tab_active(target) {
            $(target).addClass('active').siblings().removeClass('active'); 
            $(target).siblings().find('.sntravel-animate').each(function(){
                var data = $(this).data('settings');
                $(this).removeClass('animated '+data['animation']).addClass('sntravel-invisible');
            });
            $(target).find('.sntravel-animate').each(function(){
                var data = $(this).data('settings');
                var cur_anm = $(this);
                setTimeout(function () {  
                    $(cur_anm).removeClass('sntravel-invisible').addClass('animated ' + data['animation']);
                }, data['animation_delay']);
            });
            if ($scope.find('.sntravel-tabs-carousel').length > 0 && link_to_tabs_carousel_id.length == 0)
                $scope.find('.sntravel-tabs-carousel').slick('refresh');
        }

        $scope.find(".sntravel-tabs .tabs-title .tab-title").on("click", function(e){
            e.preventDefault();
            $(this).addClass('active').siblings().removeClass('active');
            var target = $(this).data("target");
            basilico_tab_active(target);
            if (link_to_tabs_carousel_id != undefined) {
                var slideno = $(this).data('slide');
                $('#' + link_to_tabs_carousel_id).slick('slickGoTo', slideno);
            }
        });

        if ($scope.find(".sntravel-tabs .sntravel-tab-arrows")) {
            $scope.find(".sntravel-tabs .sntravel-tab-arrows .sntravel-tab-arrow-next").on("click", function(e) {
                e.preventDefault();
                if ($scope.find(".sntravel-tabs .tabs-title .tab-title.active").next())
                    $scope.find(".sntravel-tabs .tabs-title .tab-title.active").next().addClass('active').siblings().removeClass('active');
                else
                    $scope.find(".sntravel-tabs .tabs-title .tab-title.active").first().addClass('active').siblings().removeClass('active');

                var target = $scope.find(".sntravel-tabs .tabs-title .tab-title.active").data("target");
                basilico_tab_active(target);

                if (link_to_tabs_carousel_id != undefined) {
                    var slideno = $scope.find(".sntravel-tabs .tabs-title .tab-title.active").data('slide');
                    $('#' + link_to_tabs_carousel_id).slick('slickGoTo', slideno);
                }
            });
            $scope.find(".sntravel-tabs .sntravel-tab-arrows .sntravel-tab-arrow-prev").on("click", function(e) {
                e.preventDefault();
                if ($scope.find(".sntravel-tabs .tabs-title .tab-title.active").prev())
                    $scope.find(".sntravel-tabs .tabs-title .tab-title.active").prev().addClass('active').siblings().removeClass('active');
                else
                    $scope.find(".sntravel-tabs .tabs-title .tab-title.active").last().addClass('active').siblings().removeClass('active');

                var target = $scope.find(".sntravel-tabs .tabs-title .tab-title.active").data("target");
                basilico_tab_active(target);

                if (link_to_tabs_carousel_id != undefined) {
                    var slideno = $scope.find(".sntravel-tabs .tabs-title .tab-title.active").data('slide');
                    $('#' + link_to_tabs_carousel_id).slick('slickGoTo', slideno);
                }
            });
        }

        if (link_to_tabs_carousel_id != undefined) {
            $scope.find('[data-slide]').on('click', function(e){
                var slideno = $(this).data('slide');
                $('#' + link_to_tabs_carousel_id).slick('slickGoTo', slideno);
            });
        }
    }

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_tabs.default', function($scope) {
            basilico_tabs_handler($scope);
        } );
    } );
} )( jQuery );