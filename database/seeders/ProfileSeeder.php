<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::factory(10)->create();
    }
}

// command for creating ProfileSeeder?
// php artisan make:seeder ProfileSeeder
// run the seeder?
// php artisan db:seed --class=ProfileSeeder