@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Créer un nouvel article</h1>

    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'article" required>
        </div>

        <div class="form-group mt-3">
            <label for="content">Contenu de l'article</label>
            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Contenu de l'article" required></textarea>
        </div>

        <div class="form-group mt-3">
            <label for="image">Image (facultatif)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-success mt-4">Créer l'article</button>
    </form>
</div>
@endsection
