@extends('templates.layout')

@section('title-bar')
    {{ config('app.name') }}
@endsection

@section('content')
@foreach($posts as $post)
    <a href="{{route('show-post',['slug'=>$post->slug])}}"><h2>{{$post->title}}</h2></a>
    <?php 
	    $date=date_create($post->postdate);
		$date = date_format($date,"jS M Y");
    ?>
    <i>{{$date}}</i><br/>
    {!! nl2br($post->excerpt) !!}... 
    <b><a href="{{route('show-post',['slug'=>$post->slug])}}">read more...</a></b> 
@endforeach
@endsection