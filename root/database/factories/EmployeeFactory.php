<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'last_name' => fake()->lastName(),
           'first_name' => fake()->firstName(),
           'role_id' => fake()->randomDigit(),
           'prefecture' => fake()->prefecture(),
           'address1' => fake()->city(),
           'address2' => fake()-> secondaryAddress(),
           'email' => fake()-> email(),
           'password' => fake()-> password($minLength = 6, $maxLength = 20),
           'remember_token' => fake()-> randomLetter(),

        ];
    }
}
