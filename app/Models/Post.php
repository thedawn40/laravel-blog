<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
        [
            'title'=> 'judul post pertama',
            'slug'=> 'post-pertama',
            'author'    => 'luthfi',
            'body'  => 'lorem ipsums'
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
