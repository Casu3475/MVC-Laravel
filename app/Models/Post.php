<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table="post"; // permite de cambiarle el nombre a la table directamente en la base de datos video: minuto 2 https://www.youtube.com/watch?v=QM1MVofbaek&list=PLpKWS6gp0jd_xJyvkbDzoMQLQc-qyFQAE&index=14


    // Relation One to Many inverse : 1 annonce Post
    // appartient - belongsTo - à 1 seul annonceur
    // User = nom du Model à mettre en minuscule
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
