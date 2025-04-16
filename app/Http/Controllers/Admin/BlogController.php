<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog; // Assurez-vous d'inclure le modèle Blog
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class BlogController extends Controller
{
    // Afficher la liste des articles
    public function index()
    {
        $blog = Blog::paginate(10);  // Liste paginée des articles
        return view('admin.blog.index', compact('blog'));
    }

    // Afficher le formulaire pour créer un nouvel article
    public function create()
    {
        return view('admin.blog.create');
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Article créé avec succès');
    }

    // Afficher le formulaire pour éditer un article
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    // Mettre à jour un article existant
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }
            // Enregistrer la nouvelle image
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        $blog->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Article mis à jour avec succès');
    }

    // Supprimer un article
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Article supprimé avec succès');
    }

    // Afficher un article spécifique
    public function show(Blog $id)
    {
         // Récupère les derniers articles publiés
    $blog = Blog::latest()->take(5)->get();
    
    // Passe la variable $blogs à la vue
    return view('admin.blog.index', compact('blog')); // Assure-toi que tu passes $blogs à la vue

    }

    public function toutLesBlogs(){
        
            $blog = Blog::all(); // Récupère tous les blogs
            return view('blog', compact('blog')); // Passe la variable blogs à la vue
        
    }// Dans ton BlogController
}

   

// public function index()
// {
//     // Récupère tous les blogs
//     $blogs = Blog::all();  // Ou avec pagination si nécessaire, par exemple Blog::paginate(10);
    
//     // Passe la variable $blogs à la vue
//     return view('livewire.blog', compact('blogs'));
// }
