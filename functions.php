<?php
// Подключаем стили темы корректно и с пробитием кэша
add_action('wp_enqueue_scripts', function () {
  // Если активна дочерняя тема — сначала стиль родителя
  if ( is_child_theme() ) {
    wp_enqueue_style(
      'parent-style',
      get_template_directory_uri() . '/style.css',
      [],
      filemtime( get_template_directory() . '/style.css' )
    );
  }

  // Основной стиль активной темы (для дочерней — это style.css дочерней темы)
  $child_css_path = get_stylesheet_directory() . '/style.css';
  wp_enqueue_style(
    'culture-connect-style',
    get_stylesheet_uri(),
    is_child_theme() ? ['parent-style'] : [],
    file_exists($child_css_path) ? filemtime($child_css_path) : null
  );
});

add_action('after_setup_theme', function () {
  register_nav_menus([
      'primary' => __('Primary Menu', 'cultureconnect'),
      // Можно и футер сразу:
      'footer'  => __('Footer Menu', 'cultureconnect'),
  ]);
});

  