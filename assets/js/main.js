/*
 * Galileo
 *
 * Copyright (c) 2017 
 * Date: July 12 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */

//document ready	
$(document).ready(function(){	
	
	$(window).disablescroll();
	var mobile_multiplier = 3;
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	    	mobile_multiplier = 3;
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	    	//return 1;
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};
	//*********** window size to fix content
	var windowHeight = $(window).innerHeight();
	var windowWidth = $(window).innerWidth();	
	var biogas_width = 17090;//valor del css: .gnc-biogas-landscape
	var yacimiento_width = 16820;//valor del css: .gnc-yacimiento-landscape
	var gasoducto_width = 16990;//valor del css: .gnc-gasoducto-landscape	
	var open_section_name = "biogas";
	var open_section_width = biogas_width;
	var plus_width = 0; //for some mobiles is needed because the srceen distribution
	var biogas_icons_width = 700;
	var yacimiento_icons_width = 900;
	var gasoducto_icons_width = 700;
	
	$(".scrollTonav").hide();
	
	setHeight();
	//set the truck animation start left percentage.. for screens > 1366
	if(screen.width > 1366) $(".truck-fixed").css("left", "20.5%");
		  
	//adjust sections to the browser height
	function setHeight() {	
		//section 1, 2, 3 fixt to windows size		
		$('.screen-1').css('height', windowHeight);		
		if(isMobile.any()){
			$('.screen-1').css('width', (windowWidth*mobile_multiplier));
			$("#mobilecss").attr("href", "assets/css/mobile.css?v=0.82");
			$(".hand-instruction").show();
			plus_width = 1500;//moviles
			
			//let all animations fixed
			$(".fadeInLeftShort").removeClass("animated");
	    	$(".fadeInLeftShort").removeClass("fadeInLeftShort");
	    	$(".fadeInDownShort").removeClass("fadeInDownShort");
	    	$(".fadeInUpShort").removeClass("fadeInUpShort");
	    	$(".group-animated").removeClass("animatedParent");
	    	$(".group-animated").removeClass("group-animated");	
		}else{
			$('.screen-1').css('width', windowWidth);
			$("body").css("overflow-x", "hidden");
	    	$("body").css("overflow-y", "hidden");
	    	$(".scroll").css("position", "fixed");	    	
		}		
		set_width_scroll();
	}
	//setup the scroll length
	function set_width_scroll(){
		if(isMobile.any()){
			$(".front").css('width', windowWidth+open_section_width+plus_width); //600 for menu at the end
			$("#wrapper").css('width', windowWidth+open_section_width+plus_width); //600 for menu at the end			
		}else{			
			$(".front").css('width', windowWidth+open_section_width+plus_width); //600 for menu at the end			
			$('#outer-container').css('height', eval(open_section_name+"_icons_width")+open_section_width+plus_width+'px'); //(700+open_section_width+plus_width)	 //600 for menu at the end
		}
	}
	//********************** end windows size    
    if(isMobile.any()){
    	$(".scrollTonav").show();
    	window.onscroll = function(e) {    		
			display_camion_accion(window.pageXOffset);
		}		        
    }else{
    	$(".scrollTonav").hide();
    	var elem = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                var position = $(".front").position();    	
                integer_position_left = position.left*-1;                        
             	display_camion_accion(integer_position_left);
            } //end onScroll
            
        }); //end scroll invert
    }
    
    function display_camion_accion(integer_position_left){    	
		if(integer_position_left >= 4290 || integer_position_left > 13700 ){     //biogas 4310           	
					if(((open_section_name=="biogas" && integer_position_left > 8820)||(open_section_name=="yacimiento" && integer_position_left > 8805)||(open_section_name=="gasoducto" && integer_position_left > 8834)) && integer_position_left < 13700){ //no se ve el camion gasoducto 8820														
						if((open_section_name=="yacimiento" && integer_position_left > 13666) || integer_position_left > 13000){ 
							//SEGUNDO CAMION PARADO para comenazr							
							$("#truck-"+open_section_name).addClass('secondTruck-'+open_section_name+'-start');							
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');
							
						}else{ //PRIMER CAMION PARADO
							$("#truck-"+open_section_name).addClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();					
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
						}
					}
					else{ //segundo CAMION PARADO
						if((open_section_name=="yacimiento" && integer_position_left > 15169) || (open_section_name=="gasoducto" && integer_position_left > 15169) || (open_section_name=="biogas" && integer_position_left > 15310)){							
							$("#truck-"+open_section_name).addClass('secondTruck-'+open_section_name+'-stop');							
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');
						}else{ //CAMION RODANDO		 							
							if(!isMobile.any() || (isMobile.any() && integer_position_left > 14500) || ((isMobile.any() && integer_position_left > 5000) && (isMobile.any() && integer_position_left < 13000) )){
								$("#truck-"+open_section_name).hide();//addClass('truck-fixed');
								$("#truck-"+open_section_name+"-animated").show();
								$(".rueda").addClass("rueda_andando");
								$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
								$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');						
								$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
								$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							}
						}
					}
				}
		else{
					if(integer_position_left > 13700){  //CAMION RODANDO
							$("#truck-"+open_section_name).hide();//addClass('truck-fixed');
							$("#truck-"+open_section_name+"-animated").show();
							$(".rueda").addClass("rueda_andando");
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');
					}else{ //PRIMER CAMION PARADO 
						$("#truck-"+open_section_name).addClass('firstTruck-'+open_section_name+'-start');
						$("#truck-"+open_section_name).show();
						$("#truck-"+open_section_name+"-animated").hide();						
						$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');		
						$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
						$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
					}									
		}
    }
    //al detenerse el scroll paran las ruedas
	$(window).on("scrollstop", function(){
	   $(".rueda").removeClass("rueda_andando");	   
	});

	//click for open one process animation
	$(".view-process").click(function(){
		$(".camion-animated").hide();
		
		open_process($(this));
	});
	
	//click for open one process animation from actions at the end of each process
	$(".continue-process").click(function(){
		open_process($(this));
		
		if(isMobile.any()){
			$("html, body").animate({ scrollLeft: 0 }, "slow");
		}
		else{
			$(".scroll").css('left', 0);				
			$("html, body").animate({ scrollTop: 0 }, "slow");	
		}	 
		
		//let the first truck in place
		$("#truck-"+open_section_name).addClass('firstTruck-'+open_section_name+'-start');
		$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
	});
	
	
	
	//click for back to main menu
	$(".back-home").click(function(){				
		var id = $(this).attr( "id" ).split("-");
		
		$("#gnc-"+id[0]+"-firstsection").hide();
		$(".gnc-"+id[0]+"-landscape").hide();
		
		$(".screen-1").show();  //shows main screen
		
		$(window).disablescroll();
		$('body').css('overflow-y', 'hidden');
		
		eval("open_section_width="+open_section_name+"_width");		
	});
	
	//action called from the icons at the end of each process
	function open_process(this_object){
		var id = this_object.attr( "id" ).split("-");
		open_section_name = id[1];
		
		$(".camion").hide();
		
		$("#galileocss").attr("href", "assets/css/galileo-"+open_section_name+".css");
		$(".landscape-section").hide();
		$(".screen-3").hide();
		$("#gnc-"+open_section_name+"-firstsection").show();
		$(".gnc-"+open_section_name+"-landscape").show();
				
		$(".screen-1").hide(); //hides main screen		
						
		$(window).disablescroll("undo");
		$('body').css('overflow-y', 'auto');
				
		eval("open_section_width="+open_section_name+"_width");		
		
		set_width_scroll();			
	}
		 
});
