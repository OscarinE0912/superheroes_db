@extends('layouts.app')
@section('content')
<div class="col-md-7 mx-auto">
    <h1 class="h3 mb-4">Registrar Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre real</label>
            <input type="text" name="real_name" class="form-control @error('real_name') is-invalid @enderror"
                   value="{{ old('real_name') }}">
            @error('real_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre de héroe</label>
            <input type="text" name="hero_name" class="form-control @error('hero_name') is-invalid @enderror"
                   value="{{ old('hero_name') }}">
            @error('hero_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">URL de foto</label>
            <input type="url" name="photo_url" class="form-control @error('photo_url') is-invalid @enderror"
                   value="{{ old('photo_url') }}" placeholder="https://...">
            @error('photo_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Información adicional</label>
            <textarea name="info" class="form-control" rows="3">{{ old('info') }}</textarea>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-danger">Guardar</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection