<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create(
            [
                'name' => 'Baloon',
                'slug' => 'baloon'
            ]
        );
        Category::create(
            [
                'name' => 'Bucket',
                'slug' => 'bucket'
            ]
        );
        Category::create(
            [
                'name' => 'Trophy',
                'slug' => 'trophy'
            ]
        );
        
        Rating::create([
            'score'=>'0'
        ]);
        Rating::create([
            'score'=>'0.5'
        ]);
        Rating::create([
            'score'=>'1'
        ]);
        Rating::create([
            'score'=>'1.5'
        ]);
        Rating::create([
            'score'=>'2'
        ]);
        Rating::create([
            'score'=>'2.5'
        ]);
        Rating::create([
            'score'=>'3'
        ]);
        Rating::create([
            'score'=>'3.5'
        ]);
        Rating::create([
            'score'=>'4'
        ]);
        Rating::create([
            'score'=>'4.5'
        ]);
        Rating::create([
            'score'=>'5'
        ]);

        Product::factory(30)->create();
    }
}
