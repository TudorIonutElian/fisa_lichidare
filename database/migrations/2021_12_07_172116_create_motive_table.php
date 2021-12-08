<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMotiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motiv', function (Blueprint $table) {
            $table->id();
            $table->string('motiv_lege');
            $table->string('motiv_articol');
            $table->string('motiv_alineat');
            $table->string('motiv_paragraf');
            $table->boolean('motiv_status')->default(1);
            $table->dateTime('motiv_data_creare')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motiv');
    }
}
