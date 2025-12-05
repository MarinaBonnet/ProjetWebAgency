@extends('layouts.app')

@section('content')
<h1>Mentions légales</h1>

<p><strong>Éditeur du site :</strong> Code&Craft SAS<br>
25 rue de l’océan, 33990 Hourtin<br>
Tel : +33 7 85 61 24 28</p>

<p><strong>Directeur de publication :</strong> Marina</p>

<p><strong>Hébergeur :</strong> OVH SAS<br>
2 rue Kellermann, 59100 Roubaix, France</p>

<p>Ce site vitrine présente les services de Code&Craft. Toute reproduction du contenu est interdite sans autorisation.</p>
 <a href="{{ url('/') }}" class="btn-return">← Retour au site</a>
@endsection
