$(document).ready(function(){$("body").on("click","a[rel=external]",function(e){return e.preventDefault(),open(this.href),!1}),$(document).on("focus","input, textarea",function(){$("html").hasClass("touch")&&$("#dev-env").length&&$("#dev-env").hide()}),$(document).on("blur","input, textarea",function(){$("html").hasClass("touch")&&$("#dev-env").length&&$("#dev-env").show()})});