@extends('layouts.master')
@section('css')
<style type="text/css">
.masthead {
  height: 100vh;
  min-height: 500px;
  background:linear-gradient(0deg,rgba(255,255,255,0.6),rgba(255,255,255,0.6)),url("{{asset('/images/home.jpg')}}");

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

.font-weight-light{
    font-size: 1.5rem;
    letter-spacing: 0.1rem;
}
</style>
@endsection

@section('title')
    Wedding And Event Florist
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
                            <h2 class="font-weight-light">SEREIN FLORIST</h2>
                            <hr>
                            <p class="lead">
                            Nature-inspired floral design for weddings
                            and special events</p>
                            <a class="lead pt-4" style="color: gray; font-size: 0.8rem; margin-bottom: 0;" href="wip#anchor-start"><i>Scroll Down!</i></a>
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
    <div class="row align-items-center pt-5" id="anchor-start">
        <div class="col-12 col-md-7 col-xl-6 mx-auto">
            <div class="text-center" style="margin-bottom: -40px; z-index: 1;">
                <img class="rounded-circle" src="{{asset('/images/logotransparent.png')}}" style="height: 80px; width: 80px; background-color: white;"></img>
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
                        <span class="separator mr-2 ml-2"><a class="mr-2 ml-2" href="{{route('about')}}">More About Us</a></span>
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
        <!-- <div class="card-deck">  -->
            @component('components.small-card', [
                'title' => 'Bouquet',
                'description' => 'Bespoke hand tied flowers arrangement suitable for anniversaries, graduations, Valentine ’s Day, birthdays, etc.',
                'link' => "https://www.instagram.com/stories/highlights/18071433844065758/",
                'image' => asset('/images/bouquet.jpg')
            ])
            @endcomponent

            @component('components.small-card', [
                'title' => 'Box & Vase Arrangement',
                'description' => 'Flower arrangements can be used as centerpieces to beautify your home or office. Another great way to say congratulations for grand openings, new baby born, etc.',
                'link' => "https://www.instagram.com/stories/highlights/18005615830191628/",
                'image' => asset('/images/boxvase.jpg')
            ])
            @endcomponent

            @component('components.small-card', [
                'title' => 'Eternelle Collections',
                'description' => 'Everlasting gifts, something that can be kept and remembered forever.',
                'link' => route('eternelle'),
                'image' => asset('/images/eternelle-collections.jpg')
            ])
            @endcomponent
        </div>
    </div>

</div>

@endsection
