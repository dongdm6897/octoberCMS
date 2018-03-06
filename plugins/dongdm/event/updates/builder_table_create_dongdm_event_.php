<?php namespace dongdm\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDongdmEvent extends Migration
{
    public function up()
    {
        Schema::create('dongdm_event_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nguoi_to_chuc', 100);
            $table->dateTime('thoi_gian');
            $table->smallInteger('so_nguoi_max');
            $table->smallInteger('da_tham_gia');
            $table->string('diem_xuat_phat');
            $table->string('dich_den');
            $table->string('cach_di_chuyen');
            $table->string('chi_phi');
            $table->text('nha_tai_tro');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dongdm_event_');
    }
}
