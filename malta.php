<?php
/*
 Template Name: Malta
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-white">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Valletta, Malta</h1>
      <p class="description">
      <h4>Valletta, Malta is the capital of Malta, located on a small peninsula in the Mediterranean Sea. It is a museum city rich in history, culture and magnificent architecture and is a UNESCO World Heritage Site.</h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Malta--scaled.jpg' ); ?>"
  alt="Portugal"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Architecture</h3>
      <p>
      The city is dominated by Baroque architecture with elements of Renaissance and Mannerism. Narrow streets and houses with characteristic balconies create a unique look for the city.
      </p>
    </div>
    <div class="info-box">
      <h3>Cultural events</h3>
      <p>
      Malta International Art Festival: a celebration of theater, music and dance.
Fireworks Festival: a colorful show reflecting Maltese traditions.
Religious festivals: processions and celebrations in honor of patron saints.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>St. John's Co-Cathedral (St. John's Co-Cathedral)</strong>: One of the greatest examples of Baroque architecture. Inside is Caravaggio's masterpiece The Beheading of St. John the Baptist.</li>
        <li><strong>Grandmaster's Palace (Grandmaster's Palace)</strong>: The historic center of power, where you can see the armory and opulent halls.</li>
        <li><strong>National Museum of Archaeology</strong>: Located in a building from the age of the Knights. Exhibits cover Maltese history from the Neolithic to the Bronze Age.</li>
        <li><strong>Fort St. Elmo</strong>: A historic fortress that defended the city during the siege. Today it houses the National War Museum.</li>
        <li><strong>Upper Barrakka Gardens</strong>: A park with stunning views of the Grand Harbor and the Tri-Cities.</li>
        <li><strong>Manuel Theater</strong>: One of the oldest theaters in Europe, known for its acoustics and baroque finishes.</li>
        <li><strong>Casa Rocca Piccola</strong>:A private palace representing the life of the Maltese aristocracy.</li>
        
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Pastizzi</strong>:Layered pastries filled with ricotta or pea puree.</li>
        <li><strong>Fenek</strong>: Rabbit cooked in wine or stewed with vegetables. It is the national dish of Malta.</li>
        <li><strong>Kapunata</strong>: Maltese version of ratatouille with tomatoes, eggplant and capers.</li>
        <li><strong>Lampuki Pie</strong>: Fish pie with lampuki (local fish), spinach, cauliflower and nuts.</li>
        <li><strong>Minestra Soup (Minestra)</strong>: A thick vegetable soup, especially popular in winter.</li>
        <li><strong>Hobż biz-zejtom (Ħobż biż-Żejt)</strong>: Bread soaked in olive oil and topped with tomatoes, olives and anchovies.</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit : Spring and fall: mild weather and fewer tourists.<br>
      • Getting around: Public transportation, walking or water cabs are ideal for exploring Valletta.<br>
      • What to bring: Filigree jewelry, handmade glass, olive oil and local liqueurs.<br>
      • Valletta is a combination of history, art and maritime traditions that fascinates travelers from all over the world.</p>
  </section>

  <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09-1.png' ); ?>"
  alt="<Malta bottom">
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