<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver alumno
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                ID del alumno
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $alumno->id }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Nombre
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $alumno->nombre }}
                            </dd>
                        </div>
                        {{-- <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Criterios de evaluacion
                            </dt>
                            @if ($alumno->nota()->exists())
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700
                                            dark:text-gray-400>
                                            <tr class="-8">

                                                <th scope="col" class="px-6 py-3">Criterio</th>
                                                <th scope="col" class="px-6 py-3">Nota</th>
                                        </thead>
                                        </tr>
                                        @foreach ($alumno->nota as $notas)
                                            <tr
                                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                                                <td class="px-6 py-4">

                                                    {{ $notas->ccee->ce }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $notas->nota }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <br>
                            @endif --}}
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
