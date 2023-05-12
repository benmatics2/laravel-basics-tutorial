<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       // \App\Models\User::factory()->create();
        \App\Models\Product::factory(20)->create();

        // we chained product creation when creating users.For each user we randomly create btw 1 to 3 products
        // \App\Models\User::factory(10)->create()->each(function(\App\Models\User $user){
        //     \App\Models\Product::factory(random_int(1,3))->create([
        //         'user_id' => $user->id,
        //     ]);
        //   });

   }
}

