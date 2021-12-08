<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Judete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judet', function (Blueprint $table) {
            $table->id();
            $table->string('judet_denumire', 30);
            $table->unsignedBigInteger('judet_regiune_id');
            $table->boolean('judet_stare')->default(true);
            $table->dateTime('judet_data_creare')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('judet_regiune_id')->references('id')->on('regiune')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('judet', function (Blueprint $table){
            $table->dropForeign('judet_judet_regiune_id_foreign');
        });
        Schema::dropIfExists('judet');
    }
}
