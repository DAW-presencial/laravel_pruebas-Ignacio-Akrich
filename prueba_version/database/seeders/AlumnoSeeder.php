<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import model Alumno
use App\Models\Alumno;
//impot el DB
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Eloquent
        $alumno = new Alumno;

        $alumno->name = 'Juan';
        $alumno->surname = 'Perez';
        $alumno->birthdate = '2000-01-01';
        $alumno->subjects = json_encode(['Math', 'Physics', 'English']);
        $alumno->gender = 'male';
        $alumno->description = 'Su comportamiento es ejemplar';
        $alumno->repeater = false;
        $alumno->user_id = 1;
        $alumno->save();

        //QueryBuilder
        DB::table('alumnos')->insert([
            'name' => 'Juana',
            'surname' => 'Perez',
            'birthdate' => '2000-01-01',
            'subjects' => json_encode(['Math', 'Physics', 'Spanish']),
            'gender' => 'female',
            'description' => 'Alumna traviesa',
            'repeater' => true,
            'user_id' => 1
        ]);

    }
}
