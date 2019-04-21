<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddStatusToRabge extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('range',function (Blueprint $table){
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('range',function (Blueprint $table){
            $table->dropColumn('status');
        });
    }
}
