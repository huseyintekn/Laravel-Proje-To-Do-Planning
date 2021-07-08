<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_family', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('individual_family_id');
            $table->integer('individual_id')->default(0);
            $table->integer('relationship')->default(0);
            $table->integer('gender')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('name_surname', 255);
            $table->date('birth_date');
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
        Schema::dropIfExists('individual_family');
    }
}
//'marriage_type_id' =>rand(14,19);