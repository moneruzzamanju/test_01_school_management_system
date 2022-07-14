<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->title(10),
            'last_name' => $this->faker->text(10),
            'specialty' => $this->faker->text(10),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->address(),
            'photo' => $this->faker->imageUrl(640,480),

        ];
    }
}
