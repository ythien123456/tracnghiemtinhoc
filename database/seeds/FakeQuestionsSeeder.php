<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FakeQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
            [
                'QuestionContent' => Str::random(30),
                'ModuleID' => rand(1, 6),
                'QuestionType' => 1
            ]
        );
    }
}
