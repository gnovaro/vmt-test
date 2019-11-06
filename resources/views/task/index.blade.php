@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div>
    <a href="/task/add" class="btn btn-primary">{{ __('New task') }}</a>
</div>

<table class="table table-bordered table-hover mt-1">
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
    <td>{{ $task->due_date->format('d/m/Y') }}</td>
    <td>{{ $task->description }}</td>
    <td>{{ $task->completed }}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
