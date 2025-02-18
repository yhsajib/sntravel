( function( $ ) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */
    
    'use strict';
    function sntravel_widget_show_on_column_hover() {
        $('.elementor-column .elementor-widget-wrap').each(function(){
            if ($(this).find('> .sntravel-show-on-column-hover').length > 0) {
                $(this).addClass('sntravel-column-hover-show-widget');
            }
        });
    }
    function sntravel_section_start_render(){
        var _elementor = typeof elementor != 'undefined' ? elementor : elementorFrontend;
        _elementor.hooks.addFilter( 'sntravel_section_start_render', function( html, settings, el ) {
            if(typeof settings.sntravel_parallax_bg_img != 'undefined' && settings.sntravel_parallax_bg_img.url != ''){
                html += '<div class="sntravel-section-bg-parallax"></div>';
            }
            if(typeof settings.sntravel_bg_ken_burns_bg_img != 'undefined' && settings.sntravel_bg_ken_burns_bg_img.url != ''){
                html += '<div class="sntravel-section-bg-ken-burns"></div>';
            }
              
            return html;
        } );
    }  
    function sntravel_animation_handler( $scope ) {
        elementorFrontend.waypoint($scope.find('.sntravel-animate'), function () {
            var $animate_el = $(this),
                data = $animate_el.data('settings');
            if(typeof data['animation'] != 'undefined'){
                setTimeout(function () {
                    $animate_el.removeClass('sntravel-invisible').addClass('animated ' + data['animation']);
                }, data['animation_delay']);
            }
        });
        elementorFrontend.waypoint($scope.find('.sntravel-border-animated'), function () {
            $(this).addClass('sntravel-animated');
        });
        elementorFrontend.waypoint($scope.find('.sntravel-scroll'), function () {
            $(this).addClass('sntravel-animated');
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.draw-from-top'), function () {
            var $el = $(this),
                data = $el.data('settings');
            if(typeof data != 'undefined'){
                setTimeout(function () {
                    $el.addClass('sntravel-animated');
                }, data['animation_delay']);
            }else{
                $el.addClass('sntravel-animated');
            }
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.draw-from-left'), function () {
            var $el = $(this),
                data = $el.data('settings');
            if(typeof data != 'undefined'){
                setTimeout(function () {
                    $el.addClass('sntravel-animated');
                }, data['animation_delay']);
            }else{
                $el.addClass('sntravel-animated');
            }
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.draw-from-right'), function () {
            var $el = $(this),
                data = $el.data('settings');
            if(typeof data != 'undefined'){
                setTimeout(function () {
                    $el.addClass('sntravel-animated');
                }, data['animation_delay']);
            }else{
                $el.addClass('sntravel-animated');
            }
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.move-from-left'), function () {
            $(this).addClass('sntravel-animated');
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.move-from-right'), function () {
            $(this).addClass('sntravel-animated');
        }); 
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.skew-in'), function () {
            $(this).addClass('sntravel-animated');
        });
        elementorFrontend.waypoint($scope.find('.sntravel-image-wg.skew-in-right'), function () {
            $(this).addClass('sntravel-animated');
        });

    }
    function sntravelMouseDirection(){
        $('.sntravel-grid-direction .item-direction').each(function () {
            $(this).on('mouseenter',function(ev){
                addClass( ev, this, 'mouse-in in' );
            });
            $(this).on('mouseleave',function(ev){
                addClass( ev, this, 'mouse-out out' );
            });
        });

    }
    function getDirection(ev, obj) {
        var w = $(obj).width(),
            h = $(obj).height(),
            x = (ev.pageX - $(obj).offset().left - (w / 2)) * (w > h ? (h / w) : 1),
            y = (ev.pageY - $(obj).offset().top - (h / 2)) * (h > w ? (w / h) : 1),
            d = Math.round( Math.atan2(y, x) / 1.57079633 + 5 ) % 4;
        return d;
    }
    function addClass( ev, obj, state ) {
        var direction = getDirection( ev, obj ),
            class_suffix = null;
        $(obj).removeAttr('class');
        switch ( direction ) {
            case 0 : class_suffix = '-top';    break;
            case 1 : class_suffix = '-right';  break;
            case 2 : class_suffix = '-bottom'; break;
            case 3 : class_suffix = '-left';   break;
        }
        $(obj).addClass( state + class_suffix );
    }
    $.fn.ctDeriction = function () {
    }
    $('.sntravel-grid-direction .item-direction').ctDeriction();

    function sntravel_parallax_bg(){
        $(document).find('.sntravel-parallax-background').parallaxBackground({
            event: 'mouse_move',
            animation_type: 'shift',
            animate_duration: 2
        });
        $(document).find('.sntravel-pll-basic').parallaxBackground();
        $(document).find('.sntravel-pll-rotate').parallaxBackground({
            animation_type: 'rotate',
            zoom: 50,
            rotate_perspective: 500
        });
        $(document).find('.sntravel-pll-mouse-move').parallaxBackground({
            event: 'mouse_move',
            animation_type: 'shift',
            animate_duration: 2
        });
        $(document).find('.sntravel-pll-mouse-move-rotate').parallaxBackground({
            event: 'mouse_move',
            animation_type: 'rotate',
            animate_duration: 1,
            zoom: 70,
            rotate_perspective: 1000
        });
    }

    function sntravel_parallax_effect(){ 
        if( $(document).find('.sntravel-parallax-effect.mouse-move').length > 0 ){

            setTimeout(function(){
                $('.sntravel-parallax-effect.mouse-move').each(function(index, el) {
                    var $this = $(this);
                    var $bound = 'undefined'; 
                    
                    if( $this.closest('.mouse-move-bound').length > 0 ){
                        $bound = $this.closest('.mouse-move-bound');
                    }
                    if ( $(this).hasClass('bound-section') ){
                        $bound = $this.closest('.elementor-section');
                    }
                    if ( $(this).hasClass('bound-column') ){
                        $bound = $this.closest('.elementor-column');
                    }
                    if ( $(this).hasClass('mouse-move-scope') ){
                        $bound = $this.parents('.mouse-move-scope');
                        if( $bound.length <= 0 )
                            $bound = $this;
                    }

                    if( $bound != 'undefined' && $bound.length > 0 )
                        sntravel_parallax_effect_mousemove($this, $bound);
                });
            }, 600);
        }
    }
    function sntravel_parallax_effect_mousemove($this, $bound){  
        
        var rect = $bound[0].getBoundingClientRect();
         
        var mouse = {x: 0, y: 0, moved: false};
       
        $bound.on("mouseenter", function() { 
            mouse.moved = true;  
        }); 
        $bound.on("mouseleave", function() { 
            mouse.moved = false;
            gsap.to($this[0], {
                duration: 0.5,
                x: 0,
                y: 0,
            });  
        });   

        $bound.mousemove(function(e) {
            mouse.moved = true;
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
            gsap.to($this[0], {
                duration: 0.5,
                x: (mouse.x - rect.width / 2) / rect.width * -100,
                y: (mouse.y - rect.height / 2) / rect.height * -100
            });
        });
          
        $(window).on('resize scroll', function(){
            rect = $bound[0].getBoundingClientRect();
        })
    }

    function sntravel_split_text($scope){
          
        var st = $scope.find(".sntravel-split-text");
        if(st.length == 0) return;

        gsap.registerPlugin(SplitText);
        
        st.each(function(index, el) {
           var els = $(el).find('p, a').length > 0 ? $(el).find('p, a')[0] : el;
            const sntravel_split = new SplitText(els, { 
                type: "lines, words, chars",
                lineThreshold: 0.5,
                linesClass: "split-line"
            });
            var split_type_set = sntravel_split.chars;
           
            gsap.set(els, { perspective: 400 });
 
            var settings = {
                scrollTrigger: {
                    trigger: els,
                    toggleActions: "play none none none", //play reset play reset 
                    start: "top 95%",
                },
                duration: 0.8, 
                stagger: 0.02,
                ease: "power3.out",
            };
            if( $(el).hasClass('split-in-fade') ){
                settings.opacity = 0;
            }
            if( $(el).hasClass('split-in-right') ){
                settings.opacity = 0;
                settings.x = "50";
            }
            if( $(el).hasClass('split-in-left') ){
                settings.opacity = 0;
                settings.x = "-50";
            }
            if( $(el).hasClass('split-in-up') ){
                settings.opacity = 0;
                settings.y = "80";
            }
            if( $(el).hasClass('split-in-down') ){
                settings.opacity = 0;
                settings.y = "-80";
            }
            if( $(el).hasClass('split-in-rotate') ){
                settings.opacity = 0;
                settings.rotateX = "50deg";
            }
            if( $(el).hasClass('split-in-scale') ){
                settings.opacity = 0;
                settings.scale = "0.5";
            }
 
            if( $(el).hasClass('split-lines-transform') ){
                sntravel_split.split({
                    type:"lines",
                    lineThreshold: 0.5,
                    linesClass: "split-line"
                }); 
                split_type_set = sntravel_split.lines;
                settings.opacity = 0;
                settings.yPercent = 100;
                settings.autoAlpha = 0;
                settings.stagger = 0.1;
            }
            if( $(el).hasClass('split-lines-rotation-x') ){
                sntravel_split.split({
                    type:"lines",
                    lineThreshold: 0.5,
                    linesClass: "split-line"
                }); 
                split_type_set = sntravel_split.lines;
                settings.opacity = 0;
                settings.rotationX = -120;
                settings.transformOrigin = "top center -50";
                settings.autoAlpha = 0;
                settings.stagger = 0.1;
            }
             
            if( $(el).hasClass('split-words-scale') ){
                sntravel_split.split({type:"words"}); 
                split_type_set = sntravel_split.words;
               
                $(split_type_set).each(function(index,elw) {
                    gsap.set(elw, {
                        opacity: 0,
                        scale:index % 2 == 0  ? 0 : 2,
                        force3D:true,
                        duration: 0.1,
                        ease: "power3.out",
                        stagger: 0.02,
                    },index * 0.01);
                });

                var sntravel_anim = gsap.to(split_type_set, {
                    scrollTrigger: {
                        trigger: el,
                        toggleActions: "play none none none",
                        start: "top 95%",
                    },
                    rotateX: "0",
                    scale: 1,
                    opacity: 1,
                });
  
            }else{
                var sntravel_anim = gsap.from(split_type_set, settings);
            }
             
            if( $(el).hasClass('hover-split-text') ){
                $(el).mouseenter(function(e) {
                    sntravel_anim.restart();
                });
            }
        });
    }

    function sntravel_split_text_hover(){
        var st = $(document).find(".sntravel-split-text-only-hover");
 
        if(st.length == 0) return;
        gsap.registerPlugin(SplitText);
        
        st.each(function(index, el) {
            var els = $(el).find('p, a').length > 0 ? $(el).find('p, a')[0] : el; 
            const sntravel_split_hover = new SplitText(els, { 
                type: "lines, words, chars",
                lineThreshold: 0.5,
                linesClass: "split-line"
            });
            var split_type_set = sntravel_split_hover.chars;
           
            gsap.set(els, { perspective: 400 });
 
            var settings = {
                duration: 0.8, 
                stagger: 0.02,
                ease: "power3.out" //circ.out
            };
            if( $(el).hasClass('split-in-fade') ){
                settings.opacity = 0;
            }
            if( $(el).hasClass('split-in-right') ){
                settings.opacity = 0;
                settings.x = "50";
            }
            if( $(el).hasClass('split-in-left') ){
                settings.opacity = 0;
                settings.x = "-50";
            }
            if( $(el).hasClass('split-in-up') ){
                settings.opacity = 0;
                settings.y = "80";
            }
            if( $(el).hasClass('split-in-down') ){
                settings.opacity = 0;
                settings.y = "-80";
            }
            if( $(el).hasClass('split-in-rotate') ){
                settings.opacity = 0;
                settings.rotateX = "50deg";
            }
            if( $(el).hasClass('split-in-scale') ){
                settings.opacity = 0;
                settings.scale = "0.5";
            }
 
            if( $(el).hasClass('split-lines-transform') ){
                sntravel_split_hover.split({
                    type:"lines",
                    lineThreshold: 0.5,
                    linesClass: "split-line"
                }); 
                split_type_set = sntravel_split_hover.lines;
                settings.opacity = 0;
                settings.yPercent = 100;
                settings.autoAlpha = 0;
                settings.stagger = 0.1;
            }
            if( $(el).hasClass('split-lines-rotation-x') ){
                sntravel_split_hover.split({
                    type:"lines",
                    lineThreshold: 0.5,
                    linesClass: "split-line"
                }); 
                split_type_set = sntravel_split_hover.lines;
                settings.opacity = 0;
                settings.rotationX = -120;
                settings.transformOrigin = "top center -50";
                settings.autoAlpha = 0;
                settings.stagger = 0.1;
            }
             
            if( $(el).hasClass('split-words-scale') ){
                sntravel_split_hover.split({type:"words"}); 
                split_type_set = sntravel_split_hover.words;
               
                $(split_type_set).each(function(index,elw) {
                    gsap.set(elw, {
                        opacity: 0,
                        scale:index % 2 == 0  ? 0 : 2,
                        force3D:true,
                        duration: 0.1,
                        ease: "power3.out", //circ.out
                        stagger: 0.02,
                    },index * 0.01);
                });
                var sntravel_anim = gsap.to(split_type_set, {
                    rotateX: "0",
                    scale: 1,
                    opacity: 1,
                });

                $(el).mouseenter(function(e) {
                    sntravel_anim.restart();
                });
                 
            }else{
                $(el).mouseenter(function(e) {  
                    gsap.from(split_type_set, settings);
                });
            }
        });
    }

    function basilico_cursor_animate($scope) {
        if($scope.find(".circle-cursor").length > 0) {
            const cursor = $scope.find(".circle-cursor")[0];
            let anchors  = $scope.find(".add-custom-cursor");
            let anchorsremove  = $scope.find(".remove-cursor");
            let circleStyle = cursor.style;

            console.log(circleStyle)

            document.addEventListener('mousemove', e => {
                window.requestAnimationFrame(() => {
                   circleStyle.top = `${ e.clientY - cursor.offsetHeight/2 }px`;
                   circleStyle.left = `${ e.clientX - cursor.offsetWidth/2 }px`;
               });
            });

            $(anchors).on("mouseenter", function(){
                $(cursor).addClass("enlarged");
            });
            $(anchors).on("mouseleave", function(){
                $(cursor).removeClass("enlarged");
            });

            $(anchorsremove).on("mouseenter", function(){
                $(cursor).removeClass("enlarged");
            });
            $(anchorsremove).on("mouseleave", function(){
                $(cursor).addClass("enlarged");
            });

            $($scope).on("mouseleave", function(){
                $(cursor).removeClass("enlarged");
            });
        }
    }

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        sntravel_section_start_render();
        elementorFrontend.hooks.addAction( 'frontend/element_ready/global', function( $scope ) {
            sntravel_animation_handler($scope);
        } );
        
        sntravel_widget_show_on_column_hover();
        sntravelMouseDirection();
        sntravel_parallax_bg();
        sntravel_parallax_effect();

        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_heading.default', function( $scope ) {
            sntravel_split_text($scope);
            elementorFrontend.waypoint($scope.find('.heading-subtitle'), function () {
                $(this).addClass('sntravel-animated');
            });
        } );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_text_editor.default', function( $scope ) {
            sntravel_split_text($scope);
        } );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_button.default', function( $scope ) {
            sntravel_split_text($scope);
        } );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_post_carousel.default', function( $scope ) {
            basilico_cursor_animate($scope);
        } );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/sntravel_image_carousel.default', function( $scope ) {
            basilico_cursor_animate($scope);
        } );

        setTimeout(function () { 
            sntravel_split_text_hover();
        }, 500);
    } );
} )( jQuery );