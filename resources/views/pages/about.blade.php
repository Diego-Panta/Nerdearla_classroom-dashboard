@extends('layouts.default')

@section('title', 'Acerca de Nosotros')

@section('content')
<div class="min-h-screen bg-theme-seasalt">
    <section class="bg-gradient-to-r from-theme-uranian-blue/20 to-theme-jade/20 py-16 border-b border-theme-uranian-blue/30">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-theme-onyx mb-4">Nuestro Equipo</h1>
                <p class="text-lg md:text-xl text-theme-onyx opacity-90 leading-relaxed">
                    Conoce al equipo detrás de nuestra integración con Google Classroom. 
                    Juntos creamos soluciones educativas innovadoras.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <x-team-member 
                    name="Nilton Ramos Encarnacion"
                    role="Desarrollador FullStack"
                    description="Especialista en arquitectura de sistemas y integración de APIs. Lidera el desarrollo de nuestra conexión con Google Classroom."
                    color="uranian-blue"
                    github="https://github.com/NiltonRamosE"
                    linkedin="https://linkedin.com/in/niltonramosencarnacion"
                    portfolio="https://niltonramosencarnacion.vercel.app"
                />

                <x-team-member 
                    name="Jose Diego Panta Piscoche"
                    role="Desarrollador Backend"
                    description="Experto en experiencia de usuario e interfaces educativas. Diseña las herramientas que hacen simple la integración."
                    color="xanthous"
                    github="https://github.com/Diego-Panta"
                    linkedin="https://linkedin.com/in/niltonramosencarnacion"
                />

                <x-team-member 
                    name="José Vásquez Ramos"
                    role="Especialista en Educación"
                    description="Conecta la tecnología con las necesidades reales del aula. Asegura que nuestra solución sea pedagógicamente efectiva."
                    color="jade"
                    github="https://github.com/Diego-Panta"
                    linkedin="https://linkedin.com/in/niltonramosencarnacion"
                />

            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-t border-theme-uranian-blue/20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-theme-uranian-blue/20 mb-6">
                    <svg class="w-8 h-8 text-theme-jade" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-theme-onyx mb-6">Nuestra Misión Educativa</h2>
                <p class="text-lg text-theme-onyx opacity-80 leading-relaxed mb-8">
                    Creemos en el poder de la tecnología para transformar la educación. Nuestra integración con Google Classroom 
                    está diseñada para simplificar el trabajo de educadores y enriquecer el aprendizaje de los estudiantes, 
                    conectando herramientas de manera intuitiva y efectiva.
                </p>
                <div class="flex justify-center space-x-4">
                    <span class="inline-block w-12 h-1 bg-theme-jade"></span>
                    <span class="inline-block w-12 h-1 bg-theme-xanthous"></span>
                    <span class="inline-block w-12 h-1 bg-theme-uranian-blue"></span>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection