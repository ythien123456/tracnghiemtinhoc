<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'RoleID' => 1,
                'RoleTitle' => 'Thành viên',
                'RoleDescription' => 'Người dùng cơ bản',
            ),
            1 => 
            array (
                'RoleID' => 2,
                'RoleTitle' => 'Biên tập viên',
                'RoleDescription' => 'Quản trị nội dung đề, ngân hàng câu hỏi',
            ),
            2 => 
            array (
                'RoleID' => 3,
                'RoleTitle' => 'Admin',
                'RoleDescription' => 'Quản trị hệ thống',
            ),
        ));
        
        
    }
}