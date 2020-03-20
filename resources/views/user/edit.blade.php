@extends('user.create')

@section('editid', $user->id)
@section('editname', $user->name)
@section('editpassword', $user->password)
@section('editemail', $user->email)

@section('editmethod')
{{ method_field('PUT') }}
@endsection