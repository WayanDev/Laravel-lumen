<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'biography' => join(" ", $this->faker->sentences(rand(3, 5))),
            'gender' => $this->faker->randomElement(['male', 'female'])
        ];
    }
}
