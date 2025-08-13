<?php
/*
 Template Name: Portugal
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-white">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Lagos, Portugal</h1>
      <p class="description">
      <h4>Lagos, Portugal is a picturesque city in the Algarve region, famous for its stunning beaches, historical sites and maritime atmosphere. Lagos is a place where tradition meets modernity and Portuguese culture. </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Portugal.png' ); ?>"
  alt="Portugal"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Maritime history</h3>
      <p>
      Lagush is an important port of the era of the Great Geographical Discoveries. From here began expeditions of Portuguese sailors, including Henry the Navigator. The city’s history is closely linked to the sea, navigation and trade.
      </p>
    </div>
    <div class="info-box">
      <h3>Nature and tourism</h3>
      <p>
      Lagoush is known for its natural beauty: the picturesque cliffs, grottos and beaches such as Praia da Dona Ana are a hallmark of the region.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Museum of the Navigator (Museu Municipal Dr. José Formosinho)</strong>: Located in the historical center dedicated to the age of discovery. You can see the artifacts from the era of the great geographical discoveries, ancient navigation devices and works of art.</li>
        <li><strong>Church of St Anthony (Igreja de Santo António)</strong>: Part of the Formosinho museum, known for its luxurious baroque interior with gilt carving.</li>
        <li><strong>The first slave market in Europe (Mercado de Escravos)</strong>: This historical object tells the dark chapter of the story of Lagosta, where for the first time in Europe were sold African slaves. Now it’s a small museum dedicated to this topic.</li>
        <li><strong>Benagil Sea Caves</strong>: Although it is not a museum in the classical sense, excursions to sea grottos and caves offer a unique opportunity to get acquainted with the natural history of the region.</li>
        
        
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Fish and seafood</strong>:Lagouches are famous for fresh seafood dishes. Try grilled sardines (Sardinhas Assadas) or grilled squid (Lulas Grelhadas).</li>
        <li><strong>Chestnut House (Cataplana de Marisco)</strong>: The traditional dish of the region is a seafood stew with vegetables, prepared in special copper dishes.</li>
        <li><strong>Bacalau (Bacalhau)</strong>: Salted cod, which is prepared in hundreds of ways. One of the popular options is a braw (with onion, potatoes and eggs).</li>
        <li><strong>Persepolis (Percebes)</strong>: Sea Anglerfish, an unusual and expensive delicacy of the region.</li>
        <li><strong>Almond and figs sweets</strong>: In the Algarve, desserts such as Doqueses de Amendóia (Doce de Amêndoa) or Fig sweets are popular.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • How to get there: Lagouches is easily accessible by train or bus from Faro, Lisbon or other cities in the Algarve.<br>
      • Best time to visit: Spring and autumn are the optimal seasons to avoid crowds of tourists and enjoy the mild weather.<br>
      • What to bring: Traditional pottery, local wine, almond sweets and Portuguese marjoram marshmallows.<br>
      • Lagoa is the ideal place for those who want to combine nature, history and a taste of authentic Portuguese cuisine.</p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09.png' ); ?>"
  alt="Portugal bottom">
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