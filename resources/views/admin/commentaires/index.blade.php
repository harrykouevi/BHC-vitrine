@extends('layouts.admin')

@section('content')
    <h1>Modération des Commentaires</h1>

   
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Commentaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commentaires as $commentaire)
                <tr>
                    <td>{{ $commentaire->nom }}</td>
                    <td>{{ $commentaire->email }}</td>
                    <td>{{ $commentaire->contenu }}</td>
                    <td>
                        <!-- Formulaire pour approuver -->
                        <form action="{{ route('admin.commentaires.approuver', $commentaire->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success">Approuver</button>
                        </form>
                        
                        <!-- Formulaire pour rejeter -->
                        <form action="{{ route('admin.commentaires.rejeter', $commentaire->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-warning">Rejeter</button>
                        </form>
                        
                        <!-- Lien pour modifier -->
                        <a href="{{ route('admin.commentaires.editer', $commentaire->id) }}" class="btn btn-primary">Modifier</a>
                        
                        <!-- Formulaire pour supprimer -->
                        <form action="{{ route('admin.commentaires.supprimer', $commentaire->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer ce commentaire ?');">
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
