<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('vendor');
            $table->string('services');
            $table->string('assessor');
            $table->string('question1_1');
            $table->string('question1_2');
            $table->string('question1_3');
            $table->string('question2_1');
            $table->string('question2_2');
            $table->string('question3_1');
            $table->string('question3_2');
            $table->string('result');
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
        Schema::dropIfExists('scores');
    }
}
