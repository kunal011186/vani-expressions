@extends('templates.layout')

@section('title-bar',$post->title)

@section('content')
{!! nl2br($post->content) !!}
@endsection