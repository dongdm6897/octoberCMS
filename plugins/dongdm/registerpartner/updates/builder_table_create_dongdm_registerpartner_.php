<?php namespace Dongdm\Registerpartner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDongdmRegisterpartner extends Migration
{
    public function up()
    {
        Schema::create('dongdm_registerpartner_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->binary('address');
            $table->string('product', 100);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dongdm_registerpartner_');
    }
}
