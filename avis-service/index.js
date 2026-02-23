const {
    ajouterAvis,
    lireDerniersAvis,
    modifierAvis,
    supprimerAvis,
} = require("./avis");

// CREATE
const ajout = await ajouterAvis("Marina", "Super agence !");
console.log("Avis ajouté :", ajout.insertedId);

// READ
const derniers = await lireDerniersAvis();
console.log("Derniers avis :", derniers);

// UPDATE
await modifierAvis(ajout.insertedId, "Avis mis à jour !");
console.log("Avis modifié");

// DELETE (optionnel)
// await supprimerAvis(ajout.insertedId);
// console.log("Avis supprimé");
