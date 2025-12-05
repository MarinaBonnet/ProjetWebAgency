@extends('layouts.app')

@section('content')
<h1>Politique de cookies</h1>

<p>Ce site utilise des cookies pour :</p>
<ul>
  <li>Assurer son bon fonctionnement (cookies techniques)</li>
  <li>Mesurer l’audience (Google Analytics, uniquement si vous acceptez)</li>
</ul>

<p>Vous pouvez choisir d’accepter ou de refuser les cookies via le bandeau affiché lors de votre première visite.</p>

<p>Votre choix est mémorisé pendant 12 mois. Vous pouvez le modifier à tout moment en effaçant les cookies de votre navigateur.</p>
 <a href="{{ url('/') }}" class="btn-return">← Retour au site</a>
@endsection


