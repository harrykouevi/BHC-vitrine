<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    // // Méthode pour stocker un commentaire
    public function store(Request $request)
    { 
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:1000',
        ]);

        // Création d'un nouveau commentaire
        $commentaire = Commentaire::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
        ]);

        // Rediriger l'utilisateur avec un message de succès
        return redirect()->back()->with('success', 'Commentaire ajouté avec succès!');

    }
     // Méthode pour afficher les commentaires
     public function index()
     {
         // Récupérer tous les commentaires depuis la base de données
         $commentaires = Commentaire::latest()->take(4)->get();  // Utilise la méthode all() pour récupérer tous les commentaires
 
         // Passer les commentaires à la vue
         return view('blog-single', compact('commentaires'));
     }
 
    }
