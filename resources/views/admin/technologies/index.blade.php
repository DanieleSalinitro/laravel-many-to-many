@extends('layouts.admin')
@section('content')
<section>
    <h1>Tecnologie</h1>
    <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">Crea Nuova Tecnologia</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
                <tr>
                    <td>{{ $technology->id }}</td>
                    <td>{{ $technology->name }}</td>
                    <td>
                        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection