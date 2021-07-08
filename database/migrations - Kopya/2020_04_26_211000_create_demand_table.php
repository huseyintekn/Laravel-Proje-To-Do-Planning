<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('demand_id');
            $table->integer('individual_id')->default(0);
            $table->string('code', 255);
            $table->string('serial_number', 255);
            $table->string('row_number', 255);
            $table->integer('demand_type_id')->default(0);
            $table->date('demand_date', 0);
            $table->string('demand_owner', 255);
            $table->integer('application_place_id')->default(0);
            $table->integer('application_method_id')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('title',255);
            $table->text('summary');
            $table->text('description');
            $table->text('comment');
            $table->text('status_description')->nullable();
            $table->integer('demand_status_id')->default(0);
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
        Schema::dropIfExists('demand');
    }
}
