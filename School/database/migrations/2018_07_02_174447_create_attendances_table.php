<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            if(!Schema::hasTable('attendances')){
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('class_id');
            $table->integer('section_id');
            $table->integer('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('student');
            $table->integer('sub_id');
            $table->integer('flag');
            $table->date('date');
            $table->TIME('time');  
            //$table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
