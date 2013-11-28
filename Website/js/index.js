$(document).ready(function(){
	// Cache the Window object
	$window = $(window);
	
	window.onscroll = scroll;
	
	function scroll () {
		/*if (true){
			document.getElementById(nav_bar).style.top='0px';	
		}
		else {
			
		}*/
	}
                
   $('section[data-type="background"]').each(function(){ 
   // Iterate over all background types on the page
   // That's everything with the 'data-type='background'' tag
     	var $bgobj = $(this); // assigning the object
                    
      	$(window).scroll(function() {
					  
		  // Scroll the background at var speed
		  // the yPos is a negative value because we're scrolling it UP!								
		  var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		  
		  // Put together our final background position
		  var coords = '50% '+ yPos + 'px';
  
		  // Move the background
		  $bgobj.css({ backgroundPosition: coords });
		  
		  
		}); // window scroll Ends
   });	        
   $('div[data-type="_header"]').each(function(){ 
   // Iterate over all background types on the page
   // That's everything with the 'data-type='background'' tag
     	var $bgobj = $(this); // assigning the object
                    
      	$(window).scroll(function() {
					  
		  // Scroll the background at var speed
		  // the yPos is a negative value because we're scrolling it UP!	
		  if ($window.scrollTop() > 150) {
		  		$bgobj.css({ top: '-150px' });
		  }
		  else {
		  		$bgobj.css({ top: -$window.scrollTop() });
		  }
		  /*var yPos = ($window.scrollTop() / 0.5); 								
		  yPos = '0px'; 
		  $bgobj.css({ top: yPos });*/
		  
		  
		}); // window scroll Ends
   });	
   

}); 


/* 
 * Create HTML5 elements for IE's sake
 */
document.createElement("article");
document.createElement("section");