// main.js
import { ImageCarousel, TrackCarousel } from "./carousel.js";
import { CookieBanner } from "./cookies.js";

document.addEventListener("DOMContentLoaded", () => {
    new ImageCarousel(
        ".container__image--artisan",
        ["images/artisan1.jpg", "images/artisan2.jpg", "images/artisan3.jpg"],
        4000
    );

    new ImageCarousel(
        ".container__image--digital",
        ["images/digital1.jpg", "images/digital2.jpg", "images/digital3.jpg"],
        4000
    );

    new TrackCarousel(
        ".carousel-track",
        ".carousel-item",
        ".carousel-arrow--prev",
        ".carousel-arrow--next"
    );

    new CookieBanner({
        analyticsId: "G-XXXXXXXXXX",
        text: "Ce site utilise des cookies pour améliorer votre expérience.",
        link: "/cookies",
        linkText: "En savoir plus",
    });
});
