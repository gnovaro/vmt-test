@extends('layouts.app')

@section('content')
<table class="table">
<thead>
<tr>
    <th>Name</th>
    <th>Due date</th>
    <th>Description</th>
    <th>Completed</th>
<tr>
</thead>
<tbody>
@foreach($tasks as $task)
<tr>
    <td>
        <a href="/task/edit/{{ $task->id }}">
            {{ $task->name }}
        </a>
    </td>
    <td>{{ $task->due_date }}</td>
    <td>{{ $task->description }}</td>
    <td>{{ $task->completed }}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
