

<?php get_header(); ?>

<div class="todo">
  <div class="container">
    <div class="row">
      <?php
      $index = 0;
      $columns = 3;

      // Start the loop
      if( have_posts() ):

        while( have_posts() ): the_post();


      if (0 ===$index % $columns){
        ?>
        <div class="col-lg-4 col-md-6 col-sm12">
          <?php

        }
        ?>
              <?php get_template_part( 'post', get_post_format()) ?>
              <!-- <h3><?php the_title(); ?></h3> -->
        <?php
        $index ++;
        if (0!==$index && 0 ===$index % $columns){
          ?>
        </div>
        <?php
      }

      ?>



    <?php endwhile;

  endif;

  ?>
  </div>


  </div>
</div>



<?php get_footer(); ?>
