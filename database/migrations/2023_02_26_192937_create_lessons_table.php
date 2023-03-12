<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable()->default(1);
            $table->string('lesson')->nullable()->comment('Название урока');
            $table->text('intro')->nullable()->comment('Вступительный текст');
            $table->text('tasks')->nullable()->comment('Домашнее задание по пунктам, каждый пункт на отдельной строке!');
            $table->string('video')->nullable()->comment('youtube код видео');
            $table->string('status')->nullable()->comment('show / hide');
            $table->integer('step')->nullable()->default(0)->comment('Порядковый номер');
            $table->string('checking')->nullable()->default('need')->comment('need / skip');
            $table->time('video_length');
            $table->integer('copy_id');
            $table->integer('demo')->default(0);
            $table->string('need_lesson_ids')->default('');
            $table->string('tofill')->default('');
            $table->string('packet');
            $table->string('opencode');
            $table->index('course_id','lesson_course_idx');
            $table->foreign('course_id', 'lesson_course_fk')->on('courses')->references('id');
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
        Schema::dropIfExists('lessons');
    }
}
