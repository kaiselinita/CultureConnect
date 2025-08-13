<?php
/*
 Template Name: Italy 
*/
get_header();
?>
<body>
<div class="page-wrapper">
<div class="site-wrapper country-page country-violet">

  
  <section class="intro-section">
    <div class="text-col">
      <h1>Positano, Italy</h1>
      <p class="description">
      <h4>Positano, Italy is a gem of the Amalfi Coast, known for its stunning architecture, colorful slope-side homes, unique culture, and delicious cuisine. Here's what you should know about the culture, museums and food in Positano and Italy in general.
      </h4></p><br>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="back-button">
        Back to Events
      </a>
    </div>
    <div class="image-col">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/07/Postino.png' ); ?>"
  alt="Ireland"
/>
    </div>
  </section>

 
  <section class="info-grid">
    <div class="info-box">
      <h3>Local lifestyle</h3>
      <p>
      Life in Positano is calm and measured. The town is known for its artistic atmosphere, having attracted artists, writers and celebrities since the 19th century.
The streets are full of boutiques selling fashionable clothes and handmade shoes, especially sandals made by local craftsmen.
      </p>
    </div>
    <div class="info-box">
      <h3>Festivals</h3>
      <p>
      Religious festivals are an important part of the culture, such as the Festival of the Madonna Assunta, celebrated on August 15 with traditional processions and fireworks.
      </p>
    </div>
    <div class="info-box">
      <h3>Museum</h3>
      <ul>
        <li><strong>Church of Santa Maria Assunta</strong>: The main attraction of Positano. It is famous for its dome decorated with majolica and the icon of the Black Madonna, which is considered miraculous.</li>
        <li><strong>Villa Romana del Gallo Lungo</strong>: Ruins of an ancient Roman villa steeped in history. Here you can see the remains of mosaics and wall paintings.</li>
        <li><strong>Sentiero degli Dei (Path of the Gods)</strong>: Not a museum, but an iconic natural attraction. It is a hiking trail with spectacular views of the coast and the Mediterranean Sea.
</li>
        <li><strong>Archaeological museums of the region</strong>: For a deeper dive into history, visit the museums in nearby Sorrento or Pestum, featuring ancient Greek and Roman artifacts.</li>
        
      </ul>
    </div>
    <div class="info-box">
      <h3>National Food</h3>
      <ul>
        <li><strong>Limoncello</strong>:A liqueur made from lemons grown on the Amalfi Coast. It is served chilled as a digestif.</li>
        <li><strong>Scialatielli ai Frutti di Mare</strong>: Traditional pasta with seafood: mussels, squid, shrimp and other seafood. The flavor is enriched with fresh herbs and lemon.
</li>
        <li><strong>Pizza Napoletana</strong>: An hour's drive from Positano is Naples, the birthplace of pizza. Be sure to try it in the local restaurants, which use traditional recipes and wood-fired ovens.
</li>
        <li><strong>Sfogliatella</strong>: A layer of ricotta cream flavored with lemon or orange zest.</li>
        <li><strong>Delizia al Limone</strong>: A lemon dessert that symbolizes Positano. It is an airy pastry with lemon liqueur cream.
</li>
      </ul>
    </div>
  </section>

 
  <section class="travel-tips">
    <h2>Travel Tips</h2>
    <p>
      • Best time to visit: Spring and fall, when there are fewer tourists and the weather is mild.<br>
      • Transportation: Positano is a city for walking. Prepare yourself for the many stairs and narrow streets.<br>
      • Local produce: Buy souvenirs such as lemon liqueur, painted pottery and handmade leather goods.<br>
      • Positano is the perfect place to enjoy Italian culture, cooking and inspiring scenery.
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