<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_language', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_language_id');
            $table->integer('individual_id')->default(0);
            $table->integer('language_id')->default(0);
            $table->integer('read_status')->default(0);
            $table->integer('write_status')->default(0);
            $table->integer('speak_status')->default(0);
            $table->integer('mother_language')->default(0);
            $table->integer('interview_language')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('learning_place',255);
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
        Schema::dropIfExists('individual_language');
    }
}
