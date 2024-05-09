<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idTypeActivite' => \App\Models\TypeActivite::query()->whereIn('idTypeActivite', [1, 2])->inRandomOrder()->first()->id,
            'titre' => $this->faker->text(50),
            'description' => $this->faker->paragraph,
            'objectif' => $this->faker->sentence,
            'imagePub' => $this->faker->imageUrl,
            'lienYtb' => $this->faker->url,
            'programmePdf' => $this->faker->url,
        ];
    }
}
