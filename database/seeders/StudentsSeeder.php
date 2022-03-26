<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nombre' => 'Jona',
            'matricula' => 17050547,
            'semestre' => 10,
            'especialidad' => 'Sistemas',
        ]);

        DB::table('students')->insert([
            'nombre' => 'Carlitos',
            'matricula' => 16050508,
            'semestre' => 10,
            'especialidad' => 'Sistemas',
        ]);

        DB::table('students')->insert([
            'nombre' => 'Milka',
            'matricula' => 17050726,
            'semestre' => 8,
            'especialidad' => 'Gestión',
        ]);
    }
}
