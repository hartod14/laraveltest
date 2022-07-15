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
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Hari Tody',
            'email' => 'hari@gmail.com',
            'password' => bcrypt('12345')
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
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde porro sequi quis consequatur corrupti reiciendis, reprehenderit odio ipsum, voluptates earum, voluptatum blanditiis cupiditate! A sapiente voluptatum quos beatae ea, provident debitis eaque tempora delectus repellat quidem voluptate ex dolores minima.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam repudiandae iusto rerum ipsum natus commodi dignissimos, itaque quidem iste asperiores autem cumque cum sunt optio consequatur beatae consequuntur ratione? Voluptatem fugiat rem, tempora nulla tenetur modi asperiores, aliquid obcaecati odit nam deleniti expedita, voluptates eos ipsam veritatis officia perferendis vitae?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde porro sequi quis consequatur corrupti reiciendis, reprehenderit odio ipsum, voluptates earum, voluptatum blanditiis cupiditate! A sapiente voluptatum quos beatae ea, provident debitis eaque tempora delectus repellat quidem voluptate ex dolores minima.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam repudiandae iusto rerum ipsum natus commodi dignissimos, itaque quidem iste asperiores autem cumque cum sunt optio onsequatur beatae consequuntur ratione? Voluptatem fugiat rem, tempora nulla tenetur modi asperiores, aliquid obcaecati odit nam deleniti expedita, voluptates eos ipsam veritatis officia perferendis vitae?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde porro sequi quis consequatur corrupti reiciendis, reprehenderit odio ipsum, voluptates earum, voluptatum blanditiis cupiditate! A sapiente voluptatum quos beatae ea, provident debitis eaque tempora delectus repel lat quidem voluptate ex dolores minima.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam repudiandae iusto rerum ipsum natus commodi dignissimos, itaque quidem iste asperiores autem cumque cum sunt optio consequatur beatae consequuntur ratione? Voluptatem fugiat rem, tempora nulla tenetur modi asperiores, aliquid obcaecati odit nam deleniti expedita, voluptates eos ipsam veritatis officia perferendis vitae?',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
