/**
 * @version $Id: slider.js 34 2016-08-17 10:29:58Z szymon $
 * @package DJ-ImageSlider
 * @subpackage DJ-ImageSlider Component
 * @copyright Copyright (C) 2012 DJ-Extensions.com, All rights reserved.
 * @license DJ-Extensions.com Proprietary Use License
 * @author url: http://dj-extensions.com
 * @author email contact@dj-extensions.com
 * @developer Szymon Woronowski - szymon.woronowski@design-joomla.eu
 *
 */
!function(a){var b={init:function(b){function t(b){var c={x:b.width(),y:b.height()};if((0==c.x||0==c.y)&&b.is(":hidden")){for(var e,f,d=b.parent();d.is(":hidden");)e=d,d=d.parent();f=d.width(),e&&(f-=parseInt(e.css("margin-left")),f-=parseInt(e.css("margin-right")),f-=parseInt(e.css("border-left-width")),f-=parseInt(e.css("border-right-width")),f-=parseInt(e.css("padding-left")),f-=parseInt(e.css("padding-right")));var g=b.clone();g.css({position:"absolute",visibility:"hidden","max-width":f}),a(document.body).append(g),c={x:g.width(),y:g.height()},g.remove()}return c}function u(){var d=b.parent(),g=t(d).x,n=parseInt(e.css("max-width")),o=t(e),p=o.x;p>g?p=g:p<=g&&(!n||p<n)&&(p=g>n?n:g),r[j]||(r[j]=o.x/o.y);var q=r[j],s=p/q;if(e.css("width",p),e.css("height",s),2==c.slider_type)f.css("width",p),h.css("width",p),h.css("height",s);else if(1==c.slider_type){var u=parseInt(a(h[0]).css("margin-bottom"));i=(s+u)/j,k=h.length*i+h.length,f.css("height",k),h.css("width",p),h.css("height",i-u),f.css("top",-i*m)}else{var u="right"==c.direction?parseInt(a(h[0]).css("margin-left")):parseInt(a(h[0]).css("margin-right")),v=Math.ceil(p/(c.slide_size+u));if(v!=j){if(j=v>c.visible_slides?c.visible_slides:v,l=h.length-j,a("#cust-navigation"+c.id).length){var w=a("#cust-navigation"+c.id).find(".load-button");w.each(function(b){var c=a(this);b>l?c.css("display","none"):c.css("display","")})}r[j]||(r[j]=(j*i-u)/o.y),q=r[j],s=p/q,e.css("height",s)}i=(p+u)/j,k=h.length*i+h.length,f.css("width",k),h.css("width",i-u),h.css("height",s),f.css(c.direction,-i*m),m>l&&z(l)}(c.show_buttons>0||c.show_arrows>0)&&(button_pos=a("#navigation"+c.id).position().top,button_pos<0?(b.css("padding-top",-button_pos),b.css("padding-bottom",0)):(buttons_height=0,c.show_arrows>0&&(buttons_height=t(a("#next"+c.id)).y,buttons_height=Math.max(buttons_height,t(a("#prev"+c.id)).y)),c.show_buttons>0&&(buttons_height=Math.max(buttons_height,t(a("#play"+c.id)).y),buttons_height=Math.max(buttons_height,t(a("#pause"+c.id)).y)),padding=button_pos+buttons_height-s,padding>0?(b.css("padding-top",0),b.css("padding-bottom",padding)):(b.css("padding-top",0),b.css("padding-bottom",0))),buttons_margin=parseInt(a("#navigation"+c.id).css("margin-left"))+parseInt(a("#navigation"+c.id).css("margin-right")),buttons_margin<0&&t(a(window)).x<t(a("#navigation"+c.id)).x-buttons_margin&&(a("#navigation"+c.id).css("margin-left",0),a("#navigation"+c.id).css("margin-right",0))),F()}function w(b){a("#cust-navigation"+c.id).length&&s.each(function(c){var d=a(this);d.removeClass("load-button-active"),c==b&&d.addClass("load-button-active")})}function x(){m<l?(z(m+1),o&&m==l&&(n=0,B())):z(0)}function y(){z(m>0?m-1:l)}function z(a){if(m!=a){if(2==c.slider_type){if(q)return;q=!0,prev_slide=m,m=a,A(prev_slide)}else m=a,1==c.slider_type?g?f.css("top",-i*m):f.animate({top:-i*m},d.duration,d.transition):g?f.css(c.direction,-i*m):"right"==c.direction?f.animate({right:-i*m},d.duration,d.transition):f.animate({left:-i*m},d.duration,d.transition);F(),w(m)}}function A(b){a(h[m]).css("visibility","visible"),g?(a(h[m]).css("opacity",1),a(h[b]).css("opacity",0)):(a(h[m]).animate({opacity:1},d.duration,d.transition),a(h[b]).animate({opacity:0},d.duration,d.transition)),setTimeout(function(){a(h[b]).css("visibility","hidden"),q=!1},d.duration)}function B(){n?(a("#play"+c.id).css("display","none"),a("#pause"+c.id).css("display","block")):(a("#pause"+c.id).css("display","none"),a("#play"+c.id).css("display","block"))}function C(){setTimeout(function(){n&&!p&&x(),C()},d.delay)}function D(){b.css("background","none"),e.css("opacity",1),c.show_buttons>0&&(play_width=t(a("#play"+c.id)).x,a("#play"+c.id).css("margin-left",-play_width/2),pause_width=t(a("#pause"+c.id)).x,a("#pause"+c.id).css("margin-left",-pause_width/2),n?a("#play"+c.id).css("display","none"):a("#pause"+c.id).css("display","none")),C()}function E(a){var b=document.body||document.documentElement,c=b.style;if("undefined"==typeof c)return!1;if("string"==typeof c[a])return a;v=["Moz","Webkit","Khtml","O","ms","Icab"],pu=a.charAt(0).toUpperCase()+a.substr(1);for(var d=0;d<v.length;d++)if("string"==typeof c[v[d]+pu])return"-"+v[d].toLowerCase()+"-"+a;return!1}function F(){h.each(function(b){var c=a(this).find("a[href], input, select, textarea, button");b>=m&&b<m+parseInt(j)?c.each(function(){a(this).removeProp("tabindex")}):c.each(function(){a(this).prop("tabindex","-1")})})}b.data();var c=b.data("djslider"),d=b.data("animation");b.removeAttr("data-djslider"),b.removeAttr("data-animation");var e=a("#djslider"+c.id).css("opacity",0),f=a("#slider"+c.id).css("position","relative"),g="1"==c.css3&&E("transition"),h=f.children("li"),i=c.slide_size,j=c.visible_slides,k=i*h.length,l=h.length-j,m=0,n="1"==d.auto?1:0,o="1"==d.looponce?1:0,p=0,q=!1,r=[];if(2==c.slider_type?(h.css("position","absolute"),h.css("top",0),h.css("left",0),f.css("width",i),h.css("opacity",0),h.css("visibility","hidden"),a(h[0]).css("opacity",1),a(h[0]).css("visibility","visible"),g&&h.css(g,"opacity "+d.duration+"ms "+d.css3transition)):1==c.slider_type?(f.css("top",0),f.css("height",k),g&&f.css(g,"top "+d.duration+"ms "+d.css3transition)):(f.css(c.direction,0),f.css("width",k),g&&f.css(g,c.direction+" "+d.duration+"ms "+d.css3transition)),c.show_arrows>0&&(a("#next"+c.id).on("click",function(){"right"==c.direction?y():x()}).on("keydown",function(a){var b=a.which;13!=b&&32!=b||("right"==c.direction?y():x(),a.preventDefault(),a.stopPropagation())}),a("#prev"+c.id).on("click",function(){"right"==c.direction?x():y()}).on("keydown",function(a){var b=a.which;13!=b&&32!=b||("right"==c.direction?x():y(),a.preventDefault(),a.stopPropagation())})),c.show_buttons>0&&(a("#play"+c.id).on("click",function(){n=1,B()}).on("keydown",function(b){var d=b.which;13!=d&&32!=d||(n=1,B(),a("#pause"+c.id).focus(),b.preventDefault(),b.stopPropagation())}),a("#pause"+c.id).on("click",function(){n=0,B()}).on("keydown",function(b){var d=b.which;13!=d&&32!=d||(n=0,B(),a("#play"+c.id).focus(),b.preventDefault(),b.stopPropagation())})),b.on("mouseenter",function(){p=1}).on("mouseleave",function(){b.removeClass("focused"),p=0}).on("focus",function(){b.addClass("focused"),b.trigger("mouseenter")}).on("keydown",function(a){var b=a.which;37!=b&&39!=b||(39==b?"right"==c.direction?y():x():"right"==c.direction?x():y(),a.preventDefault(),a.stopPropagation())}),a(".djslider-end").on("focus",function(){b.trigger("mouseleave")}),b.djswipe(function(a,b){b.x<50||b.y>50||("left"==a.x?"right"==c.direction?y():x():"right"==a.x&&("right"==c.direction?x():y()))}),a("#cust-navigation"+c.id).length){var s=a("#cust-navigation"+c.id).find(".load-button");s.each(function(b){var c=a(this);c.on("click",function(a){q||c.hasClass("load-button-active")||z(b)}).on("keydown",function(a){var d=a.which;13!=d&&32!=d||(q||c.hasClass("load-button-active")||z(b),a.preventDefault(),a.stopPropagation())}),b>l&&c.css("display","none")})}c.preload?setTimeout(D,c.preload):a(window).load(D),u(),a(window).on("resize",u),a(window).on("load",u)}};a.fn.djswipe=a.fn.djswipe||function(b){function g(a){var g,h,b=a.originalEvent.changedTouches||e.originalEvent.touches,c=b[0].pageX,f=b[0].pageY;return g=c>d.x?"right":"left",h=f>d.y?"down":"up",{direction:{x:g,y:h},offset:{x:Math.abs(c-d.x),y:Math.abs(d.y-f)}}}var c=!1,d=null,f=null;return $el=a(this),$el.on("touchstart",function(a){c=!0;var b=a.originalEvent.changedTouches||e.originalEvent.touches;d={x:b[0].pageX,y:b[0].pageY}}),$el.on("touchend",function(){c=!1,f&&b(f.direction,f.offset),d=null,f=null}),$el.on("touchmove",function(a){c&&(f=g(a))}),!0},a(document).ready(function(){a("[data-djslider]").each(function(){b.init(a(this))})})}(jQuery);