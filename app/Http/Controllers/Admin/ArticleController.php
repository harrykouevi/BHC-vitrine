<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostHistory;
use App\Services\PostService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        // Fetch all posts for display using the service
        // $posts = $this->postService->getAllPosts();
        return view('admin.articles.index');
    }

    public function show($id)
    {
        // Display a single post using the service
        return view('admin.articles.show', ['post' => $this->postService->getPost($id)]);
    }

    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.articles.create', ['postId' => $post]);
    }

    public function create()
    {
        return view('admin.articles.create',['postId' => Null]);
    }


    public function getLastFiveHistories($articleId)
    {
        return PostHistory::where('post_id', $articleId)
                            ->with('user') // Assurez-vous d'avoir défini la relation user dans PostHistory
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
    }


    public function getFeaturedPosts()
    {
        $featuredArticles = $this->postService->getFeaturedPosts();
        return view('articles.index', compact('featuredArticles'));

    }

    //////////////////////////////////
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //     ]);

    //     // Enregistrer l'article dans la base de données
    //     Post::create([
    //         'title' => $request->title,
    //         'content' => $request->content,
    //     ]);

    //     return redirect()->route('posts.index')->with('success', 'Article créé avec succès.');
    // }

    public function uploadImage(Request $request)
    {
        // Validation de l'image
        // $request->validate(['file' => 'required|image|max:2048']);
        $img =  $request->file('file') ;
        // // Stocker l'image temporairement
        $originalFileName = $img->getClientOriginalName(); // Get original file name

        $path = $img ->move(public_path('imagesss'), $originalFileName);
        // Stockage de l'image
        //$path = $request->file('file')->store('images____');
        $url = asset('imagesss/' . $originalFileName);
        // Retourner l'URL de l'image pour l'utiliser dans l'éditeur
        return response()->json(['url' => $url]);
    }
}
