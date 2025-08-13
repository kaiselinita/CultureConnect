<?php
/**
 * Template Name: Conditions Générales
 */
get_header();
?>

<div class="site-wrapper conditions-page">
  <main>

    <!-- ========== CONDITIONS INTRO ========== -->
    <section class="conditions-intro">
      <h1>Conditions Générales</h1>
      <ol>
        <br>
        <li>
          <strong>Objet des Conditions Générales</strong>
          <p>Les présentes Conditions Générales d’Utilisation (ci-après « CGU ») régissent l’accès et l’utilisation du site web “Culture Connect” La plateforme a pour objectif de fournir des informations culturelles, de présenter des événements et de favoriser la découverte de traditions et pratiques locales à travers le monde.</p>
        </li>
        <li>
          <strong>Acceptation des Conditions</strong>
          <p>En accédant au site et en utilisant ses services, l’utilisateur accepte pleinement et sans réserve les présentes CGU. En cas de désaccord avec tout ou partie des dispositions, l’utilisateur doit cesser immédiatement d’utiliser le site.</p>
        </li>
        <li>
          <strong>Utilisation de la Plateforme</strong>
          <p>L’utilisateur s’engage à utiliser la plateforme dans le respect des lois et réglementations en vigueur.
<br>Tout comportement offensant, diffamatoire, frauduleux ou contraire à l’esprit de “Culture Connect” est strictement interdit.
 <br>L’utilisateur s’abstient de publier ou de transmettre tout contenu illégal, inapproprié ou portant atteinte aux droits d’autrui.</p>
        </li>
        <li>
          <strong>Propriété Intellectuelle</strong>
          <p>L’ensemble des contenus présents sur la plateforme (textes, images, logos, graphiques, vidéos, etc.) est protégé par les lois relatives à la propriété intellectuelle.
<br>Toute reproduction, représentation, modification ou exploitation non autorisée des contenus est strictement interdite, sauf autorisation préalable et écrite de “Culture Connect”.</p>
        </li>
        <li>
          <strong>Protection des Données Personnelles</strong>
          <p>Dans le cadre de l’abonnement à la newsletter, "Culture Connect" collecte et traite certaines données personnelles (notamment adresse e-mail) conformément au Règlement Général sur la Protection des Données (RGPD).
<br>Les données ne sont utilisées qu’aux fins d’envoi d’informations et ne sont jamais transmises à des tiers sans consentement préalable.
<br>L’utilisateur dispose d’un droit d’accès, de rectification et de suppression de ses données, qu’il peut exercer en contactant : contact@culture-connect.gmail.com.</p>
        </li>
        <li>
          <strong>Responsabilité et Limitation de Responsabilité</strong>
          <p>“Culture Connect” met tout en œuvre pour assurer l’exactitude et la mise à jour des informations publiées, mais ne peut garantir l’absence totale d’erreurs, d’omissions ou d’interruptions de service.
<br>L’utilisateur reconnaît utiliser le site sous sa seule responsabilité.
<br>“Culture Connect” ne pourra être tenu responsable des dommages directs ou indirects résultant de l’utilisation du site ou des informations qui y sont fournies.</p>
        </li>
      </ol>
    </section>

    <div class="conditions-bottom-img">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_46_24.png' ); ?>"
  alt="Conditions bottom">
</div>
<li>

    <!-- ========== STAY CONNECTED FORM ========== -->
    <section class="stay-connected">
      <h2>Stay connected</h2>
      <form method="post" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>">
        <input type="email" name="subscriber_email" placeholder="Email" required>
        <button type="submit">Sign Up</button>
      </form>
      <?php
      if ( isset($_POST['subscriber_email']) ) {
        $email = sanitize_email( $_POST['subscriber_email'] );
        if ( is_email($email) ) {
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
