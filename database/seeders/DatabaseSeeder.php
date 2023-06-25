<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

      

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
            
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
          
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
            
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
