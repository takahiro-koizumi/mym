(function(a){a(function(){setTimeout(function(){a("#js-loading-animation").delay(500).fadeOut(1000);a("#js-loading-overlay").delay(500).fadeOut(800)},500)});a(function(){var b=a(".loading-animation-cookie");if(a.cookie("access")==undefined){b.css("display","block");a.cookie("access","on")}else{b.css("display","none")}var e=a("#js-main-visual-inner:not(.is_delay)");if(a(e).length){a(e).delay(200).queue(function(){a(this).addClass("animation")})}var d=a("#js-main-visual-inner.is_delay:not(.is_clear)");if(a(d).length&&"on"==a.cookie("access")){a(d).delay(200).queue(function(){a(this).addClass("animation")})}else{if(a(d).length){a(d).delay(1500).queue(function(){a(this).addClass("animation")})}}var c=a("#js-main-visual-inner.is_delay.is_clear");if(a(c).length){a(c).delay(1500).queue(function(){a(this).addClass("animation")})}});a(function(){var b=a("#js-footer");if(a(".fixed-footer-menu").length&&a(".cta-rectangle").length){a(b).addClass("fixed-footer__padding--l")}else{if(a(".fixed-footer-menu").length){a(b).addClass("fixed-footer__padding--m")}else{if(a(".cta-rectangle").length){a(b).addClass("fixed-footer__padding--s")}}}});a(function(){var c=a("#js-header-menu-drop");if(a(c).length){var d=c.height();var b=0;a(window).scroll(function(){var e=a(this).scrollTop();if(e>b){c.removeClass("sticky-menu")}else{if(e<b){c.removeClass("hidden").addClass("sticky-menu");if(e<=d*3){c.removeClass("sticky-menu")}}}b=e})}});a.fn.clickToggle=function(d,c){return this.each(function(){var b=false;a(this).on("click",function(){b=!b;if(b){return d.apply(this,arguments)}return c.apply(this,arguments)})})};a(function(){var c=a("#js-smooth-scroll");if(a(c).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var b=e-d;a(window).scroll(function(){if(b*0.4<=a(window).scrollTop()){c.addClass("is-show")}else{c.removeClass("is-show")}})}});a(function(){var b=a("#cta-floating-pc.cta-rectangle");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.1<=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var b=a("#cta-floating-sp.cta-rectangle");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.7<=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var g=a("#js-cta-floating-close");var d=a("#js-cta-floating-open");var c=a("#cta-floating-pc");var e=a("#cta-floating-sp");var b=a("#cta-floating-show");var f=a("#cta-floating-pc .icon-chevron-left");g.on("click",function(){g.addClass("u-display-none");d.removeClass("u-display-none");c.removeClass("is-show");c.addClass("is-slide");e.removeClass("is-show");e.addClass("is-slide");b.removeClass("is-show");b.addClass("is-slide");a.cookie("cta-visibility","hidden",{path:"/"})});d.on("click",function(){g.removeClass("u-display-none");d.addClass("u-display-none");c.addClass("is-show");c.removeClass("is-slide");e.addClass("is-show");e.removeClass("is-slide");b.addClass("is-show");b.removeClass("is-slide");a.removeCookie("cta-visibility",{path:"/"})});if("hidden"==a.cookie("cta-visibility")){g.addClass("u-display-none");d.removeClass("u-display-none");c.removeClass("is-show");c.addClass("is-slide");e.removeClass("is-show");e.addClass("is-slide");b.removeClass("is-show");b.addClass("is-slide");f.addClass("is-slide")}});a(function(){var b=a("#cta-floating-pc.cta-square");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.4<=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var c=a("#cta-floating-pc .icon-chevron-left");if(a(c).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var b=e-d;a(window).scroll(function(){if(b*0.4<=a(window).scrollTop()){c.removeClass("is-slide")}else{c.addClass("is-slide")}})}});a(function(){var b=a("#cta-floating-sp.cta-square");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.9<=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var c=a("#cta-floating-sp .icon-chevron-left");if(a(c).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var b=e-d;a(window).scroll(function(){if(b*0.9<=a(window).scrollTop()){c.removeClass("is-slide")}else{c.addClass("is-slide")}})}});a(function(){var b=a("#cta-floating-pc.cta-floating-button");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.1<=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var b=a("#cta-floating-sp.cta-floating-button");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.1<=a(window).scrollTop()&c*0.6>=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var b=a(".hamburger-menu-floating");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.1<=a(window).scrollTop()&c*0.6>=a(window).scrollTop()){b.addClass("is-show")}else{b.removeClass("is-show")}})}});a(function(){var b=a("#cta-floating-show.cta-square");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.01<=a(window).scrollTop()){b.addClass("is-show")}})}});a(function(){var c=a("#js-fixed-footer-menu");if(a(c).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var b=e-d;a(window).scroll(function(){if(b*0.6<=a(window).scrollTop()){c.addClass("is-show")}else{c.removeClass("is-show")}})}});a(function(){var b=a(".js-fixed-item");if(a(b).length){var e=a(document).innerHeight();var d=a(window).innerHeight();var c=e-d;a(window).scroll(function(){if(c*0.93>=a(window).scrollTop()){b.removeClass("is-active")}})}});a(".js-ripple").click(function(c){a(".js-btn__ripple").remove();var i=a(this).offset().left,f=a(this).offset().top,h=a(this).width(),d=a(this).height();a(this).prepend("<span class='js-btn__ripple'></span>");if(h>=d){d=h}else{h=d}var b=c.pageX-i-h/2;var g=c.pageY-f-d/2;a(".js-btn__ripple").css({width:h,height:d,top:g+"px",left:b+"px"}).addClass("js-btn__ripple--effect")});a(function(){a('.c-section-widget:not([class$="_section"])').wrapInner('<div class="c-section-widget__inner"><div class="l-content"></div></div>')});a(function(){var c=a("#js-header-image-slider");var b=c.data("autoplay");if(true===b){setTimeout(function(){c.slick("play")},2000)}c.slick({autoplay:false,autoplaySpeed:c.data("autoplayspeed"),speed:c.data("speed"),fade:c.data("fade"),arrows:c.data("arrows"),dots:false,pauseOnFocus:false,pauseOnHover:false,infinite:true,waitForAnimate:false,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"});c.on("beforeChange",function(f,e,h,g){var d=a(".slick-slide");c.find(d).removeClass("is-active");c.find(d).eq(h).addClass("is-active")})});a(function(){var b=a("#js-header-content-slider");b.slick({autoplay:b.data("autoplay"),autoplaySpeed:b.data("autoplayspeed"),speed:b.data("speed"),fade:b.data("fade"),arrows:b.data("arrows"),dots:b.data("dots"),pauseOnFocus:false,pauseOnHover:false,infinite:true,waitForAnimate:false,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",responsive:[{breakpoint:769,settings:{fade:true,dots:b.data("dots")}}]});b.on("beforeChange",function(e,d,g,f){var c=a(".slick-slide");b.find(c).removeClass("is-active");b.find(c).eq(g).addClass("is-active")})});a(function(){var b=a("#js-header-pickup-slider");b.slick({initialSlide:0,slidesToShow:3,slidesToScroll:1,centerMode:b.data("centermode"),autoplay:b.data("autoplay"),autoplaySpeed:b.data("autoplayspeed"),speed:b.data("speed"),fade:false,arrows:b.data("arrows"),dots:b.data("dots"),pauseOnFocus:false,pauseOnHover:false,infinite:true,waitForAnimate:false,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",responsive:[{breakpoint:1025,settings:{slidesToShow:3}},{breakpoint:769,settings:{slidesToShow:3}},{breakpoint:545,settings:{slidesToShow:1,arrows:false,centerPadding:"24px"}}]})});a(function(){var c=a("#js-pagebox-slider");var b=a("#js-pagebox-slider-thumbnail");c.slick({asNavFor:b,slidesToShow:1,slidesToScroll:1,fade:true,dots:false,arrows:false,swipe:true,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"});b.slick({asNavFor:c,slidesToShow:3,slidesToScroll:1,autoplay:b.data("autoplay"),autoplaySpeed:b.data("autoplayspeed"),speed:b.data("speed"),arrows:false,focusOnSelect:true})});a(function(){a(".sound-btn").clickToggle(function(){a("video").prop("muted",false);a(".sound-btn").addClass("active")},function(){a("video").prop("muted",true);a(".sound-btn").removeClass("active")})});a(function(){var b=a("#js-header-youtube");if(a(b).length){b.YTPlayer();var c={sepia:b.data("sepia"),grayscale:b.data("grayscale"),blur:b.data("blur")};b.YTPApplyFilters(c)}});a(function(){var b=a("#js-footer-youtube");if(a(b).length){b.YTPlayer()}});a(function(){var b=a("#js-header-youtube");if(a(b).length){a(".sound-btn").on("click",function(){a("#js-header-youtube").YTPToggleVolume()})}});a(function(){function b(){if(a("#js-header-news li").length<=1){return false}a("#js-header-news li:first").slideUp(function(){a(this).appendTo(a("#js-header-news")).slideDown()})}setInterval(function(){b()},6000)});a(function(){var b=a('[id^="widget-cust_section-"]');b.slick({initialSlide:0,slidesToShow:b.data("slidestoshow"),slidesToScroll:1,autoplay:b.data("autoplay"),autoplaySpeed:3000,speed:1500,dots:b.data("dots"),fade:false,arrows:false,pauseOnFocus:false,pauseOnHover:false,infinite:true,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",responsive:[{breakpoint:545,settings:{autoplay:false,speed:250,slidesToShow:1,dots:b.data("dots")}}]})});a(function(){var b=a('[id^="widget-post_slider_section-"]');b.slick({initialSlide:0,slidesToShow:b.data("slidestoshow"),slidesToScroll:1,centerMode:b.data("center"),centerPadding:"48px",autoplay:b.data("autoplay"),autoplaySpeed:3000,speed:1500,dots:b.data("dots"),fade:false,arrows:false,pauseOnFocus:false,pauseOnHover:false,infinite:true,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",responsive:[{breakpoint:545,settings:{autoplay:false,speed:200,centerMode:false,slidesToShow:1,arrows:false,dots:b.data("dots")}}]})});a(function(){var b=a(".js-tab-nav");var c=a(".js-tab-panel");a(b).on("click",function(){a(b).removeClass("is-active");a(this).addClass("is-active");a(c).removeClass("is-show");const d=a(this).index();a(c).eq(d).addClass("is-show")})});a(function(){var b=new ClipboardJS(".js-clipboard");b.on("success",function(c){a(".share-button__clipboard--success").removeClass("u-display-none");a(".share-button__clipboard--success").delay(1500).fadeOut("slow")});b.on("error",function(c){a(".share-button__clipboard-error").removeClass("u-display-none");a(".share-button__clipboard-error").delay(1500).fadeOut("slow")})});a(function(){var b=a("#js-sidebar-sticky");Stickyfill.add(b)});a(function(){var b=a(".sns-share-sticky");Stickyfill.add(b)});a(function(){a('.js-hamburger-menu, a[href="#js-hamburger-menu"],.drawer-overlay,.hamburger-close-menu').on("click",function(){a("body").toggleClass("is-drawer-open");a(".drawer-menu,.drawer-overlay").toggleClass("is-active");a(".hamburger-menu-floating").toggleClass("is-active")})});a(function(){a(".drawer-menu a").on("click",function(){a("body").removeClass("is-drawer-open");a(".drawer-menu,.drawer-overlay").removeClass("is-active");a(".hamburger-menu-floating").removeClass("is-active")})});a(function(){a("#js-header-search a").on("click",function(){a("#js-header-search").toggleClass("is-active");a("#js-header-contact, #js-header-language").removeClass("is-active");a("#js-header-searchform-panel").toggleClass("is-active");a("#js-header-language-panel,#js-header-contact-panel").removeClass("is-active")})});a(function(){a("#js-header-contact a").on("click",function(){a("#js-header-contact").toggleClass("is-active");a("#js-header-search, #js-header-language").removeClass("is-active");a("#js-header-contact-panel").toggleClass("is-active");a("#js-header-language-panel,#js-header-searchform-panel").removeClass("is-active")})});a(function(){a("#js-header-language a").on("click",function(){a("#js-header-language").toggleClass("is-active");a("#js-header-contact, #js-header-search").removeClass("is-active");a("#js-header-language-panel").toggleClass("is-active");a("#js-header-contact-panel,#js-header-searchform-panel").removeClass("is-active")})});a(function(){a('a[href="#js-smooth-scroll"], #js-smooth-scroll').on("click",function(){a("body, html").animate({scrollTop:0},500);return false})});a(function(){a('.fixed-footer-menu__inner a[href="#js-smooth-scroll"]').on("click",function(){a(".sp-searchform.is-active,.sp-follow-sns.is-active").removeClass("is-active")})});a(function(){a('a[href="#js-follow-sns"]').on("click",function(){a(".sp-follow-sns").toggleClass("is-active");a(".sp-searchform.is-active").removeClass("is-active");a(".sp-share-sns.is-active").removeClass("is-active")})});a(function(){a('a[href="#js-share-sns"]').on("click",function(){a(".sp-share-sns").toggleClass("is-active");a(".sp-follow-sns.is-active").removeClass("is-active");a(".sp-searchform.is-active").removeClass("is-active")})});a(function(){a('a[href="#js-search"]').on("click",function(){a(".sp-searchform").toggleClass("is-active");a(".sp-follow-sns.is-active").removeClass("is-active");a(".sp-share-sns.is-active").removeClass("is-active")})});a(function(){a("#js-toc-toggle").on("click",function(){var c=a(".contents-outline");var b=a(".toc-btn__switch");if(c.is(":hidden")){c.show("fast");b.addClass("selected")}else{c.hide("fast");b.removeClass("selected")}return false});a(".toc-box ol a, #side-toc ol a").on("click",function(){var b=a(this.hash);if(b.length==0){return false}a("html,body").animate({scrollTop:b.offset().top},300);return false})});a(function(){a(".js-acordion dt").on("click",function(){a(this).toggleClass("is-active");a(this).next(".c-acordion__text").slideToggle(300)})})})(jQuery);/*! This file is auto-generated */
!function(d,l){"use strict";var e=!1,o=!1;if(l.querySelector)if(d.addEventListener)e=!0;if(d.wp=d.wp||{},!d.wp.receiveEmbedMessage)if(d.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){var r,a,i,s,n,o=l.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),c=l.querySelectorAll('blockquote[data-secret="'+t.secret+'"]');for(r=0;r<c.length;r++)c[r].style.display="none";for(r=0;r<o.length;r++)if(a=o[r],e.source===a.contentWindow){if(a.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;a.height=i}if("link"===t.message)if(s=l.createElement("a"),n=l.createElement("a"),s.href=a.getAttribute("src"),n.href=t.value,n.host===s.host)if(l.activeElement===a)d.top.location.href=t.value}}},e)d.addEventListener("message",d.wp.receiveEmbedMessage,!1),l.addEventListener("DOMContentLoaded",t,!1),d.addEventListener("load",t,!1);function t(){if(!o){o=!0;var e,t,r,a,i=-1!==navigator.appVersion.indexOf("MSIE 10"),s=!!navigator.userAgent.match(/Trident.*rv:11\./),n=l.querySelectorAll("iframe.wp-embedded-content");for(t=0;t<n.length;t++){if(!(r=n[t]).getAttribute("data-secret"))a=Math.random().toString(36).substr(2,10),r.src+="#?secret="+a,r.setAttribute("data-secret",a);if(i||s)(e=r.cloneNode(!0)).removeAttribute("security"),r.parentNode.replaceChild(e,r)}}}}(window,document);