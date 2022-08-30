<?php

namespace Database\Factories;

use App\Models\Directorates;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Directorates>
 */
class DirectoratesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Directorates::class;

    public function definition()
    {
        return [
            'title_en'    => $this->faker->text(20),
            'title_ar'    => $this->faker->text(20),
            'title_kr'    => $this->faker->text(20),
            'logo'        => $this->faker->imageUrl,
            'ministry_id' => $this->faker->numberBetween(1, 20),
            'address'     => $this->faker->address(),
            'gps_lat'     => $this->faker->latitude,
            'gps_lon'     => $this->faker->longitude,
            'working_hours_ar' => $this->faker->numberBetween(6, 24),
            'working_hours_en' => $this->faker->numberBetween(6, 24),
            'working_hours_kr' => $this->faker->numberBetween(6, 24),
            'website'      => $this->faker->url,
            'created_by'   => $this->faker->boolean,
        ];
    }
}
