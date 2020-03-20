@extends('main')

@section('title', 'Input Post')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Create / Edit Post</h1>
      @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
      @endif
      <form method="post" action="/inputpost/@yield('editid')">
        {{ csrf_field() }}
        @section('editmethod')
        @show
        <div class="form-group">
          <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="@yield('edittitle')">
        </div>
        <div class="form-group">
          <textarea class="form-control" id="capt" placeholder="Description" name="description" >@yield('editcapt')</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
  </div>
</div>
@endsection