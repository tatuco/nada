<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => '000-000-000',
            'name' => 'Company Test',
            'description' => 'test company',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        //NEW------------------------------------------
        DB::table('companies')->insert([
            'id' => '930770000',
            'logo' => '',
            'slogan' => '',
            'name' => 'METSO CHILE SPA',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('companies')->insert([
            'id' => '761325930',
            'logo' => '',
            'slogan' => '',
            'name' => 'MSH SERVICIOS A LA MINERIA SPA',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('companies')->insert([
            'id' => '772762801',
            'logo' => '',
            'slogan' => '',
            'name' => 'INDUSTRIAL SUPPORT COMPANY LTDA.',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('companies')->insert([
            'id' => '24356393',
            'logo' => '',
            'slogan' => '',
            'name' => 'DEVELOPMENT LUIS RAMIREZ CA.',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('companies')->insert([
            'id' => '93534124214',
            'logo' => '',
            'slogan' => '',
            'name' => 'ZIPPYTTECHA.',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
