<x-app-layout>
   
    <h1>aqui encontraras todo el portafolio de  nuestros servicios </h1>

    <div class="">
        <h2 class="pt-10 text-5xl text-black text-center uppercase">Nuestros proyectos realizados</h2>
        <div class="grid grid-cols 1 md:grid-cols-2 xl:grid-cols-3 gap-4 mt-10 pb-10 justify-items-center">
            @foreach ($servicios as $servicio)
                <div class="card w- 40 bg-base-100 shadow-xl">
                    {{-- Aquí, desde donde inicia figure hasta donde termina, solo tendría que cambiar el url --}}
                    <figure>
                        <img src="https://s1.significados.com/foto/software-og.jpg" alt="Shoes" />
                    </figure>

                    <div class="card-body items-center text-center">
                    <h2 class="card-title">{{ $servicio['nombre'] }}</h2>
                    <p>{{ $servicio['descripcion'] }}</p>
                    
                    </div>
                </div>
            @endforeach
        </div>
    </div>
 
 </x-app-layout>