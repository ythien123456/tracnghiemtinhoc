<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'AccountID' => 1,
                'Email' => 'thiennguyen0897@gmail.com',
                'Password' => 'e10adc3949ba59abbe56e057f20f883e',
                'FirstName' => 'Thien',
                'LastName' => 'Nguyen',
                'WorkPlace' => 'IUH',
                'PhoneNumber' => '0935029097',
                'Address' => 'HCM',
                'Gender' => 1,
                'Role' => 3,
                'JoinDate' => '2019-01-22 12:16:16',
            ),
            1 => 
            array (
                'AccountID' => 2,
                'Email' => 'sinhvien1@gmail.com',
                'Password' => 'e10adc3949ba59abbe56e057f20f883e',
                'FirstName' => 'Vien',
                'LastName' => 'Sinh',
                'WorkPlace' => 'IUH',
                'PhoneNumber' => NULL,
                'Address' => NULL,
                'Gender' => 1,
                'Role' => 1,
                'JoinDate' => '2019-01-27 15:09:01',
            ),
            2 => 
            array (
                'AccountID' => 3,
                'Email' => 'bientap1@gmail.com',
                'Password' => 'e10adc3949ba59abbe56e057f20f883e',
                'FirstName' => 'Tap',
                'LastName' => 'Bien',
                'WorkPlace' => 'IUH',
                'PhoneNumber' => NULL,
                'Address' => NULL,
                'Gender' => 2,
                'Role' => 2,
                'JoinDate' => '2019-01-27 15:11:29',
            ),
            3 => 
            array (
                'AccountID' => 4,
                'Email' => 'buithibichtien@gmail.com',
                'Password' => '351b2f2b90a42dfbc464cd4a5b9187e8',
                'FirstName' => 'tien',
                'LastName' => 'bich',
                'WorkPlace' => 'IUH',
                'PhoneNumber' => '0974608994',
                'Address' => NULL,
                'Gender' => 3,
                'Role' => 1,
                'JoinDate' => '2019-04-16 12:34:30',
            ),
            4 => 
            array (
                'AccountID' => 6,
                'Email' => 'test01@gmail.com',
                'Password' => 'e10adc3949ba59abbe56e057f20f883e',
                'FirstName' => 'asdasd',
                'LastName' => 'asd',
                'WorkPlace' => 'IUH',
                'PhoneNumber' => '0974608992',
                'Address' => NULL,
                'Gender' => 1,
                'Role' => 1,
                'JoinDate' => '2019-05-09 00:32:46',
            ),
        ));
        
        
    }
}