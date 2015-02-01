$('document').ready(function () {

	//Show the SIDEBAR Menu on click
    $('.navbar-toggle').on('click', function () {
        $('.navbar-collapse').toggleClass('navbar-collapse-out navbar-collapse-in');
    });
    
    $('.player').on('click', function () {
    	$(this).toggleClass('player_in player_out');
		$('.spotify_player').toggleClass('spotify_player_in spotify_player_out');
		
    });
    
  //LOAD SPINNER - Fade out when content loaded on Frontpage!
    $(window).load(function() {
			// Animate loader off screen
			$(".spinner").fadeOut(300);
			$("#showpage").fadeIn(2000);
		});
   
		
	//Make Pagination load content without reloading page
	jQuery('#pagination a').live('click', function(e){ //check when pagination link is clicked and stop its action.
			e.preventDefault();
 
			var link = jQuery(this).attr('href'); //Get the href attribute
			jQuery('#ajaxcontent').fadeOut(500, function(){ //fade out the content area
				jQuery(".spinner").show(); // show the loader animation
				}).load(link + ' #main', function(){ jQuery('#ajaxcontent').fadeIn(500, function(){ //load data from the content area from paginator link page that we just get 				from the top
					jQuery(".spinner").hide(); //hide the loader
				
				}); 
			});		
		});
		
		
	// MAKE THE EVENT SEARCHBOX STICK ON TOP
		
		// Cache selectors for faster performance.
			var $window = $(window),
        	$searchevents = $('#search-events'),
        	$agendatop = $('.agendatop');

		// Run this on scroll events.
			$window.scroll(function() {
        	var window_top = $window.scrollTop();
        	var div_top = $agendatop.offset().top;
        	
        	if (window_top > div_top) {
            // Make the div sticky.
            $searchevents.addClass('fixedtop');
            $agendatop.height($searchevents.height());
        	}
        	else {
            // Unstick the div.
            $searchevents.removeClass('fixedtop');
            $agendatop.height(0);
        }
    });
    
});// END READY
