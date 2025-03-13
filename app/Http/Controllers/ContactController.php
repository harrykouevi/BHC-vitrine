<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ConsultationGratuiteNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string', // Corrigé ici
            'message' => 'required|string',
        ]);
        
        $data = $request->only('name', 'email', 'phone','subject', 'message');

        // Envoyer la notification à l'agence
        Notification::route('mail', 'mfn0698@gmail.com')->notify(new ConsultationGratuiteNotification($data));

        return back()->with('success', 'Votre demande a été envoyée avec succès.');
    }
}
