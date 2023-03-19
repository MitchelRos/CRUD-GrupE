<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Libros create</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h1 class="text-2xl font-bold mb-4">{{ $libro->titulo }}</h1>
                            <p class="text-gray-700 mb-4">
                                {{ __('Autor') }}: {{ $libro->autor }}
                            </p>
                            <p class="text-gray-700 mb-4">
                                {{ __('Genero') }}: {{ $libro->genero }}
                            </p>
                            <p class="text-gray-700 mb-4">
                                {{ __('Paginas') }}: {{ $libro->paginas }}
                            </p>
                            <p class="text-gray-700 mb-4">{{ $libro->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{ route('libros.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">{{ __('Volver') }}</a>
                            <a href="{{ route('libros.edit', $libro) }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">{{ __('Editar') }}</a>
                            <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">{{ __('Eliminar') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>