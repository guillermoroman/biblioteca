<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookWebController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/libros');
        $libros = $response->json();

        return view('libros.index', ['libros' => $libros]);
    }

    public function create()
    {
        
        $response = Http::get('http://localhost:8000/api/autores');
        $authors = $response->json();

        return view('libros.create', compact('authors'));

        //return view('libros.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author_id' => 'required|integer',
            'published_year' => 'required|integer'
        ]);

        // Hacer una solicitud POST a la API para crear el libro
        $response = Http::post('http://localhost:8000/api/libros', $validatedData);

        if($response->successful()) {
            // Redirigir a una página adecuada o mostrar un mensaje de éxito
            return redirect('/libros')->with('success', 'Libro agregado exitosamente');
        } else {
            // Manejo de errores si la API falla
            return back()->withErrors('Error al agregar el libro');
        }
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8000/api/libros/{$id}");
        return redirect('/libros');
    }


}
