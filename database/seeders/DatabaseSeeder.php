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
         
       User::create([
             'name' => 'riyan bayu saputra',
             'username' => 'riyanbayusaputra',
             'email' => 'riyanbayu0102@gmail.com',
             'password' => bcrypt('12345')


         ]);

         User::factory(1)->create();
          Category::create([
              'name' => 'perbulan',
              'slug' => 'per bulan',
          ]);

          Category::create([
            'name' => 'pertahun',
            'slug' => 'pertahun',
        ]);


         Post::factory(10)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'bismillah latihan dluu',
        //     'body' => 'bismillah latihan dluu gayaaa',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'bismillah latihan dluu',
        //     'body' => 'bismillah latihan dluu gayaaa',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'bismillah latihan dluu',
        //     'body' => 'bismillah latihan dluu gayaaa',
        //     'category_id'=> 2,
        //     'user_id' => 1
        // ]);
    }
}
