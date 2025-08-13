<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
  }

  .site-header {
    background-color: #FE7059;
    padding: 2rem 3rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .site-header {
  position: sticky;   /* или fixed, если хотите «прилипать» совсем по-другому */
  top: 0;             /* прижимает шапку к верхней границе окна */
  z-index: 1000;      /* чтобы она была над всеми остальными элементами */
  width: 100%;        /* чтобы шапка растягивалась на всю ширину экрана */
  background-color: #FE7059; /* ваш цвет */
}


  /* Логотип «вне» флекса */
  .logo {
    position: absolute;
    left: 0rem;
    top: 50%;
    transform: translateY(-50%);
  }
  .logo img {
    height: 90px;
    display: block;
  }

  /* Меню по центру */
  .main-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 2rem;
  }
  .main-menu a {
    text-decoration: none;
    color: white;
    font-weight: 700;
    font-size: 1rem;
    transition: opacity 0.3s ease;
  }
  .main-menu a:hover {
    opacity: 0.8;
  }
</style>

</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/imgculture/logo.png" alt="Culture Connect Logo">
    </a>
  </div>
  <nav class="main-menu">
    <?php
    if ( has_nav_menu('primary') ) {
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu',   
            'depth'          => 1,
            'fallback_cb'    => false,
        ]);
    } else { ?>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/events' ) ); ?>">Events</a></li>
            <li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a></li>
        </ul>
    <?php } ?>
</nav>

</header>


