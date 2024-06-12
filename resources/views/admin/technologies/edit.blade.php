@extends('layouts.admin')
@section('content')
<section>
    <h1>Modifica Tecnologia</h1>
    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $technology->name }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</section>
@endsection