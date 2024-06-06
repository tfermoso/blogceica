<?php
require 'vendor/autoload.php';
require 'config.php';

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
/*
$user = new User;
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->password = password_hash('password', PASSWORD_BCRYPT);
$user->save();

$post=new Post;
$post->tittle="Post2";
$post->body="Cuerpo post2";
$post->image="imagen2.jpg";
$post->user_id=1;
$post->save();
*/
/*
$posts = Post::with('user')->orderBy('id', 'desc')->take(10)->get();
var_dump($posts[0]->tittle . " ".$posts[0]->user->name);
*/
// Crear una nueva categoría
$category1 = Category::create([
    'name' => 'Tech',
    'user_id' => 1
]);

$category2 = Category::create([
    'name' => 'Science',
    'user_id' => 1
]);

// Crear un nuevo post
$post = Post::create([
    'tittle' => 'Sample Post Title',
    'body' => 'This is the body of the post.',
    'image' => 'path/to/image.jpg',
    'create_date' => date('Y-m-d H:i:s'),
    'user_id' => 1
]);

// Asignar categorías al post
$post->categories()->attach([$category1->id, $category2->id]);
