<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIntroToUserTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('users', function (Blueprint $table) {
            $table->string('intro')->nullable();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('users', function ($table) {
            $table->dropColumn('intro');
        });
    }
}
