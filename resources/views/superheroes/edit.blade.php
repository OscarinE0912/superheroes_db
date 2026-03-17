@extends('layouts.app')
@section('content')
<div class="col-md-7 mx-auto">
    <h1 class="h3 mb-4">Editar: {{ $superhero->hero_name }}</h1>
    <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre real</label>
            <input type="text" name="real_name" class="form-control"
                   value="{{ $superhero->real_name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre de héroe</label>
            <input type="text" name="hero_name" class="form-control"
                   value="{{ $superhero->hero_name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">URL de foto</label>
            <input type="url" name="photo_url" class="form-control"
                   value="{{ $superhero->photo_url }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Información adicional</label>
            <textarea name="info" class="form-control" rows="3">{{ $superhero->info }}</textarea>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection