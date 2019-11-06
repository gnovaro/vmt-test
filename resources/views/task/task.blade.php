@extends('layouts.app')

@section('content')
<form method="post" action="/task/save">
    @csrf
    <div class="row">
        <label>{{ __('Name') }}</label>
        <input type="text" name="name" value="{{ $task->name }}" required="required" class="form-control">
    </div>
    <div class="row">
        <label>{{ __('Due date') }}</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}" required="required" class="form-control">
    </div>
    <div class="row">
        <label>{{ __('Description') }}</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
    <input type="hidden" name="id" value="{{ $task->id }}">
</form>
@endsection
