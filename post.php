
<div class="card-completa">
  <div class="card-padding">
    <div class="card-img-cat">
      <div class="card-img">
        <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
      </div>
      <div class="card-categorias">
        <?php
        // foreach((get_the_category()) as $category) {
        //   echo $category->cat_name . ' ';
        //
        //   }
        // $cat = get_the_category(); echo $cat[0]->cat_name . ' ';
        // $cat = get_the_category(); echo $cat[1]->cat_name . ' ';
        // $cat = get_the_category(); echo $cat[2]->cat_name . ' ';

        foreach (get_the_category() as $category) {

          if ( $category->name == 'Redes Sociales') {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/48.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Experiencia' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/49.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Información' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/50.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Conectividad' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/53.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Problemáticas Sociales' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/54.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Identidad' ) {
            // echo '<a href="' . get_category_link($category->term_id) . '">' .$category->name . '</a><br />'; //Markup as you see fit
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/55.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Colectivo' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/56.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Conexión' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/57.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Percepción' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/58.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Virtualidad' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/51.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Educación' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/52.png" alt="" width=32px>'. ' ';
          }
          if ( $category->name == 'Concientización' ) {
            echo '<img src="http://192.168.64.3/Artimanas/wp-content/uploads/2021/11/24.png" alt="" width=32px>'. ' ';
          }
        }
        ?>

      </div>
    </div>
    <div class="card-info">
      <h3 class="titulo3-medium"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>

  </div>
