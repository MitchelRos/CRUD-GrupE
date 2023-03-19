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
                    <header>
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ $title }}
                            </h2>
                    </header>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form action="{{ $action }}" method="POST">
                                @csrf
                                @isset ($method)
                                    @method($method)
                                @endif
                                <div class="mb-4">
                                    <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Título') }}</label>
                                    <input type="text" name="titulo" id="titulo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('titulo', $libro->titulo) }}">
                                    @error('titulo')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="autor" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Autor') }}</label>
                                    <input type="text" name="autor" id="autor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('autor', $libro->autor) }}">
                                    @error('autor')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Genero') }}</label>
                                    <input type="text" name="genero" id="genero" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('genero', $libro->genero) }}">
                                    @error('genero')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Descripción') }}</label>
                                    <textarea name="descripcion" id="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('descripcion', $libro->descripcion) }}</textarea>
                                    @error('descripcion')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="paginas" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Paginas') }}</label>
                                    <input type="number" name="paginas" id="paginas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('paginas', $libro->paginas) }}">
                                    @error('paginas')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="fecha_publicacion" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fecha publicación') }}</label>
                                    <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('fecha_publicacion', $libro->fecha_publicacion) }}">
                                    @error('fecha_publicacion')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="precio_compra" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Precio compra') }}</label>
                                    <input type="text" name="precio_compra" id="precio_compra" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('precio_compra', $libro->precio_compra) }}">
                                    @error('precio_compra')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="precio_venta" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Precio venta') }}</label>
                                    <input type="text" name="precio_venta" id="precio_venta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('precio_venta', $libro->precio_venta) }}">
                                    @error('precio_venta')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex justify-end">
                                    <a href="{{ route('libros.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancelar') }}</a>
                                    <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded ml-2">{{ $buttonText }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>