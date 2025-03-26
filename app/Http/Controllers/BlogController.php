<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Afficher tous les blogs
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('blogs.create');
    }

    // Enregistrer un nouveau blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Blogs::create($request->all());

        return redirect()->route('blogs.index');
    }

    // Afficher un blog spécifique
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    // Afficher le formulaire d'édition
    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    // Mettre à jour un blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blogs::findOrFail($id);
        $blog->update($request->all());

        return redirect()->route('blogs.index');
    }

    // Supprimer un blog
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
