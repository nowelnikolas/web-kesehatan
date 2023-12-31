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
            'image' => 'assets/1.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
            
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'image' => 'assets/2.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
          
        ]);

        Post::create([
            'title' => 'Judul Keemmpat',
            'slug' => 'judul-keempat',
            'image' => 'assets/3.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
            
        ]);

        Post::create([
            'title' => 'Judul Kelima',
            'slug' => 'judul-kelima',
            'image' => 'assets/4.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil in pariatur praesentium animi tenetur! Sunt, commodi? Rerum, odit, error nihil nobis quasi eos debitis hic dignissimos nostrum dolor obcaecati quas architecto, saepe numquam facilis consequatur illo totam enim explicabo iure tenetur recusandae tempore? Dolorem numquam blanditiis necessitatibus omnis vitae quam officia dolores obcaecati, sed eos quia esse id voluptate iusto eligendi, quos, repudiandae accusantium quidem maiores optio beatae quas hic autem? Placeat laboriosam quia facere ipsam similique ex, nisi amet magni laborum, ipsa ab debitis temporibus assumenda odit inventore dicta eveniet tempora harum. Non ab quo quas earum voluptate.'
            
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'image' => 'assets/5.jpg',
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

        $province = Province::create(['name'=>'Aceh']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Barat']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Banda Aceh']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Barat Daya']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Subulussalam']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Besar']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Langsa']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Jaya']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Lhokseumawe']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Selatan']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Saban']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Singkil']);
        City::create(['province_id'=>$province->id,'name'=>'Kab Aceh Tamiang']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Tengah']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Tenggara']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Timur']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Aceh Utara']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Bener Meriah']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Bireun']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Gayo Lues']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Nagan Raya']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Pidie']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Pidie Jaya']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Simeulue']);
    $province = Province::create(['name'=>'Sumatera Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Asahan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Medan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Batubara']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Binjai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Dairi']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Padang Sidempuan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Deliserdang']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pematan Siantar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Humban Hasundutan']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Sibolga']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Karo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tanjung Balai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Labuhanbatu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota TebingTinggi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Langkat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Gunung Sitoli']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mandating Natal']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nias']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nias Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. PakakBharat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Samosir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Serdan Bedagai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Simalungun']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tapanuli Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tapanuli Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tapanuli Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Toba Samosir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Padang Lawas Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Padan Lawas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Labuhanbatu Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Labuhanbatu Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nias Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nias Utara']);
    $province = Province::create(['name'=>'Sumatera Barat']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Agam ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Padang']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Dharmasraya ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota BukitTinggi']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Limapuluhkota ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Pandang Panjang']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Kep. Mentawai ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Pariaman']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Padang Pariaman ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Payakumbuh']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Pasaman ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Sawahlunto']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Pasaman Barat ']);
        City::create(['province_id'=>$province->id,'name'=>'Kota Solok']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Pesisir Selatan']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Sawahlunto Sijunjung']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Solok']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Solok Selatan']);
        City::create(['province_id'=>$province->id,'name'=>'Kab. Tanah Datar']);
    $province = Province::create(['name'=>'Riau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bengkalis']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pekanbaru']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Indragiri Hilir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Dumai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Indragiri Hulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kampar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kuantan Singingi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pelalawan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Rokan Hulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Rokan Hilir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Siak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kep. Meranti']);
    $province = Province::create(['name'=>'Kepulauan Riau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Karimun']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tanjungpinang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bintan (Kep. Riau)']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Batam']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lingga']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Natuna']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kep. Anambas']);
    $province = Province::create(['name'=>'Jambi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Batanghari']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Jambi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bungo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Sungai Penuh']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kerinci']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Merangin']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Muaro Jambi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sarolangun']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanjung Jabung Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanjung Jabung Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tebo']);
    $province = Province::create(['name'=>'Bengkulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bengkulu Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bengkulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bengkulu Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kaur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kepahiang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lebong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Muko-Muko']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Rejang Lebong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Seluma']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bengkulu Tengah']);
    $province = Province::create(['name'=>'Sumatera Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banyuasin']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Palembang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lahat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Lubuk Linggau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Empat Lawang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pagar Alam']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Muara Enim']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Prabumulih']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Musi Banyuasin']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Musi Rawas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ogan Ilir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ogan Komering Ilir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ogan Komering Ulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. OKU Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. OKU Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Penukal Abab Lematang Ilir']);
    $province = Province::create(['name'=>'Kepulauan Bangka Belitung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangka']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pangkalpinang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangka Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangka Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangka Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Belitung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Belitung Timur']);
    $province = Province::create(['name'=>'Lampung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lampung Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bandarlampung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lampung Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Metro']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lampung Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lampung Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lampung Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanggamus']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tulang Bawang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Way Kanan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pesawaran']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pringsewu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mesuji']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tulang Bawang Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pesisir Barat']);
    $province = Province::create(['name'=>'Banten']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lebak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Cilegon']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pandeglang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Serang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Serang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tangerang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tangerang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tangerang Selatan']);
    $province = Province::create(['name'=>'Jawa Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bandung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bandung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bandung Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Banjar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bekasi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bekasi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bogor']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bogor']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ciamis']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Cimahi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Cianjur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Cirebon']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Cirebon']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Depok']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Garut']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Sukabumi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Indramayu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tasikmalaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Karawang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kuningan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Majalengka']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Purwakarta']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Subang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sukabumi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumedang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tasikmalaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pangandaran']);
    $province = Province::create(['name'=>'DKI Jakarta']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kepulauan Seribu']);
        City::create(['province_id'=>$province->id, 'name'=>'Jakarta Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Jakarta Pusat']);
        City::create(['province_id'=>$province->id, 'name'=>'Jakarta Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Jakarta Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Jakarta Utara']);
    $province = Province::create(['name'=>'Jawa Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banjarnegara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Semarang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banyumas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Magelang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Batang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pekalongan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Blora']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Salatiga']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Boyolali']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Surakarta']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Brebes']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tegal']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Cilacap']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Demak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Grobogan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jepara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Karanganyar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kebumen']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kendal']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Klaten']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kudus']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Magelang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pati']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pekalongan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pemalang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Purbalingga']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Purworejo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Rembang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Semarang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sragen']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sukoharjo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tegal']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Temanggung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Wonogiri']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Wonosobo']);
    $province = Province::create(['name'=>'Jawa Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangkalan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Surabaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banyuwangi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Batu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Blitar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Blitar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bojonegoro']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Kediri']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bondowoso']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Madiun']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gresik']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Malang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jember']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Mojokerto']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jombang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pasuruan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kediri']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Probolinggo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lamongan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lumajang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Madiun']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Magetan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Malang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mojokerto']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nganjuk']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ngawi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pacitan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pamekasan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pasuruan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ponorogo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Probolinggo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sampang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sidoarjo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Situbondo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumenep']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Trenggalek']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tulungagung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tuban']);
    $province = Province::create(['name'=>'Yogyakarta']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bantul']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Yogyakarta']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gunung Kidul']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kulon Progo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sleman']);
    $province = Province::create(['name'=>'Bali']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Badung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Denpasar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bangli']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buleleng']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gianyar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jembrana']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Karang Asem']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Klungkung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tabanan']);
    $province = Province::create(['name'=>'Nusa Tenggara Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bima']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Mataram']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Dompu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bima']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lombok Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lombok Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lombok Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumbawa']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumbawa Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lombok Utara']);
    $province = Province::create(['name'=>'Nusa Tenggara Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Alor']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Kupang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Belu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ende']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Flores Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kupang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lembata']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Manggarai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Manggarai Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ngada']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nagekeo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Rote Ndao']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Slkka']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumba Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumba Barat Daya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumba Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Manggarai Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sumba Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Timor Tengah Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Timor Tengah Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sabu Raijua']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Malaka']);
    $province = Province::create(['name'=>'Kalimantan Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bengkayang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pontianak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kapuas Hulu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Singkawang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Ketapang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kayong Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kubu Raya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Landak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Melawi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pontianak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sambas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sanggau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sintang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sekadau']);
    $province = Province::create(['name'=>'Kalimantan Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Berau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Samarinda']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bulungan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Balikpapan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kutai Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bontang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kutai Kertanegara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tarakan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kutai Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Penajam Paser Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pasir']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mahakam Ulu']);
    $province = Province::create(['name'=>'Kalimantan Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab Malinau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nunukan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tana Tidung']);
    $province = Province::create(['name'=>'Kalimantan Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Barito Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Palangkaraya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Barito Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Barito Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gunung Mas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kapuas']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Katingan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kotawaringin Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kotawaringin Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lamandau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Murung Raya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pulang Pisau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Seruyan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sukamara']);
    $province = Province::create(['name'=>'Kalimantan Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Balangan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Banjarmasin']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banjar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Banjar Baru']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Barito Kuala']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Hulu Sungai Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Hulu Sungai Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Hulu Sungai Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kotabaru']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tabalong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanah Bumbu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanah Laut']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tapin']);
    $province = Province::create(['name'=>'Gorontalo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Boalemo']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Gorontalo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bone Bolango']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gorontalo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gorontalo Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pohuwato']);
    $province = Province::create(['name'=>'Sulawesi Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Selayar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Makasar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bantaeng']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Pare-Pare']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Barru']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Palopo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bone']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bulukumba']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Enrekang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Gowa']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jeneponto']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Luwu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Luwu Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Luwu Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maros']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pangkep']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pinrang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sidenreng Rappang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sinjai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Soppeng']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Takalar']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tanatoraja']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Wajo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Toraja Utara']);
    $province = Province::create(['name'=>'Sulawesi Tenggara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bombana']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Kendari']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buton']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bau-Bau']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Konawe (dulu: Kab. Kendari)']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kolaka']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kolaka Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Konawe Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Muna']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Wakatobi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Konawe Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buton Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kolaka Timur']);
    $province = Province::create(['name'=>'Sulawesi Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banggai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Palu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banggai Kepulauan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buol']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Donggala']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Morowali']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Parigi Mountong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Poso']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tojo Una-Una']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Toli-Toli']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sigi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Banggai Laut']);
    $province = Province::create(['name'=>'Sulawesi Utara']);

        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bolaang Mongondow']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Manado']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bolaang Mongondow Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Kotamobagu']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Minahasa']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Bitung']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Minahasa Tenggara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tomohon']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Minahasa Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Minahasa Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sangihe Talaud']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kep. Talaud']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kep. Siau Tagulandang Biaro']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bolaang Mongondow Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Bolaang Mongondow Selatan']);
    $province = Province::create(['name'=>'Sulawesi Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamuju']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Majene']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamuju Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamasa']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Polewali Mamasa']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamuju Tengah']);
    $province = Province::create(['name'=>'Maluku']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buru']) ;
        City::create(['province_id'=>$province->id, 'name'=>'Kota Ambon']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kepulauan Aru']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tual']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Seram Bagian Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Seram Bagian Timur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maluku Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maluku Tenggara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maluku Tenggara Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maluku Barat Daya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Buru Selatan']);
    $province = Province::create(['name'=>'Maluku Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Halmahera Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kota Ternate']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Halmahera Selatan']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Tidore Kepulauan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Halmahera Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Halmahera Tirnur']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab Halmahera Utara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kepulauan Sula']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Morotai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pulau Taliabu']);
    $province = Province::create(['name'=>'Papua']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Asmat']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Jayapura']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Biak Numfor']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Boven Digoel']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jayapura']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Jayawijaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Keerom']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mappi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Merauke']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mimika']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Paniai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pegunungan Bintang']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Puncak Jaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sarmi']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamberamo Raya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Supiori']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tolikara']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Yahukimo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Yapen Waropen']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Waropen']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nabire']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Mamberamo Tengah']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Yalimo']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Lanny Jaya']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Nduga']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Puncak']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Dogiyai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Deiyai']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Intan Jaya']);
    $province = Province::create(['name'=>'Papua Barat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Fak-Fak']); 
        City::create(['province_id'=>$province->id, 'name'=>'Kota Sorong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kaimana']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Kepulauan Raja Ampat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Manokwari']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sorong Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Teluk Bintuni']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Sorong']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Teluk Wondama']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Tambrauw']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Maybrat']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Manokwari Selatan']);
        City::create(['province_id'=>$province->id, 'name'=>'Kab. Pegunungan Arfak']);

        // province::create([
        //     'name' => 'Banten',
        // ]);

        // province::create([
        //     'name' => 'DKI Jakarta',
        // ]);

        // province::create([
        //     'name' => 'Jawa Barat',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kabupaten Lebak',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kabupaten Pandeglang',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kabupaten Tangerang',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kota Cilegon',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kota Serang',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kota Tangerang',
        // ]);

        // city::create([
        //     'province_id' => '1',
        //     'name' => 'Kota Tangerang Selatan',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Kepulauan Seribu',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Jakarta Barat',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Jakarta Pusat',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Jakarta Selatan',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Jakarta Timur',
        // ]);

        // city::create([
        //     'province_id' => '2',
        //     'name' => 'Jakarta Utara',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Bandung',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Bandung Barat',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Bekasi',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Bogor',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Ciamis',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Cianjur',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Cirebon',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Garut',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Indramayu',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Karawang',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kuningan',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Majalengka',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Pangandaran',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Purwakarta',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Subang',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Sukabumi',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Sumedang',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kabupaten Tasikmalaya',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Bandung',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Banjar',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Bekasi',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Bogor',
        // ]);

        
        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Cimahi',
        // ]);

        
        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Cirebon',
        // ]);

        
        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Depok',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Sukabumi',
        // ]);

        // city::create([
        //     'province_id' => '3',
        //     'name' => 'Kota Tasikmalaya',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
