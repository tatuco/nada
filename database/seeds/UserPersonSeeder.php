<?php

use Illuminate\Database\Seeder;

class UserPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_user')->insert([
            'user_id' => 1,
            'person_id' => '017387633-5',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
