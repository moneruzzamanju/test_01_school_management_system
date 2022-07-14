<?php

namespace Database\Factories;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $guardianIds = Guardian::pluck('id')->toArray();
        return [
            'first_name' => $this->faker->title(10),
            'last_name' => $this->faker->text(10),
            'date_of_birth' => $this->faker->date($format = 'd-m-y', $max = '2012',$min = '1990'),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->text(10),
            'street_name' => $this->faker->text(10),
            'police_station' => $this->faker->text(10),
            'district' => $this->faker->text(10),
            'admission_date' => $this->faker->date($format = 'd-m-y', $max = '2012',$min = '1990'),
            'photo' => $this->faker->imageUrl(640,480),
            'guardian_id' => $guardianIds[array_rand($guardianIds)],

        ];
    }
}
