<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'tittle',
        'body',
        'image',
        'create_date',
        'user_id'
    ];

    public $timestamps = false;

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relación con el modelo Category
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }

    // Relación con el modelo Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
