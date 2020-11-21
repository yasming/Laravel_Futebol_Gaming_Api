<?php

namespace Database\Factories;

use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Match::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'       => $this->faker->date,
            'start_time' => $this->faker->time,
            'end_time'   => $this->faker->time,
        ];
    }
}
