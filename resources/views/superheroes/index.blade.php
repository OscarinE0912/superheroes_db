@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}" class="btn btn-danger">+ Registrar</a>
</div>

<div class="row row-cols-1 row-cols-md-3 g-3">
@forelse($heroes as $hero)
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ $hero->photo_url }}" class="card-img-top"
                 style="height:220px;object-fit:cover"
                 onerror="this.src='https://via.placeholder.com/300x220?text=No+image'">
            <div class="card-body">
                <h5 class="card-title">{{ $hero->hero_name }}</h5>
                <p class="card-text text-muted small">{{ $hero->real_name }}</p>
            </div>
            <div class="card-footer d-flex gap-2">
                <a href="{{ route('superheroes.show', $hero) }}"
                   class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('superheroes.edit', $hero) }}"
                   class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('superheroes.destroy', $hero) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <p class="text-muted text-center">No hay superhéroes registrados aún.</p>
    </div>
@endforelse
</div>
@endsection