
$(document).ready(function(){



	// ##################### Abrir y ccerrar searchform  #########################//

 	$( ".open-search-overlay" ).click(function(e) {
 		e.preventDefault();
        $( ".overlay" ).addClass('overlay-open');
  	});

	$( ".overlay-close" ).click(function(e) {
		e.preventDefault();
      	$( ".overlay" ).removeClass( 'overlay-open' ); 
  	});




});
		     