@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des articles de blog</h1>

    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Ajouter un nouvel article</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blog as $blogs)
                <tr>
                    <td>{{ $blogs->title }}</td>
                    <td>
                        @if($blogs->image)
                            <img src="{{ asset('storage/' . $blogs->image) }}" alt="Image" width="50" height="50">
                        @else
                            <span>Aucune image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.blog.edit', $blogs->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('admin.blog.destroy', $blogs->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{-- {{ $blogs->links() }} --}}
</div>
@endsection
