<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index() {
        $commentaires = Commentaire::where('statut', 'en attente')->get();
        return view('admin.commentaires.index', compact('commentaires'));
    }

    public function approuver($id) {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update(['statut' => 'approuvé']);
        return back()->with('success', 'Commentaire approuvé avec succès.');
    }

    public function rejeter($id) {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update(['statut' => 'rejeté']);
        return back()->with('error', 'Commentaire rejeté.');
    }
}
