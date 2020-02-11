@extends('layouts.service')
@section('service_css')
<style type="text/css">
.banner-decoration{
  background:linear-gradient(180deg,rgba(255,255,255,0.6),rgba(248,249,250,1)),url("{{asset('/images/Decoration.jpg')}}");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
@endsection
@section('banner')
	<div class="container-fluid banner banner-decoration">
	@component('components.banner', [
		'title' => 'Decoration'
	])
	@endcomponent
	</div>
@endsection
@section('content')
	<p class="text-center">
		Decoration plays an important part in enhancing the mood and also creates a perfect ambience for any event. The idea is not only for making the space more aesthetically pleasing, but also to indicate the importance and significance of the event. We are providing floral decoration for clients who plan to have intimate events too! 
		<br><br>Do not hesitate to drop us any inquiries and we will be happy to assist you.
	</p>
@endsection