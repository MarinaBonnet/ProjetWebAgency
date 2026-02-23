<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/sass/main.scss', 'resources/js/main.js'])
  <title>Code&Craft - Agence Web hybride</title>
</head>
<body>
  <header>
    <img class="logo" src="/assets/logo/logo3d.png" alt="Logo 3D">

    <h1>Code&Craft</h1>
    <p>Des solutions web pour tout les métiers</p>
  </header>

  <nav>
    <!-- Ton menu -->
  </nav>

  <main>
    @yield('content') <!-- Ici on injecte le contenu spécifique -->
  </main>

  <footer>
    <!-- Ton footer -->
  </footer>
</body>
</html>
