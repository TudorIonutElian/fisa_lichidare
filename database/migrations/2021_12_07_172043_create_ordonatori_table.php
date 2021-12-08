<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrdonatoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonator', function (Blueprint $table) {
            $table->id();
            $table->string('ordonator_denumire', 100);
            $table->unsignedBigInteger('ordonator_parinte_id')->default(NULL);
            $table->unsignedBigInteger('ordonator_localitate');
            $table->unsignedBigInteger('ordonator_tip');
            $table->tinyInteger('ordonator_is_aparat_central')->default(0);
            $table->boolean('ordonator_status')->default(1);
            $table->dateTime('ordonator_data_creare')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('ordonator_localitate')->references('id')->on('localitate')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordonatori');
    }
}
