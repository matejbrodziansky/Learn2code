<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
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
        // $this->call(UsertableSeeder::class);
        // $this->call(PostTableSeeder::class);
        // \App\Models\Post::factory(10)->create();


        \App\Models\User::factory(10)->create()->each(function ($user){
            for($i = 0; $i < 5; $i++) {
                $user->posts()->save(Post::factory()->make());
                $user->comments()->save(Comment::factory()->make());
            }
        });
        

    }
}
//  Mates   mates@gmail.com  NULL $2y$10$sJK3d331MGiXpXABo5lGfeJnWRAKgLfHFqIpxMsOwT4PtilqbiKpS  NULL   2021-06-16 18:54:41  2021-06-16 18:54:41