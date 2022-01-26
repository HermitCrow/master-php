<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fruta')->insert([
            'nombre'=> 'Naranja',
            'descripcion'=> 'Deliciosa y jugosa',
            'precio'=> 25,
            'fecha'=> date('Y-m-d'),
        ]);
        $this->command->info('El dato se a inserdato Correctamente.');
        
    }
}
