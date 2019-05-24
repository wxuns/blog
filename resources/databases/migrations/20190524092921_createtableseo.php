<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class Createtableseo extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('seo', function (Blueprint $table) {
            $table->comment = '网站seo';
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
        });
    }
    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('seo');
    }
}
