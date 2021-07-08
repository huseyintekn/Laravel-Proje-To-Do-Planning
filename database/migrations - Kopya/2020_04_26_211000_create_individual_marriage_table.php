<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualMarriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_marriage', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_marriage_id');
            $table->integer('individual_id')->default(0);
            $table->integer('marriage_type_id')->default(0);
            $table->integer('validity_status')->default(0);
            $table->string('partner_name', 255);
            $table->integer('children_number')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->date('date_start');
            $table->date('date_end');
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
        Schema::dropIfExists('individual_marriage');
    }
}
