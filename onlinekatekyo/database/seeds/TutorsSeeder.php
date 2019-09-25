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
            'rate' => 'Sクラス',
            'ac' => 'B大学',
            'time' => '金：17:00~',
            'fee' => 5000,
            'other' => "## 大学\n"
            ."hoge大学\n\n"
            ."## 指導可能時間\n"
            ."月曜日，17:00~\n\n"
            ."## 指導可能教科\n"
            ."### 中学\n"
            ."- 国語\n\n"
            ."### 高校\n"
            ."- なし\n\n"
            ."## 指導可能学年\n"
            ."- 中学受験（小4~6）\n"
            ."- 中学，高校の全学年\n\n"
            ."## 過去の指導実績\n"
            ."- 合格率100%\n\n"
            ."## 出身高校\n"
            ."- fuga高校\n\n"
            ."## 出身中学\n"
            ."- piyo中\n\n"
            ."など……\n"
        ]);
        DB::table('tutors')->insert([
            'name' => '増川弘明',
            'rate' => 'Sクラス',
            'ac' => 'U大学',
            'time' => '月：18:00~',
            'fee' => 5000,
            'other' => 'ギター・コーラス，最初はスタッフ的存在だったらしい'
        ]);
        DB::table('tutors')->insert([
            'name' => '直井由文',
            'rate' => 'Sクラス',
            'ac' => 'M大学',
            'time' => '水：18:00~',
            'fee' => 5000,
            'other' => 'ベース・コーラス，金髪担当でグッズもつくるよ'
        ]);
        DB::table('tutors')->insert([
            'name' => '升秀夫',
            'rate' => 'Sクラス',
            'ac' => 'P大学',
            'time' => '火：18:00~',
            'fee' => 5000,
            'other' => 'ドラムス・コーラス，ぽんつかで進行役してる'
        ]);
    }
}
