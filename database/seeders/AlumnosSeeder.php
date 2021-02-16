<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $alumno1 = new Alumno();
        $alumno1->Nombre = "Ankush";
        $alumno1->Apellidos	 = "Starr";
        $alumno1->DNI = "23423432F";
        $alumno1->save();
        
        
        $alumno2 = new Alumno();
        $alumno2->Nombre = "Anna";
        $alumno2->Apellidos	 = "Marco";
        $alumno2->DNI = "87482974F";
        $alumno2->save();
        
        $alumno3 = new Alumno();
        $alumno3->Nombre = "Hola";
        $alumno3->Apellidos	 = "Mundo";
        $alumno3->DNI = "234232245F";
        $alumno3->save();
    }
}
