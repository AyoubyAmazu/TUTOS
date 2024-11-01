<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categorie>
 */
class CategorieFactory extends Factory
{
    protected $model = Categorie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
        ];
    }
}
