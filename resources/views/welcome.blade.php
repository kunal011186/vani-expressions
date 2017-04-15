@extends('templates.layout')

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

@section('sidebar')
{{ Widget::randomPostLink() }}
<b>MY OTHER SITES</b><br/>
<a href="http://kaavyaalaya.org" target="_blank">काव्यालय: The House of Hindi Poetry</a><br/>
<a href="http://manaskriti.com/geet-gatiroop" target="_blank">गीत गतिरूप: कवि का अनोखा साथी</a><br/>
@endsection