

<?php get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

  <div class="container-fluid-alumnos">
    <!-- <h2 class="titulo2"><?php the_title(); ?></h2> -->
    <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
    <div class="row">
      <p><?php the_content(); ?></p>
      <div class="card" style="background-color: rgba(0, 0, 0, 0);">
        <img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/10/Vector.png" class="card-img" alt="...">
        <div class="card-img-overlay">

          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-expand-md navbar-light-3">
                  <div class="container-fluid justify-content-start">
                    <div class="nav justify-content-end">
                      <?php
                      wp_nav_menu( array(
                        'theme_location'    => 'secondary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'container-fluid',
                        'container_id'      => 'nav justify-content-end',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                      ?>
                    </div>
                  </div>

                </nav>
              </div>
            </div>

          </div>
        </div>

      </div>



    </div>
  </div>


  <!-- <div class="container">
  <div class="row">
  <div class="col">
  <h3 class="titulo3">alumnos</h3>
</div>
<div class="col">
<h3 class="titulo3">obra</h3>
</div>
<div class="col">
<h3 class="titulo3">presentación</h3>
</div>
<div class="col">
<h3 class="titulo3">investigación</h3>
</div>
</div>
</div>
<h5 class="card-title">Card title</h5>
<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<p class="card-text">Last updated 3 mins ago</p>
</div>
</div> -->

</div>


</div>




<?php endwhile;

endif;

?>
<?php get_footer(); ?>
