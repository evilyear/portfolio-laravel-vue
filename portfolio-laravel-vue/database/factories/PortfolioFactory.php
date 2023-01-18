<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           "title" => fake($locale='hu')->sentence(3),
           "descripton" => fake($locale='hu')->paragraph(2),
           "image" => "teszt.png",
           "user_id" => 1
        ];
    }
}
