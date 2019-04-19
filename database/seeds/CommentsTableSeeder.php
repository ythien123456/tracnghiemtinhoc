<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'CommentID' => 1,
                'ExamID' => 1,
                'AccountID' => 1,
                'Content' => 'Thật là hay quá đi',
                'PostDate' => '2019-01-27 17:15:20',
            ),
            1 => 
            array (
                'CommentID' => 2,
                'ExamID' => 2,
                'AccountID' => 1,
                'Content' => 'Quá chuẩn luôn ạ!!',
                'PostDate' => '2019-01-27 17:15:20',
            ),
        ));
        
        
    }
}