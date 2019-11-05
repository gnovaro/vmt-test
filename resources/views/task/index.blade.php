@extends('layouts.app')

@section('content')
<div>
    <a href="/task/add" class="btn btn-primary">{{ __('New task') }}</a>
</div>
<table class="table">
<thead>
<tr>
    <th>{{ __('Name') }}</th>
    <th>{{ __('Due date') }}</th>
    <th>{{ __('Description') }}</th>
    <th>{{ __('Completed') }}</th>
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
