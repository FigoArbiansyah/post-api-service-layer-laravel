<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            "thumbnail" => "https://images.unsplash.com/photo-1682687220015-186f63b8850a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8",
            "title" => "Postingan 1",
            "content" => "Ini Konten dari postingan ke 1",
        ]);
        Post::create([
            "thumbnail" => "https://images.unsplash.com/photo-1682687219800-bba120d709c5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHx8",
            "title" => "Postingan 2",
            "content" => "Ini Konten dari postingan ke 2",
        ]);
    }
}
