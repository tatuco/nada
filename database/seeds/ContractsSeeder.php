<?php

use Illuminate\Database\Seeder;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //NEW-----------------------------------------------
        DB::table('contracts')->insert([
            'cod_contract' => '4540002894',
            'description' => ' MA1020035916/10 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE CHANCADO PRIMARIO Y PLANTA CHANCADO SECUNDARIO Y TERCIARIO.',
            'start_date' => '2018/04/27',
            'end_date' => '2021/06/30',
            'endowment' => 30,
            'company_id'=> 930770000,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '013426315-6',
            'admec_aux_id'=> '016051322-5',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540002870',
            'description' => ' MA1020035916/30 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE FLOTACIÓN Y RELAVES.',
            'start_date' => '2018/04/27',
            'end_date' => '2021/06/30',
            'endowment' => 30,
            'company_id'=> 761325930,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '014457421-4',
            'admec_aux_id'=> '000000000-0',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540002892',
            'description' => '" MA1020035916/20-40 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO."',
            'start_date' => '2018/04/27',
            'end_date' => '2021/06/30',
            'endowment' => 50,
            'company_id'=> 772762801,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '007367179-5',
            'admec_aux_id'=> '000000000-0',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540003012',
            'description' => '" MA1020035916/20-40 SERVICIOS DE PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO."',
            'start_date' => '2018/04/27',
            'end_date' => '2021/06/30',
            'endowment' => 50,
            'company_id'=> 24356393,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '007367179-5',
            'admec_aux_id'=> '000000000-0',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540003013',
            'description' => '" MA1020035916/20-40 SERVICIOS DE PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO."',
            'start_date' => '2018/04/27',
            'end_date' => '2021/06/30',
            'endowment' => 50,
            'company_id'=> 93534124214,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '007367179-5',
            'admec_aux_id'=> '000000000-0',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
