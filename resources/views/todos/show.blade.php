@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col">
				<h4><a href="{{ route('todos.index')}}" class="float-right"><i class="fa fa-angle-left"></i> Back To List</a></h4>
			</div>
		</div>
</div>
<br>
<div class="col-8 p-2 m-auto card">
	<div class="card-header">
		<p class="float-left">{{$todo->title}}</p>
		<a class="float-right btn btn-danger" href="{{ route('todos.destroy', $todo->id)}}">Delete</a>
		<a class="float-right btn btn-warning" href="{{ route('todos.edit', $todo->id)}}">Edit</a>
	</div>
	<div class="card-body">
		<blockquote class="blockquote mb-0">
			<p class="float-left">{{$todo->body}}</p>
			<a class="float-right">{{$todo->due}}</a>
		</blockquote>
	</div>
</div>
@endsection