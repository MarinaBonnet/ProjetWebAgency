<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- SEO -->
<meta name="description" content="Code&Craft - Agence web hybride à Hourtin : sites vitrines, e-commerce, applications web et SEO premium.">
<meta name="keywords" content="agence web Hourtin, site vitrine, e-commerce, application web, SEO, Code&Craft">
<meta name="author" content="Code&Craft SAS">

<!-- Open Graph -->
<meta property="og:title" content="Code&Craft - Agence Web hybride">
<meta property="og:description" content="Créativité et expertise technique : sites vitrines, e-commerce, applications web et SEO premium.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://ton-domaine.com">
<meta property="og:image" content="https://ton-domaine.com/assets/logo/logo3d.png">
<meta property="og:locale" content="fr_FR">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Code&Craft - Agence Web hybride">
<meta name="twitter:description" content="Sites vitrines, e-commerce, applications web et SEO premium.">
<meta name="twitter:image" content="https://ton-domaine.com/assets/logo/logo3d.png">

<link rel="canonical" href="https://ton-domaine.com/">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="shortcut icon" href="/favicon.ico">

  <link rel="stylesheet" href="assets/css/main.css">
  @vite(['resources/sass/main.scss', 'resources/js/main.js'])

  <title>Code&Craft - Agence Web hybride </title>
</head>

<body>
  <!-- header  -->
  <header>
    <img src="{{ asset('assets/logo/logo3d.png') }}" alt="Logo 3D">


    <h1>Code&Craft</h1>
    <p>Des solutions web pour tout les métiers </p>
  </header>
  <!-- Navigation -->
  <nav aria-label="Navigation principale">
    <ul>
      <li><a href="#services">Nos services </a></li>
      <li><a href="#création">Nos créations </a></li>
      <li><a href="#workflow">Workflow</a></li>
      <li><a href="#tarifs-contact">Tarifs & Contacts</a></li>
    </ul>
  </nav>
  <div class="nav-bar"></div>
  <main>
    <!--section présentation-->
    <section class="presentation">
      <div class="presentation__text">
        <h2>Bienvenue chez Code&Craft</h2>
        <p>
          Une agence web qui fusionne créativité et expertise technique.<br>
          Notre mission : créer des solutions digitales qui reflètent l'identité de chaque client.
        </p>
        <ul class="values">

          <li>🎨 Élégance</li>
          <li>💡 Innovation</li>
          <li>🤝 Proximité</li>
          <li>🚀 Impact </li>
        </ul>
        <p class="signature">
          Nous sommes Code&Craft et nous faisons les choses à votre manière !
        </p>
      </div>
    </section>

    <!-- section services  -->
    <section class="services">
      <div class="container">

        <div class="container__text">
          <h2>Nos services</h2>
          <h3>Artisanat & Métiers traditionnels</h3>
          <ul>
            <li>Site vitrine professionnel optimisé pour mobile (galerie, devis, contact) </li>
            <li>Identité visuelle adaptée</li>
            <li>Accompagnement sur les marketplaces </li>
            <li>Création de boutique en ligne simple et sécurisée</li>
            <li>Référencement local (Google My Business, cartes interactives)</li>
            <li>Pack clé en main (textes, domaine, hébergement)</li>
            <li>Maintenance simplifiée</li>
          </ul>
        </div>
        <div class="container__image container__image--artisan">
          <img src="" alt="Illustration artisan">
        </div>
      </div>
      <div class="container container--reverse">
        <div class="container__text">
          <h3>Startups & Projets digitaux</h3>
          <ul>
            <li>Création de site vitrine et e-commerce</li>
            <li>Applications web & mobiles évolutives</li>
            <li>Branding digital premium</li>
            <li>Accompagnement technique (Docker, Git)</li>
            <li>Optimisation SEO , performances et sécurité</li>
            <li>Intégration API & automatisations sur mesure</li>
            <li>Maintenance évolutive & accompagnement continu</li>
          </ul>
        </div>
        <div class="container__image container__image--digital">
          <img src="" alt="Illustration startup">
        </div>
      </div>
    </section>
    <!-- section créations-->
    <section class="creation">
      <h2>Nos créations</h2>
      <div class="carousel">
        <div class="carousel-item">
          <img src="https://via.placeholder.com/150" alt="Site vitrine">
          <h3>Site vitrine</h3>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/150" alt="Application web">
          <h3>Application web</h3>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/150" alt="Boutique en ligne">
          <h3>Boutique en ligne</h3>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/150" alt="portfolio">
          <h3>Portfolio</h3>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/150" alt="jeu">
          <h3>Jeu</h3>
        </div>
      </div>
      <button class="carousel-arrow carousel-arrow--prev">&#10094;</button>
      <button class="carousel-arrow carousel-arrow--next">&#10095;</button>
    </section>
    <section class="workflow">
      <h2>Notre workflow</h2>
      <div class="timeline">
        <div class="step">
          <span class="dot">📝</span>
          <h3>Brief</h3>
          <p>On définit ensemble vos besoins et objectifs.</p>
        </div>
        <div class="step">
          <span class="dot">🎨</span>
          <h3>Design</h3>
          <p>Création de maquettes et identité visuelle.</p>
        </div>
        <div class="step">
          <span class="dot">💻</span>
          <h3>Développement</h3>
          <p>On code votre site ou application.</p>
        </div>
        <div class="step">
          <span class="dot">🚀</span>
          <h3>Mise en ligne</h3>
          <p>Publication et suivi de votre projet.</p>
        </div>
      </div>
    </section>
    <!-- section tarifs et contacts-->
    <section class="pricing-contact">
      <h2>Tarifs & contact</h2>
      <div class="pricing">
        <div class="card">
          <h3>Pack Starter</h3>
          <p>Site vitrine simple</p>
          <span class="price">499€</span>
        </div>
        <div class="card">
          <h3>Pack Pro</h3>
          <p>Site e-commerce</p>
          <span class="price">1299€</span>
        </div>
      </div>
      <!-- formulaire de contact -->
      <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form>
          <input type="text" placeholder="Nom" required>
          <input type="email" placeholder="Email" required>
          <textarea placeholder="Votre message"></textarea>
          <button type="submit">Envoyer</button>
        </form>
        <div class="contact-card">
          <h3>Code&Craft SAS</h3>
          <address>
            <p>25 rue de l'ocean 33990 Hourtin</p>
            <p>Tel: <a href="tel:+33785612428">+33785612428</a></p>
          </address>
        </div>
        <div class="map">
          <iframe title="Localisation Code&Craft à Hourtin"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179980.8869259923!2d-1.2179998298465387!3d45.18302004157112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4801ee2d6018c439%3A0x40665174816e460!2s33990%20Hourtin!5e0!3m2!1sfr!2sfr!4v1764846370305!5m2!1sfr!2sfr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      </div>
    </section>
  </main>
  <footer class="site-footer">
    <div class="footer-content">
      <div class="footer-brand">
        <h4>Code&Craft SAS</h4>
        <p>25 rue de l'océan, 33990 Hourtin</p>
        <p>Tel: <a href="tel:+33785612428">+33 7 85 61 24 28</a></p>
      </div>

      <nav class="footer-nav" aria-label="Navigation du pied de page">
        <ul>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#workflow">Workflow</a></li>
          <li><a href="#tarifs">Tarifs</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="footer-legal">
        <ul>
          <li><a href="{{route('mentions')}}">Mentions légales</a></li>
          <li><a href="{{route('privacy')}}">Politique de confidentialité</a></li>
          <li><a href="{{route('cookies')}}">Gestion des cookies</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="tdr">© 2025 Code&Craft — Tous droits réservés 💜</p>
    </div>
  </footer>
  <div id="cookie-banner" class="cookie-banner">
  <p>
    Ce site utilise des cookies pour améliorer votre expérience.
    <a href="{{route('cookies')}}">En savoir plus</a>
  </p>
  <button id="accept-cookies">Accepter</button>
  <button id="reject-cookies">Refuser</button>
</div>

  
</body>

</html>