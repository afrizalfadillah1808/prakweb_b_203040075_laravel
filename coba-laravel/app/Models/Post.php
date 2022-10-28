<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Afrizal Fadillah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt iure non odit asperiores quidem optio quia quisquam, aliquam voluptas molestias provident sit totam id velit distinctio tempore a quaerat fugit doloremque illo soluta aspernatur minus. Porro eligendi non totam sed, accusantium eum assumenda libero sequi ratione dignissimos. Sapiente eaque at quibusdam blanditiis porro assumenda quis minima accusantium molestiae quidem aliquam enim eveniet odio vero ut velit autem, impedit laboriosam vitae distinctio et natus qui inventore nesciunt! Ipsam magnam laboriosam qui."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yoga Bagja",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus possimus nemo quibusdam aspernatur. Nisi repellat deserunt fugit dolore enim quibusdam commodi amet explicabo doloribus totam ducimus delectus distinctio natus esse, tenetur error perspiciatis. Ratione ullam quisquam dolores eius excepturi non eveniet
            temporibus in reprehenderit iusto! Veritatis minus commodi cumque repellendus suscipit maxime vitae quae fugiat distinctio, eligendi doloribus maiores aut vel quibusdam magni adipisci in enim. Nostrum natus sequi recusandae quis exercitationem et laboriosam quam, earum in facilis laborum aperiam, 
            beatae debitis, harum enim libero alias reprehenderit eveniet. Aspernatur itaque ipsa eligendi, error sapiente voluptate repellendus hic delectus nesciunt a?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    

}
