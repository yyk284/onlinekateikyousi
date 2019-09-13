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
            'name' => '藤原基央',
            'ac' => 'B大学',
            'time' => '金：17:00~',
            'fee' => 5000,
            'other' => 'ギター・ボーカル，作詞作曲もしてて絵が得意'
        ]);
        DB::table('tutors')->insert([
            'name' => '増川弘明',
            'ac' => 'U大学',
            'time' => '月：18:00~',
            'fee' => 5000,
            'other' => 'ギター・コーラス，最初はスタッフ的存在だったらしい'
        ]);
        DB::table('tutors')->insert([
            'name' => '直井由文',
            'ac' => 'M大学',
            'time' => '水：18:00~',
            'fee' => 5000,
            'other' => 'ベース・コーラス，金髪担当でグッズもつくるよ'
        ]);
        DB::table('tutors')->insert([
            'name' => '升秀夫',
            'ac' => 'P大学',
            'time' => '火：18:00~',
            'fee' => 5000,
            'other' => 'ドラムス・コーラス，ぽんつかで進行役してる'
        ]);
    }
}
