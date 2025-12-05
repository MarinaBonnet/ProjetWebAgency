// carousel.js
export class ImageCarousel {
    constructor(selector, images, interval = 5000) {
        this.container = document.querySelector(selector);
        this.images = images;
        this.interval = interval;
        this.index = 0;
        this.imgElement = this.container?.querySelector("img");

        if (!this.imgElement) {
            console.error("Aucune balise <img> trouvée dans le container !");
            return;
        }

        this.start();
    }

    showImage() {
        this.imgElement.src = this.images[this.index];
    }

    nextImage() {
        this.index = (this.index + 1) % this.images.length;
        this.showImage();
    }

    start() {
        this.showImage();
        setInterval(() => this.nextImage(), this.interval);
    }
}

export class TrackCarousel {
    constructor(trackSelector, itemSelector, prevSelector, nextSelector) {
        this.track = document.querySelector(trackSelector);
        this.items = document.querySelectorAll(itemSelector);
        this.prevBtn = document.querySelector(prevSelector);
        this.nextBtn = document.querySelector(nextSelector);
        this.index = 0;
        this.itemWidth = this.items[0]?.offsetWidth + 20 || 0;

        this.init();
    }

    updateCarousel() {
        this.track.style.transform = `translateX(${
            -this.index * this.itemWidth
        }px)`;
    }

    init() {
        this.nextBtn?.addEventListener("click", () => {
            if (this.index < this.items.length - 1) this.index++;
            this.updateCarousel();
        });

        this.prevBtn?.addEventListener("click", () => {
            if (this.index > 0) this.index--;
            this.updateCarousel();
        });
    }
}
