<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidates = [
            [
                'no' => 1,
                'name' => 'Francis Lebita',
                'dept' => 'CCJ',
                'category' => 'male'
            ],
            [
                'no' => 2,
                'name' => 'Narciso Silagan',
                'dept' => 'CABM-H',
                'category' => 'male'
            ],
            [
                'no' => 3,
                'name' => 'John Love Guerrero',
                'dept' => 'CON',
                'category' => 'male'
            ],
            [
                'no' => 4,
                'name' => 'John Marck Arado',
                'dept' => 'CABM-B',
                'category' => 'male'
            ],
            [
                'no' => 5,
                'name' => 'Kobe Bryant Orfano',
                'dept' => 'COE',
                'category' => 'male'
            ],
            [
                'no' => 6,
                'name' => 'CJ Batausa',
                'dept' => 'CAST',
                'category' => 'male'
            ],
            [
                'no' => 1,
                'name' => 'Rayhan Bint Razul',
                'dept' => 'CCJ',
                'category' => 'female'
            ],
            [
                'no' => 2,
                'name' => 'Mabeth Marcojos',
                'dept' => 'CABM-H',
                'category' => 'female'
            ],
            [
                'no' => 3,
                'name' => 'Cheska Manigo',
                'dept' => 'CON',
                'category' => 'female'
            ],
            [
                'no' => 4,
                'name' => 'Edchel Corage',
                'dept' => 'CABM-B',
                'category' => 'female'
            ],
            [
                'no' => 5,
                'name' => 'Liahona Lane Lorzano',
                'dept' => 'COE',
                'category' => 'female'
            ],
            [
                'no' => 6,
                'name' => 'Honey Joyce Valleser',
                'dept' => 'CAST',
                'category' => 'female'
            ],
        ];

        foreach ($candidates as $c) {
            App\Candidate::create($c);
        }
    }
}
