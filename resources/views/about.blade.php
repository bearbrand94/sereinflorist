@extends('layouts.master')
@section('title')
 About Us
@endsection
@section('body')
    @component('components.navbar')
    @endcomponent
    <div class="container-fluid bg-light">
    <div class="row align-items-center pt-5" id="anchor-start">
        <div class="col-12 col-md-7 col-xl-6 mx-auto">
            <div class="text-center" style="margin-bottom: -40px; z-index: 1;">
                <img class="rounded-circle" src="{{asset('/images/logotransparent.png')}}" style="height: 80px; width: 80px; background-color: white;"></img>
            </div>
            <div class="p-2 serein-card">
                <div class="card-body text-center double-border">
                    <div class="card-body mt-2">
                        <h3 class="font-weight-light">ABOUT US</h3>
                        <hr>
                        <div class="row align-items-center h-100">
	                        <div class="col-xs-12 col-md-12 col-lg-6">
		                        <img src="{{asset('/images/image1.jpeg')}}" class="img-fluid">
		                    </div>
		                    <div class="col-xs-12 col-md-12 col-lg-6">
		                        <p class="lead mt-4 mt-lg-0">
									Serein Florist is a floral artisan based in Surabaya. At Serein Florist, all of our floral arrangements are handcrafted passionately with love - and also as an expression of love for preserving every occasion using only premium blooms.
									<br><br>
									We believe that flowers are capable to make people happy, that’s why we will be much honored to be your help-as a flowers specialist! We are committed to give our customers the best services with our personalized & bespoke flowers arrangements, while flexibly adjust it according to your budgets.
									<br><br>
									<a href="{{route('contact')}}">Contact us to personalize your flowers arrangement!</a>
		                        </p>
		                    </div>
		                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection