<?php

namespace Database\Factories;

use App\Models\DataWarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataWargaFactory extends Factory
{
    protected $model = DataWarga::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'foto' => $this->faker->streetName(),
            'alamat' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'jenis_kelamin' => $this->faker->titleMale(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'status_perkawinan' => $this->faker->titleMale(),
            'status_warga' => $this->faker->titleMale(),
        ];
    }
}
