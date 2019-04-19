<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('feedbacks')->delete();
        
        \DB::table('feedbacks')->insert(array (
            0 => 
            array (
                'FeedbackID' => 1,
                'Email' => 'thiennguyen0897@gmail.com',
                'Phone' => '0935029097',
                'Content' => 'Đây là một trang web có sự đầu tư về mặt nội dung nên tôi rất thích nhưng vẫn còn một số mặt hạn chế mà tôi nghĩ đáng để bàn tới, chẳng hạn như:
...
...

...',
                'Date' => '2019-01-27 17:16:14',
            ),
        ));
        
        
    }
}