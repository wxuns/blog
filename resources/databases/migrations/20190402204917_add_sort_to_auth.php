<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSortToAuth extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('auth',function (Blueprint $table){
            $table->string('range')->default(0);
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('auth',function (Blueprint $table){
            $table->dropColumn('range');
        });
    }
}
