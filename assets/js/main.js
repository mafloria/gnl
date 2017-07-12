/*
 * Galileo
 *
 * Copyright (c) 2017 
 * Date: July 12 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */

//document ready	
$(document).ready(function(){	
//*********** window size to fix content	   
	setHeight();	
		  
	$(window).resize(function() {
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		
		$("#wrapper").css('height', windowHeight);
		$(".section").css('width', windowWidth);
					
	};
//*********** end - window size to fix content

//*********** scrolls to an href section exactly - just for biggest navegation
    $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);		      
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({		          		         
	          scrollLeft: target.offset().left
            }, 1000);//1000
                    	        	        			    
		    return false;
		  }//end if target length
		}//end if location
	});
//*********** end - scrolls to an href section exactly	

//********** actions
	$("#ben-main-menu").click(function(){
		$(".submenu").toggle('slow');
	});			
	
//********** end - actions	
	
		 
});