( function( $ ) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */

    'use strict';
    function sep_grid_refresh($scope){
        $scope.find('.sntravel-grid-masonry').each(function () {
            var iso = new Isotope(this, {
                itemSelector: '.grid-item',
                layoutMode: $(this).closest('.sntravel-grid').attr('data-layout-mode'),
                fitRows: {
                    gutter: 0
                },
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer',
                },
                containerStyle: null,
                stagger: 30,
                sortBy : 'name',
            });

            var filtersElem = $(this).closest('.sntravel-grid').find('.grid-filter-wrap');
            filtersElem.on('click', function (event) {
                var filterValue = event.target.getAttribute('data-filter');
                iso.arrange({filter: filterValue});
            });

            var filterItem = $(this).closest('.sntravel-grid').find('.filter-item');
            filterItem.on('click', function (e) {
                filterItem.removeClass('active');
                $(this).addClass('active');
                $(this).closest('.sntravel-grid').find('.grid-item').removeClass('animated');
            });

            var filtersSelect = $(this).closest('.sntravel-grid').find('.select-filter-wrap');
            filtersSelect.change(function() {
                var filters = $(this).val();
                iso.arrange({filter: filters});
            });

        });
        sntravel_update_grid_layout_height();
    }

    var widget_post_masonry_handler = function( $scope, $ ) {
        $scope.find('.sntravel-post-grid .sntravel-grid-masonry').imagesLoaded(function(){
            if($(document).find('.elementor-editor-active').length > 0){
                let oldHTMLElement = HTMLElement;
                window.HTMLElement = window.parent.HTMLElement;
                sep_grid_refresh($scope);
                window.HTMLElement = oldHTMLElement;
            }else{
                sep_grid_refresh($scope);
            }
        });
    };

    function sntravel_update_grid_layout_height() {
        if ($('.sntravel-post-grid.layout-post-2 .grid-item, .sntravel-post-grid.layout-post-3 .grid-item, .sntravel-post-grid.layout-post-9 .grid-item, .sntravel-post-grid.layout-post-10 .grid-item').length > 0) {
            $('.sntravel-post-grid.layout-post-2 .grid-item, .sntravel-post-grid.layout-post-3 .grid-item, .sntravel-post-grid.layout-post-9 .grid-item, .sntravel-post-grid.layout-post-10 .grid-item').each(function() {
                var excerptHeight = $(this).find('.item-excerpt').get(0).scrollHeight;
                var imageHeight = $(this).find('.post-image').outerHeight();
                $(this).find('.item-excerpt').css('max-height', '0px');
                $(this).find('.post-image').css('max-height', imageHeight + 'px');
                $(this).hover(function() {
                    $(this).find('.item-excerpt').css('max-height', excerptHeight + 'px');
                    $(this).find('.post-image').css('max-height', (imageHeight - (excerptHeight  + 14)) + 'px');
                }, function() {
                    $(this).find('.item-excerpt').css('max-height', '0px');
                    $(this).find('.post-image').css('max-height', imageHeight + 'px');
                });
            });
        }
    }

    $(document).on('click', '.btn-grid-loadmore', function(){
        var loadmore      = $(this).parents('.sntravel-load-more').data('loadmore');
        var perpage       = loadmore.perpage;
        var _this         = $(this).parents(".sntravel-grid");
        var loading_text  = $(this).parents('.sntravel-load-more').data('loading-text');
        loadmore.paged    = parseInt(_this.data('start-page')) +1;
        $(this).addClass('loading');
        if(loadmore.filter == 'true'){
            $.ajax({
                url: main_data_grid.ajax_url,
                type: 'POST',
                data: {
                    action: 'basilico_get_filter_html',
                    settings: loadmore,
                    loadmore_filter: 1
                }
            }).done(function (res) {
                if(res.status == true){
                    _this.find(".grid-filter-wrap").html(res.data.html);

                }
            }).fail(function (res) {
                return false;
            }).always(function () {
                return false;
            });
        }
        $.ajax({
            url: main_data_grid.ajax_url,
            type: 'POST',
            data: {
                action: 'basilico_load_more_post_grid',
                settings: loadmore
            }
        })
        .done(function (res) {
            if(res.status == true) {
                _this.find('.btn-grid-loadmore').removeClass('loading');
                _this.find('.sntravel-grid-inner').append(res.data.html);
                _this.data('start-page', res.data.paged);
                elementorFrontend.waypoint(_this.find('.sntravel-animate'), function () {
                    var $animate_el = $(this),
                    data = $animate_el.data('settings');
                    if(typeof data['animation'] != 'undefined'){
                        setTimeout(function () {
                            $animate_el.removeClass('sntravel-invisible').addClass('animated ' + data['animation']);
                        }, data['animation_delay']);
                    }
                });
                sep_grid_refresh(_this);
                if(res.data.paged >= res.data.max){
                    _this.find('.sntravel-load-more').hide();
                }
            }
        })
        .fail(function (res) {
            _this.find('.sntravel-load-more').hide();
            return false;
        })
        .always(function () {
            return false;
        });
    });

    $(document).on('click', '.sntravel-grid-pagination .ajax a.page-numbers', function(){
        var _this = $(this).parents(".sntravel-grid");
        var loadmore = _this.find(".sntravel-grid-pagination").data('loadmore');
        var query_vars = _this.find(".sntravel-grid-pagination").data('query');

        var paged = $(this).attr('href');
        paged = paged.replace('#', '');
        loadmore.paged = parseInt(paged);
        query_vars.paged = parseInt(paged);

        var _class = loadmore.pagin_align_cls;

        _this.find('.sntravel-grid-overlay').addClass('loader');
        $('html,body').animate({scrollTop: _this.offset().top - 100}, 750);

        // reload pagination
        $.ajax({
            url: main_data_grid.ajax_url,
            type: 'POST',
            data: {
                action: 'basilico_get_pagination_html',
                query_vars: query_vars,
                cls: _class
            }
        }).done(function (res) { //console.log(res); return false;
            if(res.status == true){
                _this.find(".sntravel-grid-pagination").html(res.data.html);
                _this.find('.sntravel-grid-overlay').removeClass('loader');
            }
        }).fail(function (res) {
            return false;
        }).always(function () {
            return false;
        });

        // load post
        $.ajax({
            url: main_data_grid.ajax_url,
            type: 'POST',
            data: {
                action: 'basilico_load_more_post_grid',
                settings: loadmore
            }
        }).done(function (res) { //console.log(res); return false;
            if(res.status == true){
                _this.find('.sntravel-grid-inner .grid-item').remove();
                _this.find('.sntravel-grid-inner').append(res.data.html);
                _this.data('start-page', res.data.paged);

                sep_grid_refresh(_this);

                elementorFrontend.waypoint(_this.find('.sntravel-animate'), function () {
                    var $animate_el = $(this),
                        data = $animate_el.data('settings');
                    if(typeof data['animation'] != 'undefined'){
                        setTimeout(function () {
                            $animate_el.removeClass('sntravel-invisible').addClass('animated ' + data['animation']);
                        }, data['animation_delay']);
                    }
                });
            }
        }).fail(function (res) {
            return false;
        }).always(function () {
            return false;
        });
        return false;
    });

    $( window ).on('resize', function() {
        sntravel_update_grid_layout_height();
    });

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_post_grid.default', widget_post_masonry_handler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_post_list.default', widget_post_masonry_handler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_team_grid.default', widget_post_masonry_handler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_image_gallery.default', widget_post_masonry_handler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_product_grid.default', widget_post_masonry_handler );
    } );

} )( jQuery );