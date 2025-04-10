@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $blog->title }}</h1>

    <div class="mb-4">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Image" width="300">
        @else
            <p>Aucune image disponible pour cet article.</p>
        @endif
    </div>

    <div class="mb-4">
        <p>{{ $blog->content }}</p>
    </div>

    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
