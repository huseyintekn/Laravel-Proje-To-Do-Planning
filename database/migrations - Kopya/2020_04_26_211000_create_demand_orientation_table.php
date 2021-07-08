<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandOrientationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_orientation_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('orientation_id');
            $table->integer('demand_id')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->integer('type');
            $table->string('subject', 255);
            $table->string('where', 255);
            $table->string('description', 255);
            $table->date('date', 0);
            $table->integer('chase_status')->default();
            $table->integer('sort_order');
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
        Schema::dropIfExists('demand_orientation_type');
    }
}
