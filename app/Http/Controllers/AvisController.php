<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as MongoClient;

class AvisController extends Controller
{
	public function avis()
	
	{   //connexion à MongoDB
		$client = new MongoClient(env('MONGO_URL'));
		$collection = $client->codecraft->avis;

		//récupération des avis 
		$avis = $collection->find()->toArray();

		//Envoi des données à la vue
		return view('sectionsAvis.avis' , ['avis' => $avis]);
	}
}

