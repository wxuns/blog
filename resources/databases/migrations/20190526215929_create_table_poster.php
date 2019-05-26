<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablePoster extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('poster', function (Blueprint $table) {
            $table->comment = '轮播广告';
            $table->increments('id');
            $table->string('title');
            $table->string('pic');
            $table->string('link');
            $table->smallInteger('type');
        });
    }
    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('poster');
    }
}
