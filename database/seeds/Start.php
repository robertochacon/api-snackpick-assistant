<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Start extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['entity_id' => 1,'name' => 'Leuesky V. U.','identification' => '06800547348','password' => bcrypt('lcr123'),'role' => 'admin'],
            ['entity_id' => 1,'name' => 'Angelo C. R.','identification' => '06800315365','password' => bcrypt('lcr123'),'role' => 'admin'],
            ['entity_id' => 1,'name' => 'Administrador','identification' => '12345','password' => bcrypt('12345'),'role' => 'admin'],
            ['entity_id' => 1,'name' => 'Super admin','identification' => '123456','password' => bcrypt('123456'),'role' => 'super_admin']
        ]);

        DB::table('entities')->insert([
            'user_id' => 1,
            'name' => 'Start',
            'description' => 'start description',
            'windows' => '5'
        ]);

        DB::table('services')->insert([
            ['user_id' => 1,'entity_id' => 1,'code' => 'HEM','name' => 'HEMOGRAMA','description' => 'HEMOGRAMA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'EO','name' => 'EXAMEN DE ORINA','description' => 'EXAMEN DE ORINA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'COP','name' => 'COPROLOGICO','description' => 'PCOPROLOGICO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'GLI','name' => 'GLICEMIA','description' => 'PGLICEMIA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'PL','name' => 'PERFIL LIPIDICO','description' => 'PERFIL LIPIDICO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'CTS','name' => 'COLESTEROL TOTAL SOLO','description' => 'COLESTEROL TOTAL SOLO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TRI','name' => 'TRIGLICERIDO','description' => 'TRIGLICERIDO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'ASO','name' => 'ASO','description' => 'ASO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'FR','name' => 'FACTOR REUMATOIDE','description' => 'FACTOR REUMATOIDE','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'PCR','name' => 'PROTEINA C REACTIVA PCR','description' => 'PROTEINA C REACTIVA PCR','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'AU','name' => 'ACIDO URICO','description' => 'ACIDO URICO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'FAL','name' => 'FALCEMIA','description' => 'FALCEMIA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'EG','name' => 'HEMOGLOBINA GLUCOSILADA','description' => 'HEMOGLOBINA GLUCOSILADA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TP','name' => 'TP','description' => 'TP','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TPT','name' => 'TPT','description' => 'TPT','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TOX','name' => 'TOXOPLASMOSIS','description' => 'TOXOPLASMOSIS','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'AC19','name' => 'ANTIGENOS COVID-19','description' => 'ANTIGENOS COVID-19','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TC','name' => 'T. COAGULACION','description' => 'T. COAGULACION','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TS','name' => 'T. SANGRIA','description' => 'T. SANGRIA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'UREA','name' => 'UREA','description' => 'UREA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'CREA','name' => 'CREATININA','description' => 'CREATININA','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'VDRL','name' => 'VDRL','description' => 'VDRL','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'HB','name' => 'HEPATITIS B','description' => 'HEPATITIS B','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'HC','name' => 'HEPATITIS C','description' => 'HEPATITIS C','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'VIH','name' => 'VIH','description' => 'VIH','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TIPI','name' => 'TIPIFICACION','description' => 'TIPIFICACION','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'PSAT','name' => 'PSA TOTAL','description' => 'PSA TOTAL','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'ERIT','name' => 'ERITROSEDIMENTACION','description' => 'ERITROSEDIMENTACION','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'HCG','name' => 'HCG','description' => 'HCG','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TGO','name' => 'TGO','description' => 'TGO','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'TGP','name' => 'TGP','description' => 'TGP','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'BILI','name' => 'BILIRUBINAS','description' => 'BILIRUBINAS','color' => 'primary','window' => '3'],
            ['user_id' => 1,'entity_id' => 1,'code' => 'AF','name' => 'ANTIGENOS  FEBRILES','description' => 'ANTIGENOS  FEBRILES','color' => 'primary','window' => '3']
          ]);

    }
}
