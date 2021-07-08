<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualEmploymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_emloyment_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_emloyment_info_id');
            $table->integer('individual_id')->default(0);
            $table->integer('permit_status')->default(0);
            $table->integer('vocational_education_status')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('child_day_care', 255);
            $table->string('outcoming_country_job', 255);
            $table->string('incoming_country_job', 255);
            $table->string('sexual_harassment', 255);
            $table->string('gender_based_discrimination', 255);
            $table->string('sexual_orientation', 255);
            $table->string('mobbing', 255);
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
        Schema::dropIfExists('individual_emloyment_info');
    }
}
