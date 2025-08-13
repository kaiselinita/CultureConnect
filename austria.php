<?php
/*
 Template Name: Austria
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-violet">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Liezen,  Steiermark, Austria  </h1>
      <p class="description">
      <h4>Liezen, Styria, Austria is a small town located in the center of Austria, surrounded by the picturesque Alps. Liezen is the gateway to the natural beauty and cultural riches of the Styria region, known for its traditions, museums and cuisine.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Austria--scaled.jpg' ); ?>"
  alt="Ireland"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Holidays and traditions</h3>
      <p>
      Styria, like the rest of Austria, honors traditional holidays such as Christmas with fairs and Peasant Festivals, where people wear folk costumes and enjoy folk music.
      </p>
    </div>
    <div class="info-box">
      <h3>Traditional Austrian atmosphere</h3>
      <p>
      Lietzen is a cozy Alpine town with typical Austrian houses, a welcoming atmosphere and a traditional way of life.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Regional Museum Liezen (Heimatmuseum Liezen)</strong>: Explores the local history, culture and traditions of the region, including exhibits on agriculture and everyday life.</li>
        <li><strong>Alpine Culture Museum (Alpenmuseum)</strong>: Located nearby, in another Styrian town. It presents the history of people's life in the Alps, their customs and adaptation to the natural conditions.</li>
        <li><strong>Trauttmansdorf Castle Museum (Schloss Trautenfels)</strong>: A gem of the region, located near Lietzen. The museum features collections about the nature and culture of Styria, including archaeological finds, ethnography and modern art.</li>
        <li><strong>Altaussee Salt Mines (Salzwelten Altaussee)</strong>: A unique museum in the mountain dedicated to salt mining, which played an important role in the region's economy.</li>
        <li><strong>Steyrerai Museum</strong>: Styria's historical and cultural center showcasing the region's traditions, art and innovations.</li>
        
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
      • Best time to visit: spring and fall for hiking, winter for skiing.<br>
      • Transportation: Public transportation is convenient, but you may need a car to visit natural attractions.<br>
      • Souvenirs: Pumpkin butter, local wines and handicrafts.<br>
      • Liczen and its surroundings are enchanting with their tranquility, natural beauty and authenticity of Austrian culture.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09.png' ); ?>"
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