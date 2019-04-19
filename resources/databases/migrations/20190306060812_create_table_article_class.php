<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableArticleClass extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('article_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classname',20)->nullable();
            $table->boolean('status')->default(1)->comment('是否显示');
            $table->integer('auth')->unsigned();
            $table->dateTime('time');
            $table->string('itro')->nullable();
            $table->foreign('auth')->references('id')->on('auth');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('article_class');
    }
}
