<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'username' => 'admin'
        ]);

        User::factory(5)->create();
        Category::factory(5)->create();
//        Post::factory(50)->create();
//        Comment::factory(200)->create();

        /*
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();


        $pessoal = Category::create([
            'name' => 'Pessoal',
            'slug' => 'pessoal'
        ]);

        $cinema = Category::create([
            'name' => 'Cinema',
            'slug' => 'cinema'
        ]);

        $esporte = Category::create([
            'name' => 'Esporte',
            'slug' => 'esporte'
        ]);

        Post::create([
            'title' => 'Meu primeiro post',
            'excerpt' => 'Esse é meu primeiro post.',
            'user_id' => $user1->id,
            'slug' => 'primeiro_post',
            'category_id' => $esporte->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan gravida magna eget convallis. Aliquam accumsan ex vitae risus hendrerit ornare. Maecenas facilisis turpis quis massa pharetra vestibulum. Quisque nec ultrices justo. Nulla facilisi. Maecenas a fermentum sem. Donec blandit tortor nunc, vel ultrices turpis ullamcorper at. Nunc et auctor eros. Curabitur eget purus et massa molestie iaculis nec ut dui. Integer sit amet turpis leo. Morbi diam purus, eleifend non lobortis ut, ultricies vel lectus. Mauris id turpis quis sapien condimentum ultricies in vel felis. Vestibulum sollicitudin dictum ante, eget imperdiet dui tempus quis. Suspendisse eget tempus tellus. ',

        ]);

        Post::create([
            'title' => 'Meu segundo post',
            'excerpt' => 'Esse é meu segundo post.',
            'user_id' => $user2->id,
            'slug' => 'segundo_post',
            'category_id' => $pessoal->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan gravida magna eget convallis. Aliquam accumsan ex vitae risus hendrerit ornare. Maecenas facilisis turpis quis massa pharetra vestibulum. Quisque nec ultrices justo. Nulla facilisi. Maecenas a fermentum sem. Donec blandit tortor nunc, vel ultrices turpis ullamcorper at. Nunc et auctor eros. Curabitur eget purus et massa molestie iaculis nec ut dui. Integer sit amet turpis leo. Morbi diam purus, eleifend non lobortis ut, ultricies vel lectus. Mauris id turpis quis sapien condimentum ultricies in vel felis. Vestibulum sollicitudin dictum ante, eget imperdiet dui tempus quis. Suspendisse eget tempus tellus. ',

        ]);

        Post::create([
            'title' => 'Meu terceiro post',
            'excerpt' => 'Esse é meu terceiro post.',
            'user_id' => $user3->id,
            'slug' => 'terceiro_post',
            'category_id' => $cinema->id,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan gravida magna eget convallis. Aliquam accumsan ex vitae risus hendrerit ornare. Maecenas facilisis turpis quis massa pharetra vestibulum. Quisque nec ultrices justo. Nulla facilisi. Maecenas a fermentum sem. Donec blandit tortor nunc, vel ultrices turpis ullamcorper at. Nunc et auctor eros. Curabitur eget purus et massa molestie iaculis nec ut dui. Integer sit amet turpis leo. Morbi diam purus, eleifend non lobortis ut, ultricies vel lectus. Mauris id turpis quis sapien condimentum ultricies in vel felis. Vestibulum sollicitudin dictum ante, eget imperdiet dui tempus quis. Suspendisse eget tempus tellus. ',

        ]);
        */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
