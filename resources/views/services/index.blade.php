@extends('layouts.app')

@section('content')
<section class="services">
  <h2>Nos services</h2>
  <div class="cards">
    @foreach($services as $service)
      <div class="card">
        <h3>{{ $service->title }}</h3>
        <p>{{ $service->description }}</p>
        <span>{{ $service->price }} €</span>
      </div>
    @endforeach
  </div>
</section>
@endsection
