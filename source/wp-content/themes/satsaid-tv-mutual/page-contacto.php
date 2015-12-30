<?php get_header(); ?>

<div id="contacto">

	<?php if(have_posts()) : 
	while (have_posts()): the_post(); ?>

		<div class="container">	

				<h1><?php the_title();?></h1>

				<hr class="hr-titulo">

				<div class="row">
					<div class="col-sm-23 col-sm-offset-3">
						
							<?php the_content(); ?>

					</div>
					<div class="col-sm-26 col-sm-offset-7">

						<div id="map-canvas"></div> 
						<div class="pull-right">
							<h5>Quintino Bocayuva 105. CABA</h5>
							<h5>Lunes a viernes de 8 a 17 hs.</h5>
						</div>


					</div>
					
				</div>


		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>