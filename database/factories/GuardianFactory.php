<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'father_name' => $this->faker->title(10),
            'father_phone_no' => $this->faker->phoneNumber,
            'father_occupation' => $this->faker->text(10),
            'father_photo' => $this->faker->imageUrl(640,480),

            'mother_name' => $this->faker->text(10),
            'mother_phone_no' => $this->faker->phoneNumber,
            'mother_occupation' => $this->faker->text(10),
            'mother_photo' => $this->faker->imageUrl(640,480),

            'office_phone' => $this->faker->text(10),
            'email' => $this->faker->safeEmail(),
        ];
    }
}
