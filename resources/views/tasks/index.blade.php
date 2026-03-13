<h1>Lista de tareas</h1>

<ul>

@foreach($tasks as $task)

<li>
{{ $task->title }}
</li>

@endforeach

</ul>
