<?php
/* Template Name: Events Page */
get_header();
?>
<div class="site-wrapper">
<main class="events-page">

  <!-- Баннер -->
  <section class="events-banner">
    <div class="banner-text">
      <h1>Events</h1>
      <p>Découvrez les diverses cultures et créez des liens à travers le monde. Explorez les événements culturels et les festivals qui se déroulent dans le monde entier.</p>
    </div>
    <div class="banner-image">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-19_01_04.png' ); ?>"
  alt="Banner"
/>
    </div>
  </section>

<!-- Сетка карточек (каждой кнопке — своя ссылка) -->
<section class="events-grid">
<?php
  // 1) У каждой страны есть свой 'url'
  //    Можно задать абсолютный адрес (https://...) или относительный (например, '/countries/greece/')
  $countries = [
    [
      'key'     => 'greece',
      'name'    => 'Greece',
      'desc'    => 'Greece, cradle of Western civilization and home to ancient ruins.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Greece--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/greece-2/', // ПРИМЕР: внутренняя страница
    ],
    [
      'key'     => 'ireland',
      'name'    => 'Ireland',
      'desc'    => 'County Clare is a picturesque region on the west coast of Ireland.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Ireland-scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/ireland-2/',
    ],
    [
      'key'     => 'portugal',
      'name'    => 'Portugal',
      'desc'    => 'Lagos, Portugal is a picturesque seaside town in the Algarve region.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Portugal.png',
      'url'     => 'https://cultureconnect.emu.isfsc.be/portugal-2/',
    ],
    [
      'key'     => 'morocco',
      'name'    => 'Morocco',
      'desc'    => 'Marrakech, Morocco is a vibrant city rich in culture, history and cuisine.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Marrakesh-Morocco-scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/morocco/',
    ],
    [
      'key'     => 'italy',
      'name'    => 'Italy',
      'desc'    => 'Positano, Italy is a gem of the Amalfi Coast with colorful cliff-side homes.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Postino.png',
      'url'     => 'https://cultureconnect.emu.isfsc.be/italy/',
    ],
    [
      'key'     => 'denmark',
      'name'    => 'Denmark',
      'desc'    => 'Copenhagen combines modern design with rich historical heritage.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Denmark--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/denmark-2/',
    ],
    [
      'key'     => 'belgium',
      'name'    => 'Belgium',
      'desc'    => 'Brussels is the heart of the EU, famous for Art Nouveau and chocolate.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Belgium--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/belgium-2/',
    ],
    [
      'key'     => 'austria',
      'name'    => 'Austria',
      'desc'    => 'Liezen, Austria is a charming Alpine town surrounded by the Alps.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Austria--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/austria-2/',
    ],
    [
      'key'     => 'germany',
      'name'    => 'Germany',
      'desc'    => 'Cochem, Germany is a picturesque town on the Moselle River.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Germany--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/germany-2/',
    ],
    [
      'key'     => 'spain',
      'name'    => 'Spain',
      'desc'    => 'Barcelona, Spain is a city of vibrant architecture and Mediterranean life.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Spain--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/spain-2/',
    ],
    [
      'key'     => 'cyprus',
      'name'    => 'Cyprus',
      'desc'    => 'Cyprus is an island in the eastern Mediterranean with rich history.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Cyprus--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/cyprus-2/',
    ],
    [
      'key'     => 'malta',
      'name'    => 'Malta',
      'desc'    => 'Valletta, Malta is a UNESCO Heritage city full of Baroque architecture.',
      'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Malta--scaled.jpg',
      'url'     => 'https://cultureconnect.emu.isfsc.be/malta-2/',
    ],
  ];

  // 2) Цвета фона по кругу — сохраняем дизайн
  $bg = ['#EDF7F1', '#E4DDF0', '#FFFFFF'];

  foreach ($countries as $i => $c):
    $color = $bg[$i % 3];

    // Подготовим корректный href:
    // - если начинается с "http", оставляем как есть (внешняя ссылка)
    // - если начинается со слэша, превращаем в абсолютный через home_url()
    $raw = trim($c['url']);
    if (preg_match('#^https?://#i', $raw)) {
      $href = $raw;
    } else {
      $href = home_url( $raw ); 
    }

    $is_external = (strpos($href, home_url()) !== 0);
    $target_attr = $is_external ? ' target="_blank" rel="noopener"' : '';
?>
  <div class="event-card" style="background-color: <?php echo esc_attr($color); ?>;">
    <img
      src="<?php echo esc_url($c['img_url']); ?>"
      alt="<?php echo esc_attr($c['name']); ?>"
      loading="lazy"
    />
    <h3><?php echo esc_html($c['name']); ?></h3>
    <p><?php echo esc_html($c['desc']); ?></p>

    <a href="<?php echo esc_url($href); ?>"
       class="learn-more learn-more--<?php echo esc_attr($c['key']); ?>"
       <?php echo $target_attr; ?>>
      Learn More →
    </a>
  </div>
<?php endforeach; ?>
</section>




  
<section class="stay-connected">
  <h2>Stay Connected</h2>
  <br>
  <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
    <input type="email" name="subscriber_email" placeholder="Enter your email" required>
    <button type="submit">Subscribe</button>
  </form>

  <?php
    if (isset($_POST['subscriber_email'])) {
      $email = sanitize_email($_POST['subscriber_email']);
      if (is_email($email)) {
        // Здесь можно добавить сохранение в базу или отправку на email
        echo '<p class="success-msg">Thank you for subscribing!</p>';
      } else {
        echo '<p class="error-msg">Please enter a valid email.</p>';
      }
    }
  ?>
</section>
</main>
  </div>
<?php get_footer(); ?>
