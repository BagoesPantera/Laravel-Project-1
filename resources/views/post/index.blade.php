@extends('main')

@section('title','Post')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			@if (session('alert'))
			    <div class="alert alert-success">
			        {{ session('alert') }}
			    </div>
			@endif
			<h1>Post</h1>
			<ul class="list-group">
				@foreach($posts as $post)
					<li class="list-group-item d-flex justify-content-between align-items-center">
				    	{{$post->title}}
				    	<a href="{{'/viewpost/'.$post->id}}" class="badge badge-info" style="cursor: pointer; font-size: 12px;">detail</a>
				  	</li>
			  	@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection