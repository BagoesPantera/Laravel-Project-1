@extends('main')

@section('title', 'Post Detail')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">{{ $posts->title }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Uploaded at {{ $posts->created_at }}</h6>
          <p class="card-text">{{ $posts->description }}</p>
          <a href="{{'/viewpost/'.$posts->id.'/edit'}}" class="badge badge-primary" style="font-size: 15px">Edit</a>
          <form action="{{'/viewpost/'.$posts->id.'/delete'}}" method="post" class="d-inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="badge badge-danger">Delete</button>
          </form>
          <a href="/viewpost" class="card-link">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection