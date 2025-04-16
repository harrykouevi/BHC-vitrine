<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function show()
    {
        return view('formulaire');
    }
    
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
