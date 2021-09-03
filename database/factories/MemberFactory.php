<?php

namespace Database\Factories;

use App\Models\Member;
use Faker\Provider\ar_JO\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            // 'email' => $this->faker->email(),
            'no_handphone' => $this->faker->phoneNumber(),
            'address' => "03 / 04"
        ];
    }
}
