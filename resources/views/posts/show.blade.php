@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>
			{{ $post->title }}
		</h2>
		<small>
			{{ $post->created_at }}
		</small>
		<hr>

		<p>
			{{ $post->details }}
		</p>
		
		
	</div>
@stop


