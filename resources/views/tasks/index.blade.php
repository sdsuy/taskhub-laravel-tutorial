@extends('layouts.app')

@section('content')

<h2>Lista de tareas</h2>

<ul>

@foreach($tasks as $task)

<li>{{ $task->title }}</li>

@endforeach

</ul>

@endsection
