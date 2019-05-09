<?php

use Illuminate\Database\Seeder;

class PostcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('postcategories')->delete();
        
        \DB::table('postcategories')->insert(array (
            0 => 
            array (
                'CategoryID' => 1,
                'CategoryName' => 'Công nghệ thông tin',
                'CategoryDescription' => 'Các kiến thức tổng quan về công nghệ thông tin',
                'CategoryType' => 1,
            ),
            1 => 
            array (
                'CategoryID' => 2,
                'CategoryName' => 'Hệ điều hành',
                'CategoryDescription' => 'Các kiến thức cho việc sử dụng máy tính, giới thiệu cách sử dụng của các chức năng cơ bản trong hệ điều hành
',
                'CategoryType' => 1,
            ),
            2 => 
            array (
                'CategoryID' => 3,
                'CategoryName' => 'Internet',
                'CategoryDescription' => 'Kiến thức tổng quan về Internet',
                'CategoryType' => 1,
            ),
            3 => 
            array (
                'CategoryID' => 4,
                'CategoryName' => 'Word',
                'CategoryDescription' => 'Các kiến thức sử dụng phần mềm Microsoft Word',
                'CategoryType' => 1,
            ),
            4 => 
            array (
                'CategoryID' => 5,
                'CategoryName' => 'Excel',
                'CategoryDescription' => 'Các kiến thức về cách sử dụng phần mềm Microsoft Excel',
                'CategoryType' => 1,
            ),
            5 => 
            array (
                'CategoryID' => 6,
                'CategoryName' => 'Powerpoint',
                'CategoryDescription' => 'Các kiến thức về cách sử dụng phần mềm Microsoft Powerpoint',
                'CategoryType' => 1,
            ),
            6 => 
            array (
                'CategoryID' => 7,
                'CategoryName' => 'Hướng dẫn',
                'CategoryDescription' => 'Hướng dẫn sử dụng các chức năng trong hệ thống',
                'CategoryType' => 2,
            ),
            7 => 
            array (
                'CategoryID' => 8,
                'CategoryName' => 'Tin tức',
                'CategoryDescription' => 'Các tin tức mới về chứng chỉ CNTT',
                'CategoryType' => 2,
            ),
            8 => 
            array (
                'CategoryID' => 9,
                'CategoryName' => 'Kiến thức tổng hộp',
                'CategoryDescription' => 'Kiến thức tổng hợp về chứng chỉ CNTT',
                'CategoryType' => 2,
            ),
        ));
        
        
    }
}