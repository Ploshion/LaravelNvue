<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::truncate();
        Category::truncate();

        $category = new category;
        $category->name = "Categoria 1";
        $category->save();

        $category = new category;
        $category->name = "Categoria 2";
        $category->save();

        $post = new Post;
        $post->title = "Mi Primer Post";
        $post->excerpt = "Extracto de mi primer Post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now()->subDay(4);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi Segundo Post";
        $post->excerpt = "Extracto de mi Segundo Post";
        $post->body = "<p>Contenido de mi Segundo post</p>";
        $post->published_at = Carbon::now()->subDay(3);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi Tercer Post";
        $post->excerpt = "Extracto de mi Tercer Post";
        $post->body = "<p>Contenido de mi Tercer post</p>";
        $post->published_at = Carbon::now()->subDay(2);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Mi Cuarto Post";
        $post->excerpt = "Extracto de mi Cuarto Post";
        $post->body = "<p>Contenido de mi Cuarto post</p>";
        $post->published_at = Carbon::now()->subDay(1);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Mi Quinto Post";
        $post->excerpt = "Extracto de mi Quinto Post";
        $post->body = "<p>Contenido de mi Quinto post</p>";
        $post->published_at = Carbon::now()->subDay(5);
        $post->category_id = 2;
        $post->save();

    }
}
