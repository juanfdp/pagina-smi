
window.onerror=function(desc,page,line,chr){
/* alert('JavaScript error occurred! \n'
  +'\nError description: \t'+desc
  +'\nPage address:      \t'+page
  +'\nLine number:       \t'+line
 );*/
}

	///////******************* SLIDER HOME
	$(function(){
		 $('a').focus(function(){this.blur();});
		 SI.Files.stylizeAll();
		 slider.init();
		
		 $('input.text-default').each(function(){
		  $(this).attr('default',$(this).val());
		 }).focus(function(){
		  if($(this).val()==$(this).attr('default'))
		   $(this).val('');
		 }).blur(function(){
		  if($(this).val()=='')
		   $(this).val($(this).attr('default'));
		 });
		
		 $('input.text,textarea.text').focus(function(){
		  $(this).addClass('textfocus');
		 }).blur(function(){
		  $(this).removeClass('textfocus');
		 });
		
		 var popopenobj=0,popopenaobj=null;
		 $('a.popup').click(function(){
		  var pid=$(this).attr('rel').split('|')[0],_os=parseInt($(this).attr('rel').split('|')[1]);
		  var pobj=$('#'+pid);
		  if(!pobj.length)
		   return false;
		  if(typeof popopenobj=='object' && popopenobj.attr('id')!=pid){
		   popopenobj.hide(50);
		   $(popopenaobj).parent().removeClass(popopenobj.attr('id').split('-')[1]+'-open');
		   popopenobj=null;
		  }
		  return false;
		 });
		 $('p.images img').click(function(){
		  var newbg=$(this).attr('src').split('bg/bg')[1].split('-thumb')[0];
		  $(document.body).css('backgroundImage','url('+_siteRoot+'images/bg/bg'+newbg+'.jpg)');
		 
		  $(this).parent().find('img').removeClass('on');
		  $(this).addClass('on');
		  return false;
		 });
		 $(window).load(function(){
		 var css_cims=this;
		  var css_ims=this;
		 $.each(css_ims,function(){(new Image()).src=_siteRoot+'css/images/'+this;});
		  $.each(css_cims,function(){
		   var css_im=this;
		   $.each(['blue','purple','pink','red','grey','green','yellow','orange'],function(){
			(new Image()).src=_siteRoot+'css/'+this+'/'+css_im;
		   });
		  });
		 }); 
		 $('div.sc-large div.img:has(div.tml)').each(function(){
		  $('div.tml',this).hide();
		  $(this).append('<a href="#" class="tml_open">&nbsp;</a>').find('a').css({
		   left:parseInt($(this).offset().left)+1,top:parseInt($(this).offset().top)+1
		  }).click(function(){
		   $(this).siblings('div.tml').slideToggle();
		   return false;
		  }).focus(function(){this.blur();}); 
		 });
		});
		var slider={
		 num:-1,
		 cur:0,
		 cr:[],
		 al:null,
		 at:10*761,
		 ar:true,
		 init:function(){
		  if(!slider.data || !slider.data.length)
		   return false;
		
		  var d=slider.data;
		  slider.num=d.length;
		  var pos=Math.floor(Math.random()*1);//slider.num);
		  for(var i=0;i<slider.num;i++){
		   $('#'+d[i].id).css({left:((i-pos)*761)});
		   $('#slide-nav').append('<a id="slide-link-'+i+'" href="#" onclick="slider.slide('+i+');return false;" onfocus="this.blur();">'+(i+1)+'</a>');
		  }
		
		  $('img,div#slide-controls',$('div#slide-holder')).fadeIn();
		  slider.text(d[pos]);
		  slider.on(pos);
		  slider.cur=pos;
		  window.setTimeout('slider.auto();',slider.at);
		 },
		 auto:function(){
		  if(!slider.ar)
		   return false;
		
		  var next=slider.cur+1;
		  if(next>=slider.num) next=0;
		  slider.slide(next);
		 },
		 slide:function(pos){
		  if(pos<0 || pos>=slider.num || pos==slider.cur)
		   return;
		
		  window.clearTimeout(slider.al);
		  slider.al=window.setTimeout('slider.auto();',slider.at);
		
		  var d=slider.data;
		  for(var i=0;i<slider.num;i++)
		   $('#'+d[i].id).stop().animate({left:((i-pos)*761)},1000,'swing');
		  
		  slider.on(pos);
		  slider.text(d[pos]);
		  slider.cur=pos;
		 },
		 on:function(pos){
		  $('#slide-nav a').removeClass('on');
		  $('#slide-nav a#slide-link-'+pos).addClass('on');
		 },
		 text:function(di){
		  slider.cr['a']=di.client;
		  slider.cr['b']=di.desc;
		  slider.ticker('#slide-client span',di.client,0,'a');
		  slider.ticker('#slide-desc',di.desc,0,'b');
		 },
		 ticker:function(el,text,pos,unique){
		  if(slider.cr[unique]!=text)
		   return false;
		
		  ctext=text.substring(0,pos)+(pos%2?'-':'_');
		  $(el).html(ctext);
		
		  if(pos==text.length)
		   $(el).html(text);
		  else
		   window.setTimeout('slider.ticker("'+el+'","'+text+'",'+(pos+1)+',"'+unique+'");',30);
		 }
		};
		// STYLING FILE INPUTS 1.0 | Shaun Inman <http://www.shauninman.com/> | 2007-09-07
		if(!window.SI){var SI={};};
		SI.Files={
		 htmlClass:'SI-FILES-STYLIZED',
		 fileClass:'file',
		 wrapClass:'cabinet',
		 
		 fini:false,
		 able:false,
		 init:function(){
		  this.fini=true;
		 },
		 stylize:function(elem){
		  if(!this.fini){this.init();};
		  if(!this.able){return;};
		  
		  elem.parentNode.file=elem;
		  elem.parentNode.onmousemove=function(e){
		   if(typeof e=='undefined') e=window.event;
		   if(typeof e.pageY=='undefined' &&  typeof e.clientX=='number' && document.documentElement){
			e.pageX=e.clientX+document.documentElement.scrollLeft;
			e.pageY=e.clientY+document.documentElement.scrollTop;
		   };
		   var ox=oy=0;
		   var elem=this;
		   if(elem.offsetParent){
			ox=elem.offsetLeft;
			oy=elem.offsetTop;
			while(elem=elem.offsetParent){
			 ox+=elem.offsetLeft;
			 oy+=elem.offsetTop;
			};
		   };
		  };
		 },
		 stylizeAll:function(){
		  if(!this.fini){this.init();};
		  if(!this.able){return;};
		 }
	};

/*
 * FeatureList - simple and easy creation of an interactive "Featured Items" widget
 * Examples and documentation at: http://jqueryglobe.com/article/feature_list/
 * Version: 1.0.0 (01/09/2009)
 * Copyright (c) 2009 jQueryGlobe
 * Licensed under the MIT License: http://en.wikipedia.org/wiki/MIT_License
 * Requires: jQuery v1.3+
*/
;(function($) {
	$.fn.featureList = function(options) {
		var tabs	= $(this);
		var output	= $(options.output);

		new jQuery.featureList(tabs, output, options);

		return this;	
	};

	$.featureList = function(tabs, output, options) {
		function slide(nr) {
			if (typeof nr == "undefined") {
				nr = visible_item + 1;
				nr = nr >= total_items ? 0 : nr;
			}

			tabs.removeClass('current').filter(":eq(" + nr + ")").addClass('current');

			output.stop(true, true).filter(":visible").fadeOut();
			output.filter(":eq(" + nr + ")").fadeIn(function() {
				visible_item = nr;	
			});
		}

		var options			= options || {}; 
		var total_items		= tabs.length;
		var visible_item	= options.start_item || 0;

		options.pause_on_hover		= options.pause_on_hover		|| true;
		options.transition_interval	= options.transition_interval	|| 5000;

		output.hide().eq( visible_item ).show();
		tabs.eq( visible_item ).addClass('current');

		tabs.click(function() {
			if ($(this).hasClass('current')) {
				return false;	
			}

			slide( tabs.index( this) );
		});

		if (options.transition_interval > 0) {
			var timer = setInterval(function () {
				slide();
			}, options.transition_interval);

			if (options.pause_on_hover) {
				tabs.mouseenter(function() {
					clearInterval( timer );

				}).mouseleave(function() {
					clearInterval( timer );
					timer = setInterval(function () {
						slide();
					}, options.transition_interval);
				});
			}
		}
	};
})(jQuery);

/* ------------------------------------------------------------------------
	s3Slider
	
	Developped By: Boban KariÅ¡ik -> http://www.serie3.info/
        CSS Help: MÃ©szÃ¡ros RÃ³bert -> http://www.perspectived.com/
	Version: 1.0
	
	Copyright: Feel free to redistribute the script/modify it, as
			   long as you leave my infos at the top.
------------------------------------------------------------------------- */

(function($){  

    $.fn.s3Slider = function(vars) {       
        
        var element     = this;
        var timeOut     = (vars.timeOut != undefined) ? vars.timeOut : 6000;
        var current     = null;
        var timeOutFn   = null;
        var faderStat   = true;
        var mOver       = false;
        var items       = $("#" + element[0].id + "Content ." + element[0].id + "Image");
        var itemsSpan   = $("#" + element[0].id + "Content ." + element[0].id + "Image span");
            
        items.each(function(i) {
    
            $(items[i]).mouseover(function() {
               mOver = true;
            });
            
            $(items[i]).mouseout(function() {
                mOver   = false;
                fadeElement(true);
            });
            
        });
        
        var fadeElement = function(isMouseOut) {
            var thisTimeOut = (isMouseOut) ? (timeOut/2) : timeOut;
            thisTimeOut = (faderStat) ? 10 : thisTimeOut;
            if(items.length > 0) {
                timeOutFn = setTimeout(makeSlider, thisTimeOut);
            } else {
                console.log("Poof..");
            }
        }
        
        var makeSlider = function() {
            current = (current != null) ? current : items[(items.length-1)];
            var currNo      = jQuery.inArray(current, items) + 1
            currNo = (currNo == items.length) ? 0 : (currNo - 1);
            var newMargin   = $(element).width() * currNo;
            if(faderStat == true) {
                if(!mOver) {
                    $(items[currNo]).fadeIn((timeOut/6), function() {
                        if($(itemsSpan[currNo]).css('bottom') == 0) {
                            $(itemsSpan[currNo]).slideUp((timeOut/6), function() {
                                faderStat = false;
                                current = items[currNo];
                                if(!mOver) {
                                    fadeElement(false);
                                }
                            });
                        } else {
                            $(itemsSpan[currNo]).slideDown((timeOut/6), function() {
                                faderStat = false;
                                current = items[currNo];
                                if(!mOver) {
                                    fadeElement(false);
                                }
                            });
                        }
                    });
                }
            } else {
                if(!mOver) {
                    if($(itemsSpan[currNo]).css('bottom') == 0) {
                        $(itemsSpan[currNo]).slideDown((timeOut/6), function() {
                            $(items[currNo]).fadeOut((timeOut/6), function() {
                                faderStat = true;
                                current = items[(currNo+1)];
                                if(!mOver) {
                                    fadeElement(false);
                                }
                            });
                        });
                    } else {
                        $(itemsSpan[currNo]).slideUp((timeOut/6), function() {
                        $(items[currNo]).fadeOut((timeOut/6), function() {
                                faderStat = true;
                                current = items[(currNo+1)];
                                if(!mOver) {
                                    fadeElement(false);
                                }
                            });
                        });
                    }
                }
            }
        }
        
        makeSlider();

    };  

})(jQuery);  


// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){

	///***FORMS**///			
		///*COMBOS***///
			$(function () {
				$("#f_quicklyCountry_id, #f_country_idOpen, #f_country_idExit, #f_travelType_id, #f_dateDD, #f_dateMM, #f_dateYY").selectbox();
			});
			$("form").delay(1000).fadeIn();
			
			//**RADIOS CHECKBOX*///		
				$(".radio").dgStyle();
				$(".checkbox").dgStyle();
			
				//****DATE PICKERS***///
				$(function() {
						$('#f_dateOpen, #f_dateExit').datepicker({
							inline: true, 
							dateFormat: 'dd-mm-y'
						});
					
					
					/*$( "#format" ).change(function() {
						$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
					});*/
				});
	
				/* COMPANIES BOXES */
					(function($){
					  $.fn.showdelay = function(){
						var delay = 0;
						return this.each(function(){
						  $(this).delay(delay).fadeIn(300);
						  delay += 300;
						});
					  };
					})(jQuery);
					
					/*jQuery('#chooseBtn img').hover(function() {
						jQuery(this).animate({opacity: 0}, "fast");
					}, function() {
						jQuery(this).animate({opacity: 1}, "slow");
					});*/
	
	
	//*SLIDERS BANNERS**//
	
				$(document).ready(function() { 
					   $('#s3slider').s3Slider({ 
						  //timeOut: 6000 
					   });
					});
	
			///*** SERVICES LIST TABBED
				$(document).ready(function() {
						$.featureList(
							$("#tabs li a"),
							$("#output li"), {
								start_item	:	0
							}
						);
					});

				$(document).ready(function() {
						$.featureList(
							$("#partnersTabs li a"),
							$("#outInfoPart li"), {
								start_item	:	0
							}
						);
				});

					
					 	$('.companiBox').showdelay(); 
						$('.planBox').showdelay();
						$('.faqBox').showdelay();

						 
		//*IMGS*//
						jQuery('.logoSMI, .contactHelp img, #partners img, #magicStepCards img, #partnersTabs img, #toolTipUp a, #toolTipDw a').hover(function() {
							jQuery(this).animate({"opacity": ".7"}, "fast");
						}, function() {
							jQuery(this).animate({"opacity": "1"}, "slow");
						});
		
						jQuery('.submitPurchase').hover(function() {
							jQuery(this).animate({"opacity": "1"}, "slow");
						}, function() {
							jQuery(this).animate({"opacity": ".7"}, "slow");
						});
		
		/////////////**************THE DOT STUDIO LOGO*******************------------
					jQuery('.theDot').hover(function() {	
								
								jQuery('.theDotDesign').animate({"left": "-43px"}, "fast");	
								jQuery('.theDotByThe').animate({"left": "25px","opacity":"1"}, "fast");	
								jQuery('.theDot').animate({"opacity": "1"}, "fast");
									
							}, function() {
								
								jQuery('.theDotDesign').animate({"left": "0"}, "slow");
								jQuery('.theDotByThe').animate({"left": "0px","opacity":"0"}, "slow");
								jQuery('.theDot').animate({"opacity": "1"}, "slow");
									
					});
					
			$("#toolTipUp, #toolTipDw").fadeIn('slow');	
});


			

/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/