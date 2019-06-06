<?php

use App\Models\Action;
use App\Models\Command;
use App\Models\CommandAction;
use Illuminate\Database\Seeder;

class CommandActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $command = Command::whereSlug('syllabus')->first();
        $commandCourseRoomLocation = Command::whereSlug('course-room-location')->first();
        $commandCreateIusSystemAccount = Command::whereSlug('create-ius-system-account')->first();

        $actionFind = Action::whereSlug('find')->first();
        $actionSearch = Action::whereSlug('search')->first();
        $actionHelp = Action::whereSlug('help')->first();
        $actionCreate = Action::whereSlug('create')->first();

        $relationWord = new CommandAction();
        $relationWord->command_id = $command->id;
        $relationWord->action_id = $actionFind->id;
        $relationWord->save();

        $relationWord = new CommandAction();
        $relationWord->command_id = $command->id;
        $relationWord->action_id = $actionSearch->id;
        $relationWord->save();

        $relationWord = new CommandAction();
        $relationWord->command_id = $commandCourseRoomLocation->id;
        $relationWord->action_id = $actionFind->id;
        $relationWord->save();

        $relationWord = new CommandAction();
        $relationWord->command_id = $commandCreateIusSystemAccount->id;
        $relationWord->action_id = $actionHelp->id;
        $relationWord->save();

        $relationWord = new CommandAction();
        $relationWord->command_id = $commandCreateIusSystemAccount->id;
        $relationWord->action_id = $actionCreate->id;
        $relationWord->save();
    }
}
