@extends('main')

@section('title', 'User List')


@section('container')

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">User List</h1>
      @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
      @endif
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $user as $users)
            <tr>
              <th scope="row">{{$users->id}}</th>
              <td>{{ $users->name}}</td>
              <td>{{ $users->password}}</td>
              <td>{{ $users->email}}</td>
              <td>
              	<a class="badge badge-succes" href="{{'/viewuser/'.$users->id.'/edit'}}">Edit</a>
                <form action="{{'/viewuser/'.$users->id }}" method="post" class="d-inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                	<button class="badge badge-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
		</div>
	</div>
</div>
@endsection