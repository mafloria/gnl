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
            //height: $(window).innerHeight(),  // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                //console.log(percent);
            }
        });        
	
	//reveal screen elements
	window.sr = ScrollReveal(); 	
	//sr.reveal('.scroll', { duration: 2000 }, 50);
	sr.reveal('.hillType1', { origin:'top', duration: 400, delay: 1000 });	
	/*sr.reveal('.screen3-title', { origin:'top', duration: 400, delay: 1000 });
	//sr.reveal('.hill', { container: '.landscape-top', duration: 1400, delay: 1000 });        

	sr.reveal('.hill', { origin:'top', delay: 10000});
	sr.reveal('.tree', { origin:'bottom', delay: 10400});
*/
		 
});