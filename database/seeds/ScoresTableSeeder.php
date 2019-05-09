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
        
        
        
    }
}