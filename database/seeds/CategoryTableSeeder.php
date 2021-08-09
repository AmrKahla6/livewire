<?php

use Illuminate\Database\Seeder;
use App\Models\Catgeory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catgeory::create([
            'name' => 'Web Development'
        ]);
        Catgeory::create([
            'name' => 'Web Design'
        ]);
        Catgeory::create([
            'name' => 'Mobile Development'
        ]);
    }
}
