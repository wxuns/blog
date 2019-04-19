<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableComment extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',144);
            $table->boolean('status')->default(1)->comment('是否显示');
            $table->integer('article_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('parent_id')->unsigned()->comment('父id');
            $table->integer('laud')->default(0)->comment('顶');
            $table->integer('tread')->default(0)->comment('踩');
            $table->dateTime('time');
            $table->foreign('article_id')->references('id')->on('article');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('comment');
    }
}
