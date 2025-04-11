<?php

use App\Jobs\ProcessImage;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Make sure to import your Mailable class
use App\Services\PostService;
use Google\Client;
use Google\Service\Gmail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;


/*
|------------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These   |
| routes are loaded by the RouteServiceProvider and all of them will      |
| be assigned to the "web" middleware group. Make something great!        |
|--------------------------------------------------------------------------|
*/

Auth::routes();

// Route d'accueil avec gestion des articles en vedette
Route::get('/', function () {
    $featuredPosts = (new Postservice())->getFeaturedPosts();
    $posts = $featuredPosts->map(function ($featuredPost) {
        return $featuredPost->post;
    });

    return view('welcome', ['articles' => $posts]);
})->name('accueil');

// Route de la page "À propos"
Route::get('/a-propos', function () {
    return view('a-propos');
})->name('A propos');

// Routes pour la recherche
// Route GET pour afficher les résultats de recherche
Route::get('/resultat', [SearchController::class, 'search'])->name('resultat');

// Route POST pour traiter la recherche
Route::post('/resultat', [SearchController::class, 'search'])->name('search.post');

// Route pour afficher les services (par exemple, une liste complète de services)
Route::get('/services', [SearchController::class, 'index']);

// Route de la page de contact
Route::get('/contacts', function () {
    return view('contactus');
})->name('contact');


//Route pour les crud

Route::resource('blogs', BlogController::class);
//affichage et gestion des blogs
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('blogs', BlogController::class);
});


// Routes pour les blogs
Route::get('/blogs', function () {
    return view('blog');
})->name('blogs.index');

// Route pour afficher un blog spécifique
Route::get('/blogs/{id}', function ($id) {
    $post = new stdClass();
    if (is_numeric($id)) {
        $post = (new Postservice())->getPost($id);
    }
    $featuredPosts = (new Postservice())->getFeaturedPosts();
    $posts = $featuredPosts->map(function ($featuredPost) {
        return $featuredPost->post;
    });

    return view('blog-single', ['article' => $post, 'articles' => $posts]);
})->name('blogs.show');

// Route pour la page de téléchargement
Route::get('/A7d3F9kL2qX1', function () {
    return view('a-upload');
});

// Route pour le traitement de l'upload d'image
Route::post('/A7d3F9kL2qX1-up', function (Request $request) {
    // Augmenter la limite de mémoire si nécessaire
    ini_set('memory_limit', '556M'); // Ajuster selon les besoins

    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        'file_name' => 'nullable|string',
    ], [
        'file_name.string' => 'Le champ nom doit être une chaîne.',
        'image.required' => 'Un fichier image est requis.',
        'image.image' => 'Le fichier doit être une image.',
        'image.mimes' => 'L\'image doit être un fichier de type : jpg, jpeg, png, gif.',
    ]);

    $img = $request->file('image');
    $path = $img->store('images');
    $getClientOriginalName = ($request->filled('file_name')) ? $request->input('file_name') . '.' . $img->getClientOriginalExtension() : $img->getClientOriginalName();

    // Envoyer le job à la queue pour traitement
    ProcessImage::dispatch(storage_path('app/' . $path), $getClientOriginalName);

    return back()->with('success', 'L\'image est en cours de traitement !');
})->name('X1-up');

// Route pour envoyer un message de contact
Route::post('/contact-up', function (Request $request) {
    // Validation des données du formulaire de contact
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required|max:15',
        'subject' => 'required|max:255',
        'message' => 'required|max:1000',
    ]);

    // Envoi de l'e-mail
    Mail::to('koueviharry@gmail.com')->send(new ContactMail(
        $validatedData['name'],
        $validatedData['email'],
        $validatedData['phone'],
        $validatedData['subject'],
        $validatedData['message']
    ));

    // Configuration de Google Client pour Gmail API
    $client = new Client();
    $client->setAuthConfig('../service-account.json');
    $client->addScope(Gmail::GMAIL_SEND);
    $client->setSubject('koueviharry@gmail.com'); // Utilisateur à imiter

    // Créer le service Gmail
    $service = new Gmail($client);

    // Créer le contenu de l'e-mail
    $email = new \Google\Service\Gmail\Message();
    $rawMessageString = "From: " . $validatedData['email'] . "\r\n";
    $rawMessageString .= "To: koueviharry@gmail.com\r\n";
    $rawMessageString .= "Subject: Test Email\r\n\r\n";
    $rawMessageString .= "This is a test email sent from the Gmail API using PHP.";

    // Encoder le message en format base64url
    $rawMessage = base64_encode($rawMessageString);
    $email->setRaw($rawMessage);

    // Envoi de l'email via Gmail API
    $service->users_messages->send('me', $email);

    return back()->with('success', 'Votre message a été envoyé avec succès !');
})->name('send-message');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Afficher la liste des articles
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');

    // Afficher le formulaire pour créer un nouvel article
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');

    // Enregistrer un nouvel article
    Route::post('blog', [BlogController::class, 'store'])->name('blog.store');

    // Afficher le formulaire pour éditer un article
    Route::get('blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');

    // Mettre à jour un article existant
    Route::put('blog/{blog}', [BlogController::class, 'update'])->name('blog.update');

    // Supprimer un article
    Route::delete('blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
});
// Route pour afficher la liste des blogs
Route::get('/blogs', [BlogController::class, 'toutLesBlogs'])->name('blogs');

// Route pour afficher un article spécifique
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');




/*
|--------------------------------------------------------------------------|
| Admin Web Routes                                                        |
|--------------------------------------------------------------------------|
| Include the admin routes.                                                |
|--------------------------------------------------------------------------|
*/
require __DIR__ . '/admin.php';

