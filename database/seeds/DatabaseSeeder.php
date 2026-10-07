<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {public function run(){
foreach(['Personal','Trabajo','Escuela'] as $name){\App\Category::firstOrCreate(['name'=>$name]);}
\App\Note::firstOrCreate(['title'=>'Preparar consultas de la API'],['author'=>'Emilio Garza Vargas','noted_at'=>'2026-10-07 14:00:00','body'=>'Revisar los métodos GET, POST, PUT y DELETE. Guardar las respuestas JSON y las capturas de Postman.','category_id'=>3]);
\App\Note::firstOrCreate(['title'=>'Organizar la semana'],['author'=>'Emilio Garza Vargas','noted_at'=>'2026-10-07 12:30:00','body'=>'Reservar tiempo para estudiar y descansar.','category_id'=>1]);
}}
