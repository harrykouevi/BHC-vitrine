@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier l'article</h1>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" placeholder="Titre de l'article" required>
        </div>

        <div class="form-group mt-3">
            <label for="content">Contenu de l'article</label>
            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Contenu de l'article" required>{{ $blog->content }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="image">Image (facultatif)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Image actuelle" class="mt-2" width="100" height="100">
            @endif
        </div>

        <button type="submit" class="btn btn-warning mt-4">Mettre à jour l'article</button>
    </form>
</div>
@endsection
