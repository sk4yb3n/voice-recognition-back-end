<?php

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $action = new Action();
        $action->name = "Find";
        $action->slug = "find";
        $action->save();

        $action = new Action();
        $action->name = "Search";
        $action->slug = "search";
        $action->save();

        $action = new Action();
        $action->name = "Help";
        $action->slug = "help";
        $action->save();

        $action = new Action();
        $action->name = "Create";
        $action->slug = "create";
        $action->save();
    }
}
