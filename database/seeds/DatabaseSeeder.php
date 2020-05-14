<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //el metodo truncate sirve ara elminar los regustros de las tablas
        //que decalremos en este array
        $this->TruncateTable(['users','failed_jobs']);



        $this->call(UsersSeeder::class);
        // aqui escrivimos los seeders que queremos ejecutar);
    }

    private function TruncateTable(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        
        foreach ($tables as $table){       //
            DB::table($table)->truncate(); //ejecutams el metodo de arriva
        }                                  //
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        
    }
}

