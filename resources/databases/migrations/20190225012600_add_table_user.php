<?php

use Illuminate\Database\Schema\Blueprint;
use Polite\Migration\Migration;

class AddTableUser extends Migration
{
    /**
     * Do the migration.
     */
    public function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',13);
            $table->string('password',13);
            $table->string('mobile',11)->nullable();
            $table->string('email')->nullable();
            $table->string('nick')->nullable();
            $table->string('pic')->nullable();
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Undo the migration.
     */
    public function down()
    {
        $this->schema->drop('users');
    }
}
