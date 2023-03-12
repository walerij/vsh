<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('courl');
            $table->string('info');
            $table->string('access');
            $table->bigInteger('author_id')->default(1);
            $table->bigInteger('lessons')->default(0);
            $table->string('techno')->default('other');
            $table->bigInteger('tier')->default(0);
            $table->bigInteger('step')->default(0);
            $table->bigInteger('stat_reports')->default(0);
            $table->bigInteger('stat_videos')->default(0);
            $table->decimal('stat_stars')->default(0.00);
            $table->bigInteger('stat_lessons')->default(0);
            $table->time('stat_duration');
            $table->integer('is_active')->default(0);
            $table->string('udemy')->default('');

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
        Schema::dropIfExists('courses');
    }
}
