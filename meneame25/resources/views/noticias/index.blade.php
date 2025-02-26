<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Noticias
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-x-20">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Titulo
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Entradilla
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Imagen
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Meneos
                                        </th>
                                        

                                </thead>
                                <tbody>
                                    @foreach ($noticias as $noticia)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $noticia->id }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{-- <a href="{{ route('alumnos.show', $noticia) }}" --}}
                                                    {{-- class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> --}}
                                                    {{ $noticia->titulo }}
                                                {{-- </a> --}}
                                            </td>
                                            
                                            <td class="px-6 py-4">
                                                {{ $noticia->entradilla }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <img src="{{ $noticia->imagen }}" alt="" class="w-20 h-20">
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $noticia->meneos }}
                                            </td>
                                        
                                            {{-- <td class="px-6 py-4">
                                                <a href="{{ route('alumnos.edit', $alumno) }}"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Editar alumno
                                                </a>
                                            </td> --}}
                                            {{-- <td class="px-6 py-4">
                                                <form method="POST" action="{{ route('alumnos.destroy', $alumno) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('alumnos.destroy', $alumnos) }}"
                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
                                                        onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                                                        Eliminar
                                                    </a> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-6 text-center">
                            <a href="{{ route('noticias.create') }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Crear noticia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>