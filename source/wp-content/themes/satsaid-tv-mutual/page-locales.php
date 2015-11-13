

<?php get_header(); ?>
<div id="locales-adheridos">

  <?if(have_posts()) : 
  while (have_posts()): the_post(); ?>

  <div class="container"> 

    <h1><?php the_title();?></h1>

    <hr class="hr-titulo">

    <div class="row">
      <div class="col-md-5"></div>

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

            <div class="col-md-10"></div>
           
         <?}
      ?>
      <div class="col-md-5"></div>
      <div class="clearfix"></div>
      <div class="col-md-5"></div>
        <?php 
         foreach ($categories as $category) {?>

            <div class="col-md-10">
              <h3><?php echo $category->name; ?></h3>
              <h5><a href="<?php echo get_term_link( $category ); ?>">Ver mas >></a></h4>
            </div>
           
         <?php
       }
      ?>



      <div class="col-md-5"></div>
    </div>
  </div>


  <?php endwhile; ?>
  <?php endif; ?>

</div>
<?php get_footer(); ?>