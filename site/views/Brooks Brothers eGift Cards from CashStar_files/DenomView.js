var DenomView=DenomView||{};!function(e){"use strict";DenomView=Backbone.View.extend({el:"#value",initialize:function(e){Backbone.View.prototype.initialize.apply(this,arguments),this.viewModel=e.viewModel,this.denomination=e.denomination,this.faceplate=e.faceplate,this.childView={PICKER:new AmountPicker({viewModel:this.viewModel,denomination:this.denomination})},this.viewModel.get("is_plastic_page")&&this.viewModel.get("multipacks_enabled")&&(this.childView.MULTIPACKS=new MultipacksView({viewModel:this.viewModel,denomination:this.denomination,faceplate:this.faceplate}))}})}(jQuery);