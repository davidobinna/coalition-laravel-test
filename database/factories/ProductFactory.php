<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              'name'  => $this->faker->name(),
              'price'    => $this->faker->randomFloat(2,0.88,555.98),
              'quantity' => $this->faker->integer(1,100),
        ];
    }
}
