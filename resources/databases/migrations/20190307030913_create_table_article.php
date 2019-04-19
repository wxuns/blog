<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableArticle extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->integer('author')->unsigned();
            $table->string('copyright')->nullable()->comment('来源，版权');
            $table->string('url')->nullable()->comment('第三方来源地址');
            $table->integer('count')->default(0)->comment('点击数');
            $table->integer('laud')->default(0)->comment('点赞数');
            $table->integer('comment')->default(0)->comment('评论数');
            $table->boolean('ontop')->default(0)->comment('置顶');
            $table->boolean('elite')->default(0)->comment('加精');
            $table->boolean('status')->default(1)->comment('是否显示');
            $table->dateTime('time');
            $table->dateTime('last_time')->comment('最后更新时间');
            $table->string('keyword');
            $table->foreign('class_id')->references('id')->on('article_class');
            $table->foreign('author')->references('id')->on('users');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('article');
    }
}
