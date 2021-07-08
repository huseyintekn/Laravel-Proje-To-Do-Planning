<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDfntnCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dfntn_country', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->charset = 'utf8';
			$table->collation = 'utf8_general_ci';
            $table->bigIncrements('country_id');
			$table->string('name', 255);
			$table->string('title', 255);
			$table->string('iso_code_2', 255);
			$table->string('iso_code_3', 255);
			$table->string('address_format', 255);
			$table->tinyInteger('postcode_required')->default(0);
			$table->integer('currency_id')->default(0);
			$table->integer('language_id')->default(0);
			$table->string('time_zone', 255);
			$table->string('phone_code', 255);
			$table->string('domain_extension', 255);
			$table->string('date_format', 255);
			$table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('dfntn_country');
    }
}
