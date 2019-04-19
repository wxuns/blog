<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableTodo extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('todo', function (Blueprint $table) {
            $table->comment = 'todo';
            $table->increments('id');
            $table->text('content')->nullable();
            $table->dateTime('time');
            $table->boolean('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('todo');
    }
}
