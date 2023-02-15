<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\App\Models\User;
use\App\Models\Category;
use\App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Nailli Amaliyah',
        //     'email' => 'nayll00@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yogi Candra',
        //     'email' => 'cannyo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab, magnam ipsum harum tenetur est numquam et ut provident hic! Tempora praesentium officia quos quasi voluptates autem recusandae expedita ab perspiciatis nobis similique veniam distinctio explicabo, odit sunt iusto nam quam a iure provident! Tenetur quidem voluptates, inventore deserunt accusantium omnis sapiente aliquid voluptas. Nemo aperiam ea quos fugiat provident repellendus illo quis, voluptas modi aut, in impedit vel adipisci odit suscipit libero ducimus consectetur, non accusamus. Pariatur omnis sed architecto a molestiae mollitia enim, quaerat at numquam. Provident cumque ducimus omnis dicta. Amet tempora aut laborum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab, magnam ipsum harum tenetur est numquam et ut provident hic! Tempora praesentium officia quos quasi voluptates autem recusandae expedita ab perspiciatis nobis similique veniam distinctio explicabo, odit sunt iusto nam quam a iure provident! Tenetur quidem voluptates, inventore deserunt accusantium omnis sapiente aliquid voluptas. Nemo aperiam ea quos fugiat provident repellendus illo quis, voluptas modi aut, in impedit vel adipisci odit suscipit libero ducimus consectetur, non accusamus. Pariatur omnis sed architecto a molestiae mollitia enim, quaerat at numquam. Provident cumque ducimus omnis dicta. Amet tempora aut laborum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab, magnam ipsum harum tenetur est numquam et ut provident hic! Tempora praesentium officia quos quasi voluptates autem recusandae expedita ab perspiciatis nobis similique veniam distinctio explicabo, odit sunt iusto nam quam a iure provident! Tenetur quidem voluptates, inventore deserunt accusantium omnis sapiente aliquid voluptas. Nemo aperiam ea quos fugiat provident repellendus illo quis, voluptas modi aut, in impedit vel adipisci odit suscipit libero ducimus consectetur, non accusamus. Pariatur omnis sed architecto a molestiae mollitia enim, quaerat at numquam. Provident cumque ducimus omnis dicta. Amet tempora aut laborum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore, officia inventore ab, magnam ipsum harum tenetur est numquam et ut provident hic! Tempora praesentium officia quos quasi voluptates autem recusandae expedita ab perspiciatis nobis similique veniam distinctio explicabo, odit sunt iusto nam quam a iure provident! Tenetur quidem voluptates, inventore deserunt accusantium omnis sapiente aliquid voluptas. Nemo aperiam ea quos fugiat provident repellendus illo quis, voluptas modi aut, in impedit vel adipisci odit suscipit libero ducimus consectetur, non accusamus. Pariatur omnis sed architecto a molestiae mollitia enim, quaerat at numquam. Provident cumque ducimus omnis dicta. Amet tempora aut laborum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
