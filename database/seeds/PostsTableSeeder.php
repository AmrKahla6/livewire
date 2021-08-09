<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Catgeory;
use App\Models\Post;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i =1; $i <= 15; $i++) {
            Post::create([
                'user_id'        => User::inRandomOrder()->first()->id,
                'cat_id'         => Catgeory::inRandomOrder()->first()->id,
                'title'          => $faker->sentence(4),
                'body'           => $faker->paragraph(),
                'image'          => sprintf("%02d", $i).'.jpg',
            ]);
        }
    }
}
