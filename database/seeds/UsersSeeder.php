<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Esto es igual a un insert en  SQL, el primer campo es para el nombre de la tabla
        //El segundo es el nombre de la columna y el tercero es el valor a insertar

        DB::table('users')->insert([
            'name' => 'Rafael',
            'email' => 'rafa_primo@hotmail.com',
            'password' => bcrypt('GR4N4DERO'),
        ]);

        //para correrlo, en la terminal se ejcecuta "php artisan db:seed"
        //para ejecutar un seeder en especifico "php artisan db:seed --class=UsersSeeder"
        //Para vaciar una tabla remplazar el metodo de llenado con "DB::table('users')->truncate();"
    }
}
