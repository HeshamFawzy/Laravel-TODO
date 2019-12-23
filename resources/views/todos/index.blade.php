@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<h4><a href="{{ route('todos.create')}}" class="float-right"><i class="fas fa-plus"></i> Create New</a></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-2">
			@include('layouts.messages')
		</div>
		<div class="col-12">
		@if(count($todos) > 0)
			@foreach($todos as $todo)
				<div class="col-8 p-2 m-auto card">
				  <div class="card-header">
				  	<p class="float-right">Created_at : <span>{{$todo->created_at}}</span></p>
				  </div>
				  <div class="card-body">
				    <blockquote class="blockquote mb-0">
				    	<p class="float-left">{{$todo->title}}</p>
				      	<a href="{{ route('todos.show', $todo->id)}}" class="float-right">{{$todo->due}}</a>
				    </blockquote>
				  </div>
				</div>
				<br>
			@endforeach
		@endif
		</div>
	</div>
@endsection
