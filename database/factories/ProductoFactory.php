<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $word = $this->faker->word();
        return [
            'producto' => $word,
            'precio' => $this->faker->randomFloat(1, 0, 999),
            'stock' => $this->faker->randomDigit(),
            'slug' => Str::slug($word, '-'),
            'descripcion' => $this->faker->text(255)
        ];
    }
}
