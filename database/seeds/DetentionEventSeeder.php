<?php

use Illuminate\Database\Seeder;

class DetentionEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detentionevents')->insert([
            'name' => '',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
