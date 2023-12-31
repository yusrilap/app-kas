<?php

namespace Database\Seeders;

use App\Models\SchoolMajor;
use Illuminate\Database\Seeder;

class SchoolMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            0 => [
                'name' => 'Teknik Komputer dan Jaringan',
                'abbreviated_word' => 'TKJ'
            ],
            1 => [
                'name' => 'Rekayasa Perangkat Lunak',
                'abbreviated_word' => 'RPL'
            ],
            2 => [
                'name' => 'Multimedia',
                'abbreviated_word' => 'MM'
            ],
            3 => [
                'name' => 'Administrasi Perkantoran',
                'abbreviated_word' => 'AP'
            ],
            4 => [
                'name' => 'Pemasaran',
                'abbreviated_word' => 'PS'
            ],
            5 => [
                'name' => 'Akuntansi',
                'abbreviated_word' => 'AK'
            ]
        ];

        foreach ($majors as $major) {
            SchoolMajor::create([
                'name' => $major['name'],
                'abbreviated_word' => $major['abbreviated_word']
            ]);
        }
    }
}