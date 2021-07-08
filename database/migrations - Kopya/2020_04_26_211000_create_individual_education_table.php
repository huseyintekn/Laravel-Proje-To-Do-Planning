<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_education', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_education_id');
            $table->integer('individual_id')->default(0);
            $table->integer('level_id')->default(0);
            $table->integer('type_id')->default(0);
            $table->integer('language_id')->default(0);
            $table->string('place', 255);
            $table->string('division', 255);
            $table->string('school_name', 255);
            $table->integer('education_status')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->date('date_start');
            $table->date('date_end');
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
        Schema::dropIfExists('individual_education');
    }
}
