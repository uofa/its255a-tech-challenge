<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'    => fake()->numberBetween(51000000, 52000000),
            'title'         => fake()->randomElement(['Dr', 'Mr', 'Mrs', 'Ms', 'Mx', 'Professor']),
            'forename_1'    => fake()->firstName(),
            'surname'       => fake()->lastName(),
            'gender'        => fake()->randomElement(['male', 'female', 'other']),
            'date_of_birth' => fake()->date(),
            'username'      => fake()->regexify('s[0-9]{2}[a-z]{2}[0-9]{1}'),
            'email'         => fake()->safeEmail(),
        ];
    }
}
