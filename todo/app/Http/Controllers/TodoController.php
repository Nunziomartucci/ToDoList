<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        $todo = Todo::all();
        return view('home', compact('todo'));
    }

    public function store(Request $request)
    {
       $data = $request->validate([
           'contenuto' => 'required'
       ]);

       Todo::create($data);
       return back();

    }

    
    public function destroy(todo $todo)
    {
        $todo->delete();
        return back();
    }
}
