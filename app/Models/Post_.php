<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "judul" => "Artikel Pertama",
            "slug" => "artikel-pertama",
            "author" => "Satrio Utomo",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni est ipsam dolor, magnam quae, asperiores quo voluptatum ipsum, provident culpa laborum! Voluptate ipsa doloribus ex sed debitis in officia accusantium aspernatur recusandae quis temporibus a ullam deserunt nobis quo sit soluta repellendus, earum iste minus ipsum? Eligendi molestiae neque iste nihil hic praesentium beatae cumque repudiandae delectus! Explicabo voluptates velit ratione! Reprehenderit, fugiat illum! Dicta dignissimos corrupti, recusandae odit dolorem, minima nostrum praesentium esse sed voluptatem id, molestiae totam animi!"
        ],
        [
            "judul" => "Artikel Kedua",
            "slug" => "artikel-kedua",
            "author" => "Rasel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis aliquam explicabo, incidunt distinctio alias possimus ratione nemo totam voluptates commodi neque velit nulla laborum quos, suscipit nisi excepturi tempore doloribus consequuntur nihil fugit debitis officiis numquam. Optio iure est necessitatibus beatae quia, eaque fuga aliquam nam? Voluptatibus, quibusdam quos sequi sed suscipit incidunt nesciunt iusto vel fugiat recusandae pariatur hic fuga eligendi quam eum consequuntur cum in eius dolores natus explicabo quae? Voluptas unde possimus provident? Aliquid odit laudantium rem quis veritatis iure itaque dignissimos voluptatibus nisi ipsa! Odio eaque dicta corrupti ea. Reiciendis perferendis ut eaque minima voluptas."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts); //use 'collect' feature
    }

    public static function find($slug)
    {
        $posts = static::all(); //call method all

        return $posts->firstWhere('slug', $slug); //display article by slug use 'firstWhere'
    }
}
