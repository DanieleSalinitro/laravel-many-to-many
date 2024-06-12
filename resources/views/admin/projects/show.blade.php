@extends('layouts.admin')
@section('title', $project->title)

@section('content')
<section>
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>{{ $project->title }}</h1>
    </div>
    @if($project->image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid">
        </div>
    @endif
    @if($project->type)
        <p><strong>Tipologia:</strong> {{ $project->type->name }}</p>
    @endif
    <p>{{ $project->content }}</p>
    @if($project->technologies->count())
        <h5>Tecnologie utilizzate:</h5>
        <ul>
            @foreach($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>
    @endif
</section>
@endsection