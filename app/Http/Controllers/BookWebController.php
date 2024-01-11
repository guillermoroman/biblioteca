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

    public function store(Request $request)
    {
    $response = Http::post('http://localhost:8000/api/libros', [
        'title' => $request->title,
        'author_id' => $request->author_id,
        // otros campos del libro
    ]);

    return redirect('/libros');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8000/api/libros/{$id}");
        return redirect('/libros');
    }
}
