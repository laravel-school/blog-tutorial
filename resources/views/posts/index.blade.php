@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>All Posts</h2>
		<hr>
		
		@if( count($posts) > 0)
			@foreach($posts as $post)
				<li>
					<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
				</li>
			@endforeach
		@else
			<center>There is no post yet.</center>
		@endif
	</div>
@stop


