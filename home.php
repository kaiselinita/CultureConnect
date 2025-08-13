<?php 
/*
 Template Name: Home page
*/
get_header(); ?>



  <main class="home-page">
  <div class="site-wrapper">

  <section class="hero">
    <div class="hero-text">
      <h1>Connect with people. Discover cultures.</h1>
      <p>Découvrez des cultures diverses et <br>créez des liens à travers le monde.</br><br></br></p>
      <a href="<?php echo site_url('/events'); ?>" class="btn-primary">Get Started</a> 
    </div>
    <div class="banner1-img">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-21_15_36.png' ); ?>"
  alt="Banner 1"
/>

    </div>
  </section>

  <!-- About Us -->
  <section class="about-us">
    <div class="about-text">
      <h2>About Us</h2>
      <p>Culture Connect se consacre à la <br>promotion des échanges culturels et de la compréhension.</br><br> Nous fournissons des ressources et des histoires qui</br> vous aideront à explorer les traditions de différentes cultures.</br></p>
    </div>
    <div class="about-img">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-21_13_37.png' ); ?>"
  alt="Banner 2"
/>
    </div>
  </section>

  <!-- Explore Cultures -->
  <section class="explore-cultures">
  <h2>Explore Cultures</h2>
  <div class="cards-grid">
    <?php
    $countries = [
      [
        'slug'    => 'greece',
        'name'    => 'Greece',
        'desc'    => 'Greece, cradle of Western civilization and home to ancient ruins.',
        'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Greece--scaled.jpg',
      ],
      [
        'slug'    => 'ireland',
        'name'    => 'Ireland',
        'desc'    => 'County Clare is a picturesque region on the west coast of Ireland.',
        'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Ireland-scaled.jpg',
      ],
      [
        'slug'    => 'portugal',
        'name'    => 'Portugal',
        'desc'    => 'Lagos, Portugal is a picturesque seaside town in the Algarve region.',
        'img_url' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Portugal.png',
      ],
    ];
    $bg_colors = ['#EDF7F1','#E4DDF0','#FFFFFF'];
    ?>

    <?php foreach ( $countries as $i => $c ): 
      $color = $bg_colors[ $i % count( $bg_colors ) ];
    ?>
      <div class="event-card" style="background-color: <?php echo esc_attr( $color ); ?>;">
        <img
          src="<?php echo esc_url( $c['img_url'] ); ?>"
          alt="<?php echo esc_attr( $c['name'] ); ?>"
        />
        <h3><?php echo esc_html( $c['name'] ); ?></h3>
        <p><?php echo esc_html( $c['desc'] ); ?></p>
        <a href="<?php echo esc_url( site_url( '/' . $c['slug'] ) ); ?>" class="learn-more">
          Learn More →
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<br><br>
<?php
// Четыре карточки из вашего статического примера
$cards = [
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/Знімок-екрана-2025-08-04-о-14.18.27.png',
    'alt'   => 'Guide',
    'title' => 'A Guide to French Etiquette',
    'date'  => 'April 11, 2025',
    'link'  => 'https://www.afscv.org/blog/guide-to-french-etiquette/',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-pixabay-415582-scaled.jpg',
    'alt'   => 'Diwali',
    'title' => 'Celebrating Diwali. Festival of Lights',
    'date'  => 'September 1, 2025',
    'link'  => 'https://kids.nationalgeographic.com/pages/article/diwali',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-kevin-yung-2152346613-32237361-scaled.jpg',
    'alt'   => 'Traditions',
    'title' => 'Traditions Around the World',
    'date'  => 'February 5, 2024',
    'link'  => 'https://www.tomedes.com/translator-hub/24-cultural-traditions-around-world',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-cottonbro-4252138-scaled.jpg',
    'alt'   => 'Dishes',
    'title' => 'Dishes around the world',
    'date'  => 'May 29, 2024',
    'link'  => 'https://www.en-vols.com/en/taste/gastronomy/most-popular-dishes-world/',
  ],
];
?>

<section class="new-blog-section">
  <h2 class="new-blog-header">From the Blog</h2>
  <div class="new-posts-grid">
    <?php foreach ( $cards as $card ) : ?>
      <article class="new-blog-card">
        <div class="new-card-image">
          <img
            src="<?php echo esc_url( $card['image'] ); ?>"
            alt="<?php echo esc_attr( $card['alt'] ); ?>"
          />
        </div>
        <h3 class="new-card-title">
          <?php echo esc_html( $card['title'] ); ?>
        </h3>
        <p class="new-card-date">
          <?php echo esc_html( $card['date'] ); ?>
        </p>
        <a
          href="<?php echo esc_url( $card['link'] ); ?>"
          class="new-card-link"
          target="_blank"
          rel="noopener"
        >
          <?php echo esc_html( $card['link'] ); ?>
        </a>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
   id="learn-more-blog"
   class="btn-primary">
  Learn More
</a>

    

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
