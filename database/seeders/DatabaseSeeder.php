<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
          
        \App\Models\User::factory(3)->create()->each(function($user){
            $user->questions()
            ->saveMany(
                \App\Models\Question::factory(5)->create())

            ->each(function($question){
                $question->answers()
                ->saveMany(
                    \App\Models\Answer::factory(2)->create()
                );
            });
        });
        
    }
}