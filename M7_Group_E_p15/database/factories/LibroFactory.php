<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->unique()->text(30),
            'autor' => $this->faker->text(50),
            'genero' => $this->faker->text(10),
            'descripcion' => $this->faker->paragraph(2),
            'paginas' => $this->faker->numberBetween(1, 500),
            'fecha_publicacion' => $this->faker->date(),
            'precio_compra' => $this->faker->randomFloat(2, 10, 30),
            'precio_venta' => $this->faker->randomFloat(2, 30, 50)
        ];
    }
}
