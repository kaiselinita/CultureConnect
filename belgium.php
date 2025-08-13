<?php
/*
 Template Name: Belgium
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Brussels, Belgium</h1>
      <p class="description">
      <h4>Brussels, Belgium is not only the capital of the country, but also the center of the European Union, bringing together a rich history, diverse culture and gastronomic heritage. 
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Belgium--scaled.jpg' ); ?>"
  alt="Belgium"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Architecture</h3>
      <p>
      Brussels is known for its Art Nouveau buildings designed by Victor Horta. It is also home to ancient squares and modern structures such as the Atomium.
      </p>
    </div>
    <div class="info-box">
      <h3>Multilingualism and multiculturalism</h3>
      <p>
      French, Dutch and English are spoken in Brussels. It is a city with a diverse population where cultures intersect.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Royal Museum of Fine Arts of Belgium (KMSKB)</strong>: Extensive collection of Belgian and European paintings, including works by Rubens, Bruegel and Magritte.</li>
        <li><strong>Magritte Museum</strong>: Dedicated to René Magritte, one of the most famous Surrealists.</li>
        <li><strong>Belgian Comic Strip Center.</strong>: A unique museum dedicated to the history and art of Belgian comics.
</li>
        <li><strong>Museum of Musical Instruments (MIM)</strong>: An impressive collection of musical instruments from different eras and cultures.</li>
        <li><strong>Atomium</strong>: A symbol of Brussels, created for the 1958 World's Fair. Inside you can find exhibitions and a panoramic restaurant.
</li>
<li><strong>Brussels Beer Museum</strong>: Learn all about the rich history and tradition of Belgian brewing.</li>
        <li><strong>Maison du Roi (House of the King)</strong>: A museum on the Grand Place dedicated to the history of Brussels.pse of life in the country's past.
</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Waffles (Gaufres)</strong>: Brussels waffles are light, crispy and often served with fruit, whipped cream or chocolate.</li>
        <li><strong>Chocolate</strong>: Belgium is famous for its chocolate. Try famous brands such as Neuhaus, Godiva or Pierre Marcolini.</li>
        <li><strong>Mussels with fries (Moules-frites)</strong>: A national dish served in restaurants all over the city.
</li>
        <li><strong>Frites.</strong>: Fries are believed to have been invented in Belgium. Try them with different sauces at local stalls.</li>
        <li><strong>Boiled endive with ham (Chicons au gratin)</strong>: A popular homemade dish of endive baked with cheese and ham</li>
        <li><strong>Beer</strong>: Belgium produces hundreds of beers: Trappist, lambic, kriek (cherry beer) and more. Visit bars like Delirium Café to sample unique brews.</li>
        <li><strong>Cheese</strong>: Popular varieties include Herve and Chimay, which are often paired with beer.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit: spring and fall, when the weather is comfortable and there are fewer tourists.<br>
      • Shopping: Chocolate, beer mugs, lace and porcelain.<br>
      • Getting around: Brussels public transportation (metro, streetcars, buses) is convenient and well developed.<br>
      • Brussels charms with its cosmopolitan atmosphere, historical monuments and delicious cuisine.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09.png' ); ?>"
  alt="Belgium bottom">
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