<?php namespace Dongdm\Registerpartner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDongdmRegisterpartner extends Migration
{
    public function up()
    {
        Schema::table('dongdm_registerpartner_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('address', 1000)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dongdm_registerpartner_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->binary('address')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
