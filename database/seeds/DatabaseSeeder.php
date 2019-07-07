<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('rols')->insert([
            'nombre_rol' => 'Administrador'
        ]);

       DB::table('rols')->insert([
            'nombre_rol' => 'Voluntario'
        ]);

       DB::table('rols')->insert([
            'nombre_rol' => 'Beneficiario'
        ]);

       DB::table('estados')->insert([
            'nombre_estado' => 'Disponible'
        ]);
       DB::table('estados')->insert([
            'nombre_estado' => 'Prestado'
        ]);
    }
}
