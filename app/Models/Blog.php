<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Nom de la table dans la base de données
    protected $table = 'blog';

    // Les champs qui peuvent être assignés massivement
    protected $fillable = ['title', 'content', 'image'];
}
