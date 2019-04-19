<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableUserToken extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('users_token', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->string('weibo')->nullable();
            $table->string('weixin')->nullable();
            $table->string('qq')->nullable();
            $table->string('github')->nullable();
            $table->string('gitee')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unique('user_id');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('users_token');
    }
}
