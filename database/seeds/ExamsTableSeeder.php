<?php

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exams')->delete();
        
        \DB::table('exams')->insert(array (
            0 => 
            array (
                'ExamID' => 1,
                'ExamTitle' => 'Đề Tổng Hợp 1',
                'ExamDescription' => 'Đề thi thử trắc nghiệm chứng chỉ tin học',
                'ExamType' => 2,
                'TotalQuestions' => 40,
                'TimeLimit' => 60,
                'ExamSlug' => 'de-tong-hop-1',
                'DateCreated' => '2019-01-27 16:51:20',
                'Status' => 1,
            ),
            1 => 
            array (
                'ExamID' => 2,
                'ExamTitle' => 'Đề Chuẩn 1',
                'ExamDescription' => 'Đề thi thử trắc nghiệm tin học',
                'ExamType' => 1,
                'TotalQuestions' => 30,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-chuan-1',
                'DateCreated' => '2019-01-27 16:53:32',
                'Status' => 1,
            ),
            2 => 
            array (
                'ExamID' => 3,
                'ExamTitle' => 'Đề Chuẩn 2',
                'ExamDescription' => 'Đề thi chuẩn số 2',
                'ExamType' => 1,
                'TotalQuestions' => 30,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-chuan-2',
                'DateCreated' => '2019-04-30 12:21:52',
                'Status' => 1,
            ),
            3 => 
            array (
                'ExamID' => 4,
                'ExamTitle' => 'Đề Tổng Hợp 2',
                'ExamDescription' => 'Đề thi tổng hợp câu hỏi số 2',
                'ExamType' => 2,
                'TotalQuestions' => 60,
                'TimeLimit' => 60,
                'ExamSlug' => 'de-tong-hop-2',
                'DateCreated' => '2019-04-30 14:59:31',
                'Status' => 1,
            ),
            4 => 
            array (
                'ExamID' => 7,
                'ExamTitle' => 'Đề Internet 1',
                'ExamDescription' => 'Đề thi câu hỏi về Internet số 1',
                'ExamType' => 3,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-internet-1',
                'DateCreated' => '2019-05-01 01:22:26',
                'Status' => 1,
            ),
            5 => 
            array (
                'ExamID' => 8,
                'ExamTitle' => 'Đề CNTT 1',
                'ExamDescription' => 'Đề CNTT Số 1',
                'ExamType' => 5,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-cntt-1',
                'DateCreated' => '2019-05-01 01:51:09',
                'Status' => 1,
            ),
            6 => 
            array (
                'ExamID' => 9,
                'ExamTitle' => 'Đề HĐH 1',
                'ExamDescription' => 'HDH 1',
                'ExamType' => 4,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-hdh-1',
                'DateCreated' => '2019-05-01 01:51:28',
                'Status' => 1,
            ),
            7 => 
            array (
                'ExamID' => 10,
                'ExamTitle' => 'Đề Word 1',
                'ExamDescription' => 'Word 1',
                'ExamType' => 6,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-word-1',
                'DateCreated' => '2019-05-01 01:51:51',
                'Status' => 1,
            ),
            8 => 
            array (
                'ExamID' => 11,
                'ExamTitle' => 'Đề Excel 1',
                'ExamDescription' => 'excel 1',
                'ExamType' => 7,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-excel-1',
                'DateCreated' => '2019-05-01 01:52:14',
                'Status' => 1,
            ),
            9 => 
            array (
                'ExamID' => 12,
                'ExamTitle' => 'Đề Powerpoint 1',
                'ExamDescription' => 'powerpoint 1',
                'ExamType' => 8,
                'TotalQuestions' => 20,
                'TimeLimit' => 20,
                'ExamSlug' => 'de-powerpoint-1',
                'DateCreated' => '2019-05-01 01:52:36',
                'Status' => 1,
            ),
        ));
        
        
    }
}