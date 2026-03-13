<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Mostrar lista de tareas
     */
    public function index()
    {

        // obtener todas las tareas
        $tasks = Task::all();

        // enviar a la vista
        return view('tasks.index', compact('tasks'));

    }

    public function store(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | Validation
        |--------------------------------------------------------------------------
        |
        | Laravel valida los datos antes de guardarlos.
        |
        */

        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable'
        ]);

        Task::create($validated);

        return redirect('/tasks');

    }
}
