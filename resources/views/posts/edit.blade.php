@extends('main')

@section('title', '| Edit Post')

@section('content')

		{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
	<div class="row mt-5">
			
			<div class="col-md-8">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control form-control-lg']) }}
				
				{{ Form::label('body', 'Body:', ['class' => 'mt-3']) }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
				
			</div>

			<div class="col-md-4 pl-4">
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
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
							{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
						</div>
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
							{{-- <a href="#" class="btn btn-danger btn-block">Delete</a> --}}
						</div>
					</div>
				</div>
			</div>
	</div>
		{!! Form::close() !!}

@endsection