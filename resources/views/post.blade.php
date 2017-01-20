@extends('templates.layout')

@section('title')
	{{$post->title}}: 
@endsection

@section('title-bar',$post->title)

@section('content')
{!! nl2br($post->content) !!}
<hr/>
<div style="margin-top: 10px;text-align: center;">
	<div class="pull-left">
		<a href="{{route('previous',['id'=>$post->id])}}"><b>< Previous</b></a>
	</div>
	<div class="pull-right">
		Next >
	</div>
	@if (Auth::check())
		<a href="{{route('edit-post',['id'=>$post->id])}}"><b>Edit</b></a>
	@endif
</div>
@endsection