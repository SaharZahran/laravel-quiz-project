<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quiz_id')->default(1);
            $table->string('question_text')->nullable();
            $table->string('answer_one')->nullable();
            $table->string('answer_two')->nullable();
            $table->string('answer_three')->nullable();
            $table->string('answer_four')->nullable();
            $table->string('right_answer')->nullable();
            $table->foreign('quiz_id')
            ->references('id')
            ->on('dashboards')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
