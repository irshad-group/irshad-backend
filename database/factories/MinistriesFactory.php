<?php

namespace Database\Factories;

use App\Models\Ministries;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ministries>
 */
class MinistriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ministries::class;

    public function definition()
    {
        return [
            'title_en' => $this->faker->text(20),
            'title_ar' => $this->faker->text(20),
            'title_kr' => $this->faker->text(20),
            'logo'     => $this->faker->imageUrl,
            'krg'      => $this->faker->boolean,
            'address'  => $this->faker->address(),
            'gps_lat'  => $this->faker->latitude,
            'gps_lon'  => $this->faker->longitude,
            'website'  => $this->faker->url,
            'created_by_id'  => $this->faker->boolean,

        ];
    }
}
