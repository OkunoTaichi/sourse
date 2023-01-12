<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Employee;
use Faker\Generator as Faker;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'year' => $this->faker->numberBetween($min = 10, $max = 99),
            'email' => $this->faker->email,
            'dept' => $this->faker->company,
            'start_day' => $this->faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        ];
    }
}
