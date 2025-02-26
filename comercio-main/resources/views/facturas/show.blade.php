<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver factura
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Número
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $factura->numero }}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Fecha
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $factura->created_at }}
                            </dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Usuario
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $factura->user->name }}
                            </dd>
                        </div>
                    </dl>
                    <br>
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Compra:</h2>
                    <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                        @foreach ($factura->articulos as $articulo)
                        <li>
                            <span class="font-semibold text-gray-900 dark:text-white">{{$articulo->denominacion}}</span> --- Precio/unidad:
                            <span class="font-semibold text-gray-900 dark:text-white">{{$articulo->precio}}€</span> --- Cantidad:
                            <span class="font-semibold text-gray-900 dark:text-white">{{$articulo->pivot->cantidad}}</span>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
