@extends('layouts.app')

@section('content')

@if ($errors->any())

<div>

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<h2>Crear tarea</h2>

<form method="POST" action="/tasks">

@csrf

<label>Título</label>

<input type="text" name="title">

<br><br>

<label>Descripción</label>

<textarea name="description"></textarea>

<br><br>

<button type="submit">
Crear tarea
</button>

</form>

@endsection
