<?php
/*
 Template Name: Denmark
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-white">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Copenhagen, Denmark</h1>
      <p class="description">
      <h4>Copenhagen, Denmark is a charming capital city that combines a rich history with a modern lifestyle. The city is known for its architecture, eco-friendliness, unique culture and culinary traditions. </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Denmark--scaled.jpg' ); ?>"
  alt="Denmark"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Architecture</h3>
      <p>
      The city has a mix of old buildings and modern masterpieces. The historic Nyhavn district with its colorful houses is a symbol of Copenhagen. Modern buildings such as the Opera House and the Black Diamond (royal library) show the progressive side of the city.
      </p>
    </div>
    <div class="info-box">
      <h3>Hygge</h3>
      <p>
      A central concept of Danish culture is coziness, comfort and enjoying the little things. Copenhagen has many cafes and nooks that are perfect for hygge.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Rosenborg Castle</strong>: A majestic Renaissance castle housing royal regalia and treasures.</li>
        <li><strong>National Museum of Denmark</strong>: The country's main historical museum where you can learn about the Vikings, Danish culture and art.</li>
        <li><strong>Louisiana Museum of Contemporary Art</strong>: Located outside the city limits, but it is one of the best places for connoisseurs of modern art and sculpture.</li>
        <li><strong>Carlsberg Glyptothek</strong>: A museum dedicated to ancient art as well as collections of French and Danish paintings.</li>
        <li><strong>Tivoli Gardens.</strong>: One of the oldest amusement parks in the world. It is part of the city's cultural heritage.</li>
        <li><strong>Round Tower (Rundetårn)</strong>: A 17th century observatory with stunning views of the city.</li>
        <li><strong>Christiania</strong>: A free neighborhood with an atmosphere of creativity, street art and alternative culture.</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Smørrebrød</strong>:Traditional open sandwiches with various fillings: herring, pate, cheese, meat or fish.</li>
        <li><strong>Frikadeller</strong>: Meat meatballs served with potatoes and sauce. This is a classic home-cooked dish.</li>
        <li><strong>Flæskesteg</strong>: Fried pork loin with a crispy crust, popular at Christmas</li>
        <li><strong>Rugbrød</strong>: A dark rye bread that is the base of many dishes.</li>
        <li><strong>Æbleskiver</strong>: Small round pancakes, often served with jam and powdered sugar.</li>
        <li><strong>New Scandinavian cuisine</strong>: Copenhagen is the capital of gastronomy. It's home to world-class restaurants like Noma that use local and seasonal ingredients.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit: May to September, when the weather is warm and daylight hours are long.<br>
      • Eco-friendly: Rent a bicycle to get a feel for the local rhythm.<br>
      • Souvenirs: Danish design, Royal Copenhagen porcelain or amberware.<br>
      • Must-try: stroll through Nyhavn, cruise the canals, and take in the atmosphere at Tivoli Parks.
      • Copenhagen is a place where coziness and progressiveness, tradition and modern trends come together.
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