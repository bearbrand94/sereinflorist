@extends('layouts.master')
@section('css')

@endsection
@section('body')
	@component('components.navbar')
	@endcomponent
	<div class="container-fluid bg-light pb-4 pt-4">
	    <div class="row align-items-center mb-3">
	        <div class="col-12 mx-auto">
	        	@yield('title')
	        </div>
	    </div>
	    <div class="container">
		@yield('content')
		</div>
	</div>
@endsection