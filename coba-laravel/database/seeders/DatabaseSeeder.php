<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Muhammad Afrizal Fadillah',
            'email' => 'ijal@gmail.com',
            'password' => bcrypt('ijal123')
        ]);
        
        User::create([
            'name' => 'Yoga bagja',
            'email' => 'yoga@gmail.com',
            'password' => bcrypt('yoga123')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Ini sedikit tentang Judul Pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi eum dolorum suscipit in obcaecati cum similique illo beatae debitis iusto enim blanditiis porro quaerat odio officia temporibus dolorem rem sunt architecto recusandae ipsum, neque dignissimos aperiam. Numquam at reiciendis accusamus debitis aspernatur quod, aliquam minima id animi. Qui recusandae impedit beatae corporis magnam vero, dolorem doloribus, eaque error quo asperiores, hic doloremque est voluptas animi ad dolorum minus aperiam officiis voluptatibus. Molestiae rem nostrum atque perferendis corrupti quae obcaecati dicta eligendi et dolore suscipit cupiditate ratione, error ab alias, quod fugiat at magnam! Maiores officiis eaque amet dignissimos consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid deleniti eaque quasi, sequi velit? Eligendi animi vel totam placeat aliquam recusandae eos omnis temporibus alias, natus quis architecto, fuga nemo commodi iusto doloribus error in sed iure porro dicta quaerat. Eaque et quibusdam vitae ipsum necessitatibus perspiciatis magnam mollitia, iusto delectus voluptatum perferendis illo aliquid cumque eos possimus commodi aspernatur alias nam, doloremque at explicabo. Expedita, saepe. Laudantium porro similique repellendus culpa facilis ut explicabo, rerum magni eius eveniet.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci sint exercitationem, quam fugiat quis necessitatibus corporis vel cum aliquid, iusto nulla accusantium vero sapiente quidem soluta laudantium id voluptate atque culpa minus totam nobis eos? Eum nobis architecto sit a.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Ini sedikit tentang Judul ke Dua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi eum dolorum suscipit in obcaecati cum similique illo beatae debitis iusto enim blanditiis porro quaerat odio officia temporibus dolorem rem sunt architecto recusandae ipsum, neque dignissimos aperiam. Numquam at reiciendis accusamus debitis aspernatur quod, aliquam minima id animi. Qui recusandae impedit beatae corporis magnam vero, dolorem doloribus, eaque error quo asperiores, hic doloremque est voluptas animi ad dolorum minus aperiam officiis voluptatibus. Molestiae rem nostrum atque perferendis corrupti quae obcaecati dicta eligendi et dolore suscipit cupiditate ratione, error ab alias, quod fugiat at magnam! Maiores officiis eaque amet dignissimos consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid deleniti eaque quasi, sequi velit? Eligendi animi vel totam placeat aliquam recusandae eos omnis temporibus alias, natus quis architecto, fuga nemo commodi iusto doloribus error in sed iure porro dicta quaerat. Eaque et quibusdam vitae ipsum necessitatibus perspiciatis magnam mollitia, iusto delectus voluptatum perferendis illo aliquid cumque eos possimus commodi aspernatur alias nam, doloremque at explicabo. Expedita, saepe. Laudantium porro similique repellendus culpa facilis ut explicabo, rerum magni eius eveniet.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci sint exercitationem, quam fugiat quis necessitatibus corporis vel cum aliquid, iusto nulla accusantium vero sapiente quidem soluta laudantium id voluptate atque culpa minus totam nobis eos? Eum nobis architecto sit a.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Ini sedikit tentang Judul ke Tiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi eum dolorum suscipit in obcaecati cum similique illo beatae debitis iusto enim blanditiis porro quaerat odio officia temporibus dolorem rem sunt architecto recusandae ipsum, neque dignissimos aperiam. Numquam at reiciendis accusamus debitis aspernatur quod, aliquam minima id animi. Qui recusandae impedit beatae corporis magnam vero, dolorem doloribus, eaque error quo asperiores, hic doloremque est voluptas animi ad dolorum minus aperiam officiis voluptatibus. Molestiae rem nostrum atque perferendis corrupti quae obcaecati dicta eligendi et dolore suscipit cupiditate ratione, error ab alias, quod fugiat at magnam! Maiores officiis eaque amet dignissimos consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid deleniti eaque quasi, sequi velit? Eligendi animi vel totam placeat aliquam recusandae eos omnis temporibus alias, natus quis architecto, fuga nemo commodi iusto doloribus error in sed iure porro dicta quaerat. Eaque et quibusdam vitae ipsum necessitatibus perspiciatis magnam mollitia, iusto delectus voluptatum perferendis illo aliquid cumque eos possimus commodi aspernatur alias nam, doloremque at explicabo. Expedita, saepe. Laudantium porro similique repellendus culpa facilis ut explicabo, rerum magni eius eveniet.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci sint exercitationem, quam fugiat quis necessitatibus corporis vel cum aliquid, iusto nulla accusantium vero sapiente quidem soluta laudantium id voluptate atque culpa minus totam nobis eos? Eum nobis architecto sit a.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Ini sedikit tentang Judul ke Empat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi eum dolorum suscipit in obcaecati cum similique illo beatae debitis iusto enim blanditiis porro quaerat odio officia temporibus dolorem rem sunt architecto recusandae ipsum, neque dignissimos aperiam. Numquam at reiciendis accusamus debitis aspernatur quod, aliquam minima id animi. Qui recusandae impedit beatae corporis magnam vero, dolorem doloribus, eaque error quo asperiores, hic doloremque est voluptas animi ad dolorum minus aperiam officiis voluptatibus. Molestiae rem nostrum atque perferendis corrupti quae obcaecati dicta eligendi et dolore suscipit cupiditate ratione, error ab alias, quod fugiat at magnam! Maiores officiis eaque amet dignissimos consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid deleniti eaque quasi, sequi velit? Eligendi animi vel totam placeat aliquam recusandae eos omnis temporibus alias, natus quis architecto, fuga nemo commodi iusto doloribus error in sed iure porro dicta quaerat. Eaque et quibusdam vitae ipsum necessitatibus perspiciatis magnam mollitia, iusto delectus voluptatum perferendis illo aliquid cumque eos possimus commodi aspernatur alias nam, doloremque at explicabo. Expedita, saepe. Laudantium porro similique repellendus culpa facilis ut explicabo, rerum magni eius eveniet.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci sint exercitationem, quam fugiat quis necessitatibus corporis vel cum aliquid, iusto nulla accusantium vero sapiente quidem soluta laudantium id voluptate atque culpa minus totam nobis eos? Eum nobis architecto sit a.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
