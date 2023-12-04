<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Satrio Utomo',
            'username' => 'satrio',
            'email' => 'satrio.utomo@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Budi',
        //     'email' => 'budi@gmail.com',
        //     'password' => bcrypt('12345')
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

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut, assumenda corporis soluta amet inventore ex optio odio repudiandae aspernatur quae! Accusamus aliquid accusantium eveniet quis impedit libero ab similique, deserunt autem voluptates adipisci? Doloremque nihil porro, quas quis sunt, cumque atque corporis omnis dolor reiciendis earum in itaque perspiciatis. Dolorum recusandae saepe tempora animi accusantium molestiae nulla neque consequuntur quis dicta quisquam nam, aperiam omnis ad labore voluptate iusto voluptatum natus deleniti qui nostrum facere! Esse aut perspiciatis dicta?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut, assumenda corporis soluta amet inventore ex optio odio repudiandae aspernatur quae! Accusamus aliquid accusantium eveniet quis impedit libero ab similique, deserunt autem voluptates adipisci? Doloremque nihil porro, quas quis sunt, cumque atque corporis omnis dolor reiciendis earum in itaque perspiciatis. Dolorum recusandae saepe tempora animi accusantium molestiae nulla neque consequuntur quis dicta quisquam nam, aperiam omnis ad labore voluptate iusto voluptatum natus deleniti qui nostrum facere! Esse aut perspiciatis dicta?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut, assumenda corporis soluta amet inventore ex optio odio repudiandae aspernatur quae! Accusamus aliquid accusantium eveniet quis impedit libero ab similique, deserunt autem voluptates adipisci? Doloremque nihil porro, quas quis sunt, cumque atque corporis omnis dolor reiciendis earum in itaque perspiciatis. Dolorum recusandae saepe tempora animi accusantium molestiae nulla neque consequuntur quis dicta quisquam nam, aperiam omnis ad labore voluptate iusto voluptatum natus deleniti qui nostrum facere! Esse aut perspiciatis dicta?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit velit vel error incidunt adipisci ipsa sint, hic voluptatum? Necessitatibus fuga in, quos provident ipsa alias autem neque ipsam magni aut, assumenda corporis soluta amet inventore ex optio odio repudiandae aspernatur quae! Accusamus aliquid accusantium eveniet quis impedit libero ab similique, deserunt autem voluptates adipisci? Doloremque nihil porro, quas quis sunt, cumque atque corporis omnis dolor reiciendis earum in itaque perspiciatis. Dolorum recusandae saepe tempora animi accusantium molestiae nulla neque consequuntur quis dicta quisquam nam, aperiam omnis ad labore voluptate iusto voluptatum natus deleniti qui nostrum facere! Esse aut perspiciatis dicta?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
