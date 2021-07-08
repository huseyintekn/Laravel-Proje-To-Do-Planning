<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_contact', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_contact_id');
            $table->integer('individual_id')->default(0);
            $table->integer('address_type_id')->default(0);
            $table->string('neighborhood', 255);
            $table->string('highroad', 255);
            $table->string('avenue', 255);
            $table->string('street', 255);
            $table->string('site', 255);
            $table->string('block', 255);
            $table->string('building_name', 255);
            $table->string('external_number', 255);
            $table->string('internal_number', 255);
            $table->string('post_code', 255);
            $table->string('locality', 255);
            $table->integer('district_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->integer('country_id')->default(0);
            $table->string('address_line', 255);
            $table->string('address_specification', 255);
            $table->string('telephone_number', 255);
            $table->integer('user_transacting')->default(0);
            $table->tinyinteger('default')->default(0);
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
        Schema::dropIfExists('individual_contact');
    }
}
