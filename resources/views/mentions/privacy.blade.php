@extends('layouts.app')

@section('content')
<h1>Politique de confidentialité</h1>

<p>Nous collectons uniquement les données nécessaires pour :</p>
<ul>
  <li>Répondre aux demandes via le formulaire de contact</li>
  <li>Améliorer l’expérience utilisateur (cookies techniques)</li>
  <li>Analyser la fréquentation du site (Google Analytics, si accepté)</li>
</ul>

<p>Vos données ne sont jamais revendues. Elles sont conservées uniquement le temps nécessaire au traitement de votre demande.</p>

<p>Conformément au RGPD, vous pouvez demander l’accès, la rectification ou la suppression de vos données en nous contactant à : contact@codecraft.fr</p>
 <a href="{{ url('/') }}" class="btn-return">← Retour au site</a>
@endsection
