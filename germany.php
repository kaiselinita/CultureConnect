<?php
/*
 Template Name: Germany
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-white">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Cochem, RP, Germany</h1>
      <p class="description">
      <h4>Cochem, Rhineland-Palatinate, Germany is a picturesque town on the banks of the Moselle River, known for its historic atmosphere, medieval castle, winemaking traditions and cultural attractions. </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Germany--scaled.jpg' ); ?>"
  alt="Germany"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Medieval history</h3>
      <p>
      The town dates back to Roman times and has long been an important point on the trade routes along the Moselle River. Its architecture, especially the Reichsburg Castle, reflects the rich history of the region.
      </p>
    </div>
    <div class="info-box">
      <h3>Winemaking traditions</h3>
      <p>
      Rhineland-Palatinate is one of Germany's leading wine regions. Wine is an integral part of the culture here and wine festivals are the highlight of the year.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Reichsburg Castle (Reichsburg Cochem)</strong>: The city's main attraction, reconstructed in neo-Gothic style. The castle offers guided tours, theme parties, medieval banquets and beautiful views of the Moselle Valley.</li>
        <li><strong>Senfmühle Cochem (Senfmühle Cochem Museum)</strong>: A unique museum dedicated to mustard production. Here you can taste and buy rare varieties and learn the history of this product.</li>
        <li><strong>Museum of Wine Tradition (Weinmuseum Winningen)</strong>: Located nearby. Dedicated to the history of winemaking in the region, with exhibitions on ancient wine-making methods.</li>
        <li><strong>Open Air Museum (Freilichtmuseum Roscheider Hof)</strong>: Located a little further from Cochem, showcases the traditional life and agriculture of the region.</li>
        <li><strong>Romantic museums and galleries</strong>: Small galleries with modern and classical art can be found in and around Cochem.</li>
        
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Wines of Mosel</strong>:White wine made from Riesling grapes is the region's pride. It has a characteristic fruity flavor and often accompanies local dishes.</li>
        <li><strong>Flammkuchen (Flammkuchen)</strong>: A thin crust filled with sour cream, onions and bacon. Similar to pizza, but with a German flavor.</li>
        <li><strong>Mosel trout (Mosel Forelle)</strong>: Fish caught from the Mosel River, served fried or smoked.</li>
        <li><strong>Handkäse (Handkäse cheese)</strong>: Traditional sour milk cheese, often served with onions, vinegar and oil.</li>
        <li><strong>Rheinische Schnitzel (Rheinischer Schnitzel)</strong>: A variation of the classic schnitzel, often with a sauce based on local wine.</li>
        <li><strong>White wine soup (Weinsuppe)</strong>: A thick soup flavored with white wine, cream and spices.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • How to get there: Easily accessible by train from Koblenz or Trier.<br>
      • Best time to visit: From spring to fall to enjoy nature and wine festivals.<br>
      • What to bring: Local wine, mustard from Senfmühle and souvenirs of Reichsburg Castle.<br>
      • Cochem is a combination of charming German countryside, medieval heritage and wine culture, making it a great travel destination.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
  alt="Germany bottom">
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