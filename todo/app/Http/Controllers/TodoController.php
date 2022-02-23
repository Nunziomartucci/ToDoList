<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        $todolist = Todo::all();
        return view('welcome', compact('todolist'));
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
