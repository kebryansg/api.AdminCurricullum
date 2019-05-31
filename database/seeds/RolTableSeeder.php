<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('rol')->truncate();
        DB::table('rol')->insert([
            [
                'ID' => 1,
                'Descripcion' => 'Administrador',
                'Observacion' => 'Usuario con permisos de administrador',
                'Estado' => 'ACT',
            ],
            [
                'ID' => 2,
                'Descripcion' => 'Estandar',
                'Observacion' => 'Usuario con permisos estandar',
                'Estado' => 'ACT',
            ]
        ]);
    }
}
