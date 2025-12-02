### But du projet

Ce dépôt contient un site statique simple (HTML + CSS) pour une petite agence web. L'agent doit traiter le projet comme une application front-end statique — il n'y a pas de build system, de dépendances Node/Python, ni de tests automatisés dans le dépôt.

### Structure importante

- `index.html`: page principale; navigation interne par ancres, section contact contenant un `iframe` Google Maps et un formulaire non connecté.
- `css/styles.css`: styles globaux (reset via `*{}`), layout absolu pour la carte et le formulaire.
- `asset/` (ex: `asset/logo/logo3d.png`): images et ressources statiques.

Exemples de patterns observés
- Le formulaire dans `index.html` a `action=""` et le `textarea` est `readonly` — le projet n'implémente pas d'envoi côté serveur.
- L'iframe Google Maps est inclus directement dans la page (dépendance externe). Éviter de modifier la clé/URL sans vérifier l'impact.
- Les dimensions d'`iframe` et `.filtre` utilisent `width: 100vh` — comportement non standard (hauteur utilisée comme largeur).

Workflow développeur (découverte)
- Il n'y a pas de script de build : pour prévisualiser localement, lancer un serveur statique (exemples PowerShell) :
  - `python -m http.server 8000`
  - ou installer et utiliser l'extension Live Server dans VS Code.
- Ouvrir `http://localhost:8000` pour tester l'iframe et les assets (quelques navigateurs bloquent certains embeds en `file://`).

Règles et conventions spécifiques au dépôt
- Ne pas ajouter de système de build ou de dépendances sans approbation : le dépôt est volontairement minimal.
- Garder les chemins relatifs tels qu'ils sont (`css/styles.css`, `asset/...`) ; les modifications de structure doivent être répercutées dans `index.html`.
- Respecter la langue (`lang="fr"`) et le ton du contenu texte (texte en français visible dans `index.html`).

Conseils pour interventions d'un agent IA
- Pour petites améliorations CSS/HTML : proposer d'abord un diff minimal (un fichier à la fois) et expliquer l'impact visuel (ex : corriger `width: 100vh` à `width: 100%`).
- Pour activer le formulaire : signaler clairement que cela introduira une dépendance back-end ou une solution via un service tiers (Formspree, Netlify Forms). Toujours demander confirmation avant d'ajouter ces services.
- Eviter d'introduire des frameworks (React, Webpack, etc.) sans directive explicite de l'équipe.

Points d'intégration externes
- Google Maps iframe (externe) — vérifier comportement en local et en production.
- Aucun package manager détecté (pas de `package.json`, `requirements.txt`) — toute dépendance ajoutée doit être explicitée et approuvée.

Où regarder pour comprendre/étendre
- Modifier le header / la navigation : `index.html` (balises `<nav>`, `<header>`).
- Modifier le style : `css/styles.css` (regarder règles globales en début de fichier).
- Assets : `asset/logo/`.

Demande de feedback
Si une section est incomplète ou si vous souhaitez que j'ajoute des conventions de commit, CI, ou un simple `package.json` + script `serve`, dites-le — je ferai la proposition en respectant la contrainte « minimal » du dépôt.
