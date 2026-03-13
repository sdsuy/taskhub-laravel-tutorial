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
}
