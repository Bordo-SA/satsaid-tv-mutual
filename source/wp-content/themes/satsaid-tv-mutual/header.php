<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
	

	<body <?php body_class(); ?>>
		<!-- Este menu es para dar margen por el fixed -->
	<nav class="navbar navbar-default"></nav>
		<!-- Este es el menu posta -->
    <nav id="site-navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">  
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img src="<? echo THEME_URL; ?>/imgs/logo.png"></a>
	      <a class="navbar-brand  iconos" href="#"><i class="fa-search fa open-search-overlay"></i></a>
		 <a class="navbar-brand  iconos" href="#"><i class="fa-facebook fa "></i></a>
	      
	    </div>

	  	<script type="text/javascript">
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
		</script>
	    
	  
	  <div id="main-navbar-collapse" class="collapse navbar-collapse">
		  
		<div class="collapse-container">
			
		  
					<!-- Menu principal -->
			    <?php wp_nav_menu( array( 
				  	'theme_location' 	  => 'primary',
				  	'container' 		    => '',
				  	'container_class' 	=> '',
				  	'container_id'    	=> '',
				  	'menu_class'      	=> 'nav navbar-nav',
				  	'menu_id'         	=> '',
				  	'echo'            	=> true,
				  	'fallback_cb'     	=> 'wp_page_menu',
				  	'before'          	=> '',
				  	'after'           	=> '',
				  	'link_before'     	=> '',
				  	'link_after'      	=> '',
				  	'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
				  	'depth'           	=> 0,
				  	'walker'          	=> ''
				    )); ?>
			

					<!-- Menu Secundario -->
			  	<?php wp_nav_menu( array( 
				  	'theme_location' 	  => 'secundary',
				  	'container' 		    => '',
				  	'container_class' 	=> '',
				  	'container_id'    	=> '',
				  	'menu_class'      	=> 'nav navbar-nav',
				  	'menu_id'         	=> '',
				  	'echo'            	=> true,
				  	'fallback_cb'     	=> 'wp_page_menu',
				  	'before'          	=> '',
				  	'after'           	=> '',
				  	'link_before'     	=> '',
				  	'link_after'      	=> '',
				  	'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
				  	'depth'           	=> 0,
				  	'walker'          	=> ''
				    )); ?>
			
				<a class="navbar-brand  iconos" href="#"><i class="fa-search fa open-search-overlay"></i></a>
				<a class="navbar-brand  iconos" href="https://www.facebook.com/tvmutual" target="_blank"><i class="fa-facebook fa "></i></a>
			


			</div>

		</div>



	  </div>
	</nav><!-- #site-navigation -->
	
	
		   
	<!-- Overlay Search Form -->
   <div class="overlay overlay-data">
      <button type="button" class="overlay-close"><i class="fa fa-close fa-3x"></i></button>
      <?php get_search_form(true); ?>
    </div>


