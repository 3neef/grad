<?php

namespace Database\Seeders;

use App\Models\Outbreak;
use App\Models\User;
use Illuminate\Database\Seeder;

class OutbreakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outbreak::factory()->count(5)->create();
        // User::factory(1)->create()->each(function ($user) { $user->attachRole('admin'); });  
    }

}
