@extends('template.default')

@section('content')
<div class="container mt-4">

    <div class="border rounded p-4 shadow-sm mx-auto" style="max-width: 450px; width: 100%;">
        <h2 class="mb-3 text-center">{{ $pokedex->name }}</h1>

        @if($pokedex->image_url)
            <div class="text-center mb-3">
                <img src="{{ $pokedex->image_url ?? 'https://via.placeholder.com/200' }}"
                     width="200"
                     class="img-fluid rounded">
            </div>
        @endif

        <ul class="list-unstyled">
            <li><strong>Type :</strong> {{ $pokedex->type }}</li>
            <li><strong>Species :</strong> {{ $pokedex->species }}</li>
            <li><strong>Height :</strong> {{ $pokedex->height }} M</li>
            <li><strong>Weight :</strong> {{ $pokedex->weight }} Kg</li>
            <li><strong>HP :</strong> {{ $pokedex->hp }}</li>
            <li><strong>Attack :</strong> {{ $pokedex->attack }}</li>
            <li><strong>Defense :</strong> {{ $pokedex->defense }}</li>
        </ul>

        <div class="text-center mt-3">
            <a class="btn btn-secondary" href="{{ url('/pokedexs') }}">ย้อนกลับ</a>
        </div>
    </div>

</div>
@endsection
