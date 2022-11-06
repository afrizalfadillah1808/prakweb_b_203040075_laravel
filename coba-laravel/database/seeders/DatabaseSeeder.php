<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Muhammad Afrizal Fadillah',
        //     'email' => '203040075@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Asril Permana',
        //     'email' => '203040118@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Post::factory(15)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos quaerat fugit facere blanditiis, optio veniam necessitatibus iste quam. Cumque minima assumenda dignissimos a architecto doloremque quo fuga eos maiores vero, quae neque ut veritatis ad. Tempore iste recusandae beatae et, sequi hic, ea aliquid provident consequuntur delectus porro deleniti, enim explicabo cum doloremque repudiandae debitis tempora nisi ad esse pariatur similique aperiam nostrum. Tenetur obcaecati tempora eaque autem et saepe, quod a, dolorum fuga officiis similique esse rerum, labore ipsa iusto veniam! Officia esse nulla cumque. Excepturi fugit vitae ea necessitatibus sapiente optio quo debitis, est autem similique sit enim, totam consequatur adipisci nam. Autem, sequi suscipit facere tempore dolore numquam distinctio consequuntur odio perferendis neque id ab minus eius mollitia corporis voluptates veritatis sapiente magnam unde reiciendis eligendi doloribus consequatur. Iure sed id iste provident doloremque accusantium quae deleniti.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos quaerat fugit facere blanditiis, optio veniam necessitatibus iste quam. Cumque minima assumenda dignissimos a architecto doloremque quo fuga eos maiores vero, quae neque ut veritatis ad. Tempore iste recusandae beatae et, sequi hic, ea aliquid provident consequuntur delectus porro deleniti, enim explicabo cum doloremque repudiandae debitis tempora nisi ad esse pariatur similique aperiam nostrum. Tenetur obcaecati tempora eaque autem et saepe, quod a, dolorum fuga officiis similique esse rerum, labore ipsa iusto veniam! Officia esse nulla cumque. Excepturi fugit vitae ea necessitatibus sapiente optio quo debitis, est autem similique sit enim, totam consequatur adipisci nam. Autem, sequi suscipit facere tempore dolore numquam distinctio consequuntur odio perferendis neque id ab minus eius mollitia corporis voluptates veritatis sapiente magnam unde reiciendis eligendi doloribus consequatur. Iure sed id iste provident doloremque accusantium quae deleniti.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos quaerat fugit facere blanditiis, optio veniam necessitatibus iste quam. Cumque minima assumenda dignissimos a architecto doloremque quo fuga eos maiores vero, quae neque ut veritatis ad. Tempore iste recusandae beatae et, sequi hic, ea aliquid provident consequuntur delectus porro deleniti, enim explicabo cum doloremque repudiandae debitis tempora nisi ad esse pariatur similique aperiam nostrum. Tenetur obcaecati tempora eaque autem et saepe, quod a, dolorum fuga officiis similique esse rerum, labore ipsa iusto veniam! Officia esse nulla cumque. Excepturi fugit vitae ea necessitatibus sapiente optio quo debitis, est autem similique sit enim, totam consequatur adipisci nam. Autem, sequi suscipit facere tempore dolore numquam distinctio consequuntur odio perferendis neque id ab minus eius mollitia corporis voluptates veritatis sapiente magnam unde reiciendis eligendi doloribus consequatur. Iure sed id iste provident doloremque accusantium quae deleniti.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, asperiores dolorem? Officia esse soluta qui nihil porro debitis eos quaerat fugit facere blanditiis, optio veniam necessitatibus iste quam. Cumque minima assumenda dignissimos a architecto doloremque quo fuga eos maiores vero, quae neque ut veritatis ad. Tempore iste recusandae beatae et, sequi hic, ea aliquid provident consequuntur delectus porro deleniti, enim explicabo cum doloremque repudiandae debitis tempora nisi ad esse pariatur similique aperiam nostrum. Tenetur obcaecati tempora eaque autem et saepe, quod a, dolorum fuga officiis similique esse rerum, labore ipsa iusto veniam! Officia esse nulla cumque. Excepturi fugit vitae ea necessitatibus sapiente optio quo debitis, est autem similique sit enim, totam consequatur adipisci nam. Autem, sequi suscipit facere tempore dolore numquam distinctio consequuntur odio perferendis neque id ab minus eius mollitia corporis voluptates veritatis sapiente magnam unde reiciendis eligendi doloribus consequatur. Iure sed id iste provident doloremque accusantium quae deleniti.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}