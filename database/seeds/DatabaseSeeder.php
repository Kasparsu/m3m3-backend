<?php

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
        factory(App\Tag::class, 50)->create();
        factory(App\User::class, 50)->create()->each(function ($user) {
            factory(App\Meme::class, 10)->create(['user_id' => $user->id, 'op_id' => $user->id])->each(function ($meme) {
                factory(App\Image::class)->make(['meme_id' => $meme->id, ])->save();
                factory(App\Comment::class, 10)->create(['meme_id' => $meme->id]);
                $tags = \App\Tag::inRandomOrder()->take(rand(1, 5))->get();
                $meme->tags()->attach($tags);
            });
        });
    }
}
