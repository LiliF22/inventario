<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Product;
use \App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'sku' => $this->faker->unique()->randomNumber(5),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'quantity' => $this->faker->randomNumber(2),
            'state' => $this->faker->randomElement(['with-inventory', 'no-inventory']),
            //creando relacion con la tabla categories
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
