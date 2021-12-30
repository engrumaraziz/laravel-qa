<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;
use App\Models\User;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->sentence(rand(5,10)),
            'body' => $this->faker->paragraphs(rand(3,7),true),
            'views' => rand(0,10),
            'answers' => rand(0,10),
            'votes' => rand(-3,10),
            'user_id' => User::all()->random()->id,

        ];
    }
}

