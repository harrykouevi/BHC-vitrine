<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    /**
     * Recherche de services basée sur des mots-clés.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        // Validation des mots-clés
        $request->validate([
            'keywords' => 'nullable|string|min:2|max:100'
        ], [
            'keywords.min' => 'Les mots-clés doivent contenir au moins 2 caractères.',
            'keywords.max' => 'Les mots-clés ne peuvent pas dépasser 100 caractères.'
        ]);

        // Récupération des mots-clés de la requête
        $keywords = trim(strtolower($request->input('keywords', '')));

        // Si des mots-clés sont fournis, procéder à la recherche
        $searchTerms = array_filter(
            explode(' ', $keywords),
            fn($term) => strlen($term) >= 2
        );

        // Générer la clé de cache unique basée sur les mots-clés et la page
        $cacheKey = 'search_' . md5($keywords . '_' . $request->query('page', 1));

        // Mise en cache des résultats de recherche
        $services = Cache::remember($cacheKey, 900, function () use ($searchTerms) {
            $query = Service::query()
                ->select('id', 'nom', 'description', 'caracteristique');

            // Si des mots-clés sont fournis, filtrer les résultats
            if (!empty($searchTerms)) {
                foreach ($searchTerms as $term) {
                    // Recherche chaque terme dans les champs nom, description et caracteristique
                    $query->orWhere(function ($q) use ($term) {
                        $q->where('nom', 'LIKE', "%{$term}%")
                          ->orWhere('description', 'LIKE', "%{$term}%")
                          ->orWhere('caracteristique', 'LIKE', "%{$term}%");
                    });
                }
            }

            return $query->orderBy('nom')
                         ->paginate(10)
                         ->appends(['keywords' => implode(' ', $searchTerms)]);
        });

        // Préparer les données pour la vue
        $data = [
            'services' => $services,
            'keywords' => $keywords,
            'totalResults' => $services->total(),
            'message' => $services->isEmpty() && !empty($keywords)
                ? "Aucun résultat trouvé pour « " . htmlspecialchars($keywords) . " »"
                : null
        ];

        // Retourner la vue avec les résultats de la recherche
        return view('resultat', $data);
    }
}
