<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegiuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regiune')->insert(
            array(
                ['regiune_denumire'  => 'Regiunea Nord-Est'],
                ['regiune_denumire'  => 'Regiunea Sud-Est'],
                ['regiune_denumire'  => 'Regiunea Sud - Muntenia'],
                ['regiune_denumire'  => 'Regiunea Sud-Vest Oltenia'],
                ['regiune_denumire'  => 'Regiunea Vest'],
                ['regiune_denumire'  => 'Regiunea Nord-Vest'],
                ['regiune_denumire'  => 'Regiunea Centru'],
                ['regiune_denumire'  => 'Regiunea București - Ilfov']
            )
        );
    }
}
