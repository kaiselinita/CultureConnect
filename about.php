<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<div class="site-wrapper about-page">

  <!-- Hero -->
  <section class="about-hero">
    <div class="about-hero__text">
      <h1>About Us</h1>
      <p>
      Culture Connect est une plateforme créée pour rassembler des personnes de différentes parties du monde autour de la culture, de l’art et d’intérêts communs.
      </p>
      <a href="<?php echo esc_url( home_url('/events/') ); ?>" class="btn-primary">
        Get Started
      </a>
    </div>
    <div class="about-hero__image">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/About2025-р.-13_42_20.png' ); ?>"
        alt="About Illustration"
      />
    </div>
  </section>

  <!-- Our Values -->
  <section class="values-section">
    <div class="values-image">
    <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-18_40_03.png' ); ?>"
        alt="Our Values Banner"
      />
    </div>
  </section>

  <!-- Предложения пользователей -->
  <section class="suggestion-form">
  <section class="have-idea">
    <h2 class="section-title">Have an Idea?</h2>
    <p class="section-subtitle">Suggest a blog post or event for Culture Connect.</p>
    <form method="post" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>">
      <div class="field-group">
        <label for="idea_title">Title</label>
        <input type="text" id="idea_title" name="idea_title" required>
      </div>
      <div class="field-group">
        <label for="idea_proposal">Proposal</label>
        <textarea id="idea_proposal" name="idea_proposal" rows="3" required></textarea>
      </div>
      <div class="field-group">
        <label for="idea_description">Short Description</label>
        <textarea id="idea_description" name="idea_description" rows="2" required></textarea>
      </div>
      <div class="field-group">
        <label for="idea_link">Link (optional)</label>
        <input type="url" id="idea_link" name="idea_link" placeholder="https://">
      </div>
      <button type="submit" class="btn-primary">Send Idea</button>
    </form>
    <?php
      if( ! empty( $_POST['idea_title'] ) ){
        
        echo '<p class="success-msg">Thank you! Your idea has been sent.</p>';
      }
    ?>
  </section>
  <div class="idea-divider">
  <img src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-19_51_30.png' ); ?>"
         alt="Divider">
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
        // Здесь можно добавить сохранение в базу или отправку на email
        echo '<p class="success-msg">Thank you for subscribing!</p>';
      } else {
        echo '<p class="error-msg">Please enter a valid email.</p>';
      }
    }
  ?>
</section>
</main>

</div>

<?php get_footer(); ?>



