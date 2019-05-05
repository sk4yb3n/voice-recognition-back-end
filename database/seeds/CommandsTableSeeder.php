<?php

use App\Models\Command;
use Illuminate\Database\Seeder;

class CommandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the table before be execute seed command
        Command::truncate();

        // Fill in the `commands` table with preset values
        $command                = new Command;
        $command->name          = "Syllabus";
        $command->description   = "Command which finds course syllabus user wants";
        $command->slug          = "syllabus";
        $command->save();

        $command                = new Command;
        $command->name          = "Course room location";
        $command->description   = "Command which finds course room location user wants";
        $command->slug          = "course-room-location";
        $command->save();

        $command                = new Command;
        $command->name          = "Create IUS system user account";
        $command->description   = "Command which shows user how to create his IUS system account";
        $command->slug          = "create-ius-system-account";
        $command->save();
    }
}
