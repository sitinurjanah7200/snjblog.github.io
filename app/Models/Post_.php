<?php

namespace App\Models;


class Post
{
  private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "SNJ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis optio aperiam ut maiores tenetur reiciendis eius atque architecto possimus perferendis voluptatum assumenda et molestias, quas minus eaque odio. Libero, obcaecati."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sisi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis optio aperiam ut maiores tenetur reiciendis eius atque architecto possimus perferendis voluptatum assumenda et molestias, quas minus eaque odio. Libero, obcaecati."  
        ]
    ];  

        public static function all()
        {
            return collect (self::$blog_posts);
        }

       public static function find($slug)
       {
           $posts = static::all();

           return $posts->firstWhere('slug', $slug);
       }
}

