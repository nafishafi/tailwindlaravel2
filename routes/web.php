<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['name'=> 'Muhammad Nafis Hafi','title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Muhammad Nafis Hafi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At soluta praesentium dolorum accusamus sequi maxime amet natus reprehenderit vel fuga.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Muhammad Nafis Hafi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolor, at voluptatibus mollitia iusto deserunt veniam? Illo aut iusto nemo ullam. Animi illo quasi sed atque tenetur, libero aperiam. Corporis.'
        ],
    ]]);
});
Route::get('/posts/{slug}', function($slug){
    $posts =[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Muhammad Nafis Hafi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At soluta praesentium dolorum accusamus sequi maxime amet natus reprehenderit vel fuga.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Muhammad Nafis Hafi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolor, at voluptatibus mollitia iusto deserunt veniam? Illo aut iusto nemo ullam. Animi illo quasi sed atque tenetur, libero aperiam. Corporis.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});