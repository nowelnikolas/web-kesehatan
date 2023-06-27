<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\province;
use App\Models\city;

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

        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'avatar' => 'assets/usertemplate.png',
            'password' => bcrypt('password'),
        ]);

        province::create([
            'name' => 'Banten',
        ]);

        province::create([
            'name' => 'DKI Jakarta',
        ]);

        province::create([
            'name' => 'Jawa Barat',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kabupaten Lebak',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kabupaten Pandeglang',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kabupaten Tangerang',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kota Cilegon',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kota Serang',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kota Tangerang',
        ]);

        city::create([
            'province_id' => '1',
            'name' => 'Kota Tangerang Selatan',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Kepulauan Seribu',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Jakarta Barat',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Jakarta Pusat',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Jakarta Selatan',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Jakarta Timur',
        ]);

        city::create([
            'province_id' => '2',
            'name' => 'Jakarta Utara',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Bandung',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Bandung Barat',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Bekasi',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Bogor',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Ciamis',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Cianjur',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Cirebon',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Garut',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Indramayu',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Karawang',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kuningan',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Majalengka',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Pangandaran',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Purwakarta',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Subang',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Sukabumi',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Sumedang',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kabupaten Tasikmalaya',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kota Bandung',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Banjar',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kota Bekasi',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kota Bogor',
        ]);

        
        city::create([
            'province_id' => '3',
            'name' => 'Cimahi',
        ]);

        
        city::create([
            'province_id' => '3',
            'name' => 'Kota Cirebon',
        ]);

        
        city::create([
            'province_id' => '3',
            'name' => 'Depok',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kota Sukabumi',
        ]);

        city::create([
            'province_id' => '3',
            'name' => 'Kota Tasikmalaya',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
