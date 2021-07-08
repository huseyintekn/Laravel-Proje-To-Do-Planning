<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualHealthInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_health_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_health_info_id');
            $table->integer('individual_id')->default(0);
            $table->integer('health_institution' )->default(0);
            $table->integer('contraceptive_method')->default(0);
            $table->integer('contraceptive_responsible')->default(0);
            $table->integer('easy_healthcare_facility')->default(0);
            $table->integer('sexually_transmitted_disease')->default(0);
            $table->integer('change_gender')->default(0);
            $table->integer('hormonal_treatment')->default(0);
            $table->integer('sex_change_operation')->default(0);
            $table->integer('sex_reassignment_psychiatric')->default(0);
            $table->integer('user_transacting')->default(0);
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
        Schema::dropIfExists('individual_health');
    }
}
