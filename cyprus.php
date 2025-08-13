<?php
/*
 Template Name: Cyprus
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-violet">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Cyprus</h1>
      <p class="description">
      <h4>Cyprus is an island nation in the eastern Mediterranean Sea, rich in history, culture and diverse cuisine. Cyprus is a crossroads of civilizations where Greek, Turkish, Middle Eastern and European influences mix.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Cyprus--scaled.jpg' ); ?>"
  alt="Cyprus"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Historical Heritage</h3>
      <p>
      Cyprus has a rich history associated with the ancient Greeks, Romans, Byzantines, Crusaders and Ottomans. The island has preserved many monuments that reflect these eras.
      </p>
    </div>
    <div class="info-box">
      <h3>Bilingualism and tradition</h3>
      <p>
      The official languages are Greek and Turkish, depending on the region. Traditions include dancing (sirtaki), music and rituals such as Easter celebrations.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Paphos Archaeological Park</strong>: Includes ancient villas with magnificent mosaics, tombs of kings and amphitheaters.</li>
        <li><strong>Kourion</strong>: One of the most impressive ancient city-states with a Roman theater and baths.</li>
        <li><strong>Cyprus Museum (Nicosia)</strong>: The largest archaeological museum on the island, showing exhibits from the Neolithic to the Byzantine era.</li>
        <li><strong>Kolossi Castle (Limassol)</strong>: Medieval castle used by the Crusaders.</li>
        <li><strong>The ancient city of Salamis (Famagusta)</strong>: Ruins of an ancient city with mosaics, Roman baths and theaters.</li>
        <li><strong>Cyprus Wine Museum (Episkopi)</strong>: Tells about the history of winemaking on the island, which dates back thousands of years.</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Styrian pumpkin seed oil (Steirisches Kürbiskernöl)</strong>:A real delicacy and a symbol of the region. The oil with its bright nutty flavor is added to salads, soups and even desserts.</li>
        <li><strong>Kaiserschmarrn (Kaiserschmarrn)</strong>: A traditional dessert resembling a torn dough omelet sprinkled with powdered sugar and served with applesauce</li>
        <li><strong>Steirian Beef (Steirisches Rindfleisch)</strong>: A high quality meat that is often used for stews or soups.</li>
        <li><strong>Trout (Forelle)</strong>: Thanks to the mountain rivers, fresh trout is a popular dish in the restaurants of Lietzen.</li>
        <li><strong>Pumpkin soup (Kürbissuppe)</strong>: Made from local pumpkins and topped with pumpkin butter.</li>
        <li><strong>Strudel (Apfelstrudel)</strong>: Apple strudel remains one of the most famous Austrian pastries.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit- Spring (April-May) and fall (September-October) are the ideal time for a comfortable vacation.<br>
      • Features of local traditions :Respect local customs, especially in villages. Clothing should be modest when visiting religious places.<br>
      • What to bring: Commandaria local wine, lace products, olive oil and haloumi.<br>
      • Cyprus is a place where history, culture and natural beauty intertwine, offering an unforgettable vacation for travelers.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
  alt="Ireland bottom">
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