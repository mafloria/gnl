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
	
	//*********** window size to fix content
	var windowHeight = $(window).innerHeight();
	var windowWidth = $(window).innerWidth();	
	var open_section_width = $(".gnc-biogas-landscape").width();
	var open_section_name = "biogas";
	
	setHeight();
		  
	$(window).resize(function() {
		setHeight();
	});	
	//adjust sections to the browser height
	function setHeight() {	
		//section 1, 2, 3 fixt to windows size		
		$('.screen-1').css('height', windowHeight);		
		$('.screen-1').css('width', windowWidth);		
		//total_width = (windowWidth*3)+$(".gnc-biogas-landscape").width()+$(".gnc-yacimiento-landscape").width()+$(".gnc-gasoducto-landscape").width();		
		set_width_scroll();
	}
	
	function set_width_scroll(){
		console.log("SET WITH SCROLL: open_section_width: "+windowWidth+"+"+open_section_width);
		$(".front").css('width', windowWidth+open_section_width);
		$('body').css('height', (windowWidth+open_section_width)+'px');	
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
                if(integer_position_left >= 4900 || integer_position_left >= 14200 ){                	
					if(integer_position_left > 9600 && integer_position_left < 14200){ //no se ve el camion
						//$(".camion-section").hide();												
						if(integer_position_left > 13000){
						//	$("#truck").addClass('truck-fixed');
							$("#truck").addClass('secondTruck-'+open_section_name+'-stop');
							$("#truck").removeClass('secondTruck-'+open_section_name+'-start');
						}else{
							//console.log("if interno hide");						
							$("#truck").removeClass('truck-fixed');					
							$("#truck").removeClass('firstTruck-'+open_section_name+'-start');
							$("#truck").addClass('firstTruck-'+open_section_name+'-stop');
						}
					}
					else{ //se ve el camnio
						//console.log("else interno show");
						//$(".camion-section").show();
						$("#truck").addClass('truck-fixed');
						$("#truck").removeClass('firstTruck-'+open_section_name+'-stop');
						$("#truck").removeClass('firstTruck-'+open_section_name+'-start');						
						$("#truck").removeClass('secondTruck-'+open_section_name+'-stop');
						$("#truck").removeClass('secondTruck-'+open_section_name+'-start');
					}
				}
				else{
					//console.log("else externo hide");
					//$(".camion-section").hide();					

					if(integer_position_left > 14200){
							$("#truck").addClass('truck-fixed');
							$("#truck").removeClass('secondTruck-'+open_section_name+'-start');
							$("#truck").removeClass('secondTruck-'+open_section_name+'-stop');
					}else{
						$("#truck").addClass('firstTruck-'+open_section_name+'-start');
						$("#truck").removeClass('firstTruck-'+open_section_name+'-stop');		
					}									
				}				
            }
        });        
	
	//click for open one process animation
	$(".view-process").click(function(){
		var id = $(this).attr( "id" ).split("-");
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
		open_section_width = $("#bgimage-"+open_section_name).width(); //$(".gnc-"+open_section_name+"-landscape > img").width();		
		
		console.log("OJO -- open_section_width: "+$("#bgimage-"+open_section_name).width());		
		set_width_scroll(); 
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
		console.log("BACK open_section_width: "+$(".gnc-"+open_section_name+"-landscape").width());
	});
		 
});