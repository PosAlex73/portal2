<?php

use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Courses\CourseTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(true);
            $table->string('short_description', 512)->nullable(true);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('image', 1024)->nullable(true)->default('');
            $table->integer('price')->default(0);
            $table->string('type', 1)->default(CourseTypes::FREE);
            $table->string('practice', 1)->default(CoursePractice::NO);
            $table->string('status', 1)->default(CourseStatuses::IN_PROGRESS);
            $table->smallInteger('position')->default(0)->nullable(true);
            $table->timestamps();
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(true);
            $table->text('data');
            $table->string('status', 1)->default(\App\Enums\CommonStatuses::DISABLED);
            $table->string('type', 32)->default(\App\Enums\Tasks\TaskTypes::THEORY);
            $table->integer('points')->default(0)->nullable(true);
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('category_task', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('task_id');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreign('task_id')->references('id')->on('tasks')->cascadeOnDelete();
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
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('category_task');
    }
};
