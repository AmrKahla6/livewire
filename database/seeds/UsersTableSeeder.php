<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'amr kahla',
            'email' => 'amrkahla6@gmail.com',
            'password' => bcrypt('123123123')
        ]);
        User::create([
            'name' => 'Minds CMS',
            'email' => 'mindscms@gmail.com',
            'password' => bcrypt('123123123')
        ]);
        User::create([
            'name' => 'Another User',
            'email' => 'another@gmail.com',
            'password' => bcrypt('123123123')
        ]);
    }
}
