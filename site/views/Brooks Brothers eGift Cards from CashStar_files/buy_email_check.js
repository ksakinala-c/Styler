$(document).ready(function(){var o=["gmail.com","google.com","googlemail.com","yahoo.com","yahoo.co.uk","yahoo.com.au","hotmail.com","hotmail.co.uk","hotmail.com.au","msn.com","msn.co.uk","msn.com.au","aol.com","aol.co.uk","aol.com.au","me.com","mac.com","live.com","facebook.com","comcast.net","verizon.net","sbcglobal.net","att.net","gmx.com","mail.com","vfc.com"],e=["com","net","org","info","edu","gov","mil","co.uk","me.uk","net.uk","org.uk","com.au","net.au","org.au","id.au"];$("#email, #home_email").on("blur",function(){var c=$(this).closest(".deliver-left").find(".mailcheck");$(this).mailcheck({domains:o,topLevelDomains:e,suggested:function(o,e){$(".check-address").text(e.address),$(".check-domain").text(e.domain),c.slideDown(0,function(){resize_delivery_content()})},empty:function(o){c.slideUp(0,function(){resize_delivery_content()})}})}),$("#id_email").on("blur",function(){var c=$(this).closest(".pay-wrap").find(".mailcheck");$(this).mailcheck({domains:o,topLevelDomains:e,suggested:function(o,e){$(".check-address").text(e.address),$(".check-domain").text(e.domain),c.slideDown()},empty:function(o){c.slideUp()}})}),$(".mailcheck a").click(function(o){o.preventDefault(),addy=$(".check-address",this).text()+"@"+$(".check-domain",this).text(),$(this).closest("p").prev(".ctrlHolder").find("input").val(addy),$(this).parent().slideUp()})});