@extends('layouts.app')
@section('content')
<div class="col-md-6 mx-auto text-center">
    <img src="{{ $superhero->photo_url }}" class="rounded-circle mb-3"
         style="width:150px;height:150px;object-fit:cover">
    <h2>{{ $superhero->hero_name }}</h2>
    <p class="text-muted">Nombre real: <strong>{{ $superhero->real_name }}</strong></p>
    @if($superhero->info)
        <p class="mt-3">{{ $superhero->info }}</p>
    @endif
    <div class="d-flex justify-content-center gap-2 mt-4">
        <a href="{{ route('superheroes.edit', $superhero) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection