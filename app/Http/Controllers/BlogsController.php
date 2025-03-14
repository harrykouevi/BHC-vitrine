<?php

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // Afficher le formulaire de création d'un article
    public function create()
    {
        return view('admin.articles.create');
    }

    // Sauvegarder un nouvel article
    public function store(StoreArticleRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article créé avec succès!');
    }

    // Afficher la liste des articles
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    // Afficher le formulaire d'édition d'un article
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    // Mettre à jour un article existant
    public function update(StoreArticleRequest $request, Article $article)
    {
        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $imagePath = $request->file('image')->store('articles', 'public');
        } else {
            $imagePath = $article->image;
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès!');
    }

    // Supprimer un article
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès!');
    }
}
