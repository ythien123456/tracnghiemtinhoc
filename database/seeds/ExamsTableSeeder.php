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
                'TotalQuestions' => 40,
                'TimeLimit' => 60,
                'ExamSlug' => 'de-chuan-1',
                'DateCreated' => '2019-01-27 16:53:32',
                'Status' => 1,
            ),
            2 => 
            array (
                'ExamID' => 3,
                'ExamTitle' => 'Đề Tổng Hợp 2',
                'ExamDescription' => 'Đề tin học tổng hợp số 2',
                'ExamType' => 2,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-tong-hop2',
                'DateCreated' => '2019-03-31 20:05:54',
                'Status' => 0,
            ),
            3 => 
            array (
                'ExamID' => 4,
                'ExamTitle' => 'Đề Tổng Hợp 3',
                'ExamDescription' => 'Tổng hợp',
                'ExamType' => 2,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-tong-hop-3',
                'DateCreated' => '2019-04-03 01:13:01',
                'Status' => 0,
            ),
            4 => 
            array (
                'ExamID' => 5,
                'ExamTitle' => 'Đề Chuẩn 2',
                'ExamDescription' => 'Để chuẩn',
                'ExamType' => 1,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-chuan-2',
                'DateCreated' => '2019-04-03 01:13:52',
                'Status' => 0,
            ),
            5 => 
            array (
                'ExamID' => 6,
                'ExamTitle' => 'Đề Chuẩn 3',
                'ExamDescription' => 'Chuẩn',
                'ExamType' => 1,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-chuan-3',
                'DateCreated' => '2019-04-03 01:13:52',
                'Status' => 0,
            ),
            6 => 
            array (
                'ExamID' => 7,
                'ExamTitle' => 'Đề Tổng Hợp 4',
                'ExamDescription' => 'Đề thi tổng hợp câu hỏi ngẫu nhiên trải đều 6 modules.',
                'ExamType' => 2,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-tong-hop-4',
                'DateCreated' => '2019-04-04 15:46:56',
                'Status' => 0,
            ),
            7 => 
            array (
                'ExamID' => 8,
                'ExamTitle' => 'Đề Tổng Hợp 5',
                'ExamDescription' => 'Đề thi tổng hợp câu hỏi ngẫu nhiên trải đều 6 modules.',
                'ExamType' => 2,
                'TotalQuestions' => 40,
                'TimeLimit' => 30,
                'ExamSlug' => 'de-tong-hop-5',
                'DateCreated' => '2019-04-04 15:46:56',
                'Status' => 0,
            ),
        ));
        
        
    }
}