<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableAuth extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('auth', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rolename',64);
            $table->dateTime('time');
            $table->string('description',200)->nullable();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('auth');
    }
}
