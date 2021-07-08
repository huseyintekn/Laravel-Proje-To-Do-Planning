<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_emloyment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_emloyment_id');
            $table->integer('individual_id')->default(0);
            $table->integer('permit_status')->default(0);
            $table->integer('sgk_status')->default(0);
            $table->string('sgk_number',50);
            $table->integer('employment_type_id')->default(0);
            $table->integer('employment_sector_id')->default(0);
            $table->string('working_hours',255);
            $table->integer('income_type_id')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('income_price',50);
            $table->text('employment_description');
            $table->string('employment_work_start',50);
            $table->string('employment_work_end',50);
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
        Schema::dropIfExists('individual_emloyment');
    }
}
