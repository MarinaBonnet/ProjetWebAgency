// cookies.js
export class CookieBanner {
    constructor({
        bannerId = "cookie-banner",
        acceptId = "accept-cookies",
        rejectId = "reject-cookies",
        analyticsId = null,
        text = "Ce site utilise des cookies pour améliorer votre expérience.",
        link = "/cookies",
        linkText = "En savoir plus",
    }) {
        this.bannerId = bannerId;
        this.acceptId = acceptId;
        this.rejectId = rejectId;
        this.analyticsId = analyticsId;
        this.text = text;
        this.link = link;
        this.linkText = linkText;

        this.renderBanner();
        this.init();
    }

    renderBanner() {
        const banner = document.createElement("div");
        banner.id = this.bannerId;
        banner.className = "cookie-banner";
        banner.innerHTML = `
      <p>🍪 ${this.text} <a href="${this.link}">${this.linkText}</a></p>
      <button id="${this.acceptId}">Accepter</button>
      <button id="${this.rejectId}">Refuser</button>
    `;
        document.body.appendChild(banner);
    }

    init() {
        const choice = localStorage.getItem("cookiesChoice");
        if (choice) {
            this.hideBanner();
            if (choice === "accepted" && this.analyticsId) {
                this.loadAnalytics();
            }
        }

        document
            .getElementById(this.acceptId)
            ?.addEventListener("click", () => this.acceptCookies());
        document
            .getElementById(this.rejectId)
            ?.addEventListener("click", () => this.rejectCookies());
    }

    acceptCookies() {
        localStorage.setItem("cookiesChoice", "accepted");
        this.hideBanner();
        if (this.analyticsId) this.loadAnalytics();
    }

    rejectCookies() {
        localStorage.setItem("cookiesChoice", "rejected");
        this.hideBanner();
    }

    hideBanner() {
        document.getElementById(this.bannerId).style.display = "none";
    }

    loadAnalytics() {
        const script = document.createElement("script");
        script.src = `https://www.googletagmanager.com/gtag/js?id=${this.analyticsId}`;
        script.async = true;
        document.head.appendChild(script);

        globalThis.dataLayer = globalThis.dataLayer || [];
        function gtag() {
            globalThis.dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", this.analyticsId);
    }
}
