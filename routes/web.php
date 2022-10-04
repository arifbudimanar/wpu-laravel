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
        'title' => 'Home'

    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About',
            'name' => "Arif Budiman Arrosyid",
            "email" => "arifbudimanarrosyid@gmail.com",
            "image" => "logo.png"
        ]
    );
});

Route::get('/blog', function () {
    $blog_posts = [
        [

            'title' => 'Blog kesatu',
            'slug' => 'blog-kesatu',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Est minim ea excepteur velit culpa mollit magna ullamco ut aute Lorem adipisicing. Mollit aliquip laboris irure quis adipisicing velit. Proident duis nostrud ex enim enim Lorem et aliqua officia dolor. Duis officia nulla qui ullamco quis minim esse minim. Nisi dolor reprehenderit laborum id amet in nostrud eiusmod id excepteur aute amet.Magna incididunt anim eu in culpa culpa laborum elit aute nostrud sit. Deserunt ea elit velit exercitation. Sint occaecat quis sint ex cillum magna est duis id. Culpa ipsum dolor aliqua officia duis eiusmod laborum.Mollit cupidatat proident cupidatat ex irure id est aute et do eu deserunt minim mollit. Ea tempor amet eiusmod sint tempor officia adipisicing laboris mollit eu. Pariatur in ullamco proident eiusmod ea officia eiusmod magna duis do culpa laborum non mollit.'
        ],
        [
            'title' => 'Blog kedua',
            'slug' => 'blog-kedua',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Adipisicing do eu duis deserunt dolor aute labore dolore anim elit irure amet mollit. Est esse minim nisi labore incididunt. Proident excepteur aliquip dolore minim reprehenderit ut excepteur ipsum.'
        ],
        [
            'title' => 'Blog ketiga',
            'slug' => 'blog-ketiga',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Tempor irure elit elit incididunt nulla deserunt consectetur Lorem. Commodo aute laboris aute in qui. Id anim proident est ex eiusmod fugiat mollit minim consectetur dolor. Ad laborum amet labore aute et mollit eiusmod aliquip veniam.

            Deserunt amet sunt veniam nulla eu aute officia laboris irure dolor adipisicing. Culpa id magna reprehenderit culpa amet. Eu velit sunt consequat est reprehenderit veniam occaecat irure.

            Eiusmod Lorem reprehenderit exercitation mollit aute mollit ex elit adipisicing eiusmod labore veniam ipsum. Culpa velit consectetur do labore culpa. Dolor irure laborum excepteur esse anim irure deserunt officia et. Laborum mollit eiusmod ad voluptate eu deserunt. Ipsum nisi dolore mollit occaecat.

            Irure ullamco occaecat est eu occaecat consequat ipsum proident ea consequat quis aliquip. Elit commodo Lorem do do et ipsum aute duis eiusmod fugiat qui dolor deserunt. Eu pariatur amet officia velit ex sunt duis velit Lorem incididunt laborum non do veniam. Officia cupidatat laboris culpa consequat dolore et sint excepteur proident tempor qui sint. Exercitation esse laboris veniam reprehenderit adipisicing elit enim qui.

            Commodo consectetur culpa veniam eu Lorem consequat et. Esse sunt exercitation deserunt sit quis amet officia elit labore laboris. Nulla ullamco quis Lorem labore elit duis laboris culpa ut consectetur ullamco amet laborum. Proident excepteur sunt ad velit voluptate.

            Nisi tempor sit officia minim qui anim ex nostrud mollit aliquip quis. Fugiat ut Lorem exercitation proident fugiat elit nostrud deserunt sint Lorem adipisicing mollit dolor sint. Sit excepteur qui commodo ut quis. Aliquip exercitation consectetur sint consequat culpa cillum fugiat excepteur. Reprehenderit et esse proident tempor amet dolore duis et.

            Est ad aliquip ullamco cupidatat sunt quis ex veniam eiusmod fugiat fugiat. Sit adipisicing reprehenderit nulla excepteur cupidatat. Veniam laborum ipsum ea fugiat ipsum do est irure velit sint. Nisi exercitation consequat ex do culpa non. Elit enim incididunt minim consequat anim duis tempor mollit pariatur dolor. Adipisicing Lorem mollit sint ipsum. Incididunt fugiat proident consectetur exercitation mollit sint pariatur nisi esse aliqua occaecat elit.'
        ],

    ];


    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});




Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [

            'title' => 'Blog kesatu',
            'slug' => 'blog-kesatu',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Est minim ea excepteur velit culpa mollit magna ullamco ut aute Lorem adipisicing. Mollit aliquip laboris irure quis adipisicing velit. Proident duis nostrud ex enim enim Lorem et aliqua officia dolor. Duis officia nulla qui ullamco quis minim esse minim. Nisi dolor reprehenderit laborum id amet in nostrud eiusmod id excepteur aute amet.Magna incididunt anim eu in culpa culpa laborum elit aute nostrud sit. Deserunt ea elit velit exercitation. Sint occaecat quis sint ex cillum magna est duis id. Culpa ipsum dolor aliqua officia duis eiusmod laborum.Mollit cupidatat proident cupidatat ex irure id est aute et do eu deserunt minim mollit. Ea tempor amet eiusmod sint tempor officia adipisicing laboris mollit eu. Pariatur in ullamco proident eiusmod ea officia eiusmod magna duis do culpa laborum non mollit.'
        ],
        [
            'title' => 'Blog kedua',
            'slug' => 'blog-kedua',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Adipisicing do eu duis deserunt dolor aute labore dolore anim elit irure amet mollit. Est esse minim nisi labore incididunt. Proident excepteur aliquip dolore minim reprehenderit ut excepteur ipsum.'
        ],
        [
            'title' => 'Blog ketiga',
            'slug' => 'blog-ketiga',
            'author' => 'Arif Budiman Arrosyid',
            'body' => 'Tempor irure elit elit incididunt nulla deserunt consectetur Lorem. Commodo aute laboris aute in qui. Id anim proident est ex eiusmod fugiat mollit minim consectetur dolor. Ad laborum amet labore aute et mollit eiusmod aliquip veniam.

            Deserunt amet sunt veniam nulla eu aute officia laboris irure dolor adipisicing. Culpa id magna reprehenderit culpa amet. Eu velit sunt consequat est reprehenderit veniam occaecat irure.

            Eiusmod Lorem reprehenderit exercitation mollit aute mollit ex elit adipisicing eiusmod labore veniam ipsum. Culpa velit consectetur do labore culpa. Dolor irure laborum excepteur esse anim irure deserunt officia et. Laborum mollit eiusmod ad voluptate eu deserunt. Ipsum nisi dolore mollit occaecat.

            Irure ullamco occaecat est eu occaecat consequat ipsum proident ea consequat quis aliquip. Elit commodo Lorem do do et ipsum aute duis eiusmod fugiat qui dolor deserunt. Eu pariatur amet officia velit ex sunt duis velit Lorem incididunt laborum non do veniam. Officia cupidatat laboris culpa consequat dolore et sint excepteur proident tempor qui sint. Exercitation esse laboris veniam reprehenderit adipisicing elit enim qui.

            Commodo consectetur culpa veniam eu Lorem consequat et. Esse sunt exercitation deserunt sit quis amet officia elit labore laboris. Nulla ullamco quis Lorem labore elit duis laboris culpa ut consectetur ullamco amet laborum. Proident excepteur sunt ad velit voluptate.

            Nisi tempor sit officia minim qui anim ex nostrud mollit aliquip quis. Fugiat ut Lorem exercitation proident fugiat elit nostrud deserunt sint Lorem adipisicing mollit dolor sint. Sit excepteur qui commodo ut quis. Aliquip exercitation consectetur sint consequat culpa cillum fugiat excepteur. Reprehenderit et esse proident tempor amet dolore duis et.

            Est ad aliquip ullamco cupidatat sunt quis ex veniam eiusmod fugiat fugiat. Sit adipisicing reprehenderit nulla excepteur cupidatat. Veniam laborum ipsum ea fugiat ipsum do est irure velit sint. Nisi exercitation consequat ex do culpa non. Elit enim incididunt minim consequat anim duis tempor mollit pariatur dolor. Adipisicing Lorem mollit sint ipsum. Incididunt fugiat proident consectetur exercitation mollit sint pariatur nisi esse aliqua occaecat elit.'
        ],

    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});



Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
    ]);
});
