@extends('post.create')

@section('editid', $posts->id)
@section('edittitle', $posts->title)
@section('editcapt', $posts->description)

@section('editmethod')
{{ method_field('PUT') }}
@endsection