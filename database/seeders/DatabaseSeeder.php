<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Post::factory(100)->create();



        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::create([
            'name' => 'Arif Budiman Arrosyid',
            'username' => 'arifbudimanarrosyid',
            'email' => 'arifbudimanarrosyid@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => '<p>Aliqua ipsum fugiat ex ut. Deserunt ut eu consequat qui sunt consequat magna eiusmod. Pariatur sint adipisicing aute commodo cupidatat. Consequat aliquip ullamco veniam exercitation cillum cupidatat in incididunt laboris ea nostrud cupidatat qui non.</p>
        //     <p>Minim labore reprehenderit elit cupidatat adipisicing velit ea eiusmod id sit adipisicing deserunt consectetur. Voluptate fugiat culpa tempor sint aute et. Eiusmod mollit aliquip sunt officia ex in. Ipsum dolor officia elit mollit reprehenderit irure elit consequat qui pariatur voluptate reprehenderit. Proident enim exercitation nostrud labore incididunt aliquip consectetur commodo excepteur. Nulla commodo mollit non sunt exercitation incididunt velit mollit cillum veniam consequat Lorem ullamco. Adipisicing eiusmod sit sit veniam eu ad exercitation proident.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => '<p>Aliqua ipsum fugiat ex ut. Deserunt ut eu consequat qui sunt consequat magna eiusmod. Pariatur sint adipisicing aute commodo cupidatat. Consequat aliquip ullamco veniam exercitation cillum cupidatat in incididunt laboris ea nostrud cupidatat qui non.</p>
        //     <p>Minim labore reprehenderit elit cupidatat adipisicing velit ea eiusmod id sit adipisicing deserunt consectetur. Voluptate fugiat culpa tempor sint aute et. Eiusmod mollit aliquip sunt officia ex in. Ipsum dolor officia elit mollit reprehenderit irure elit consequat qui pariatur voluptate reprehenderit. Proident enim exercitation nostrud labore incididunt aliquip consectetur commodo excepteur. Nulla commodo mollit non sunt exercitation incididunt velit mollit cillum veniam consequat Lorem ullamco. Adipisicing eiusmod sit sit veniam eu ad exercitation proident.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => '<p>Aliqua ipsum fugiat ex ut. Deserunt ut eu consequat qui sunt consequat magna eiusmod. Pariatur sint adipisicing aute commodo cupidatat. Consequat aliquip ullamco veniam exercitation cillum cupidatat in incididunt laboris ea nostrud cupidatat qui non.</p>
        //     <p>Minim labore reprehenderit elit cupidatat adipisicing velit ea eiusmod id sit adipisicing deserunt consectetur. Voluptate fugiat culpa tempor sint aute et. Eiusmod mollit aliquip sunt officia ex in. Ipsum dolor officia elit mollit reprehenderit irure elit consequat qui pariatur voluptate reprehenderit. Proident enim exercitation nostrud labore incididunt aliquip consectetur commodo excepteur. Nulla commodo mollit non sunt exercitation incididunt velit mollit cillum veniam consequat Lorem ullamco. Adipisicing eiusmod sit sit veniam eu ad exercitation proident.</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
