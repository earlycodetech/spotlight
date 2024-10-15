<?php

namespace Database\Seeders;
<<<<<<< HEAD
=======

>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update Books and Add SKU
<<<<<<< HEAD
        foreach (Book::all() as $key => $book){
            $book->update([
                'sku'=> Str::random(16)
=======
        foreach (Book::all() as $key => $book) {
            $book->update([
                'sku' =>  Str::random(16)
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
            ]);
        }
    }
}
