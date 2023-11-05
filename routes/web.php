<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about',['title'=>'About','name'=> 'luthfi','email'=> 'alfarisi.luthfi@yahoo.com','image'=> 'test.jpg']);
});



Route::get('/posts', function () {
    $blog_posts = [
        [
            'title'=> 'judul post pertama',
            'slug'=> 'post-pertama',
            'author'    => 'luthfi',
            'body'  => 'lorem ipsum'
        ]
        ];
    
    return view('posts',['title' => 'Posts', 'posts' => $blog_posts]);
});
    
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title'=> 'judul post pertama',
            'slug'=> 'post-pertama',
            'author'    => 'luthfi',
            'body'  => 'lorem ipsum'
        ]
        ];
    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"]===$slug){
            $new_post = $post;
        }
    }
    
    return view('post', [
        'title' => 'Single Post' ,
        'post'  => $new_post
    ]);
});

