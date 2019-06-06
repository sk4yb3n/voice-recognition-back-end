<?php

use App\Models\Command;
use App\Models\CommandRelationWord;
use Illuminate\Database\Seeder;

class CommandRelationWordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $command = Command::whereSlug('syllabus')->first();

        $relationWord = new CommandRelationWord();
        $relationWord->command_id = $command->id;
        $relationWord->name = "Test syllabus";
        $relationWord->slug = "test-syllabus";
        $relationWord->save();
    }
}
