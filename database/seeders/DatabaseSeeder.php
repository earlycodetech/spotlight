<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

<<<<<<< HEAD
        $this->call(BookSeeder::class);
=======
        // $this->call(BookSeeder::class);
       Book::factory(10)->create();
        // Book::where('id', '>', 1)->delete();
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    }
}
