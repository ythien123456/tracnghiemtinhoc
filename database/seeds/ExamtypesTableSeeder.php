<?php

use Illuminate\Database\Seeder;

class ExamtypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('examtypes')->delete();
        
        \DB::table('examtypes')->insert(array (
            0 => 
            array (
                'TypeID' => 1,
                'TypeTitle' => 'Đề chuẩn',
                'TypeDescription' => 'Đề thi chuẩn theo quy tắc của chứng chỉ tin học.',
                'TypeSlug' => 'de-chuan',
            ),
            1 => 
            array (
                'TypeID' => 2,
                'TypeTitle' => 'Đề tổng hợp',
                'TypeDescription' => 'Đề thi tổng hợp các câu hỏi ngẫu nhiên',
                'TypeSlug' => 'de-tong-hop',
            ),
            2 => 
            array (
                'TypeID' => 3,
                'TypeTitle' => 'Đề module - INTERNET',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về Internet',
                'TypeSlug' => 'de-module-internet',
            ),
            3 => 
            array (
                'TypeID' => 4,
                'TypeTitle' => 'Đề module - HỆ ĐIỀU HÀNH',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về hệ điều hành',
                'TypeSlug' => 'de-module-hdh',
            ),
            4 => 
            array (
                'TypeID' => 5,
                'TypeTitle' => 'Đề module - CNTT',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về Công nghệ thông tin',
                'TypeSlug' => 'de-module-cntt',
            ),
            5 => 
            array (
                'TypeID' => 6,
                'TypeTitle' => 'Đề module - WORD',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về Word',
                'TypeSlug' => 'de-module-word',
            ),
            6 => 
            array (
                'TypeID' => 7,
                'TypeTitle' => 'Đề module - EXCEL',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về Excel',
                'TypeSlug' => 'de-module-excel',
            ),
            7 => 
            array (
                'TypeID' => 8,
                'TypeTitle' => 'Đề module - POWERPOINT',
                'TypeDescription' => 'Đề thi chỉ bao gồm những câu hỏi thuộc về Powerpoint',
                'TypeSlug' => 'de-module-powerpoint',
            ),
        ));
        
        
    }
}