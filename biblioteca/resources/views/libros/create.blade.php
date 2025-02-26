<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear libro
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid items-center">
            <form method="POST" action="{{ route('libros.store') }}" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <x-input-label for="titulo" class="block mb-2 text-sm font-medium text-gray-900">
                        Titulo
                    </x-input-label>
                    <x-text-input name="titulo" type="text" id="titulo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        :value="old('titulo')" />
                    <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        
                        <x-input-label for="autor" class="block mb-2 text-sm font-medium text-gray-900">
                            Autor
                        </x-input-label>
                        <x-text-input name="autor" type="text" id="autor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            :value="old('autor')" />
                        <x-input-error :messages="$errors->get('autor')" class="mt-2" />
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Crear
                </button>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
