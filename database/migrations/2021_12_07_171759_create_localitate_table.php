<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalitateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localitate', function (Blueprint $table) {
            $table->id();
            $table->string('localitate_denumire', 70);
            $table->unsignedBigInteger('localitate_judet_id');
            $table->boolean('localitate_urban')->default(false);
            $table->boolean('localitate_resedinta')->default(false);
            $table->boolean('localitate_stare')->default(true);

            $table->foreign('localitate_judet_id')->references('id')->on('judet')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localitate', function (Blueprint $table){
            $table->dropForeign('ordonator_ordonator_localitate_foreign');
        });
        Schema::dropIfExists('localitati');
    }
}
