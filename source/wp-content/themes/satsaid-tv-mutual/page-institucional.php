
<?php get_header(); ?>
<div id="institucional">

	<?
	if(have_posts()) : 
	while (have_posts()): the_post(); ?>

	<div class="container">	

		<h1><?php the_title();?></h1>

		<hr class="hr-titulo">

		<div class="row">
			<div class="col-md-20 "><?php 

				if ( has_post_thumbnail() ) {
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

					<img src="<?php echo $url; ?>" alt="<?php the_title();?>" />
				<?php
				}
				else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/imgs/logo.png" />';
				} 




			?></div>
			<div class="col-md-30 col-md-offset-10"><?php the_content(); ?></div>
		</div>

	</div>

	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>