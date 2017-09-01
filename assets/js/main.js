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
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};
	//console.log("mobile:"+isMobile.any());
	//*********** window size to fix content
	var windowHeight = $(window).innerHeight();
	var windowWidth = $(window).innerWidth();	
	var open_section_width = $(".gnc-biogas-landscape").width();
	var open_section_name = "biogas";
	var plus_width = 0; //for some mobiles is needed because the srceen distribution
	
	setHeight();
		  
	/*$(window).resize(function() {
		setHeight();
	});*/	
	//adjust sections to the browser height
	function setHeight() {	
		//section 1, 2, 3 fixt to windows size		
		$('.screen-1').css('height', windowHeight);		
		if(isMobile.any()){
			$('.screen-1').css('width', (windowWidth*mobile_multiplier));
			$("#mobilecss").attr("href", "assets/css/mobile.css?v=0.82");
			$(".hand-instruction").show();
			plus_width = 1000;
		}else{
			$('.screen-1').css('width', windowWidth);
		}
		//total_width = (windowWidth*3)+$(".gnc-biogas-landscape").width()+$(".gnc-yacimiento-landscape").width()+$(".gnc-gasoducto-landscape").width();		
		set_width_scroll();
	}
	
	function set_width_scroll(){
		console.log("SET WITH "+open_section_name+" SCROLL: open_section_width: "+windowWidth+"+"+open_section_width);
		$(".front").css('width', windowWidth+open_section_width+440+plus_width);
		$('#outer-container').css('height', (windowWidth+open_section_width+440+plus_width)+'px');	//prev body
	}
	//********************** end windows size
	
	
	//horizontal scroll
	 var elem = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            //height: $(window).innerHeight(),  // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                //console.log(percent);
                
                /*tmp = $('#track_moving').attr('data-appear-left-offset');*/
                tmp = Math.floor((777 - $(window).innerWidth()) * percent) * -1; 
                var position = $(".front").position();
                //console.log("position lef: "+(position.left*-1));
                integer_position_left = position.left*-1; 
                if(integer_position_left >= 4350 || integer_position_left > 13700 ){                	
					if(integer_position_left > 8880 && integer_position_left < 13700){ //no se ve el camion
						//$(".camion-section").hide();												
						if(integer_position_left > 13000){ //SEGUNDO CAMION PARADO
							//console.log("if interno hide");
							$("#truck-"+open_section_name).addClass('secondTruck-'+open_section_name+'-start');
							//$("#truck-"+open_section_name).removeClass('truck-fixed');
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');
						}else{ //PRIMER CAMION PARADO
							//console.log("ifelse interno hide");						
							$("#truck-"+open_section_name).addClass('firstTruck-'+open_section_name+'-stop');
							//$("#truck-"+open_section_name).removeClass('truck-fixed');
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();					
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
						}
					}
					else{ //segundo CAMION PARADO
						if(((open_section_name=="yacimiento" || open_section_name=="gasoducto") && integer_position_left > 15169) || (open_section_name=="biogas" && integer_position_left > 15483)){//biogas=15483  yacimiento=15169 gasoducto=15169
							$("#truck-"+open_section_name).addClass('secondTruck-'+open_section_name+'-stop');
							//$("#truck-"+open_section_name).removeClass('truck-fixed');
							$("#truck-"+open_section_name).show();
							$("#truck-"+open_section_name+"-animated").hide();							
							$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');
							$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-start');
						}else{ //CAMION RODANDO		 
							//console.log("else2 interno show");
							//$(".camion-section").show();
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
				else{
					//console.log("else externo hide");							
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
						//$("#truck-"+open_section_name).removeClass('truck-fixed');
						$("#truck-"+open_section_name).show();
						$("#truck-"+open_section_name+"-animated").hide();						
						$("#truck-"+open_section_name).removeClass('firstTruck-'+open_section_name+'-stop');		
						$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-start');
						$("#truck-"+open_section_name).removeClass('secondTruck-'+open_section_name+'-stop');
					}									
				}				
            } //end onScroll
            
        });        
	$(window).on("scrollstop", function(){
	   $(".rueda").removeClass("rueda_andando");	   
	});

	//click for open one process animation
	$(".view-process").click(function(){
		open_process($(this));
				
		//console.log("OJO -- open_section_width: "+$("#bgimage-"+open_section_name).width());
		
		/*console.log(".scroll: "+$(".scroll").scrollTop() + " body: "+$("body").scrollTop() + " Wrapper:"+$(".wrapper").scrollTop());			
		console.log($(".front").css('left'));*/ 
	});
	
	//click for open one process animation from actions at the end of each process
	$(".continue-process").click(function(){
		open_process($(this));
		
		$(".scroll").css('left', 0);				
		$("html, body").animate({ scrollTop: 0 }, "fast");		 
		
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
				
		open_section_width = $("#bgimage-"+open_section_name).width(); //$(".gnc-biogas-landscape > img").width();
		//console.log("BACK open_section_width: "+$(".gnc-"+open_section_name+"-landscape").width());
	});
	
	function open_process(this_object){
		var id = this_object.attr( "id" ).split("-");
		open_section_name = id[1];				
		
		$("#galileocss").attr("href", "assets/css/galileo-"+open_section_name+".css");
		$(".landscape-section").hide();
		$(".screen-3").hide();
		$("#gnc-"+open_section_name+"-firstsection").show();
		$(".gnc-"+open_section_name+"-landscape").show();
				
		$(".screen-1").hide(); //hides main screen		
						
		$(window).disablescroll("undo");
		$('body').css('overflow-y', 'auto');
				
						
		//console.log("OJO 1 --  image_width: "+$(".gnc-"+open_section_name+"-landscape").width());
		open_section_width = $(".gnc-"+open_section_name+"-landscape").width(); //$("#bgimage-"+open_section_name).width(); //$(".gnc-"+open_section_name+"-landscape > img").width();		
		
		set_width_scroll();	
	}
		 
});
