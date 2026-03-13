@extends('layouts.app')

@section('content')

<h2>Editar tarea</h2>

<form method="POST" action="/tasks/{{ $task->id }}">

@csrf
@method('PUT')

<label>Título</label>

<input
type="text"
name="title"
value="{{ $task->title }}"
>

<br><br>

<label>Descripción</label>

<textarea name="description">

{{ $task->description }}

</textarea>

<br><br>

<button type="submit">

Actualizar tarea

</button>

</form>

@endsection
