<section id="subscribe">
  <h2>Stay Connected</h2>
  <form method="post">
    <input type="email" name="subscriber_email" required placeholder="Enter your email">
    <button type="submit">Subscribe</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscriber_email'])) {
      $email = sanitize_email($_POST['subscriber_email']);
      if (is_email($email)) {
          global $wpdb;
          $wpdb->insert("{$wpdb->prefix}cc_subscribers", ['email' => $email]);
          echo '<p class="success">Thank you for subscribing!</p>';
      } else {
          echo '<p class="error">Please enter a valid email address.</p>';
      }
  }
  ?>
</section>
