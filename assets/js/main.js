/*
 * Galileo
 *
 * Copyright (c) 2017 
 * Date: July 12 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */

//document ready	
$(document).ready(function(){	
	
	$(window).disablescroll({handleWheel:false});
	
	//*********** window size to fix content
	var windowHeight = $(window).innerHeight();
	var windowWidth = $(window).innerWidth();
	var biogas_active = 0;
	var yacimiento_active = 0;
	var gasoducto_active = 0;
	var open_section_width = $(".gnc-biogas-landscape").width();
	
	setHeight();	
		  
	$(window).resize(function() {
		setHeight();
	});	
	//adjust sections to the browser height
	function setHeight() {	
		//section 1, 2, 3 fixt to windows size		
		$('.section').css('height', windowHeight);		
		$('.section').css('width', windowWidth);		
		total_width = (windowWidth*3)+$(".gnc-biogas-landscape").width()+$(".gnc-yacimiento-landscape").width()+$(".gnc-gasoducto-landscape").width();
		$(".wrap").css('width', total_width);
		set_width_scroll();
	}
	
	function set_width_scroll(){
		$(".front").css('width', windowWidth+open_section_width);
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
                console.log("position lef: "+(position.left*-1));
                integer_position_left = position.left*-1; 
                if(integer_position_left >= 4900 || integer_position_left >= 14200 ){                	
					if(integer_position_left > 9600 && integer_position_left < 14200){ 
						//$(".camion-section").hide();
						$("#camion-section").removeClass("camion-section");
						$("#camion").addClass('camion-stop');
					}
					else{ 
						$(".camion-section").show();
						$("#camion-section").addClass("camion-section");
						$("#camion").removeClass('camion-stop');						
					}
					
					//$('#camion').css("margin-left", tmp); //3370 6212
					//$('#camion').animate({left:(position.left*-1)-2900},100,"linear");
				}
				else{
					$(".camion-section").hide();									
				}
				
				if(integer_position_left >= open_section_width){
					console.log("stop wheel");
					$(window).disablescroll();
				}else{
					$(window).disablescroll("undo");
				}
            }
        });        
	
	//click for open one process animation
	$(".view-process").click(function(){
		var id = $(this).attr( "id" ).split("-");
		
		$("#galileocss").attr("href", "assets/css/galileo-"+id[1]+".css");
		$(".landscape-section").hide();
		$(".screen-3").hide();
		$("#gnc-"+id[1]+"-firstsection").show();
		$(".gnc-"+id[1]+"-landscape").show();
		
		$(".screen-1").hide();
		/*var tmp = $(".front").position();
		$(".scroll").css('left', -(tmp.left+windowWidth));*/
		
		$(window).disablescroll("undo");
		
		//determine what section is opened
		eval(id[1]+"_active = 1");		
		open_section_width = $(".gnc-"+id[1]+"-landscape").width();
		
		set_width_scroll(); 
	});
	
	//click for back to main menu
	$(".back-home").click(function(){				
		var id = $(this).attr( "id" ).split("-");
		
		$("#gnc-"+id[0]+"-firstsection").hide();
		$(".gnc-"+id[0]+"-landscape").hide();
		
		$(".screen-1").show();
		
		$(window).disablescroll();
		
		//setup active section to cero
		biogas_active = 0;
		yacimiento_active = 0;
		gasoducto_active = 0;
		
		open_section_width = 0;
	});
		 
});