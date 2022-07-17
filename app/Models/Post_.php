<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-post-satu",
            "author" => "Dodd",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim qui et ab voluptate. Unde labore molestiae minima odit, aut saepe ratione voluptatum ea exercitationem autem explicabo recusandae modi dolores consequatur"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-post-dua",
            "author" => "Anan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim qui et ab voluptate. Unde labore molestiae minima odit, aut saepe ratione voluptatum ea exercitationem autem explicabo recusandae modi dolores consequatur"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
