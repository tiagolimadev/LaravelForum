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

	@auth
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
				<form method="POST" action="{{ $thread->path() . '/replies' }}">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
					</div>

					<button type="submit" class="btn btn-default">Post</button>
				</form>
			</div>
		</div>
	@endauth

	@guest
		<p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to participate!</p>
	@endguest
@endsection