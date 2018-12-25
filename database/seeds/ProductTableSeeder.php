<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://img.timeinc.net/time/2007/top_10_photos/fiction_harry_potter_a.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.timeinc.net/time/2007/top_10_photos/fiction_harry_potter_a.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.timeinc.net/time/2007/top_10_photos/fiction_harry_potter_a.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://img.timeinc.net/time/2007/top_10_photos/fiction_harry_potter_a.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://img.timeinc.net/time/2007/top_10_photos/fiction_harry_potter_a.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();

    }
}
