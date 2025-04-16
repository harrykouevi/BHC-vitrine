<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'nom', 'email', 'message', 'statut'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    
    // protected $fillable = ['name', 'email', 'content'];
}
