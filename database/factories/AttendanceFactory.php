<?php

namespace Database\Factories;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomDigitNotNull,
        'class_id' => $this->faker->randomDigitNotNull,
        'course_id' => $this->faker->randomDigitNotNull,
        'teacher_id' => $this->faker->randomDigitNotNull,
        'semester_id' => $this->faker->randomDigitNotNull,
        'attendance_date' => $this->faker->word,
        'edit_date' => $this->faker->randomDigitNotNull,
        'day' => $this->faker->word,
        'month' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'attendance_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
