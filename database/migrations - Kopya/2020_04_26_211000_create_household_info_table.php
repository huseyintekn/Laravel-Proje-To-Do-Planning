<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseholdInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('household_info_id');
            $table->integer('permit_status')->default(0);
            $table->integer('marital_status')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->integer('gender_id')->default(0);
            $table->string('age', 255);
            $table->string('relationship', 255);
            $table->string('work', 255);
            $table->string('price', 255);
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
        Schema::dropIfExists('household_info');
    }
}
