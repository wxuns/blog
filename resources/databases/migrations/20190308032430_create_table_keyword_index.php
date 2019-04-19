<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableKeywordIndex extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('keyword_index', function (Blueprint $table) {
            $table->comment = '关键字索引表';
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('keyword_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('article');
            $table->foreign('keyword_id')->references('id')->on('keyword');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('keyword_index');
    }
}
