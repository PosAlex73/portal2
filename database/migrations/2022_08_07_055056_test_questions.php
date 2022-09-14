<?php

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
        Schema::create('test_questions', function (Blueprint $schema) {
            $schema->id();
            $schema->string('title');
            $schema->text('questions');
            $schema->integer('right_answer');
            $schema->string('status', 1);
            $schema->unsignedBigInteger('practice_task_id');
            $schema->foreign('practice_task_id')->references('id')->on('practice_tasks')->cascadeOnDelete();
            $schema->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_questions');
    }
};
