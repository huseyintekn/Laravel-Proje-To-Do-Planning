<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDfntnDemandTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dfntn_demand_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('demand_type_id');
            $table->string('code', 255);
            $table->string('module', 255);
            $table->integer('user_transacting')->default(0);
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
        Schema::dropIfExists('dfntn_demand_type');
    }
}
