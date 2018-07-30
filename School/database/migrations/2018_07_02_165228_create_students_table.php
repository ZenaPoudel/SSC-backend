<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('guardian_name');
            $table->string('address');
            $table->integer('mobile');  
            $table->string('email')->unique();
            $table->string('password');
            $table->Date('dob');
            $table->Date('age');
            //$table->integer('created_at'); 
            $table->integer('class_id');
            $table->string('section_id');
            $table->string('token_key',400);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
