<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->numberBetween(100, 500),
            'categoria'=>$this->faker->randomElement(['Desarrollo Web', 'Apps Moviles', 'Front End', 'Diseño UX']),
        ];
    }
}
