

<?php get_header(); ?>

<?php


if( have_posts() ):

  while( have_posts() ): the_post();  ?>



  <div class="container">
    <div class="row align-items-start">
      <div class="col">
        One of three columns
      </div>
      <div class="col">
        One of three columns
      </div>
      <div class="col">
        One of three columns
      </div>
  </div>


  <?php get_template_part( 'content', get_post_format()) ?>


  </div>
<?php endwhile;

endif;

?>
<?php get_footer(); ?>
