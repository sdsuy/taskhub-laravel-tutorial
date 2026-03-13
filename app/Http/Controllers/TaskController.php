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

    public function edit($id)
    {

        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));

    }

    public function update(Request $request, $id)
    {

        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable'
        ]);

        $task->update($validated);

        return redirect('/tasks');

    }

    public function destroy($id)
    {

        $task = Task::findOrFail($id);

        $task->delete();

        return redirect('/tasks');

    }
}
