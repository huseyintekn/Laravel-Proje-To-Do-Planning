<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDfntnOngoingHealthProblemTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dfntn_ongoing_health_problem_translation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('ongoing_health_problem_translation_id');
            $table->integer('ongoing_health_problem_id')->default(0);
            $table->string('language_code', 255);
            $table->string('name', 255);
            $table->timestamp('date_modified', 0);
            $table->timestamp('date_created', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dfntn_ongoing_health_problem_translation');
    }
}
