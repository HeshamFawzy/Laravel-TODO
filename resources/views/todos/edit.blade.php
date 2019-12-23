@extends('layouts.app')

@section('content')
<div class="container">
	<a class="float-right" href="{{ route('todos.show', $todo->id)}}">Back</a>
	<h1>Edit Todo</h1>
	{!! Form::open(['action' => ['TodosController@update', $todo->id ],'method' => 'POST']) !!}

		{{ Form::bsText('title', $todo->title) }}

		{{ Form::bsTextArea('body', $todo->body) }}

		{{ Form::bsText('due', $todo->due) }}

		{{ Form::hidden('_method', 'PUT') }}

		{{ Form::bsSubmit('Edit', ['class' => 'btn btn-primary float-right']) }}

	{!! Form::close() !!}
</div>
@endsection