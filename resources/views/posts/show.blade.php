@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row mt-5">
		<div class="col-md-8">
			
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{{ $post->body }}</p>
			
		</div>

		<div class="col-md-4 pl-4" style="margin-top: 55px">
			<div class="well">
				<dl class="dl-horizontel">
					<dt>Created At:</dt>
					<dd>{{ date('j M Y H:i', strtotime($post->created_at)) }}</dd>

				</dl>
				<dl class="dl-horizontel">
					<dt>Last Updated:</dt>
					<dd>{{ date('j M Y H:i', strtotime($post->updated_at)) }}</dd>

				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						{{-- {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} --}}
						{{-- <a href="#" class="btn btn-danger btn-block">Delete</a> --}}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection