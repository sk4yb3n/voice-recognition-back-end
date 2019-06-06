<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ActionsTableSeeder::class);
         $this->call(CommandsTableSeeder::class);
         $this->call(CommandRelationWordsTableSeeder::class);
         $this->call(CommandActionsTableSeeder::class);
    }
}
