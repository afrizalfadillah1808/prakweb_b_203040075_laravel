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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Afrizal Fadillah",
        "email" => "ijal@gmail.com",
        "image" => "ijal.jpg"
    ]);
});





Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
}); 
    
