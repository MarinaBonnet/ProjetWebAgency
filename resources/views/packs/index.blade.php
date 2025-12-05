@extends('layouts.app')

@section('content')
<section class="pricing-contact">
  <h2>Tarifs & contact</h2>

  <div class="pricing">
    @foreach($packs as $pack)
      <div class="card">
        <h3>{{ $pack->title }}</h3>
        <p>{{ $pack->description }}</p>
        <span class="price">{{ $pack->price }} €</span>
      </div>
    @endforeach
  </div>

  <!-- formulaire de contact -->
  <div class="contact-form">
    <h2>Contactez-nous</h2>
    <form action="{{ route('contact.store') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nom" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Votre message"></textarea>
      <button type="submit">Envoyer</button>
    </form>
  </div>
</section>
@endsection
