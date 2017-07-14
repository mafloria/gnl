/*
 * Galileo
 *
 * Copyright (c) 2017 
 * Date: July 12 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */

//document ready	
$(document).ready(function(){	
	
	//horizontal scroll
	 var elem = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            //height: $(window).innerHeight(),                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                //console.log(percent);
            }
        });
	
	//reveal screen elements
	window.sr = ScrollReveal(); 	
	sr.reveal('.screen2-txt', { origin:'top', duration: 400, delay: 10 });                       
        
//*********** window size to fix content	   
/*	setHeight();	
		  
	$(window).resize(function() {
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		
		$("#wrapper").css('height', windowHeight);
		$(".section").css('width', windowWidth);
		$(".section").css('height', windowHeight);
					
	};
	*/
//*********** end - window size to fix content
	
		 
});