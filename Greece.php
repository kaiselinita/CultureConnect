<?php
/*
 Template Name: Greece
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page">

  <!-- 1. Hero: текст слева, фото справа -->
  <section class="intro-section">
    <div class="text-col">
      <h1>Athens, Greece</h1>
      <p class="description">
      <h4>Athens, Greece is the cradle of Western civilization and democracy. This city combines ancient ruins, a modern energetic culture and a stunning cuisine that delights with its flavor and variety.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Greece--scaled.jpg' ); ?>"
  alt="Morocco"
/>
    </div>
  </section>

  <!-- 2. Четыре блока 2×2 -->
  <section class="info-grid">
    <div class="info-box">
      <h3>Maritime history</h3>
      <p>
      Athens, named after the goddess Athena, represents protection and wisdom. The city is full of monuments associated with ancient Greek myths.
      </p>
    </div>
    <div class="info-box">
      <h3>Historical Heritage</h3>
      <p>
      Athens is the center of ancient Greece, a city of philosophy, science and art. Socrates, Plato and Aristotle lived here.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Acropolis Museum.</strong>: A modern museum at the foot of the Acropolis that houses ancient Greek artifacts, including the famous Parthenon marbles.</li>
        <li><strong>National Archaeological Museum (National Archaeological Museum)</strong>: One of the largest museums in the world with an extensive collection of ancient Greek sculptures, vases and jewelry.</li>
        <li><strong>Benaki Museum</strong>: Presents art and artifacts from all eras of Greek history, from ancient to modern times.</li>
        <li><strong>Museum of Cycladic Art.</strong>: Dedicated to the art and culture of the Bronze Age Cycladic civilization.</li>
        <li><strong>The Agora of Athens (Ancient Agora)</strong>: An archaeological complex with a museum where you can see the ruins of an ancient market place.</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Gyros</strong>: Greek-style shawarma - grilled meat served in flatbread with tzatziki, potatoes and vegetables.</li>
        <li><strong>Moussaka</strong>: A casserole of eggplant, potatoes and minced meat covered with creamy béchamel sauce.</li>
        <li><strong>Souvlaki</strong>: Skewered meat, often served with flatbread and sauce.</li>
        <li><strong>Dolma (Dolmadakia)</strong>: Grape leaves stuffed with rice, herbs and sometimes meat.</li>
        <li><strong>Choriatiki Salata (Choriatiki Salata)</strong>: Traditional Greek salad with tomatoes, cucumbers, onions, olives and feta cheese.</li>
        <li><strong>Tzatziki (Tzatziki)</strong>: Refreshing sauce made of yogurt, cucumber and garlic.</li>
        <li><strong>Baklava</strong>: Puff pastry dessert with nuts and honey syrup.</li>
        <li><strong>Greek wine and ouzo</strong>: Try the local wines or the aniseed vodka ouzo.</li>
      </ul>
    </div>
  </section>

  <!-- 3. Большой блок Travel Tips -->
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit Spring (April-May) and fall (September-October) are the ideal times to visit Athens.<br>
      • What to bring ? Olive oil, honey, spices, Greek sweets and pottery.<br>
      • How to get around?Athens has a convenient metro system, but many sights can be gotten around on foot.<br>
      • Athens is a city where the past meets the present. Every corner is steeped in history and every restaurant offers delicious food.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
  alt="Greece bottom">
</div>


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

</div><!-- /.site-wrapper -->
</div>
</body>
<?php get_footer(); ?>