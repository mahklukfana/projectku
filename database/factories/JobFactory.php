<?php

namespace Database\Factories;

use App\Models\Job;
use Faker\Provider\ar_JO\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string ini
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle(),
            // 'email' => $this->faker->email(),
            //'no_handphone' => $this->faker->phoneNumber(),
            // 'address' => "03 / 04"
        ];
    }
}
