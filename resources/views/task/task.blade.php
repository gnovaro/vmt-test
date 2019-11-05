@extends('layouts.app')

@section('content')
<form method="post" action="/task/save">
    @csrf
    <div class="row">
        <label>{{ __('Name') }}</label>
        <input type="text" name="name" required="required" class="from-control">
    </div>
    <div class="row">
        <label>{{ __('Due date') }}</label>
        <input type="date" name="due_date" required="required" class="from-control">
    </div>
    <div class="row">
        <label>{{ __('Description') }}</label>
        <textarea name="description" class="from-control"></textarea>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</form>
@endsection
