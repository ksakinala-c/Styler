var AmountPicker=AmountPicker||{};!function(t){"use strict";AmountPicker=Backbone.View.extend({el:"#value",events:{"click #pre-select li a":"setDenominationAmount",'blur input[name="amount"]':"setAmountfromInput",'change select[name="amount"]':"setSelectAmount"},initialize:function(t){Backbone.View.prototype.initialize.apply(this,arguments),this.viewModel=t.viewModel,this.denomination=t.denomination,this.listenTo(this.denomination,"change:is_predenom",this.togglePreDenom),this.listenTo(this.denomination,"change:amount",this.setPreDenomHeader),this.listenTo(this.denomination,"change:amount",this.setDenomInput),this.listenTo(this.denomination,"change:amount",this.setCurrentState),this.listenTo(this.denomination,"change",this.updateModelAmount),this.listenTo(this.viewModel,"change:multipack_display",this.updateModelAmount),this.listenTo(this.viewModel,"change:is_editing",this.setAmountfromInput),this.listenTo(this.viewModel,"change:multipack_display",this.pickerToggle),this.amountInput=this.$('input[name="amount"]'),this.amountSelect=this.$('select[name="amount"]'),this.product_based_hidden_items=this.$(".js-predenom-rmv"),this.product_based_content=this.$(".js-predenom-content"),this.denomination.get("catalog_fixed")&&(this.listenTo(this.denomination,"change",this.setSelectVal),this.setSelectAmount())},setSelectAmount:function(){var t=this.amountSelect.val();this.denomination.set("picker_denom",t)},setSelectVal:function(){var t=this.denomination.get("amount");this.amountSelect.find('option[value="'+t+'"]').prop("selected",!0)},updateModelAmount:function(){this.viewModel.get("multipack_display")?this.denomination.set("amount",this.denomination.get("multipack_denom")):this.denomination.get("is_predenom")?this.denomination.set("amount",this.denomination.get("predenom_denom")):this.denomination.set("amount",this.denomination.get("picker_denom"))},setDenominationAmount:function(e){e.preventDefault(),this.denomination.set("picker_denom",t(e.currentTarget).data("value"))},setAmountfromInput:function(){this.denomination.get("is_predenom")||(this.viewModel.get("multipack_display")?this.denomination.set("multipack_denom",this.amountInput.val()):this.denomination.set("picker_denom",this.amountInput.val()))},setDenomInput:function(){this.amountInput.val(this.denomination.get("amount"))},setCurrentState:function(){var e=this.denomination.get("picker_denom");this.$("ul#pre-select li a").each(function(n){e==t(this).data("value")?t(this).addClass("current"):t(this).removeClass("current")})},pickerToggle:function(){var t=this.viewModel.get("multipack_display");t?this.$("#amount-multipack").show().siblings("div").hide():this.$("#amount-multipack").hide().siblings("div").show()},setPreDenomHeader:function(){if(this.denomination.get("predenom_denom")){var t=this.denomination.get("predenom_denom").toFixed(2);this.$("#amount-predenom-hdr").find("span").text(t)}},togglePreDenom:function(){this.denomination.get("is_predenom")?(this.product_based_hidden_items.hide(),this.product_based_content.show()):(this.product_based_hidden_items.show(),this.product_based_content.hide())}})}(jQuery);