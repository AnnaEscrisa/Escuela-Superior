<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mensaje;
use App\Models\Noticia;
use App\Models\Profesor;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        /*
        Noticia::create([
            'titulo' => 'INSTALACION DE 120 PLACAS FOTOVOLTAICAS',
            'autor' => 'Administracion',
            'descripcion' => 'Nuestra responsabilidad como centro es adaptarnos, concienciar de los peligros del cambio climático y buscar las formas de reducir nuestro consumo y de ser sostenibles. ¿Y qué mejor forma de hacerlo que dando ejemplo? 

            Por ello, la Escuela de Estudios Superiores ha instalado 120 placas fotovoltaicas que nos ayudarán a ser un centro más sostenible y menos contaminante. Nuestro objetivo es el de aprovechar los recursos de los que disponemos para sumarnos a una transición ecológica que cada día es más necesaria.

            Aprovechando que el ODS (Objetivo de Desarrollo Sostenible) de Agenda 2030 que se trabajará este año en los centros de formacion de este año es la energía asequible y no contaminante, nuestro colegio ya ha dado el primer paso y hemos pasado de las palabras a los hechos, instalando este parque fotovoltaico que hará de nuestro centro, más que nunca, un colegio verde.',
            'fecha' => '17 de Septiembre',
            'etiquetas' => 'Ecologismo',
            'imagen'=> 'not1.jpg'
        ]);

        Noticia::create([
            'titulo' => 'ADMISIONES CURSO MEDIOAMBIENTAL 2022—23',
            'autor' => 'Administracion',
            'descripcion' => 'Abrimos el periodo de admisiones para los cursos on-line y presenciales de la especializacion Medio Ambiente.

            Áreas de Medio Ambiente, Energías renovables y Educación ambiental.
            
            No te quedes sin estudiar éste año, los cursos empiezan en noviembre 2022 ¡Date prisa!',
            'fecha' => '11 de Agosto',
            'etiquetas' => 'Cursos',
            'imagen'=> 'not2.jpg'
        ]);

        Noticia::create([
            'titulo' => 'JORNADAS ALIMENTACIÓN Y SALUD',
            'autor' => 'Departamento de Salud',
            'descripcion' => 'Organizamos un ciclo de 7 jornadas para la promoción y protección de la salud a través de la alimentación. Los temas tratados nos darán las claves para mejorar nuestra alimentación y adquirir hábitos de vida saludable.

            Cada jornada tendrá una duración de 6 horas, que se desarrollará en dos sesiones de tres horas, martes y jueves, en horario de 17 a 20h (horario español).
            
            Dirigido A:
            Profesionales de la salud y todas aquellas personas que se interesen por la alimentación y salud: técnicos en dietética y nutrición humana, auxiliares de enfermería, auxiliares de farmacia, cuidadores, técnicos en herbodietética, entrenadores, técnicos en educación infantil, psicólogos, terapeutas ocupacionales, cocineros. No es necesario tener estudios previos de dietética y nutrición.',
            'fecha' => '05 de Mayo',
            'etiquetas' => 'Salud',
            'imagen'=> 'not3.jpg'
        ]);

        Noticia::create([
            'titulo' => 'CURSOS FUNDAE PARA TRABAJADORES EN ACTIVO',
            'autor' => 'Administracion',
            'descripcion' => 'En EES queremos que todo el mundo tenga acceso a la mejor formación, porque una mejor formación repercute en nuestra sociedad con mejores profesionales. Es por ello que realizamos unos cursos bonificables a través de FUNDAE para que los trabajadores en activo puedan renovar y actualizar sus conocimientos para ejercer mejor, si cabe, su trabajo.

            Las empresas a través de FUNDAE pueden recuperar una parte del importe del curso.',
            'fecha' => '30 de Enero',
            'etiquetas' => 'Cursos',
            'imagen'=> 'not4.jpg'
        ]);

        */
        /*
        Mensaje::create([
            'NoticiaID'=>2,
            'Autor' => 'Marcos Jimenez',
            'Comentario' => 'Muy interesante e informativo',
            'Avatar' => 'avatar.png'
        ]);

        Mensaje::create([
            'NoticiaID'=>4,
            'Autor' => 'Sara Plaza',
            'Comentario' => 'Gracias por la informacion! Estare atenta a proximas convocatorias',
            'Avatar' => 'avatar.png'
        ]);

        Mensaje::create([
            'NoticiaID'=>4,
            'Autor' => 'Mario Pucel',
            'Comentario' => 'Ojala ofrecieran mas',
            'Avatar' => 'avatar.png'
        ]);

        Mensaje::create([
            'NoticiaID'=>3,
            'Autor' => 'Mario Pucel',
            'Comentario' => '',
            'Avatar' => 'avatar.png'
        ]);
        */

        Profesor::create([
            'nombre'=>'Pedro Ramiro',
            'def' => 'Jefe del departamento de Ciencias de la Ecologia',
            'imagen' => 'prof1'
        ]);

        Profesor::create([
            'nombre'=>'Margaret Dunst',
            'def' => 'Jefa del departamento de Economia Aplicada',
            'imagen' => 'prof2'
        ]);

        Profesor::create([
            'nombre'=>'Silwya Zoweriya',
            'def' => 'Jefa del departamento de Informatica y Comunicacion',
            'imagen' => 'prof3'
        ]);

        Profesor::create([
            'nombre'=>'Svetlana Lopez',
            'def' => 'Jefa del departamento de Nutricion',
            'imagen' => 'prof4'
        ]);

        Profesor::create([
            'nombre'=>'Adam Viggor',
            'def' => 'Jefe del departamento de Matematicas',
            'imagen' => 'prof5'
        ]);

        Profesor::create([
            'nombre'=>'Lidia Sanchez',
            'def' => 'Jefa del departamento de Arte e Historia',
            'imagen' => 'prof6'
        ]);

        Profesor::create([
            'nombre'=>'Lorena Pere',
            'def' => 'Jefa del departamento de Religion y Teologia',
            'imagen' => 'prof7'
        ]);

        Profesor::create([
            'nombre'=>'Sarah Lugen',
            'def' => 'Jefa del departamento de Musica',
            'imagen' => 'prof8'
        ]);
    }
}
