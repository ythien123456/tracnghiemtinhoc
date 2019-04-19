<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scores')->delete();
        
        \DB::table('scores')->insert(array (
            0 => 
            array (
                'ScoreID' => 1,
                'AccountID' => 2,
                'ExamID' => 1,
                'Score' => 35.0,
                'Date' => '2019-01-27 17:27:20',
            ),
            1 => 
            array (
                'ScoreID' => 2,
                'AccountID' => 2,
                'ExamID' => 2,
                'Score' => 25.0,
                'Date' => '2019-01-27 17:27:20',
            ),
            2 => 
            array (
                'ScoreID' => 3,
                'AccountID' => 2,
                'ExamID' => 1,
                'Score' => 35.0,
                'Date' => '2019-01-27 17:29:41',
            ),
            3 => 
            array (
                'ScoreID' => 4,
                'AccountID' => 2,
                'ExamID' => 1,
                'Score' => 37.0,
                'Date' => '2019-01-27 17:29:41',
            ),
            4 => 
            array (
                'ScoreID' => 5,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 14.0,
                'Date' => '2019-04-08 06:51:19',
            ),
            5 => 
            array (
                'ScoreID' => 6,
                'AccountID' => 1,
                'ExamID' => 1,
                'Score' => 11.0,
                'Date' => '2019-04-09 11:24:59',
            ),
            6 => 
            array (
                'ScoreID' => 7,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 11.0,
                'Date' => '2019-04-12 22:20:43',
            ),
            7 => 
            array (
                'ScoreID' => 8,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 8.0,
                'Date' => '2019-04-15 20:24:46',
            ),
            8 => 
            array (
                'ScoreID' => 9,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 14.0,
                'Date' => '2019-04-15 20:55:30',
            ),
            9 => 
            array (
                'ScoreID' => 10,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 14.0,
                'Date' => '2019-04-15 21:22:59',
            ),
            10 => 
            array (
                'ScoreID' => 11,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 12.0,
                'Date' => '2019-04-15 21:26:52',
            ),
            11 => 
            array (
                'ScoreID' => 12,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 15.0,
                'Date' => '2019-04-15 21:29:31',
            ),
            12 => 
            array (
                'ScoreID' => 13,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 11.0,
                'Date' => '2019-04-15 21:32:20',
            ),
            13 => 
            array (
                'ScoreID' => 14,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 15.0,
                'Date' => '2019-04-15 21:39:52',
            ),
            14 => 
            array (
                'ScoreID' => 15,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 10.0,
                'Date' => '2019-04-15 21:41:21',
            ),
            15 => 
            array (
                'ScoreID' => 16,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 15.0,
                'Date' => '2019-04-15 21:53:16',
            ),
            16 => 
            array (
                'ScoreID' => 17,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 10.0,
                'Date' => '2019-04-16 11:45:15',
            ),
            17 => 
            array (
                'ScoreID' => 18,
                'AccountID' => 4,
                'ExamID' => 1,
                'Score' => 8.0,
                'Date' => '2019-04-16 12:40:33',
            ),
            18 => 
            array (
                'ScoreID' => 19,
                'AccountID' => 1,
                'ExamID' => 2,
                'Score' => 6.0,
                'Date' => '2019-04-16 13:07:02',
            ),
        ));
        
        
    }
}