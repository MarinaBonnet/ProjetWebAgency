<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;

class HomeController extends Controller
{
    public function home()
    {
        $client = new Client(env('MONGO_URL'));
        $collection = $client->codecraft->avis;

        $avis = $collection->find()->toArray();

        return view('index', compact('avis'));
    }
}

