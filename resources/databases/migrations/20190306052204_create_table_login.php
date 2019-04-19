<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableLogin extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('users_login', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->dateTime('time');
            $table->string('ip',15)->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->index('user_id');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('users_login');
    }
}
