<?php
/*
 Template Name: Ireland 
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-violet">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Country Clare, Ireland</h1>
      <p class="description">
      <h4>County Clare, Ireland is a picturesque region known for its stunning natural scenery, rich history, traditional music and unique Irish cuisine. Here are the highlights of the region's culture, museums and national cuisine.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Ireland-scaled.jpg' ); ?>"
  alt="Ireland"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Traditional Music</h3>
      <p>
      Clare is considered the capital of traditional Irish music. The town of Doolin is particularly famous for its pubs, which regularly feature live music using instruments such as the fiddle, banjo and Irish flute.
      </p>
    </div>
    <div class="info-box">
      <h3>Irish language and literature</h3>
      <p>
      The Irish (Gaelic) language is preserved as an important element of the culture. Irish is still spoken in some areas of Clare.
The literary traditions of Ireland are reflected in the region through legends and folklore.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Clare Regional Museum (Clare Museum).</strong>: Located in the town of Ennis. Here you can learn about the history of the region from ancient to modern times, including artifacts from the Great Famine and the Irish War of Independence.</li>
        <li><strong>Doolin Heritage Museum</strong>: Dedicated to the history and cultural heritage of the fishing village of Doolin, including its musical traditions.</li>
        <li><strong>Aillwee Cave and Birds of Prey Center</strong>: In addition to exploring the karst cave, here you can learn about the lives of local birds such as eagles and falcons.
</li>
        <li><strong>Burren Center</strong>: A center dedicated to the unique geological phenomenon of the region, the Burren Limestone Plateau, which forms a lunar landscape and contains traces of ancient settlements.</li>
        <li><strong>Bunratty Castle</strong>: A medieval castle with a restored interior and historic village where you can immerse yourself in 16th century Irish life.yourself in 16th century Irish life.
</li>
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Irish Stew</strong>: A traditional Irish stew of lamb or beef with potatoes, carrots and onions. Often served with homemade bread.</li>
        <li><strong>Soda Bread.</strong>: A delicious and simple bread made with baking soda. It is served with almost all dishes.
</li>
        <li><strong>Boxty</strong>: Potato flatbread made from grated potatoes and often served with butter or sour cream.
</li>
        <li><strong>Seafood Chowder</strong>: A creamy soup with local fish and seafood such as salmon, mussels and crab. Often served with a slice of soda bread.</li>
        <li><strong>Black Pudding and White Pudding</strong>: Popular meat sausages that are part of a traditional Irish breakfast.</li>
        <li><strong>Irish Whiskey and Craft Beer</strong>: The region is famous for craft breweries and whiskey. Don't miss the opportunity to sample local brews.</li>
        <li><strong>Rhubarb Pie.</strong>: A traditional dessert favored for its combination of sweet dough and sour rhubarb.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Be sure to visit Doolin or Liscannor to enjoy traditional pub music.<br>
      • Try the walking trails around the Cliffs of Moher or Burren to feel connected to nature.<br>
      • If you have time, stop by the village of Kilfenora to see the ancient Irish crosses.<br>
      • County Clare is the perfect blend of Irish tradition, natural beauty and hospitality.
    </p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
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