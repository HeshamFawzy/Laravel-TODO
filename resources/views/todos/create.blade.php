@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Create Todo</h1>
	{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}

		{{ Form::bsText('title') }}

		{{ Form::bsTextArea('body') }}

		{{ Form::bsText('due') }}

		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary float-right']) }}

	{!! Form::close() !!}
</div>
@endsection