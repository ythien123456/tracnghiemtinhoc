<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(ExamtypesTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(QuestiondetailsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
    }
}
