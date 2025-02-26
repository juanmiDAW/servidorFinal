<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ejemplares
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID Ejemplar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ID Libro
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Titulo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Autor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Estado
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ejemplares as $ejemplar)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $ejemplar->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $libro->id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $libro->titulo }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $libro->autor }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @foreach ($ejemplar->clientes as $cliente)
                                                <!-- Acceder a la fecha de devolución desde el pivot -->
                                                @if ($cliente->pivot->fecha_hora_devolucion)
                                                    {{ $cliente->pivot->fecha_hora_devolucion }},
                                                    Disponible
                                                @else
                                                    No devuelto
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>


    </div>
</x-app-layout>
