<?php

namespace App\Models;



class Post
{
   private static $article_posts = [
    [
        "title" => "Artikel Coba Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Test",
        "body" => "
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, voluptatum? Eius consectetur sed, aliquid velit culpa distinctio facilis omnis impedit reprehenderit praesentium cupiditate harum porro temporibus magni sunt numquam odio nam quaerat aspernatur corrupti voluptatum ratione, sapiente nulla at. Dolores molestias impedit nostrum incidunt, eveniet praesentium cum accusantium deleniti laudantium, in obcaecati cupiditate consequuntur totam, qui quas. Illum quidem itaque inventore accusamus animi vero quaerat voluptatem et, officiis culpa numquam voluptatum fugit dicta omnis sint quos amet iusto, deserunt totam."
    ],
    [
        "title" => "Artikel kedua",
        "slug" => "judul-post-kedua",
        "author" => "Test2",
        "body" => "
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, impedit illum. Aliquam molestiae autem nobis porro ullam illum, quod rerum, dolores cupiditate nemo id nam modi velit! Sed itaque eos, corporis atque earum culpa voluptate repellat, nemo maiores pariatur tenetur non ex ipsam porro error eum, consequatur placeat totam dicta deleniti aliquid excepturi quia. Nemo quae aperiam eligendi quos! Illum aperiam, vero qui a cumque assumenda velit quia suscipit dolorum, minima et, quam incidunt cum inventore corporis distinctio voluptas consequuntur reprehenderit quibusdam quae delectus eaque facere! Cum aliquam repellendus aut voluptas, ab, nulla perferendis in eligendi tempora tenetur facilis error."
    ]

]; 

public static function all()
{
   return collect(self::$article_posts);
}

public static function find($slug)
{
    $posts = static::all();
   
    return $posts->firstWhere('slug', $slug);
}

}
