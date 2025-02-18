(function($){
    "user strict";

    $( window ).on( 'elementor:init', function() {
        var PxlIconsItemView = elementor.modules.controls.BaseData.extend({
            wrapper: null,
            items: null,
            iconpicker_els: null,
            url_els: null,
            add_btn: null,
            delete_btn: null,
            template: null,
            onReady: function () {
                var self = this;
                this.wrapper = $(this.el);
                this.items = this.wrapper.find(".sntravel-group-item");
                this.add_btn = this.wrapper.find(".sntravel-group-add");
                this.template = this.wrapper.find(".sntravel-template").val();

                self.setupIconPicker();
                self.setupUrlInput();
                self.setupDeleteBtn();
                this.add_btn.on("click", function(){
                    var new_item = $(self.template);
                    self.wrapper.find(".sntravel-group").append(new_item);
                    setTimeout(function(){
                        self.setupIconPicker();
                        self.setupUrlInput();
                        self.setupDeleteBtn();
                        self.items = self.wrapper.find(".sntravel-group-item");
                    }, 300);
                });
            },

            setupIconPicker: function () {
                var self = this;
                self.iconpicker_els = self.wrapper.find(".sntravel-iconpicker");
                self.iconpicker_els.fontIconPicker();
                self.iconpicker_els.on("change", function(e){
                    e.preventDefault();
                    self.saveValue();
                });
            },

            setupUrlInput: function () {
                var self = this;
                self.wrapper.find(".sntravel-url-input").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });

                self.wrapper.find(".sntravel-content-input").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });

                self.wrapper.find(".sntravel-content-pricing").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });

                self.wrapper.find(".sntravel-class-pricing").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });

                self.wrapper.find(".sntravel-title-input").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });

                self.wrapper.find(".sntravel-number-input").on("keyup", function(e){
                    e.preventDefault();
                    self.saveValue();
                });
 
            },

            setupDeleteBtn: function () {
                var self = this;
                self.delete_btn = self.wrapper.find(".sntravel-group-delete");
                self.delete_btn.on("click", function(e){
                    e.preventDefault();
                    $(this).parent().remove();
                    self.items = self.wrapper.find(".sntravel-group-item");
                    self.saveValue();
                });
            },

            saveValue: function () {
                var values = [];
                $.each(this.items, function(index, item){
                    var item_val = {};
                    item_val.icon = $(item).find(".sntravel-iconpicker").val();
                    item_val.url = $(item).find(".sntravel-url-input").val();
                    item_val.content = $(item).find(".sntravel-content-input").val();
                    item_val.content_pricing = $(item).find(".sntravel-content-pricing").val();
                    item_val.class_pricing = $(item).find(".sntravel-class-pricing").val();
                    item_val.title = $(item).find(".sntravel-title-input").val();
                    item_val.number = $(item).find(".sntravel-number-input").val();
                    values.push(item_val);
                });
                this.setValue(JSON.stringify(values));
            },

            onBeforeDestroy: function () {
                this.saveValue();
            }
        });

        elementor.addControlView('sntravel_icons', PxlIconsItemView);
        elementor.addControlView('sntravel_lists', PxlIconsItemView);
        elementor.addControlView('sntravel_lists_pricing', PxlIconsItemView);
        elementor.addControlView('sntravel_progressbar', PxlIconsItemView);
    } );
}(jQuery));