<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_day', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->date('date');
            $table->unsignedBigInteger('file_program_id');
            $table->foreign('file_program_id')->references('id')->on('file_program');
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
        Schema::dropIfExists('study_day');
    }
}
