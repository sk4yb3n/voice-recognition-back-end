<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('command_id');
            $table->unsignedBigInteger('action_id');
            $table->timestamps();

            $table->foreign('command_id')
                ->references('id')->on('commands')
                ->onDelete('cascade');

            $table->foreign('action_id')
                ->references('id')->on('actions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('command_actions');
    }
}
