<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudeteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserare Judete in tabel
        DB::table('judet')->insert(
            array(
                // Inserare judete Regiunea Nord Est
                ['judet_denumire' => 'Bacau', 'judet_regiune_id'=> 1],
                ['judet_denumire' => 'Botosani', 'judet_regiune_id'=> 1],
                ['judet_denumire' => 'Iasi', 'judet_regiune_id'=> 1],
                ['judet_denumire' => 'Neamt', 'judet_regiune_id'=> 1],
                ['judet_denumire' => 'Suceava', 'judet_regiune_id'=> 1],
                ['judet_denumire' => 'Vaslui', 'judet_regiune_id'=> 1],

                // Inserare judete Regiunea Sud Est
                ['judet_denumire' => 'Braila', 'judet_regiune_id'=> 2],
                ['judet_denumire' => 'Buzau', 'judet_regiune_id'=> 2],
                ['judet_denumire' => 'Constanta', 'judet_regiune_id'=> 2],
                ['judet_denumire' => 'Galati', 'judet_regiune_id'=> 2],
                ['judet_denumire' => 'Tulcea', 'judet_regiune_id'=> 2],
                ['judet_denumire' => 'Vrancea', 'judet_regiune_id'=> 2],

                // Inserare judete Regiunea Sud Est
                ['judet_denumire' => 'Argeș', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Calarasi', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Dambovia', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Giurgiu', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Ialomita', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Prahova', 'judet_regiune_id'=> 3],
                ['judet_denumire' => 'Teleorman', 'judet_regiune_id'=> 3],

                // Inserare judete Regiunea Sud Vest Oltenia
                ['judet_denumire' => 'Dolj', 'judet_regiune_id'=> 4],
                ['judet_denumire' => 'Gorj', 'judet_regiune_id'=> 4],
                ['judet_denumire' => 'Mehedinti', 'judet_regiune_id'=> 4],
                ['judet_denumire' => 'Olt', 'judet_regiune_id'=> 4],
                ['judet_denumire' => 'Valcea', 'judet_regiune_id'=> 4],


                // Inserare judete Regiunea Vest
                ['judet_denumire' => 'Arad', 'judet_regiune_id'=> 5],
                ['judet_denumire' => 'Caras-Severin', 'judet_regiune_id'=> 5],
                ['judet_denumire' => 'Hunedoara', 'judet_regiune_id'=> 5],
                ['judet_denumire' => 'Timis', 'judet_regiune_id'=> 5],

                // Inserare judete Regiunea Nord-Vest
                ['judet_denumire' => 'Bihor', 'judet_regiune_id'=> 6],
                ['judet_denumire' => 'Bistrita-Nasaud', 'judet_regiune_id'=> 6],
                ['judet_denumire' => 'Cluj', 'judet_regiune_id'=> 6],
                ['judet_denumire' => 'Maramures', 'judet_regiune_id'=> 6],
                ['judet_denumire' => 'Satu-Mare', 'judet_regiune_id'=> 6],
                ['judet_denumire' => 'Salaj', 'judet_regiune_id'=> 6],

                // Inserare judete Regiunea Centru
                ['judet_denumire' => 'Alba', 'judet_regiune_id'=> 7],
                ['judet_denumire' => 'Brașov', 'judet_regiune_id'=> 7],
                ['judet_denumire' => 'Covasna', 'judet_regiune_id'=> 7],
                ['judet_denumire' => 'Harghita', 'judet_regiune_id'=> 7],
                ['judet_denumire' => 'Mures', 'judet_regiune_id'=> 7],
                ['judet_denumire' => 'Sibiu', 'judet_regiune_id'=> 7],

                // Inserare judete Regiunea Bucuresti Ilfov
                ['judet_denumire' => 'Ilfov', 'judet_regiune_id'=> 8],
                ['judet_denumire' => 'Bucuresti', 'judet_regiune_id'=> 8]

            )
        );
    }
}
