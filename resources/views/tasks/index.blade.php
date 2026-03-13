@extends('layouts.app')

@section('content')

<a href="/tasks/create">
Crear nueva tarea
</a>

<br><br>

<h2>Lista de tareas</h2>

<ul>

@foreach($tasks as $task)

<li>

{{ $task->title }}

<a href="/tasks/{{ $task->id }}/edit">

Editar

</a>

<form
method="POST"
action="/tasks/{{ $task->id }}"
style="display:inline"
>

@csrf
@method('DELETE')

<button type="submit">

Eliminar

</button>

</form>

</li>

@endforeach

</ul>

@endsection
