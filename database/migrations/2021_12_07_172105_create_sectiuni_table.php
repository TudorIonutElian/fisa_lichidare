<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSectiuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectiune', function (Blueprint $table) {
            $table->id();
            $table->string('sectiune_titlu', 50);
            $table->string('sectiune_litera', 2);
            $table->string('sectiune_descriere', 500);
            $table->dateTime('sectiune_data_creare')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('sectiune_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectiune');
    }
}
