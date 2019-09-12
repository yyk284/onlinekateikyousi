<?php

use Illuminate\Database\Seeder;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutors')->insert([
            'name' => 'black',
            'body' => 'ラクロス部キャプテン'
        ]);
        DB::table('tutors')->insert([
            'name' => 'white',
            'body' => '科学部部長'
        ]);
    }
}
