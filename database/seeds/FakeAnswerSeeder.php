<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FakeAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=74; $i<=1474; $i++) {
            DB::table('answers')->insert(
                [
                    'QuestionID' => $i,
                    'A' => Str::random(7),
                    'B' => Str::random(7),
                    'C' => Str::random(7),
                    'D' => Str::random(7),
                    'CorrectAnswers' => 'A'
                ]
            );
        }

    }
}
