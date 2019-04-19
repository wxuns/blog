<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class ChangePasswordToUsersTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('users',function (Blueprint $table){
            $table->string('password',50)->change();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('users',function (Blueprint $table){
            $table->string('password','13')->change();
        });
    }
}
