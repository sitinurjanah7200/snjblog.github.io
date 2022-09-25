<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name' => 'Baekhyun',
            'username' => 'baekhyun',
            'email' => 'baekhyun@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'chanyeol',
        //     'email' => 'chanyeol@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        // 'title' => 'Judul Pertama',
        // 'slug' => 'judul-pertama',
        // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi neque, placeat rem sit consequatur illum ipsam tempore sint minus, ratione deserunt earum voluptatem temporibus nemo, numquam nihil voluptas facere repellendus fugit! Totam alias modi cupiditate ipsum rerum asperiores provident distinctio, in amet maiores vitae! Omnis repellendus ab quod accusantium, beatae sint tenetur, qui deleniti quidem, animi optio alias dolorum veniam ea blanditiis quis illum inventore nemo amet quaerat voluptate dolor aliquam fugiat odit? Quos minima qui facere possimus non quaerat dolorem eligendi. Dignissimos sequi ipsam, aliquam culpa asperiores modi molestiae ipsum nemo, quis corporis rerum nisi ad perferendis neque natus?',
        // 'category_id' => 1,
        // 'user_id' =>1
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi neque, placeat rem sit consequatur illum ipsam tempore sint minus, ratione deserunt earum voluptatem temporibus nemo, numquam nihil voluptas facere repellendus fugit! Totam alias modi cupiditate ipsum rerum asperiores provident distinctio, in amet maiores vitae! Omnis repellendus ab quod accusantium, beatae sint tenetur, qui deleniti quidem, animi optio alias dolorum veniam ea blanditiis quis illum inventore nemo amet quaerat voluptate dolor aliquam fugiat odit? Quos minima qui facere possimus non quaerat dolorem eligendi. Dignissimos sequi ipsam, aliquam culpa asperiores modi molestiae ipsum nemo, quis corporis rerum nisi ad perferendis neque natus?',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi neque, placeat rem sit consequatur illum ipsam tempore sint minus, ratione deserunt earum voluptatem temporibus nemo, numquam nihil voluptas facere repellendus fugit! Totam alias modi cupiditate ipsum rerum asperiores provident distinctio, in amet maiores vitae! Omnis repellendus ab quod accusantium, beatae sint tenetur, qui deleniti quidem, animi optio alias dolorum veniam ea blanditiis quis illum inventore nemo amet quaerat voluptate dolor aliquam fugiat odit? Quos minima qui facere possimus non quaerat dolorem eligendi. Dignissimos sequi ipsam, aliquam culpa asperiores modi molestiae ipsum nemo, quis corporis rerum nisi ad perferendis neque natus?',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);


        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi neque, placeat rem sit consequatur illum ipsam tempore sint minus, ratione deserunt earum voluptatem temporibus nemo, numquam nihil voluptas facere repellendus fugit! Totam alias modi cupiditate ipsum rerum asperiores provident distinctio, in amet maiores vitae! Omnis repellendus ab quod accusantium, beatae sint tenetur, qui deleniti quidem, animi optio alias dolorum veniam ea blanditiis quis illum inventore nemo amet quaerat voluptate dolor aliquam fugiat odit? Quos minima qui facere possimus non quaerat dolorem eligendi. Dignissimos sequi ipsam, aliquam culpa asperiores modi molestiae ipsum nemo, quis corporis rerum nisi ad perferendis neque natus?',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);

    }
}
