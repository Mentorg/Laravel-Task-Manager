<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'id' => '0',
                'title' => 'Përditësimi i sistemit të sigurisë',
                'description' => "Kryeni një përditësim të menjëhershëm të sistemit të sigurisë për të mbyllur dobësitë e njohura. Ky përditësim është thelbësor për të mbrojtur të dhënat e klientëve dhe për të parandaluar mundësitë e sulmeve kibernetikë.",
                'status' => false,
                'priority' => 1,
                'user_id' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'id' => '1',
                'title' => 'Rishikimi i raporteve të shitjeve',
                'description' => "Analizoni dhe rishikoni raportet mujore të shitjeve për të identifikuar trendet dhe mundësitë për përmirësimin e performancës. Kjo është e rëndësishme për të siguruar që ekipi të qëndrojë në rrugën e duhur, por mund të bëhet pas përditësimit të sistemit të sigurisë.",
                'status' => false,
                'priority' => 2,
                'user_id' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'id' => '2',
                'title' => 'Përmirësimi i dizajnit të faqes së internetit',
                'description' => "Puna për të modernizuar dhe përmirësuar dizajnin e faqes së internetit është e rëndësishme, por mund të shtyhet për një periudhë të mëvonshme, pasi ka përparësi më të ulët krahasuar me detyrat urgjente.",
                'status' => true,
                'priority' => 3,
                'user_id' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'id' => '3',
                'title' => 'Rregullimi i shërbimeve të serverit',
                'description' => "Shërbimi i serverit është aktualisht i pamundur për t'u përdorur për disa përdorues. Ky problem kërkon një ndërhyrje urgjente për të rikthyer funksionimin normal të sistemit. Ky është një prioritet maksimal, pasi ndikon në operacionet e përditshme.",
                'status' => false,
                'priority' => 1,
                'user_id' => 1,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'id' => '4',
                'title' => 'Përmirësimi i raportit të marketingut',
                'description' => "Rishikoni dhe përmirësoni raportin e marketingut për tremujorin e fundit. Dërgimi i këtij raporti për menaxhmentin është i rëndësishëm, por mund të bëhet pas zgjidhjes së problemeve teknike më urgjente.",
                'status' => false,
                'priority' => 2,
                'user_id' => 1,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'id' => '5',
                'title' => 'Organizo një takim ekipor për trajnimin',
                'description' => "Planifikoni një takim ekipor për të diskutuar mundësitë e trajnimeve dhe zhvillimeve të ardhshme. Ky është një detyrë me prioritet të ulët dhe mund të shtyhet deri pas përfundimit të angazhimeve më të rëndësishme.",
                'status' => true,
                'priority' => 3,
                'user_id' => 1,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]
        ]);
    }
}
