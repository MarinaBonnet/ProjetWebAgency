class ImageCarousel {
  constructor(selector, images, interval = 5000) {
    this.container = document.querySelector(selector);
    this.images = images;
    this.interval = interval;
    this.index = 0;
    this.imgElement = this.container.querySelector("img");

    if (!this.imgElement) {
      console.error("Aucune balise <img> trouvée dans le container !");
      return;
    }

    this.start();
  }

  // Affiche l'image courante
  showImage() {
    this.imgElement.src = this.images[this.index];
  }

  // Passe à l'image suivante
  nextImage() {
    this.index = (this.index + 1) % this.images.length;
    this.showImage();
  }

  // Lance le carrousel
  start() {
    this.showImage();
    setInterval(() => this.nextImage(), this.interval);
  }
}

// Exemple d’utilisation
const artisanImages = [
  "images/artisan1.jpg",
  "images/artisan2.jpg",
  "images/artisan3.jpg",
];

const digitalImages = [
  "images/digital1.jpg",
  "images/digital2.jpg",
  "images/digital3.jpg",
];

// Carrousel pour la section artisan
new ImageCarousel(".container__image--artisan", artisanImages, 4000);

// Carrousel pour la section startup
new ImageCarousel(".container__image--digital", digitalImages, 4000);
