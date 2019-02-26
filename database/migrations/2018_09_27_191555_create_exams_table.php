<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name');
            $table->string('department');
            $table->string('semester');
            $table->string('faculty');
            $table->string('course_title');
            $table->string('course_code');
            $table->string('exam_time');
            $table->text('exam_note');
            $table->text('exam_rules');
            $table->longText('exam_description');
            $table->string('exam_type');
            $table->float('full_marks');
            $table->string('random');
            $table->string('created_by');
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
        Schema::dropIfExists('exams');
    }
}
