<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'ModuleID' => 1,
                'ModuleName' => 'Công nghệ thông tin',
                'ModuleDescription' => 'Hiểu biết về CNTT cơ bản',
            ),
            1 => 
            array (
                'ModuleID' => 2,
                'ModuleName' => 'Hệ điều hành',
                'ModuleDescription' => 'Sử dụng máy tính căn bản',
            ),
            2 => 
            array (
                'ModuleID' => 3,
                'ModuleName' => 'Internet',
                'ModuleDescription' => 'Sử dụng Internet cơ bản',
            ),
            3 => 
            array (
                'ModuleID' => 4,
                'ModuleName' => 'Word',
                'ModuleDescription' => 'Xử lý văn bản cơ bản',
            ),
            4 => 
            array (
                'ModuleID' => 5,
                'ModuleName' => 'Excel',
                'ModuleDescription' => 'Sử dụng bảng tính cơ bản',
            ),
            5 => 
            array (
                'ModuleID' => 6,
                'ModuleName' => 'Powerpoint',
                'ModuleDescription' => 'Sử dụng trình chiếu cơ bản',
            ),
        ));
        
        
    }
}