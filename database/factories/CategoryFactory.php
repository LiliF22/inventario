<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Category;

class CategoryFactory extends Factory
{
    //Indicamos el modelo que se encarga de administrar la tabla
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //Definimos los campos de la tabla con el metodo faker
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
