<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        $title = $this->faker->sentence(rand(3, 10));
        return [
            'title' => substr($title, 0, strlen($title) - 1),
            'description' => $this->faker->text,
            'author' => $this->faker->name
        ];
    }
}
