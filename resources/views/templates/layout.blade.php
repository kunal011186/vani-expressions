@extends('templates.base')

@section('body')
	<div class="container">
		<div>
			<h1>@yield('title-bar')</h1>
		</div>
		<div class="row">
			<div class="col-md-9">
				@yield('content')
			</div>
			<div class="col-md-3">
				@yield('sidebar')
			</div>
		</div>
	</div>
@endsection