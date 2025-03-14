<?php

namespace App\Http\Controllers;

use App\Models\Service;  
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // La méthode search pour effectuer la recherche
    public function search(Request $request)
    {
        $query = $request->input('query', '');
    
        if (empty($query)) {
            return view('resultat', ['message' => 'Veuillez entrer un mot-clé.']);
        }
        $services = Service::where('nom', 'like', '%' . $query . '%')->get();
        if ($services->isEmpty()) {
            return view('resultat', ['message' => 'Aucun service trouvé pour "' . $query . '"', 'services' => $services]);
        }
        return view('resultat', compact('services', 'query'));
    }
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }
}
