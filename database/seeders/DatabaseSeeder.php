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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'luthfi',
            'email'=>'alfarisi.luthfi@yahoo.com',
            'password'=>bcrypt('12345'),
        ]);

        Category::create([
            'name'=>'Web programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::create([
            'title'=>'judul pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui',
            'body'=>'<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui laborum, doloremque rerum, expedita facere cumque eligendi odio omnis, ad in nulla natus! Ipsum voluptate recusandae aliquam harum, mollitia repellendus rem blanditiis. Quasi voluptatum, incidunt ab facere rem sit exercitationem aliquid optio excepturi labore. Placeat magni aliquid perferendis aspernatur quod saepe quam ab illo. Sunt quisquam similique ut libero! </p><p>Tempora aliquid ex eos repellendus sit ab distinctio, quidem accusantium maxime veritatis quod recusandae molestiae tenetur. Quia debitis accusamus exercitationem facilis, voluptas nostrum minima ut! Odit nihil dolorum asperiores dolor dolorem? Obcaecati iusto sint quidem necessitatibus ab quibusdam. Nam in aut aperiam fugit tempora quisquam doloremque sint. Fugit quos eveniet molestiae inventore molestias tenetur. Dignissimos, corrupti tenetur. Cumque saepe quis inventore.</p>',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'judul kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui',
            'body'=>'<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui laborum, doloremque rerum, expedita facere cumque eligendi odio omnis, ad in nulla natus! Ipsum voluptate recusandae aliquam harum, mollitia repellendus rem blanditiis. Quasi voluptatum, incidunt ab facere rem sit exercitationem aliquid optio excepturi labore. Placeat magni aliquid perferendis aspernatur quod saepe quam ab illo. Sunt quisquam similique ut libero! </p><p>Tempora aliquid ex eos repellendus sit ab distinctio, quidem accusantium maxime veritatis quod recusandae molestiae tenetur. Quia debitis accusamus exercitationem facilis, voluptas nostrum minima ut! Odit nihil dolorum asperiores dolor dolorem? Obcaecati iusto sint quidem necessitatibus ab quibusdam. Nam in aut aperiam fugit tempora quisquam doloremque sint. Fugit quos eveniet molestiae inventore molestias tenetur. Dignissimos, corrupti tenetur. Cumque saepe quis inventore.</p>',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'judul ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui',
            'body'=>'<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est qui laborum, doloremque rerum, expedita facere cumque eligendi odio omnis, ad in nulla natus! Ipsum voluptate recusandae aliquam harum, mollitia repellendus rem blanditiis. Quasi voluptatum, incidunt ab facere rem sit exercitationem aliquid optio excepturi labore. Placeat magni aliquid perferendis aspernatur quod saepe quam ab illo. Sunt quisquam similique ut libero! </p><p>Tempora aliquid ex eos repellendus sit ab distinctio, quidem accusantium maxime veritatis quod recusandae molestiae tenetur. Quia debitis accusamus exercitationem facilis, voluptas nostrum minima ut! Odit nihil dolorum asperiores dolor dolorem? Obcaecati iusto sint quidem necessitatibus ab quibusdam. Nam in aut aperiam fugit tempora quisquam doloremque sint. Fugit quos eveniet molestiae inventore molestias tenetur. Dignissimos, corrupti tenetur. Cumque saepe quis inventore.</p>',
            'category_id'=>3,
            'user_id'=>1
        ]);
    }
}
