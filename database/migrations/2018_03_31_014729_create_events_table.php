<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 66);
            $table->string('organizator', 66);
            $table->date('dateInit');
            $table->date('dateEnd');
            $table->text('description');    
            $table->integer('auditorio_id')->unsigned()->nullable();
            $table->foreign('auditorio_id')->references('id')->on('auditorios')            
            ->onUpdate('SET NULL')
            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('auditorios', function (Blueprint $table) {
            $table->dropUnique(['id']);
            $table->dropForeign(['auditorio_id']);
            });*/
        Schema::dropIfExists('events');
    }
}
