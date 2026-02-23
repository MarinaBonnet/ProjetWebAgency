<section id="avis" class="avis">
    <h2 class="avis__title">Ils nous ont fait confiance</h2>

    <div class="avis__track">
        @foreach($avis as $item)

            @php
                $nom = $item['nom'] ?? $item['auteur'] ?? 'Auteur inconnu';
                $note = $item['note'] ?? 0;
            @endphp

            <article class="avis__card">

                <div class="avis__stars">
                    @for($i = 1; $i <= 5; $i++)
                        {{ $i <= $note ? '⭐' : '☆' }}
                    @endfor
                </div>

                <header class="avis__header">
                    <h3 class="avis__author">{{ $nom }}</h3>
                    <span class="avis__note">{{ $note }}/5</span>
                </header>

            </article>

        @endforeach
    </div>
</section>
