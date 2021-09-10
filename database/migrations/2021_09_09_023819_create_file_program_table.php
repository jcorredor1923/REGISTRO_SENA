<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_program', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('name_teacher', 45);
            $table->string('classroom', 15);
            $table->integer('students_numbers');
            $table->unsignedBigInteger('apprentice_id');
            $table->foreign('apprentice_id')->references('id')->on('apprentice');
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
        Schema::dropIfExists('file_program');
    }
}
