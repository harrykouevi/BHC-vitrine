<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use App\Mail\AdminSubscriptionNotification;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validation de l'email
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        // Enregistrer l'email dans la base de données
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        
        // Envoyer un e-mail de confirmation (optionnel)
        Mail::to($request->email)->send(new SubscriptionConfirmation());

        Mail::to('mfn0698@gmail.com')->send(new AdminSubscriptionNotification($request->email));

        return back()->with('success', 'Vous êtes bien abonné(e) !');
    
    // return view('subscription', ['email' => $request->email]);
}
}
