var PreviewView=PreviewView||{};!function(e){"use strict";PreviewView=Backbone.View.extend({el:"#preview",events:{"click #plastic-uyo-cta":"UYOP_displayType"},initialize:function(e){Backbone.View.prototype.initialize.apply(this,arguments),this.viewModel=e.viewModel,this.faceplate=e.faceplate,this.isPlasticPage=this.viewModel.get("is_plastic_page"),this.uyop_enabled=this.viewModel.get("photo_enabled_plastic"),this.photo_enabled=this.viewModel.get("photo_enabled"),this.video_enabled=this.viewModel.get("video_enabled"),this.multipacks_enabled=this.viewModel.get("multipacks_enabled"),this.isPlasticPage&&(this.uyop_enabled&&(this.listenTo(this.viewModel,"change:display_type",this.UYOP_btnToggle),this.listenTo(this.viewModel,"change:multipack_display",this.UYOP_btnToggle),this.listenTo(this.viewModel,"change:display_type",this.UYOP_previewToggle)),this.multipacks_enabled&&(this.listenTo(this.faceplate,"change:multipack_faceplate_url",this.updatePreview),this.listenTo(this.viewModel,"change:multipack_display",this.updatePreview))),this.isPlasticPage||((this.video_enabled||this.photo_enabled)&&this.listenTo(this.viewModel,"change:display_type",this.uyo_faceplate),this.photo_enabled&&this.listenTo(this.viewModel,"change:display_type",this.uyo_showCropPreview),this.video_enabled&&(this.listenTo(this.viewModel,"change:display_type",this.toggleVideoPreviewText),this.listenTo(this.faceplate,"change:video_name",this.videoPreviewName))),this.listenTo(this.faceplate,"change:carousel_selected_fp_code",this.faceplateCodeInput),this.listenTo(this.faceplate,"change:multipack_faceplate_code",this.faceplateCodeInput),this.listenTo(this.viewModel,"change:multipack_display",this.faceplateCodeInput),this.listenTo(myBus,"add:uyo_preview_img",this.cropPreviewSrcImg),this.listenTo(myBus,"update:uyo_preview_img",this.updateCrop),this.listenTo(myBus,"remove:uyo_preview_img",this.uyo_emptyImg),this.listenTo(this.viewModel,"change:display_type",this.updatePreview),this.listenTo(this.faceplate,"change:carousel_selected_fp_code",this.updatePreview),this.listenTo(this.faceplate,"change:custom_faceplate_id",this.setCustomFaceplateID),this.updatePreview()},faceplateCodeInput:function(){var e;e=this.viewModel.get("multipack_display")?this.faceplate.get("multipack_faceplate_code"):this.faceplate.get("carousel_selected_fp_code"),this.$("input[name=faceplate_code]").val(e)},UYOP_displayType:function(e){e.preventDefault(),this.viewModel.set("display_type","PHOTO")},UYOP_btnToggle:function(){var e=this.$("#plastic-uyo-cta");"PHOTO"!==this.viewModel.get("display_type")&&this.viewModel.get("multipack_display")!==!0?e.show():e.hide()},UYOP_previewToggle:function(){var e=this.$("#faceplate"),t=this.$("#uyop-preview");"PHOTO"===this.viewModel.get("display_type")?(e.hide(),t.show()):(t.hide(),e.show())},uyo_faceplate:function(){"FACEPLATES"!==this.viewModel.get("display_type")&&this._updateFaceplateImage(this.faceplate.get("uyo_faceplate"))},uyo_showCropPreview:function(){var e=this.$("#crop-area");"PHOTO"===this.viewModel.get("display_type")?e.show():e.hide()},uyo_emptyImg:function(){this.$("#crop-preview").attr("src",jsonData.STATIC_URL+"img/empty.png").removeAttr("style")},cropPreviewSrcImg:function(){this.$("#crop-preview").attr("src",this.faceplate.get("custom_faceplate_original_image_url"))},updateCrop:function(e){this.$("#crop-preview").css({width:e.width,height:e.height,marginLeft:e.marginLeft,marginTop:e.marginTop})},updateActiveCarouselPreview:function(){var e=this.faceplate.get("carousel_selected_fp_url"),t=this.faceplate.get("default_faceplate_full_url"),i=this.faceplate.get("multipack_faceplate_url");this.viewModel.get("multipack_display")?this._updateFaceplateImage(i):""!==e?this._updateFaceplateImage(e):this._updateFaceplateImage(t)},updatePreview:function(){"FACEPLATES"!==this.viewModel.get("display_type")&&void 0!==this.viewModel.get("display_type")?this.viewModel.get("is_plastic_page")?this.UYOP_previewToggle():(this.uyo_faceplate(),this.uyo_showCropPreview(),"VIDEO"===this.viewModel.get("display_type")&&this.toggleVideoPreviewText()):this.updateActiveCarouselPreview()},toggleVideoPreviewText:function(){var e=this.$("#video-preview-text, #video-preview-name"),t=this.viewModel.get("display_type"),i=this.viewModel.get("video_enabled");"VIDEO"===t&&i?e.show():e.hide()},videoPreviewName:function(){this.$("#video-preview-name").html(this.faceplate.get("video_name"))},_updateFaceplateImage:function(e){this.$("#faceplate").css("background","url("+e+")")}})}(jQuery);