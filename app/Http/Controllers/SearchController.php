<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validation des mots-clés
        $request->validate([
            'keywords' => 'nullable|string|min:2|max:100'
        ], [
            'keywords.min' => 'Les mots-clés doivent contenir au moins 2 caractères.',
            'keywords.max' => 'Les mots-clés ne peuvent pas dépasser 100 caractères.'
        ]);

        // Récupération des mots-clés
        $keywords = trim(strtolower($request->input('keywords', '')));

        // Si aucun mot-clé n'est entré
        if (empty($keywords)) {
            return view('resultat', [
                'services' => collect(), // Pas de services à afficher
                'keywords' => '', // Pas de mots-clés
                'message' => 'Aucun mot-clé entré, veuillez saisir des mots-clés valides.' // Message d'erreur
            ]);
        }

        // Séparation des mots-clés
        $searchTerms = array_filter(explode(' ', $keywords), fn($term) => strlen($term) >= 2);

        if (empty($searchTerms)) {
            return view('resultat', [
                'services' => collect(), // Pas de services à afficher
                'keywords' => $keywords, // Garde les mots-clés saisis
                'message' => 'Veuillez entrer des mots-clés valides (au moins 2 caractères).' // Message d'erreur
            ]);
        }

        // Création de la clé de cache unique
        $cacheKey = 'search_' . md5($keywords . '_' . $request->query('page', 1));

        // Mise en cache des résultats
        $services = Cache::remember($cacheKey, 900, function () use ($searchTerms) {
            $query = Service::query()
                ->select('id', 'nom', 'description', 'caracteristique');

            // Appliquer les filtres de recherche
            foreach ($searchTerms as $term) {
                $query->where(function ($q) use ($term) {
                    $q->where('nom', 'LIKE', "%{$term}%")
                      ->orWhere('description', 'LIKE', "%{$term}%")
                      ->orWhere('caracteristique', 'LIKE', "%{$term}%");
                });
            }

            return $query->orderBy('nom', 'asc')
                         ->paginate(10)
                         ->appends(['keywords' => implode(' ', $searchTerms)]);
        });

        // Préparation des données pour la vue
        return view('resultat', [
            'services' => $services,
            'keywords' => $keywords, // Passe les mots-clés à la vue
            'totalResults' => $services->total(),
            'message' => $services->isEmpty() && !empty($keywords)
                ? "Aucun résultat trouvé pour « " . htmlspecialchars($keywords) . " »"
                : null
        ]);
        
    }
}
