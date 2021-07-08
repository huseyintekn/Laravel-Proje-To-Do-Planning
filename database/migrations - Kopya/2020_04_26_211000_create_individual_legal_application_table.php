<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualLegalApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_legal_application', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('legal_application_id');
            $table->integer('individual_id')->default(0);
            $table->integer('user_transacting')->default(0);
            $table->string('legal_subject',255);
            $table->string('legal_court',255);
            $table->string('legal_file_number',255);
            $table->text('legal_current_status');
            $table->date('legal_date');
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
        Schema::dropIfExists('individual_legal_application');
    }
}
