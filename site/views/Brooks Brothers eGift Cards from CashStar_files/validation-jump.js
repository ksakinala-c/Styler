function jumpToFormElement(e,l){var o,r=l?"scroll":"focus";if(o="__all__"!==e?$($(":input[name="+e+"]")[0].labels[0]):$("body"),"scroll"==r){var n=o.offset().top;$(window).scrollTop(n)}else o.focus().blur();return o}$(".error-jump").click(function(e){e.preventDefault();var l=$(this).data("ele-name");jumpToFormElement(l,!0)});