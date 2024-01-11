<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController2 extends Controller
{
    public function index() {
        $autores = Author::all();
        return response()->json($autores);
    }
    public function store (Request $request) {

        try{
            $request->validate([
                'name'=>'required|string',
                'country' => 'required|string']);

            $author = new Author();
            $author->name = $request->input('name');
            $author->country = $request->input('country');
            $author->save();

            return response()->json($author,201);

        } catch (\Exception $e){    
            return response()->json(['error' => 'Error'], 500);
        }
    }

    public function destroy ($id) {
        $author = Author::find($id);

        if(!$author){
            return response()->json(['message' => 'El autor no está'], 404);
        }
        else{
            $author->delete();
            return response()->json(['message' => 'Autor eliminado'], 200);
        }
        
    }

}
