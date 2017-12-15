<?php
use Migrations\AbstractMigration;

class InsertDatos extends AbstractMigration
{
    
    public function change()
    {
                // inserting
        $Especialidades = [
            [
                'id'=> 1, 'nombre'  => 'Medicina General', 'descripcion'=> '', 'created'=> '2017-11-21 02:20:32', 'modified'=> '2017-11-21 02:20:32', 'estado' => '1'
            ],
            [
                'id'=> 2, 'nombre'=> 'Pediatria',  'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 3, 'nombre'  => 'Cirugia General', 'descripcion'=> '', 'created'=> '2017-11-21 05:37:33', 'modified'=>  '2017-11-21 05:37:33', 'estado' => '1'
            ],
            [
                'id'=> 4, 'nombre'  => 'Alergia E Inmunología', 'descripcion'=> '', 'created'=> '2017-11-22 22:44:23', 'modified'=>  '2017-11-22 22:44:23', 'estado' => '1'
            ],
            [
                'id'=> 5, 'nombre'  => 'Anestesiología', 'descripcion'=> '', 'created'=>  '2017-11-22 22:44:47', 'modified'=> '2017-11-22 22:44:47', 'estado' => '1'
            ],
            [
                'id'=> 6, 'nombre'  => 'Cardiología Intervencionista', 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 7, 'nombre'  => 'Cardiología Pediatrica' , 'descripcion'=> '', 'created'=> '2017-11-21 06:37:18', 'modified'=>  '2017-11-21 06:37:48', 'estado' => '1'
            ],
            [
                'id'=> 8, 'nombre'  => 'Cirugía Oncológica' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 9, 'nombre'  => 'Cirugía Plástica' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 10, 'nombre'  => 'Cirugía Toraxica' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 11, 'nombre'  => 'Densitometria' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 12, 'nombre'  => 'Dermatología' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 13, 'nombre'  => 'Emergencia' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ],
            [
                'id'=> 14, 'nombre'  => 'Endocrinología' , 'descripcion'=> '', 'created'=> '2017-11-21 05:37:18', 'modified'=>  '2017-11-21 05:37:18', 'estado' => '1'
            ]
        ];

        $this->insert('especialidads', $Especialidades);
 
        $Medicos = [
            [
             'codigo'=> 'cod0001' , 'nombre'=> 'Malco Marco' , 'apaterno'=> 'Minaya' , 'amaterno'=> 'Pumaricra' , 'nacimiento'=> '1994-01-28' , 'sexo'=> 'M'  , 'estado'=> 1 , 'dni'=>'71970942' , 'telefono'=> '921299504' , 'direccion'=>'San luis' , 'email'=> 'malco@gmailcom' , 'especialidad_id'=> 1 , 'created'=> '2017-11-21 16:24:32'  , 'modified'=>'2017-11-23 15:37:55'
            ],
            [
             'codigo'=> 'cod0002' , 'nombre'=> 'Nicki Nik' , 'apaterno'=> 'Polo' , 'amaterno'=> 'Zavala' , 'nacimiento'=> '1995-01-28' , 'sexo'=> 'M'  , 'estado'=> 1 , 'dni'=>'71970238' , 'telefono'=> '924598964' , 'direccion'=>'Nuevo chimbote' , 'email'=> 'micj@gmailcom' , 'especialidad_id'=> 2 , 'created'=> '2017-11-21 11:23:32'  , 'modified'=>'2017-11-23 15:37:55'
            ],
        ];

        $this->insert('medicos', $Medicos);

        $Users=[
            ['username'=> 'malco' , 'password'=> '$2y$10$BD4CpmYAfXsmqv.9Ou5.NuZKvJVILSI6KzXCVatAJHDFwxMpi6Ezi', 'tipodoc'=> 'DNI' , 'role'=>'Admin' , 'created'=> '2017-11-22 11:23:32'  , 'modified'=>'2017-11-23 15:37:55' 
            ]
        ];

        $this->insert('users', $Users);
    }
}
/*
drop table users;
drop table citas;
drop table medicos;
drop table especialidads;
drop table pacientes;
drop table aseguradoras;
drop table phinxlog;
*/