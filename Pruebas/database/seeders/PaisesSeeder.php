<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    insertar un archivo paises.sql
    $sql = database_path('paises.sql');
    DB::unprepared(file_get_contents($sql));
    }

    
}
