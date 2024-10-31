<?php

use Illuminate\Support\Facades\Route;
use App\Models\category;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    // $category = Category::find(1);
    // $post = new Post([
    // 'title' => 'Mon 2 post',
    // 'body' => 'Contenu du post',
    // 'category_id' => $category->id,
    // ]);
    // $post->save();
    dd( Post::find(1)->title);
});

