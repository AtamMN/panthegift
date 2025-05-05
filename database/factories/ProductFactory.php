<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(1,3)),
            'slug'=>$this->faker->slug(),
            'rating_id' => $this->faker->numberBetween(1, 11),
            'excerpt' => $this->faker->sentence(mt_rand(6,15)),
            'desc'=> collect($this->faker->paragraphs(mt_rand(1,5)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(""),
            'category_id' => $this->faker->numberBetween(1, 3),
            'price' => $this->faker->numerify('###00')
        ];
    }
}
// Product::create([
//     'title'=>'judul 3',
//     'slug'=>'judul-3',
//     'rating_id' => '5',
//     'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum deserunt eos et, quia odit accusantium neque facere minima repudiandae.',
//     'category_id' => '3',
//     'price' => '30.000'
// ]);