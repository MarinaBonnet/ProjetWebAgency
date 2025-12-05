<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackController extends Controller
{
    public function index()
 {
        $packs = Pack::all();
        return view('packs.index', compact('packs'));
    }

    /**
     * Affiche un pack en détail (optionnel).
     */
    public function show(Pack $pack)
    {
        return view('packs.show', compact('pack'));
    }
}
