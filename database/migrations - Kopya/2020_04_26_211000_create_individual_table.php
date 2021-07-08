<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */  //$table->integer('marital_status')->default(0);
    public function up()
    {
        Schema::create('individual', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_id');
            $table->string('code',255);
            $table->string('first_name',250);
            $table->string('second_name',250);
            $table->string('last_name',250);
            $table->string('email_address', 255);
            $table->bigInteger('gsm_number', )->default(0);;
            $table->integer('origin_country_id')->default(0);
            $table->string('origin_identification_number',255);
            $table->integer('outcoming_country_id')->default(0);
            $table->string('outcoming_city_id',250);
            $table->string('outcoming_identification_number',255);
            $table->string('birth_place',250);
            $table->date('birth_date');
            $table->integer('gender_identity')->default(0);
            $table->integer('reading_status')->default(0);
            $table->integer('precision_status')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('individual');
    }
}
