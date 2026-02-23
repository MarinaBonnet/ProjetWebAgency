const { MongoClient } = require("mongodb");

const uri = "mongodb://mongodb:27017"; // ✔ pour Docker
const client = new MongoClient(uri);

async function connect() {
    if (!client.topology?.isConnected()) {
        await client.connect();
    }
    return client.db("codecraft"); // ✔ nom de ta base
}

module.exports = connect;
