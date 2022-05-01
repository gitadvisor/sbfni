<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name');
            $table->string('section_name');
            $table->string('year');
            $table->string('course_name');
            $table->string('student_reg_no');
            $table->string('mark');
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
        Schema::dropIfExists('mark_inputs');
    }
}
