<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Añadir noticia
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('noticias.store') }}" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <x-input-label for="noticia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Titulo
                    </x-input-label>
                    <x-text-input name="noticia" type="text" id="noticia"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('noticia')" />
                    <x-input-error :messages="$errors->get('noticia')" class="mt-2" />

                    <x-input-label for="entradilla"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Entradilla
                    </x-input-label>
                    <x-text-input name="entradilla" type="text" id="entradilla"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('entradilla')" />
                    <x-input-error :messages="$errors->get('entradilla')" class="mt-2" />

                    <x-input-label for="noticia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        URL de la imagen
                    </x-input-label>
                    <x-text-input name="imagen" type="text" id="imagen"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('imagen')" />
                    <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                        <x-input-label for="noticia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Categoria
                        </x-input-label>
                        <x-text-input name="categoria_id" type="text" id="categoria_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            :value="old('categoria_id')" />
                        <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />

                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Crear
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
