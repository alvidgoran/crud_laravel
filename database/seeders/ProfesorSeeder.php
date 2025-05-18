<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor; // <-- ESTA ES LA LÍNEA QUE FALTABA

class ProfesorSeeder extends Seeder
{
    public function run(): void
    {
        $profesores = [



    ['nombre' => 'Ana López', 'correo' => 'ana.lopez@example.com', 'telefono' => '3011111111', 'especialidad' => 'Matemáticas'],
    ['nombre' => 'Carlos Ramírez', 'correo' => 'carlos.ramirez@example.com', 'telefono' => '3022222222', 'especialidad' => 'Historia'],
    ['nombre' => 'Laura Gómez', 'correo' => 'laura.gomez@example.com', 'telefono' => '3033333333', 'especialidad' => 'Física'],
    ['nombre' => 'Andrés Díaz', 'correo' => 'andres.diaz@example.com', 'telefono' => '3044444444', 'especialidad' => 'Química'],
    ['nombre' => 'María Torres', 'correo' => 'maria.torres@example.com', 'telefono' => '3055555555', 'especialidad' => 'Inglés'],
    ['nombre' => 'Luis Sánchez', 'correo' => 'luis.sanchez@example.com', 'telefono' => '3066666666', 'especialidad' => 'Educación Física'],
    ['nombre' => 'Elena Castro', 'correo' => 'elena.castro@example.com', 'telefono' => '3077777777', 'especialidad' => 'Biología'],
    ['nombre' => 'Pablo Mejía', 'correo' => 'pablo.mejia@example.com', 'telefono' => '3088888888', 'especialidad' => 'Geografía'],
    ['nombre' => 'Natalia Vargas', 'correo' => 'natalia.vargas@example.com', 'telefono' => '3099999999', 'especialidad' => 'Arte'],
    ['nombre' => 'Jorge Ríos', 'correo' => 'jorge.rios@example.com', 'telefono' => '3000000000', 'especialidad' => 'Tecnología'],
    ['nombre' => 'Camila Herrera', 'correo' => 'camila.herrera@example.com', 'telefono' => '3111111111', 'especialidad' => 'Informática'],
    ['nombre' => 'Santiago León', 'correo' => 'santiago.leon@example.com', 'telefono' => '3122222222', 'especialidad' => 'Matemáticas'],
    ['nombre' => 'Diana Álvarez', 'correo' => 'diana.alvarez@example.com', 'telefono' => '3133333333', 'especialidad' => 'Literatura'],
    ['nombre' => 'Daniel Martínez', 'correo' => 'daniel.martinez@example.com', 'telefono' => '3144444444', 'especialidad' => 'Física'],
    ['nombre' => 'Isabela Ruiz', 'correo' => 'isabela.ruiz@example.com', 'telefono' => '3155555555', 'especialidad' => 'Química'],
    ['nombre' => 'Ricardo Molina', 'correo' => 'ricardo.molina@example.com', 'telefono' => '3166666666', 'especialidad' => 'Educación Artística'],
    ['nombre' => 'Valentina Nieto', 'correo' => 'valentina.nieto@example.com', 'telefono' => '3177777777', 'especialidad' => 'Música'],
    ['nombre' => 'Tomás Ortega', 'correo' => 'tomas.ortega@example.com', 'telefono' => '3188888888', 'especialidad' => 'Ciencias Sociales'],
    ['nombre' => 'Juliana Acosta', 'correo' => 'juliana.acosta@example.com', 'telefono' => '3199999999', 'especialidad' => 'Religión'],
    ['nombre' => 'Emilio Cárdenas', 'correo' => 'emilio.cardenas@example.com', 'telefono' => '3200000000', 'especialidad' => 'Filosofía'],



        ];

        foreach ($profesores as $profesor) {
            Profesor::create($profesor);
        }
    }
}
