<?php
/**
 * Основной шаблон темы Culture Connect
 * Файл: wp-content/themes/cultureconnect/index.php
 */

get_header(); // подключаем header.php
?>

<main class="site-main">

  <?php
  // WP-шаблонная иерархия сама подберёт page-*.php, home.php и т.п.
  // Здесь просто выводим контент текущей страницы/записи
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  else :
    echo '<p>Контент не найден.</p>';
  endif;
  ?>

</main>

<?php
get_footer(); // подключаем footer.php

