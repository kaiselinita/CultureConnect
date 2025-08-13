<?php
/*
 Template Name: Blog page
*/
get_header();
?>
<div class="site-wrapper">
<main class="blog-page">

<section class="new-blog-section">
  <!-- 1) Заголовок по центру -->
  <h2 class="new-blog-header">From the Blog</h2>
  
<?php

// Массив с данными карточек
$cards = [
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/Знімок-екрана-2025-08-04-о-14.18.27.png',
    'alt'   => 'Number 1',
    'title' => 'A Guide to French Etiquette',
    'date'  => 'April 11, 2025',
    'link'  => 'https://www.afscv.org/blog/guide-to-french-etiquette/',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-pixabay-415582-scaled.jpg',
    'alt'   => 'Number 2',
    'title' => 'Celebrating Diwali. Festival of Lights',
    'date'  => 'September 1, 2025',
    'link'  => 'https://kids.nationalgeographic.com/pages/article/diwali',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-kevin-yung-2152346613-32237361-scaled.jpg',
    'alt'   => 'Number 3',
    'title' => 'Traditions Around the World',
    'date'  => 'February 5, 2024',
    'link'  => 'https://www.tomedes.com/translator-hub/24-cultural-traditions-around-world',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/pexels-cottonbro-4252138-scaled.jpg',
    'alt'   => 'Number 4',
    'title' => 'Dishes around the world',
    'date'  => 'May 29, 2024',
    'link'  => 'https://www.en-vols.com/en/taste/gastronomy/most-popular-dishes-world/',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Знімок-екрана-2025-06-09-о-13.00.33.png',
    'alt'   => 'Number 5',
    'title' => 'The Biggest Travel Trends in 2025',
    'date'  => 'January 3, 2025',
    'link'  => 'https://www.cntraveler.com/story/the-biggest-travel-trends-to-expect-in-2025?utm_source=chatgpt.com',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Знімок-екрана-2025-06-09-о-13.02.09.png',
    'alt'   => 'Number 6',
    'title' => 'The magic of cultural experiences',
    'date'  => 'September 6, 2024',
    'link'  => 'https://edition.cnn.com/travel/article/a-cultural-travel-experience/index.html',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Знімок-екрана-2025-06-09-о-13.08.19.png',
    'alt'   => 'Number 7',
    'title' => 'Guide to Making Local Friends',
    'date'  => 'May 14, 2024',
    'link'  => 'https://www.lonelyplanet.com/articles/guide-to-making-local-friends',
  ],
  [
    'image' => 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Знімок-екрана-2025-06-09-о-13.12.49.png',
    'alt'   => 'Number 8',
    'title' => '33 of the best bucket list holidays',
    'date'  => 'May 29, 2024',
    'link'  => 'https://www.thetimes.co.uk/article/ultimate-travel-bucket-list-h63bmp60k?utm_source=chatgpt.com',
  ],
];
?>

<section class="new-blog-section">
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

  <!-- Блок подписки -->
  <section class="stay-connected">
    <h2>Stay Connected</h2>
    <p>Subscribe to receive updates about events, cultures, and travel tips from around the world.</p>

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
    </div>
</main>

<?php get_footer(); ?>
