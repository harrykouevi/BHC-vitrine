@extends('layouts.admin')

@section('content')
    <h1>Gérer les blogs</h1>

    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-4">Créer un nouveau blog</a>

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->content, 100) }}</td>
                    <td>
                        <!-- Lien vers la page d'édition du blog -->
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Modifier</a>

                        <!-- Formulaire de suppression du blog -->
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
