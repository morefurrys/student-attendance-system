<?php

namespace Database\Factories;

use App\Models\Roll;
use Illuminate\Database\Eloquent\Factories\Factory;

class RollFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Roll::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomDigitNotNull,
        'username' => $this->faker->word,
        'password' => $this->faker->word,
        'login_time' => $this->faker->date('Y-m-d H:i:s'),
        'logout_time' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
