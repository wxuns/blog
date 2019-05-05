<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class DeleteRangeToAuthAndAddLowestToRange extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->table('auth',function (Blueprint $table){
            $table->dropColumn('range');
            $table->smallInteger('star')->comment('管理员星级，星级高者拥有低者的全部权限');
        });
        $this->schema->table('range',function (Blueprint $table){
            $table->integer('auth_id')->unsigned()->default(1)->comment('最小可操作范围');
            $table->foreign('auth_id')->references('id')->on('auth');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->table('auth',function (Blueprint $table){
            $table->string('range')->default(0);
            $table->dropColumn('star');
        });
        $this->schema->table('range',function (Blueprint $table){
            $table->dropForeign('range_auth_id_foreign')->unsigned();
            $table->dropColumn('auth_id');
        });
    }
}
