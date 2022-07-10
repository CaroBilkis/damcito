

<?php get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

<?php echo do_shortcode("[p5js sketchfolder=RedArtimanas canvaswidth=100 canvasheight=41.2][/p5js]"); ?>

    <div class="frame-587">
      <div class="frame">
          <h1 class="titulo1"><?php the_title(); ?></h2>
      </div>
      <!-- <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div> -->
      <div class="frame-595">
        <?php the_content(); ?>
      </div>

    </div>




  <?php endwhile;

endif;

?>
<?php get_footer(); ?>
