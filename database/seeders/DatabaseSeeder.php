<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;


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
        Category::factory(5)->create();
        $tags = Tag::factory(5)->create();
        $posts = Post::factory(20)->create();
        foreach ($posts as $post){
            $tagsId = $tags->random(3)->pluck('id');
            $post->tags()->attach($tagsId); 
        }
    }
}
