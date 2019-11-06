@extends('layouts.app')

@section('content')
<header>
    <h1>{{ __('Task') }}</h1>
</header>
<form method="post" action="/task/save" class="form">
    @csrf
    <div class="row-fluid">
        <label>{{ __('Name') }}</label>
        <input type="text" name="name" value="{{ $task->name }}" required="required" class="form-control">
    </div>
    <div class="row-fluid">
        <label>{{ __('Due date') }}</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}" @if(empty($task->id)) min="{{ date('Y-m-d') }}" @endif required="required" class="form-control">
    </div>
    <div class="row-fluid">
        <label>{{ __('Description') }}</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="row-fluid">
        <button type="submit" class="btn btn-primary mt-1">{{ __('Save') }}</button>
    </div>
    <input type="hidden" name="id" value="{{ $task->id }}">
</form>
@endsection
