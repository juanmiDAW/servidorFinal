<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver libro
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Título
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $libro->titulo }}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Autor
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $libro->autor }}
                            </dd>
                        </div>
                    </dl>
                    @if ($libro->ejemplares()->exists())
                        <br>
                        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Ejemplares:</h2>
                        <ol class="max-w-screen-2xl space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                            @foreach ($libro->ejemplares as $ejemplar)
                            <li>
                                <span class="font-semibold text-gray-900 dark:text-white">{{$ejemplar->codigo}}</span> --- Estado:
                                @if ($prestao = $ejemplar->clientes()->wherePivotNull('fecha_hora_devolucion')->first())
                                    <span class="font-semibold text-gray-900 dark:text-white">{{'Prestado'}}</span> --- Fecha Préstamo:
                                    <span class="font-semibold text-gray-900 dark:text-white">{{$fechilla = $prestao->pivot->fecha_hora}}</span> --- Pasado de fecha:
                                    {{-- {{dd()}} --}}
                                    @if (((new Datetime($fechilla))->diff(now())->days) > 30 )
                                        <span class="font-semibold text-gray-900 dark:text-white">{{ 'Si' }}</span>
                                    @else
                                        <span class="font-semibold text-gray-900 dark:text-white">{{ 'No' }}</span>
                                    @endif
                                @else
                                    <span class="font-semibold text-gray-900 dark:text-white">{{'Se encuentra disponible'}}</span>
                                @endif
                            </li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
