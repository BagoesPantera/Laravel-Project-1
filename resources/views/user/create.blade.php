@extends('main')

@section('title', 'User List')


@section('container')

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Create / Edit User Data</h1>
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <form method="post" action="/inputuser/@yield('editid')">
          {{ csrf_field() }}
          @section('editmethod')
          @show
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Username" name="name" value="@yield('editname')">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="@yield('editpassword')">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" value="@yield('editemail')">
          </div>
          <button type="submit" class="btn btn-primary">Input</button>
        </form>
		</div>
	</div>
</div>
@endsection