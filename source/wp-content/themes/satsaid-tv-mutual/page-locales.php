

<?php get_header(); ?>
<div id="locales-adheridos">

  <?if(have_posts()) : 
  while (have_posts()): the_post(); ?>

  <div class="container"> 

    <h1><?php the_title();?></h1>

    <hr class="hr-titulo">

    <div class="row">
      <div class="col-xs-5"></div>

      <?php 
         
         $args = array(
        'type'                     => 'locales-adheridos',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'tipo-de-local',
        'pad_counts'               => false 

      ); 
         $categories = get_categories( $args );

         foreach ($categories as $category) {?>

            <div class="col-xs-10"><img src="<?php echo THEME_URL.'/imgs/'.$category->slug.'.jpg'; ?>" alt="">
              <h4><?php echo $category->name; ?></h4>
              <h5><a href="<?php echo get_term_link( $category ); ?>">Ver mas >></a></h5>
           </div>
         <?}
      ?>
      <div class="col-xs-5"></div>
      

    </div>
  </div>


  <?php endwhile; ?>
  <?php endif; ?>

</div>
<?php get_footer(); ?>