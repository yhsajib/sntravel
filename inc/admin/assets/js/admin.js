(function($) {
    "use strict";
    var sntravel_ajax_url = '', api_url = '', theme_slug = '';
    $(document).ready(function () {
        if( typeof merlin_params !== 'undefined'){
            sntravel_ajax_url = merlin_params.ajaxurl;
            api_url = merlin_params.api_url;
            theme_slug = merlin_params.theme_slug;
        }
        if(  typeof sntravelart_admin !== 'undefined'){
            sntravel_ajax_url = sntravelart_admin.ajaxurl;
            api_url = sntravelart_admin.api_url;
            theme_slug = sntravelart_admin.theme_slug;
        }
        initTabs();
        initDemo();
        initPlugin();
    });

    function initTabs(){
        $(document).on('click','.sntravel-tab-nav > ul > li > a',function(){
            var data_filter = $(this).attr('data-filter');
            $(this).closest('ul').find('a').removeClass('active');
            $(this).addClass('active');
            $(this).closest('.sntravel-demos').find('.sntravel-col:not(.'+data_filter+')').css('display','none');
            $(this).closest('.sntravel-demos').find('.sntravel-col.'+data_filter).css('display','flex');
        });
    }

    function initDemo(){
        $('.sntravel-demos').on('click', '.sntravel-popup-import', function() {
            if ($('.sntravel-error-message').length) {
                return;
            }
            var id = $(this).data('demo-id');
            var demo_file_url = api_url+'demos/'+theme_slug+'/'+id+'.zip';
            //demo = sntravelart_demos[id];
            $.ajax({
                url: sntravel_ajax_url,
                type: 'GET',
                data: {
                    action: 'sntravelart_prepare_demo_package',
                    demo: id
                },
                beforeSend: function() {
                    $('.sntravel-demo-loader').addClass('active');
                }
            }).done(function(resp) {  
                var jsonresp = JSON.parse(resp);  
                if (jsonresp.stat === 1) {
                    $('.sntravel-demo-loader').removeClass('active');
                    $('.sntravel-demo-content').addClass('active');
                    initPopUp(id);
                } else {
                    $('.sntravel-demo-loader').removeClass('active');
                    var $content = 'Your server was unable to connect to theme API server';
                    if( ( jsonresp.stat === 0 ) && ( jsonresp.message != null ) ) {   
                        $content = jsonresp.message;
                    }
                    $('.sntravel-demo-error-confirm').find('.message').html(sntravel_esc_js($content));
                    $('.sntravel-demo-error-confirm').addClass('is-active'); 
                    
                    $('.sntravel-demo-error-confirm').find('.link-download-demo-manual').html('<a href="'+demo_file_url+'">Click Here</a>');

                    $('.sntravel-form-upload-demo').on('click', '.btn-upload', function() {
                        var file_data = $('input[name="demo_filename"]').prop('files')[0];   
                        var form_data = new FormData();                  
                        form_data.append('file', file_data);
                        form_data.append('action', 'sntravelart_upload_demo_manual');
                        form_data.append('demo_id', id);
                        $.ajax({
                            url: sntravel_ajax_url,
                            type: 'post',
                            contentType: false,
                            processData: false,
                            data: form_data, 
                            beforeSend: function() {
                                $('.sntravel-demo-error-confirm .err').remove();
                                $('.sntravel-demo-error-confirm .btn-upload').addClass('loading'); 
                            }
                        }).done(function(res) {
                            $('.sntravel-demo-error-confirm .btn-upload').removeClass('loading'); 
                            if( res == '1'){
                                $('.sntravel-demo-error-confirm').removeClass('is-active');
                                $('.sntravel-demo-content').addClass('active');
                                initPopUp(id);
                            }else if(res == '2'){
                                $('.sntravel-demo-error-confirm').find('.sntravel-form-upload-demo').append('<p class="err">File upload incorect or not found</p>');
                            }else if(res == '3'){
                                $('.sntravel-demo-error-confirm').find('.sntravel-form-upload-demo').append('<p class="err">The setting for upload_max_filesize is smaller than file upload, try change upload max file size in php config from 64MB or greater</p>');
                            }else{
                                $('.sntravel-demo-error-confirm').find('.sntravel-form-upload-demo').append('<p class="err">File upload is false!</p>');
                            }
                        });
                    });
                }
            });

            return false;
        });

         
        $(document).on('click','.sntravel-demo-error-confirm .confirm-footer .btn',function(){
            $(this).closest('.sntravel-demo-error-confirm').removeClass('is-active');
        })
    }
 
    function initPopUp(demo) {
        $('.sntravel-demo-content').on('click', '.sntravel-imp-popup-close', function() {
            $('.sntravel-demo-content').removeClass('active');
        });

        // Import Now
        $('.sntravel-demo-content').on('click', '.sntravel-import-btn', function() {
           
            var options = [];
            $(this).closest('.sntravel-demo-content').find(' .sntravel-imp-opt :checked').each(function() {
                options.push($(this).val());
            });

            var crop_img = 'yes';
            var skip_posts = 'yes';
            var crop_img_checked = $(this).closest('.sntravel-demo-content').find(' .sntravel-imp-opt-crop :checked').val();
            var skip_posts_existen = $(this).closest('.sntravel-demo-content').find(' .sntravel-imp-opt-skip-posts :checked').val();  
            if (typeof crop_img_checked === 'undefined') {
                crop_img = 'no';
            }
            if (typeof skip_posts_existen === 'undefined') {
                skip_posts = 'no';
            }
  
            var importer = new sntravelartImporter(demo, options, crop_img, skip_posts);

        });
    }

    var sntravelartImporter = function(id, options, crop_img, skip_posts) {
        var $this = this;
 
        $this.id = id;
         
        $this.options = options;
        
        $this.crop_img = crop_img;

        $this.skip_posts = skip_posts;

        this.init = function() {
           
            var self = this,
            message,
            actions = this.options.slice();
            $('.sntravel-demo-content').removeClass('active');
            $('.sntravel-progress-popup').addClass('active');
          
            var data = new FormData();
 
            data.append('selected', 2);
            data.append('selections', options);
            runImport($this.options, $this.id, $this.crop_img, $this.skip_posts);
            
        };

        this.init();

    };

    function runImport(options, id, crop_img, skip_posts) {

        $.ajax({
            url: sntravel_ajax_url,
            type: 'POST',
            data: {
                action: 'sntravelart_import_start',
                demo: id,
                skip_posts: skip_posts
            }
        });

        var count = 0;  
        //options = ['import_media', 'import_content', 'import_theme_options', 'import_widgets', 'import_slider', 'import_settings'];
        options[count] && ajaxRun('sntravelart_' + options[options.length - options.length], options, id, count, crop_img, function() {
            count++;  
            options[count] && ajaxRun('sntravelart_' + options[count], options, id, count, crop_img, function() {
                count++;  
                options[count] && ajaxRun('sntravelart_' + options[count], options, id, count, crop_img, function() {
                    count++;
                    options[count] && ajaxRun('sntravelart_' + options[count], options, id, count, crop_img, function() {
                        count++;
                        options[count] && ajaxRun('sntravelart_' + options[count], options, id, count, crop_img, function() {
                            count++;
                            options[count] && ajaxRun('sntravelart_' + options[count], options, id, count, crop_img);
                        });
                    });
                });
            })
        });
    }
    
    function ajaxRun(action, options, demo, idx, crop_img, callback) {
        
        var ajaxupdater, ajaxprogress;

        ajaxupdater = setInterval(function () {
            var width = ((idx + 1) * 100) / options.length;
            width = Math.ceil(width);
            $('.sntravel-loader').parent().css('width', width + '%');
            $('.sntravel-loader').html( width + '%');
           
        }, 1000);
        
        $.ajax({
            url: sntravel_ajax_url,
            type: 'POST',
            data: {
                action: action,
                demo: demo,
                content: ($('#sntravel-imp-all').is(':checked') ? 1 : 0),
                media: ($('#sntravel-imp-media').is(':checked') ? 1 : 0)
            },
            beforeSend: function(jq) {
                $.ajax({
                    url: sntravel_ajax_url,
                    type: 'POST',
                    data: {
                        action: 'sntravelart_reset_logs',
                    },
                });
                ajaxprogress = setInterval(getProgress, 1000);

            },
            complete: function() {
                if (typeof callback === 'function' && !action.match('undefined')) {
                    callback();
                }
                clearInterval(ajaxupdater);
                clearInterval(ajaxprogress);
            },
        }).done(function(res) {
             
            if ('sntravelart_' + options[options.length - 1] === action) {
                clearInterval(ajaxupdater);
                clearInterval(ajaxprogress);
                runImportFinish(options, demo, crop_img);
                $('.sntravel-loader').parent().css('min-width', '100%');
                $('.sntravel-loader').text("100%");
                setTimeout(function() {
                    $('.sntravel-imp-progress').append('<h4>Installed successfully</h4>');
                    setTimeout(function() { 
                        $('.sntravel-progress-popup').removeClass('active');
                    }, 8000);
                }, 1200);

                if (typeof merlin_params !== 'undefined') {
                    var current_url = window.location.href;
                    current_url = current_url.replace("content", "ready");
                    window.location.href = current_url;
                }

                return false;
            }
        });
    }
    function runImportFinish(options, id, crop_img){
        $.ajax({
            url: sntravel_ajax_url,
            type: 'POST',
            data: {
                action: 'sntravelart_import_finish',
                demo: id,
                crop_img: crop_img 
            },
            complete: function() {
                if (typeof merlin_params === 'undefined') {
                    reload();
                }
            },
        })

    }
    function getProgress() {
        $.ajax({
            url: sntravel_ajax_url,
            type: 'GET',
            data: {
                action: 'sntravelart_progress_imported',
            },
        }).done(function(resp) {
            $('.sntravel-progress').text(resp);
            return false;
        });
        return false;
    }
      
    function reload() {
        setTimeout(function(){ location.reload(); }, 5000);
    }

     
    function PxlPluginManager(){
        var complete;
        var items_completed     = 0;
        var current_item        = "";
        var $current_node;
        var current_item_hash   = "";

        function ajax_callback(response){  
            var currentSpan = $current_node.find("h3>span"); 
            var current_btn = $current_node.find(".sntravel-button"); 
            var new_text = current_btn.attr('data-text-active');
            var new_href = current_btn.attr('data-deactive-url');

            if(typeof response === "object" && typeof response.message !== "undefined"){
                currentSpan.html('Active');
                current_btn.find('span').html(new_text);
                $current_node.removeClass( 'installing success error' ).addClass(response.message.toLowerCase());
                current_btn.attr('href',new_href);

                // The plugin is done (installed, updated and activated).
                if(typeof response.done != "undefined" && response.done){ 
                    $current_node.removeClass('current');
                    find_next();
                }else if(typeof response.url != "undefined"){
                    // we have an ajax url action to perform.
                    if(response.hash == current_item_hash){             
                        $current_node.removeClass( 'installing success' ).addClass("error");
                        current_btn.find('span').html('Error');
                        find_next();
                    }else {
                        current_item_hash = response.hash;
                        jQuery.post(response.url, response, ajax_callback).fail(ajax_callback);
                    }
                }else{
                    // error processing this plugin
                    find_next();
                }
            }else{
                // The TGMPA returns a whole page as response, so check, if this plugin is done.
                process_current();
            }
        }

        function process_current(){ 
            if(current_item){
                $current_node.addClass("current");    
                jQuery.post(sntravel_ajax_url, {
                    action: "merlin_plugins",
                    wpnonce: sntravelart_admin.wpnonce,
                    slug: current_item,
                }, ajax_callback).fail(ajax_callback);
                
            }
        }

        function find_next(){  
            if($current_node){ 
                if(!$current_node.hasClass("sntravel-dsb-plugin-active")){
                    items_completed++;
                    $current_node.addClass("sntravel-dsb-plugin-active");
                }
            }

            var $plus_item = $('.sntravel-plugin-inst');
            if( $plus_item.length > 0 ){
                $plus_item.each(function(){
                    var $item = $(this).closest('.sntravel-dsb-plugin');

                    if ( $item.hasClass("sntravel-dsb-plugin-active") ) {
                        return true;
                    }
                    
                    current_item = $item.data("slug");
                    $current_node = $item;
                    process_current();
                    return false;
                });
            }
            
            if(items_completed >= $plus_item.length){
                // finished all plugins!
                complete();
            }
        }

        return {
            init: function(){
 
                $('.sntravel-install-all-plugin').addClass("installing");
                $('.sntravel-dsb-plugin:not(.sntravel-dsb-plugin-active)').addClass("installing");
                complete = function(){

                    setTimeout(function(){
                        $(".sntravel-dashboard-wrap").addClass('js-plugin-finished');
                        $('.sntravel-install-all-plugin').removeClass("installing");
                    },1000);
 
                };
                find_next();
            }
        }
    }

    function initPlugin(){
        $(".sntravel-install-all-plugin").on( "click", function(e) {
            e.preventDefault();
            var plugins = new PxlPluginManager();
            plugins.init();
        });
    }

    function sntravel_esc_js(str){
        return String(str).replace(/[^\w. ]/gi, function(c){
            return '&#'+c.charCodeAt(0)+';';
        });
    }

})(jQuery);
 

