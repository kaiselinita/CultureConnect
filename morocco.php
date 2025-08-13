<?php
/*
 Template Name: Morocco
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page">

  <!-- 1. Hero: текст слева, фото справа -->
  <section class="intro-section">
    <div class="text-col">
      <h1>Marrakesh, Morocco</h1>
      <p class="description">
      <h4>Marrakech, Morocco, is a vibrant city that is famous for its rich culture, history, traditions and great cuisine. Here are the highlights of the culture, museums and national cuisine that are worth knowing:
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Marrakesh-Morocco-scaled.jpg' ); ?>"
  alt="Morocco"
/>
    </div>
  </section>

  <!-- 2. Четыре блока 2×2 -->
  <section class="info-grid">
    <div class="info-box">
      <h3>Architecture</h3>
      <p>
      Marrakech is known for its traditional buildings decorated in the style of Moorish architecture: arches, carved wooden panels, and tile mosaics.
The Old City, or medina, is a UNESCO World Heritage Site. In the center is Jemaa el Fna Square, filled with street performers, vendors, and cafes.
      </p>
    </div>
    <div class="info-box">
      <h3>Religion & Traditions</h3>
      <p>
      Islam plays a central role in the country's culture, which is reflected in clothing, food, architecture and daily life.
Hammam (traditional bath) and tea ceremonies are important elements of Moroccan life.
      </p>
    </div>
    <div class="info-box">
      <h3>Museums</h3>
      <ul>
        <li><strong>YSL Museum</strong>: Dedicated to the work of French fashion designer Yves Saint Laurent, who drew inspiration from Moroccan culture. It is also home to the Jardin Majorelle, an oasis of unique plants and rich colors.</li>
        <li><strong>Dar Si Saïd</strong>: Traditional carpets, jewelry & ceramics.</li>
        <li><strong>Marrakech Museum</strong>: Islamic & Berber art.</li>
        <li><strong>Maison de la Photographie</strong>: Historic Moroccan photos.</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Tajine</strong>: The main symbol of Moroccan cuisine. This dish is cooked in a clay pot with meat, vegetables and spices such as turmeric, cinnamon and saffron.</li>
        <li><strong>Couscous</strong>: A wheat flour cereal served with meat, vegetables and often with sweet additions like raisins and caramelized onions.</li>
        <li><strong>Harira</strong>: A traditional Moroccan soup often served for Ramadan dinner. It consists of lentils, chickpeas, tomatoes, spices and chunks of meat.</li>
        <li><strong>Pastilla (B'stilla)</strong>: A unique dish combining sweet and salty flavors: puff pastry with meat (usually chicken or pigeon) sprinkled with powdered sugar and cinnamon.</li>
        <li><strong>Moroccan mint tea</strong>: A real ritual that accompanies all meals. The tea is brewed with green tea and fresh mint, served hot and very sweet.</li>
        <li><strong>Street food</strong>: Jemaa el Fna Square offers fried snails, bagrir pancakes, kebabs and freshly squeezed juices.</li>
      </ul>
    </div>
  </section>

  <!-- 3. Большой блок Travel Tips -->
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Wander the Menara Gardens & Ben Yousef Madrasa for history.<br>
      • Haggle at Souk el Bahia for spices, oils & textiles.<br>
      • Try local street snacks at Jemaa el Fna.<br>
      • Embrace both ancient rituals and modern cafes.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
  alt="Morocco bottom">
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

