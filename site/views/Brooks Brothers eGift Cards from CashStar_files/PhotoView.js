var PhotoView;!function(e){PhotoView=Backbone.View.extend({el:"#photo-pane-container",events:function(){return _.extend({},Backbone.View.prototype.events,{"click #photo_file_container":function(){return!0},"click #photo-upload-cancel":"cancelUpload","click #photo-terms-checkbox":"termsCheckbox","click #photo-display a.remove-custom-faceplate":"removeUpload","click #photo-display a.photo-edit":"editUpload","click #photo-crop-back":"cropBack","click #photo-crop-save":"cropSave"})},initialize:function(e){Backbone.View.prototype.initialize.apply(this,arguments),this.card=e.card,this.viewModel=e.viewModel,this.faceplate=e.faceplate,this.viewModel.get("is_plastic_page")===!0?(this.CUSTOM_FACEPLATE_WIDTH=410,this.CUSTOM_FACEPLATE_HEIGHT=260):(this.CUSTOM_FACEPLATE_WIDTH=jsonData.UYO_IMAGE_WIDTH,this.CUSTOM_FACEPLATE_HEIGHT=jsonData.UYO_IMAGE_HEIGHT),this.UYO_PREVIEW_IMAGE_WIDTH=jsonData.UYO_PREVIEW_IMAGE_WIDTH,this.UYO_IMAGE_MAX_FILE_SIZE=jsonData.UYO_IMAGE_MAX_FILE_SIZE,this.UYO_PLASTIC_OPTIONS=jsonData.UYO_PLASTIC_OPTIONS,this.listenTo(this.viewModel,"change:crop_save_active",this.cropSaveBtnToggle),this.listenTo(this.viewModel,"change:display_type",this.selectUYO),this.viewModel.get("is_plastic_page")&&this.viewModel.get("photo_enabled_plastic")&&this.listenTo(this.viewModel,"change:display_type",this.setUYOPAccessoryCost),this.listenToOnce(this.viewModel,"change:is_editing",this.cartEditToggle),this.listenToOnce(this.viewModel,"change:is_editing",this.setEditUYOdata),this.listenTo(this.faceplate,"change",this.updateImagesToModelValue),this.listenTo(this.viewModel,"change:display_type",this.setCustomFaceplateInput),this.jcrop_api="",this.uuid=this.getUuid(),this.uploader(),this.disableUploadButton(),this.termsLinkOverlay()},uploader:function(){var t=this;new qq.FileUploaderBasic({element:document.getElementById("file-uploader"),action:"/faceplate/upload/",allowedExtensions:["jpg","jpeg","gif","png"],debug:!0,multiple:!1,sizeLimit:this.UYO_IMAGE_MAX_FILE_SIZE,csrftoken:e('input[name="csrfmiddlewaretoken"]').val(),params:{"X-Progress-ID":this.uuid},button:document.getElementById("photo_file_container"),onComplete:function(e,i,o){t.customFaceplateUploadComplete(e,i,o),t.uuid=t.getUuid(),t.scaled_ratio=o.unscaled_width/300},onSubmit:function(e,i){var o=this;this.params={"X-Progress-ID":t.uuid},t.upload_interval=window.setInterval(function(){t.fileUploadProgress(t.uuid,i,o)},500),t.toggle_view("photo-progress"),t.viewModel.set("saved_uyo_image",!1)},onCancel:function(e,i){window.clearTimeout(t.upload_interval),t.toggle_view("photo-choose"),t.uuid=t.getUuid()},showMessage:function(e){show_jgrowl_message(e,"error",!0)}})},termsLinkOverlay:function(){this.$("a.photo-terms-link").overlay({mask:"#ccc"})},toggle_view:function(e){this.$("#"+e).fadeIn(500).siblings().hide()},cartEditToggle:function(){this.viewModel.get("is_editing")&&"PHOTO"===this.viewModel.get("display_type")&&(this.toggle_view("photo-display"),this.viewModel.set("saved_uyo_image",!0))},termsCheckbox:function(t){"checked"===e(t.currentTarget).attr("checked")?(this.$("#qq-file-input").removeAttr("disabled").css("cursor","pointer"),this.$("#photo_file_container").removeClass("disabled").removeAttr("disabled")):this.disableUploadButton()},disableUploadButton:function(){this.$("#qq-file-input").prop("disabled",!0).css("cursor","default"),this.$("#photo_file_container").addClass("disabled").prop("disabled",!0)},cancelUpload:function(){this.uploader._handler.cancelAll(),this.toggle_view("photo-choose")},editUpload:function(e){e.preventDefault(),this.enter_crop_mode()},setEditUYOdata:function(){var e=this.$(".photo-thumb-taken");this.faceplate.set("custom_faceplate_id",e.data("pk")),this.faceplate.set("custom_faceplate_original_image_url",e.data("original-image")),this.faceplate.set("custom_faceplate_crop_image",e.data("crop-image"))},removeUpload:function(t){t.preventDefault();var i=this;if(this.viewModel.get("is_editing"))this.removeCustomFaceplateElements();else{var o=this.faceplate.get("custom_faceplate_id"),a="/faceplate/remove_image/"+o+"/";e.ajax({url:a,type:"POST",dataType:"json",success:function(e){e.success?i.removeCustomFaceplateElements():show_jgrowl_message(e.error_message,"error",!0)}})}},cropBack:function(e){e.preventDefault(),this.viewModel.get("saved_uyo_image")?this.toggle_view("photo-display"):this.removeCustomFaceplateElements()},cropSave:function(t){t.preventDefault(),this.viewModel.set("crop_save_active",!0);var i=this.faceplate.get("custom_faceplate_id"),o="/faceplate/final_image/"+i+"/",a=this,s={x1:crop_coords.x,x2:crop_coords.x2,y1:crop_coords.y,y2:crop_coords.y2,new_width:this.CUSTOM_FACEPLATE_WIDTH,new_height:this.CUSTOM_FACEPLATE_HEIGHT,is_uyop:this.viewModel.get("is_plastic_page")};e.ajax({url:o,type:"POST",dataType:"json",data:s,success:function(e,t,i){a.photoDisplayHtmlResponse(e),a.faceplate.set("custom_faceplate_crop_image",a.$(".photo-thumb-taken").data("crop-image")),a.toggle_view("photo-display"),a.viewModel.set("saved_uyo_image",!0)},complete:function(){a.viewModel.set("crop_save_active",!1)}})},cropSaveBtnToggle:function(){var e=this.$("#photo-crop-save");this.viewModel.get("crop_save_active")?e.prop("disabled",!0).addClass("disabled"):e.prop("disabled",!1).removeClass("disabled")},getUuid:function(){var e="";for(i=0;i<32;i++)e+=Math.floor(16*Math.random()).toString(16);return e},selectUYO:function(){"PHOTO"===this.viewModel.get("display_type")&&this.$(".photo-thumb").find("input").prop("checked",!0)},setUYOPAccessoryCost:function(){var e=this.card.get("accessories").findWhere({category:"UYOP"});e&&void 0!==e.get("cost")&&this.$("p.uyo-accessory-cost").text(jsonData.currency_symbol+e.get("cost")+" "+e.get("currency"))},photoDisplayHtmlResponse:function(e){this.$("#photo-display").html(e.html),this.setUYOPAccessoryCost(),this.selectUYO()},setCustomFaceplateInput:function(){var e=this.$('input[name="custom_faceplate"]');"PHOTO"===this.viewModel.get("display_type")?e.val(this.faceplate.get("custom_faceplate_id")):e.val("")},formatSize:function(e){var t=-1;do e/=1024,t++;while(e>99);return Math.max(e,.1).toFixed(1)+["kB","MB","GB","TB","PB","EB"][t]},enter_crop_mode:function(e){var t=this.UYO_PREVIEW_IMAGE_WIDTH,i=this.CUSTOM_FACEPLATE_WIDTH/this.CUSTOM_FACEPLATE_HEIGHT,o=this.CUSTOM_FACEPLATE_WIDTH/2,a=o/i;this.$("#photo-target").attr("width",t),this.jcrop_api&&this.jcrop_api.destroy();var s=this;this.$("#photo-target").Jcrop({onChange:function(e){s.updatePreview(e)},onSelect:function(e){s.updatePreview(e)},aspectRatio:i,keySupport:!1},function(){s.jcrop_api=this;var e=this.getBounds();boundx=e[0],boundy=e[1],myBus.trigger("add:uyo_preview_img"),s.jcrop_api.setSelect([0,0,o,a])});var c=function(){s.toggle_view("photo-crop")};c()},fileUploadProgress:function(t,i,o){var a="/progress/?X-Progress-ID="+t+"/";e.ajax({url:a,type:"GET",dataType:"json",success:function(t){var i=0;"done"===t.state?i=100:"uploading"===t.state&&(i=Math.floor(100*(t.received/t.size).toFixed(4))),e("#photo-progress-message").html(i+"%"),e("#photo-percents").css("width",i+"%")}})},customFaceplateUploadComplete:function(e,t,i){if(window.clearTimeout(this.upload_interval),413==i.status){var o=this.formatSize(this.UYO_IMAGE_MAX_FILE_SIZE),a=t+gettext(" is too large, the maximum file size is ")+o;show_jgrowl_message(a,"error",!0),this.toggle_view("photo-display")}else{var s=this.UYO_PREVIEW_IMAGE_WIDTH/i.width,c=s*i.height;this.faceplate.set("custom_faceplate_id",i.faceplate_pk),this.faceplate.set("custom_faceplate_original_image_url",i.image_url),this.enter_crop_mode(c)}},removeCustomFaceplateElements:function(){myBus.trigger("remove:uyo_preview_img"),this.faceplate.set("custom_faceplate_id",""),this.faceplate.set("custom_faceplate_url",""),this.faceplate.set("custom_faceplate_original_image_url",""),this.toggle_view("photo-choose")},updateImagesToModelValue:function(){var e=this.faceplate.get("custom_faceplate_original_image_url"),t=this.faceplate.get("custom_faceplate_crop_image");this.$("#photo-target").attr("src",e),this.$(".jcrop-holder").find("img").attr("scr",e),this.$(".photo-thumb-taken").find("img").attr("src",t)},updatePreview:function(e){this._UYOPwarning(e),this._cropPreview(e)},_UYOPwarning:function(e){if(this.viewModel.get("is_plastic_page")){var t=this.$("#crop-warning");e.w*this.scaled_ratio<1014?t.show():t.hide()}},_cropPreview:function(e){if(parseInt(e.w,10)>0){crop_coords=e;var t=this.CUSTOM_FACEPLATE_WIDTH/e.w,i=this.CUSTOM_FACEPLATE_HEIGHT/e.h,o={width:Math.round(t*boundx)+"px",height:Math.round(i*boundy)+"px",marginLeft:"-"+Math.round(t*e.x)+"px",marginTop:"-"+Math.round(i*e.y)+"px"};myBus.trigger("update:uyo_preview_img",o)}}})}(jQuery);