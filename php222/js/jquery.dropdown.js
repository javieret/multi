if(jQuery)(function(e){function t(t){var r=e(this),i=e(e(this).attr("data-dropdown")),s=r.hasClass("dropdown-open"),o=parseInt(e(this).attr("data-horizontal-offset")||0),u=parseInt(e(this).attr("data-vertical-offset")||0);if(r!==t.target&&e(t.target).hasClass("dropdown-ignore"))return;t.preventDefault();t.stopPropagation();n();if(s||r.hasClass("dropdown-disabled"))return;i.css({left:i.hasClass("anchor-right")?r.offset().left-(i.outerWidth()-r.outerWidth())+o:r.offset().left+o,top:r.offset().top+r.outerHeight()+u}).show();r.addClass("dropdown-open")}function n(t){var n=t?e(t.target).parents().andSelf():null;if(n&&n.is(".dropdown-menu")&&!n.is("A"))return;e("BODY").find(".dropdown-menu").hide().end().find("[data-dropdown]").removeClass("dropdown-open")}e.extend(e.fn,{dropdown:function(t,r){switch(t){case"hide":n();return e(this);case"attach":return e(this).attr("data-dropdown",r);case"detach":n();return e(this).removeAttr("data-dropdown");case"disable":return e(this).addClass("dropdown-disabled");case"enable":n();return e(this).removeClass("dropdown-disabled")}}});e(function(){e("BODY").on("click.dropdown","[data-dropdown]",t);e("HTML").on("click.dropdown",n);if(!e.browser.msie||e.browser.msie&&e.browser.version>=9){e(window).on("resize.dropdown",n)}})})(jQuery)