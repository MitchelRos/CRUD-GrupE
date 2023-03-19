<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Renderable
    {
        $libros = Libro::paginate();
        return view('Libro.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = new Libro;
        $title = __('Añadir Libro');
        $action = route('libros.store');
        $buttonText = __('Añadir');
        return view('Libro.form', compact('libro', 'title', 'action', 'buttonText'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|unique:libros,titulo|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'paginas' => 'required|int',
            'descripcion' => 'required|string|max:1000',
            'fecha_publicacion' => 'required|date',
            'precio_compra' => 'required',
            'precio_venta' => 'required',
        ]);

        Libro::create([
            'titulo' => $request->string('titulo'),
            'autor' => $request->string('autor'),
            'genero' => $request->string('genero'),
            'paginas' => $request->input('paginas'),
            'descripcion' => $request->string('descripcion'),
            'fecha_publicacion' => $request->date('fecha_publicacion'),
            'precio_compra' => $request->input('precio_compra'),
            'precio_venta' => $request->input('precio_venta'),
        ]);
        
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('Libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $title = __('Editar libro');
        $action = route('libros.update', $libro);
        $buttonText = __('Actualizar libro');
        $method = 'PUT';
        return view('Libro.form', compact('libro', 'title', 'action', 'buttonText', 'method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|unique:libros,titulo,'.$libro->id.'|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'paginas' => 'required',
            'descripcion' => 'required|string|max:1000',
            'fecha_publicacion' => 'required|date',
            'precio_compra' => 'required',
            'precio_venta' => 'required',
        ]);

        $libro->update([
            'titulo' => $request->string('titulo'),
            'autor' => $request->string('autor'),
            'genero' => $request->string('genero'),
            'paginas' => $request->input('paginas'),
            'descripcion' => $request->string('descripcion'),
            'fecha_publicacion' => $request->date('fecha_publicacion'),
            'precio_compra' => $request->input('precio_compra'),
            'precio_venta' => $request->input('precio_venta'),
        ]);
        
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
