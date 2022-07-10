

<?php

/*
Template Name: obras
*/
get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>


    <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
    <!-- <div class="frame-604">
      <div class="frame-600">
        <div class="frame-601"> -->
          <h3 class="titulo3-medium" style="color:red"><?php the_title(); ?></h2>
            <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
          <!-- </div>
          <div class="frame-599"> -->
             <?php the_content(); ?>
          <!-- </div>

      </div>
    </div> -->




  <?php endwhile;

endif;

?>
<?php get_footer(); ?>
