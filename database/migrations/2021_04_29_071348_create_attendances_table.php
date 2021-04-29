<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('attendance_id');
            $table->integer('student_id');
            $table->integer('class_id');
            $table->integer('course_id');
            $table->integer('teacher_id');
            $table->integer('semester_id');
            $table->string('attendance_date');
            $table->integer('edit_date');
            $table->string('day');
            $table->string('month');
            $table->integer('year');
            $table->string('attendance_status');
            $table->softDeletes();
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
        Schema::dropIfExists('attendances');
    }
}
