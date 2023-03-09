<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\kategori;
use App\Models\User;
use App\Models\vidio;
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
        // vidio::factory(10)->create();

        // vidio::create([
        //     'judul_vidio' => 'LARAS bali remas toket sambil melet-melet',
        //     'slug_vidio' => 'Test User',
        //     'durasi' => 'Test User',
        //     'kategori_vidio' => 'Test User',
        //     'slug_vidio' => 'Test User',
        //     'link_poto' => 'www.poto.com',
        //     'link_vidio' => 'www.vidio.com',
        //     'tgl_upload' => 'www.vidio.com',
        // ]);
        // kategori::create([
        //     'nama_kategori' => 'Viral',
        //     'slug' => 'Viral',
        //     'link_poto' => 'Viral',
        // ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
    }
}
