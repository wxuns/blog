<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddAuthToUserTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('users', function (Blueprint $table) {
            $table->integer('auth')->unsigned();
            $table->foreign('auth')->references('id')->on('auth');
            $table->index('auth');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('users',function ($table) {
            $table->dropColumn('auth');
        });
    }
}
