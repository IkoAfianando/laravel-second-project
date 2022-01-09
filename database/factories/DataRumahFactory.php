<?php

namespace Database\Factories;

use App\Models\DataRumah;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataRumahFactory extends Factory
{
    protected $model = DataRumah::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor' => $this->faker->buildingNumber(),
            'alamat' => $this->faker->streetAddress(),
            'pemilik' => $this->faker->name(),
            'penghuni' => $this->faker->name(),
        ];
    }
}
