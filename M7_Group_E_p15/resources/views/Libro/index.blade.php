<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Libros</title>
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
                            <div class="flex justify-between">
                                <h1 class="text-2xl font-bold">{{ __('Libros') }}</h1>
                                <a href="{{ route('libros.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Añadir libro</a>
                            </div>
                            <div class="mt-4">
                                <table class="table-auto w-full">
                                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-2">{{ __('Título') }}</th>
                                            <th class="px-4 py-2">{{ __('Autor') }}</th>
                                            <th class="px-4 py-2">{{ __('Genero') }}</th>
                                            <th class="px-4 py-2">{{ __('Descripción') }}</th>
                                            <th class="px-4 py-2">{{ __('Paginas') }}</th>
                                            <th class="px-4 py-2">{{ __('Fecha') }}</th>
                                            <th class="px-4 py-2">{{ __('Precio Compra') }}</th>
                                            <th class="px-4 py-2">{{ __('Precio Venta') }}</th>
                                            <th class="px-4 py-2">{{ __('Acciones') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100">
                                        @forelse ($libros as $libro)
                                            <tr>
                                                <td class="border px-4 py-2">{{ $libro->titulo }}</td>
                                                <td class="border px-4 py-2">{{ $libro->autor }}</td>
                                                <td class="border px-4 py-2">{{ $libro->genero }}</td>
                                                <td class="border px-4 py-2">{{ $libro->descripcion }}</td>
                                                <td class="border px-4 py-2">{{ $libro->paginas }}</td>
                                                <td class="border px-4 py-2">{{ $libro->fecha_publicacion }}</td>
                                                <td class="border px-4 py-2">{{ $libro->precio_compra }}</td>
                                                <td class="border px-4 py-2">{{ $libro->precio_venta }}</td>
                                                <td class="border px-4 py-2" style="width: 260px">
                                                    <a href="{{ route('libros.show', $libro) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Ver') }}</a>
                                                    <a href="{{ route('libros.edit', $libro) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Editar') }}</a>
                                                    <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Eliminar') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="bg-red-400 text-white text-center">
                                                <td colspan="3" class="border px-4 py-2">{{ __('No hay libros para mostrar') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    @if ($libros->hasPages())
                                        <tfoot class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <td colspan="3" class="border px-4 py-2">
                                                    {{ $libros->links() }}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>