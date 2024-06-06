<?php
require 'vendor/autoload.php';
require 'config.php';

use App\Models\User;
use App\Models\Post;
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
$posts = Post::with('user')->orderBy('id', 'desc')->take(10)->get();
var_dump($posts[0]->tittle . " ".$posts[0]->user->name);
