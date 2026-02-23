const { ObjectId } = require("mongodb");
const connect = require("./db");

// CREATE : ajouter un avis
async function ajouterAvis(nom, message) {
    const db = await connect();
    const avis = db.collection("avis");

    return avis.insertOne(
        {
            nom,
            message,
            created_at: new Date(),
        },
        { writeConcern: { w: "majority" } },
    );
}

// READ : lire les derniers avis
async function lireDerniersAvis(limit = 3) {
    const db = await connect();
    const avis = db.collection("avis");

    return avis.find({}, { sort: { created_at: -1 }, limit }).toArray();
}

// UPDATE : modifier un avis
async function modifierAvis(id, nouveauMessage) {
    const db = await connect();
    const avis = db.collection("avis");

    return avis.updateOne(
        { _id: ObjectId.createFromHexString(id) },
        { $set: { message: nouveauMessage } },
        { writeConcern: { w: "majority" } },
    );
}

// DELETE : supprimer un avis
async function supprimerAvis(id) {
    const db = await connect();
    const avis = db.collection("avis");

    return avis.deleteOne(
        { _id: ObjectId.createFromHexString(id) },
        { writeConcern: { w: "majority" } },
    );
}

module.exports = {
    ajouterAvis,
    lireDerniersAvis,
    modifierAvis,
    supprimerAvis,
};
