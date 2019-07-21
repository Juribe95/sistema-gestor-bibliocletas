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


       DB::table('users')->insert([
            'rut' => 'admin',
            'name' => 'admin',
            'apellido_paterno' => 'admin',
            'apellido_materno' => 'admin',
            'email' => 'admin@admin.cl',
            'password' => '$2y$10$oOE/WBoqe262WpiXv69vEOUdqa2DQuUDJwye1VbnwcLBd2Z9D1Eu2',//la pass es admin
            'telefono' => '123456789',
            'id_rol' => '1'
        ]);
    }
}
