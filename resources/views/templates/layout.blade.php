@extends('templates.base')

@section('body')
	<div class="container">
		<div>
			@yield('title-bar')
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