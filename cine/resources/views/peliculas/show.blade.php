<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver pelicula
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                ID pelicula
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $pelicula->id }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Titulo
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $pelicula->titulo }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Proyecciones Totales
                            </dt>
                            @php
                                $nProyecciones = 0;
                            @endphp

                            @foreach ($pelicula->proyecciones as $peliculas)
                                {{--Obtenemos las proyecciones de las peliculas--}}
                                @php
                                    $nProyecciones += $peliculas->entradas->count(); //cuenta la cantidad de entradas de la proyeccion
                                @endphp
                            @endforeach

                            {{ $nProyecciones }}
                            @php
                                $nProyecciones = 0; //reseteo de variable
                            @endphp
                            </dd>
                        </div>
                        <div class="mt-6 text-center">
                            <a href="{{ route('peliculas.edit', ['pelicula' => $pelicula]) }}"  {{--se puede pasar solo $pelicula, cuando es mas de un parametro pasar como array asociativo--}}
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Modificar
                            </a>
                        </div>

                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
