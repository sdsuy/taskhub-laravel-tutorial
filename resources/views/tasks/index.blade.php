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

</li>

@endforeach

</ul>

@endsection
