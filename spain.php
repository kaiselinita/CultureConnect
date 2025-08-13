<?php
/*
 Template Name: Spain
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Barcelona, CT, Spain</h1>
      <p class="description">
      <h4>Barcelona, Catalonia, Spain is a city of vibrant architecture, rich culture, exquisite cuisine and energetic atmosphere. It combines the legacy of Antoni Gaudi, the deep roots of Catalan identity and a warm Mediterranean vibe.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Spain--scaled.jpg' ); ?>"
  alt="Spain"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Catalan identity</h3>
      <p>
      Barcelona is the capital of the autonomous region of Catalonia, where residents are proud of their language, culture and traditions. Catalan is the official language, along with Spanish.
      </p>
    </div>
    <div class="info-box">
      <h3>Architectural heritage</h3>
      <p>
      The city is famous for its modernist architecture, especially Antoni Gaudi's creations such as the Sagrada Familia, Parc Güell and Casa Batlló.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Picasso Museum (Museu Picasso)</strong>: Dedicated to the early works of Pablo Picasso, showing his journey from realism to cubism.</li>
        <li><strong>Museu Nacional de Arte de Catalunya (MNAC)</strong>: Collection includes Romanesque, Gothic and contemporary Catalan art.</li>
        <li><strong>Fundació Joan Miró (Fundació Joan Miró)</strong>: Contemporary art museum dedicated to the work of one of Spain's leading surrealists.
</li>
        <li><strong>Casa Milà (La Pedrera)</strong>: A modernist building designed by Gaudí, with a museum dedicated to his work.</li>
        <li><strong>Camp Nou Experience.</strong>: The Barcelona Football Club Museum is a must-see for soccer fans.
</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Paella</strong>: A rice dish with seafood, chicken or vegetables.</li>
        <li><strong>Pa amb tomàquet.</strong>: Bread with tomato, garlic and olive oil, a simple but delicious local delicacy.</li>
        <li><strong>Escalivada.</strong>: A dish of roasted vegetables (eggplant, peppers, onions) served with olive oil.
</li>
        <li><strong>Crema Catalana</strong>: Catalan version of crème brûlée, with caramelized sugar on top.</li>
        <li><strong>Calçots</strong>: A type of green onion served with romesco sauce and usually eaten with the hands.</li>
        <li><strong>Sangria and cava</strong>: Popular drinks are fruit wine (sangria) and sparkling wine (cava).</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit - Spring and fall are ideal times to visit to avoid the summer heat.<br>
      • How to get around ?Barcelona has an excellent metro and bus system, and many places are within walking distance.<br>
      • What to bring?Catalan sweets, olive oil, wines, ceramics and souvenirs featuring Gaudi.<br>
      • Barcelona is a city that inspires. It is a place where historical grandeur blends harmoniously with modern creativity, creating a unique atmosphere for all who come here.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09.png' ); ?>"
  alt="Spain bottom">
</div>


 
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