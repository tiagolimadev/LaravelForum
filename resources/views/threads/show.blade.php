@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<a href="#">{{ $thread->creator->name }}</a>
					 posted: {{ $thread->title }}
				</div>

				<div class="panel panel-body">
					{{ $thread->body }}
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			@foreach($thread->replies as $reply)
				@include('threads.reply')
			@endforeach
		</div>
	</div>
@endsection