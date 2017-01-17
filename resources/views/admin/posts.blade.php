@extends('admin.base')

@section('sub-menu')
    <a href="{{route('create-post')}}">create post</a>
@endsection

@section('title-bar','posts')

@section('content')
@foreach($posts as $post)
    {{$post->title}} 
    <a href="{{route('show-post',['slug'=>$post->slug])}}">view</a> 
    <a href="{{route('edit-post',['id'=>$post->id])}}">edit</a> 
    <a href="{{route('delete-post',['id'=>$post->id])}}">delete</a>
    <br/>
@endforeach
@endsection