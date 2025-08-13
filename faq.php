<?php
/**
 * Template Name: FAQ Page
 */
get_header();
?>

<div class="site-wrapper faq-page">
  <main class="faq-page__content">

    <!-- Заголовок -->
    <h1 class="faq-title">Need Help? We’ve Got Answers.</h1>

<!-- Верхний баннер (над заголовком) -->
<div class="faq-banner faq-banner--top">
<img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_08_02.png' ); ?>"
  alt="help1"
/>

    <!-- Аккордеон -->
    <section class="faq-accordion">
      <details>
        <summary>Qu’est-ce que Culture Connect et que proposez-vous ?</summary>
        <p>
        Culture Connect est une plateforme web qui aide les gens à s'informer sur les cultures de différents pays, à découvrir des événements internationaux et à s'engager dans des échanges culturels. Nous proposons des articles, des recueils de traditions, des conseils de voyage et des informations sur des événements qui vous permettent d'en apprendre davantage sur le monde et de vous sentir plus proche des autres.
        </p>
      </details>

      <details>
        <summary>Quelle est la mission de Culture Connect ?</summary>
        <p>
          Notre mission est de promouvoir la compréhension interculturelle en rapprochant les personnes grâce à des contenus enrichissants et des événements locaux. Nous croyons que le partage des traditions et des savoir-faire crée des ponts entre les communautés.
        </p>
      </details>

      <details>
        <summary>Ai-je besoin d’un compte pour accéder au contenu ?</summary>
        <p>
          Non, la plupart de notre contenu est accessible gratuitement. Vous pouvez toutefois créer un compte pour personnaliser votre fil d’actualité, sauvegarder vos articles favoris et recevoir des recommandations d’événements.
        </p>
      </details>

      <details>
        <summary>À qui s’adresse votre plateforme ?</summary>
        <p>
          À toute personne curieuse du monde : voyageurs, étudiants, passionnés de culture ou simplement citoyens du monde en quête d’inspiration. Notre objectif est de rassembler un public diversifié autour de l’amour du voyage et des découvertes.
        </p>
      </details>

      <details>
        <summary>Comment puis-je contacter l’équipe ?</summary>
        <p>
          Vous pouvez nous écrire à <a href="mailto:contact@culture-connect.example.com">contact@culture-connect.example.com</a> 
      </details>
      
<details>
  <summary>Comment puis-je m’abonner à la newsletter&nbsp;?</summary>
  <p>
    Rien de plus simple : rendez-vous en bas de chaque page, saisissez votre e-mail
    dans le champ « Stay connected » et cliquez sur « Sign Up ». Vous recevrez ensuite
    un e-mail de confirmation.  
  </p>
</details>

<details>
  <summary>Comment proposer une suggestion d'article ou de destination&nbsp;?</summary>
  <p>
    Vous avez une idée d’article ou souhaitez nous recommander un événement ?  
    Envoyez-nous un message via le formulaire de contact (page « About Us ») en  
    précisant votre proposition : titre, description courte et lien(s) éventuel(s).  
    Notre équipe vous répondra sous 48 h.
  </p>
</details>
    </section>

 
    <div class="faq-banner faq-banner--bottom">
      <img
  src="<?php echo esc_url( 'https://cultureconnect.emu.isfsc.be/wp-content/uploads/2025/08/ChatGPT-Image-5-серп.-2025-р.-14_11_09.png' ); ?>"
  alt="People bottom">
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
