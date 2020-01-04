@extends('layouts.master')
@section('css')
<style type="text/css">
.masthead {
  height: 100vh;
  min-height: 500px;
  background:linear-gradient(0deg,rgba(255,255,255,0.6),rgba(255,255,255,0.6)),url("{{asset('/images/image1.jpeg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}      
a{
  color: rgb(128, 128, 128);
}
.card-deck > .small-card
{
    flex-wrap: wrap;
    flex: initial; 
}
</style>
@endsection
@section('body')
<!-- Full Page Image Header with Vertically Centered Content -->
<div class="masthead">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-11 mx-auto" style="max-width: 20rem">
                <div class="card h-100 justify-content-center p-2">
                    <div class="card-body text-center double-border">
                        <div class="card-body">
                            <h2 class="font-weight-light">Serein Florist</h2>
                            <hr>
                            <p class="lead">
                            Nature-inspired floral design for weddings
                            and special events</p>
                            <p class="lead pt-4" style="color: gray; font-size: 1.1rem; margin-bottom: 0;"><i>Scroll Down!</i></p>
                            <p class="lead pt-4" style="color: gray; font-size: 0.8rem; margin-bottom: 0;">Follow Us On:</p>
                            <p class="lead" style="color: gray; font-size: 1.25rem; margin-bottom: 0;">
                              <a href="https://www.instagram.com/sereinflorist/" target="_blank"><i class="fa fa-instagram"></i></a>
                              <a href="https://wa.me/6282232222688" target="_blank"><i class="fa fa-whatsapp ml-2"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@component('components.navbar')

@endcomponent

<!-- BODY -->
<div class="container-fluid bg-light pb-4">
    <!--
        =================================
         YOUR FLORAL JOURNEY STARTS HERE
        =================================
     -->
    <div class="row align-items-center pt-5">
        <div class="col-12 col-md-7 col-xl-6 mx-auto">
            <div class="text-center" style="margin-bottom: -40px; z-index: 1;">
                <img class="rounded-circle" src="http://placehold.it/80x80"></img>
            </div>
            <div class="p-2 serein-card">
                <div class="card-body text-center double-border">
                    <div class="card-body mt-2">
                        <h3 class="font-weight-light">YOUR FLORAL JOURNEY STARTS HERE</h3>
                        <hr>
                        <p class="lead">
                            Serein Florist is a floral artisan based in Surabaya. At Serein Florist, all of our floral arrangements are handcrafted passionately with love - and also as an expression of love for preserving every occasion using only premium blooms.
                        </p>
                    </div>
                    <div class="serein-button p-2">
                        <span class="separator mr-2 ml-2"><span class="mr-2 ml-2">More About Us</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
        =================================
                HOW CAN WE HELP?
        =================================
     -->
    <div class="row align-items-center mt-5 pt-4">
        <div class="col-12 mx-auto">
            <div class="text-center">
                <h3 class="font-weight-light">HOW CAN WE HELP?</h3>
                <p class="h-lead">Find out more about our services</p>
            </div>
        </div>
    </div>

    <!--
        =================================
                     3 CARDS
        =================================
     -->
    <div class="row col-12 col-md-12 col-lg-10 col-xl-7 mx-auto" style="padding: 0px; margin: 0px;">
        <div class="card-deck"> 
        @component('components.small-card', [
            'title' => 'Bouquet',
            'description' => 'Bespoke hand tied flowers arrangement suitable for anniversaries, graduations, Valentine ’s Day, birthdays, etc.'
        ])
        @endcomponent
        @component('components.small-card', [
            'title' => 'Box & Vase Arrangement',
            'description' => 'Flower arrangements can be used as centerpieces to beautify your home or office. Another great way to say congratulations for grand openings, new baby born, etc.'
        ])
        @endcomponent
        @component('components.small-card', [
            'title' => 'Eternelle Collections',
            'description' => 'Everlasting gifts, something that can be kept and remembered forever.'
        ])
        @endcomponent
        </div>
    </div>

</div>

<!-- FOOTER -->
<div class="container-fluid">
    <!--
        =================================
                FOLLOW US
        =================================
     -->
    <div class="row align-items-center mt-4 pt-4 mb-4">
        <div class="col-12 mx-auto">
            <div class="text-center">
                <h2 class="font-weight-light mb-4" style="color: #f79d69;">
                    <Strong>FOLLOW US ON INSTAGRAM!</Strong>
                </h2>
                <a class="serein-button2 p-2" href="https://www.instagram.com/sereinflorist/" target="_blank">
                    <span class="mr-2 ml-2"><i class="fa fa-instagram"></i> sereinflorist</span>
                </a>
                <ul class="list-group list-group-flush mt-4">

                    <li class="list-group-item">
                        @for($i=0; $i<1; $i++)
                        <p class="lead"><a href="#" class="h-lead">TERMS & CONDITIONS</a></p>
                        @endfor
                    </li>
                </ul>
                <p class="copyright mt-4">©2019 SEREINFLORIST</p>
            </div>
        </div>
    </div>
</div>
@endsection
