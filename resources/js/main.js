// main.js

// On importe les classes depuis carousel.js
import { ImageCarousel, TrackCarousel } from "./carousel.js";

// On importe la bannière cookies
import { CookieBanner } from "./cookies.js";

// On initialise uniquement ce qui n'est PAS un carousel d'images
document.addEventListener("DOMContentLoaded", () => {
    // TrackCarousel
    new TrackCarousel(
        ".carousel-track",
        ".carousel-item",
        ".carousel-arrow--prev",
        ".carousel-arrow--next"
    );

    // CookieBanner
    new CookieBanner({
        analyticsId: "G-XXXXXXXXXX",
        text: "Ce site utilise des cookies pour améliorer votre expérience.",
        link: "/cookies",
        linkText: "En savoir plus",
    });
});
