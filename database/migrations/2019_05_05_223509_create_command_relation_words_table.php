<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandRelationWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_relation_words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('command_id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('command_id')
                ->references('id')->on('commands')
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
        Schema::dropIfExists('command_relation_words');
    }
}
