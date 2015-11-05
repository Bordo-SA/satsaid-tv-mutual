<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
	
	<nav class="navbar navbar-default"></nav>
    <nav id="site-navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">  
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img src="<? echo THEME_URL; ?>/imgs/logo.png"></a>
	    </div>
	  
	  <div id="main-navbar-collapse" class="collapse navbar-collapse">
		  

			
		  <ul class="nav navbar-nav pull-right">
		    	<li><a href="#"><i class="fa-search fa pull-right open-search-overlay"></i></a></li>
		    	<li><a href="#"><i class="fa-facebook fa pull-right"></i></a></li>
		   </ul>

		   
			<!-- Overlay Search Form -->
		   <div class="overlay overlay-data">
		      <button type="button" class="overlay-close"><i class="fa fa-close fa-x5"></i></button>
		      <?php get_search_form(true); ?>
		    </div>

			

			<!-- Menu Secundario -->
		  <?php wp_nav_menu( array( 
		  	'theme_location' 	  => 'secundary',
		  	'container' 		    => '',
		  	'container_class' 	=> '',
		  	'container_id'    	=> '',
		  	'menu_class'      	=> 'nav navbar-nav pull-right',
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
			
			<!-- Menu principal -->
		    <?php wp_nav_menu( array( 
		  	'theme_location' 	  => 'primary',
		  	'container' 		    => '',
		  	'container_class' 	=> '',
		  	'container_id'    	=> '',
		  	'menu_class'      	=> 'nav navbar-nav pull-right',
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
			

		    
	    	
		

		</div>



	  </div>
	</nav><!-- #site-navigation -->



