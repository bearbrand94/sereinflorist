@extends('layouts.service')
@section('service_css')
<style type="text/css">
.banner-wedding{
  background:linear-gradient(180deg,rgba(255,255,255,0.6),rgba(248,249,250,1)),url("{{asset('/images/Wedding.jpg')}}");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
@endsection

@section('title')
 Wedding Service
@endsection
@section('banner')
	<div class="container-fluid banner banner-wedding">
	@component('components.banner', [
		'title' => 'Wedding'
	])
	@endcomponent
	</div>
@endsection

@section('content')
<p class="text-center">
A wedding is the most important part in one's life journey. We are delighted to be one of many that take part to make your wedding night magical and make it one night to remember forever.
<br><br>Here at Serein Florist, we arrange flowers with love and passion to deliver every bride's expectation for their wedding night. We use handpicked most fresh flowers personally overseen by our own artisan to ensure your night spectacular through the beauty of flowers. Suppose you already have floral design that suits your wedding/events theme in mind, feel free to reach us so we can beautifully craft it for you. 
<br><br>Still confused with the options? No worries!<br> We can discuss and help you to narrow down the options that will suit best to your needs & wants. 
</p>
@endsection