@extends('layouts.master')

@section('css')
<style type="text/css">
@font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}

.masthead {
  height: 100vh;
  min-height: 500px;
  background:linear-gradient(0deg,rgba(255,255,255,0.6),rgba(255,255,255,0.6)),url("{{asset('/images/image1.jpeg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}    
.double-border {
    border-width:3px;  
    border-style:double;
    border-color:rgba(109,110,112,0.5);
    background-color: white;
}

.separator {
    display: flex;
    align-items: center;
    text-align: center;
}
.separator::before, .separator::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid rgba(109,110,112,0.5);
}
.separator::before {
    margin-right: .25em;
}
.separator::after {
    margin-left: .25em;
}

nav a{
    color: black;
    font-family: 'Questrial';
    color: rgba(109,110,112,1);
    text-transform: uppercase;
    font-size: 0.8rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.2;
    letter-spacing: 0.3em;
}

.serein-card{
    background-color: white;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.2rem;
}

.serein-card-small{
    color: rgba(109,110,112,1);
    font-size: 0.9rem;
}
.serein-button{
    /*background-color: rgba(225, 158, 153, 0.66);*/
    color: rgba(109,110,112,1);
    font-family: 'Questrial';
    font-size: 1rem;
    letter-spacing: 0.15em;
    border-radius: 0.1rem;
    cursor: pointer;
}

.serein-button2{
    border: 2px solid #e19e99;  
    color: rgba(99,100,102,1);
    font-size: 0.8rem;
    letter-spacing: 0.25em;
    cursor: pointer;
    text-transform: uppercase;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.serein-button2:hover {
  background-color: #e19e99;
  color: white;
}

.h-lead{
    font-size: 1rem;
    font-weight: 300;
    letter-spacing: 0.1rem;
    text-transform: uppercase;
}

.copyright{
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 0.4rem;
}

.slider {
  width: 100%;
  height: 150px;
  display: flex;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  scroll-behavior: smooth;
}
.slide {
  width: 150px;
  flex-shrink: 0;
  height: 100%;
  scroll-behavior: smooth;
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-sm justify-content-center sticky-top" style="background-color: white;">
    <div class="separator text-muted d-sm-none" style="width: 100%">
      <a class="nav-link" href="#">Menu</a>
    </div>
    <div class="separator text-muted d-none d-sm-flex" style="width: 100%">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">Portfolio</a>
      <a class="nav-link" href="#">Gallery</a>
      <a class="nav-link" href="#">Blog</a>
      <a class="nav-link" href="#">Contact</a>
    </div>
</nav>

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
                           Serein Florist creates breath-taking, upscale floral designs in an effort to infuse simple beauty into a world that needs it.  We execute events with the utmost reliability and precision while maintaining an organic, forward thinking approach.
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
        @for($i=0; $i<3; $i++)
        <div class="col-12 col-md-4 pt-4">
            <div class="p-2 serein-card">
                <div class="card-body text-center double-border">
                    <div class="card-body" style="padding: 0">
                        <div class="img-responsive">
                            <img class="img-fluid img-thumbnail" src="http://placehold.it/275x350"></img>
                        </div>
                        <hr>
                        <p class="lead">
                           POSITIVE LUXURY
                        </p>
                        <p class="serein-card-small">
                            We are proud recipients of the Positive Luxury Butterfly Mark for making a measurable impact and commitment to sustainability.
                        </p>
                    </div>
                    <div class="serein-button2 p-2">
                        <span class="mr-2 ml-2">Learn More</span>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!--
        =================================
                    PORTFOLIO
        =================================
     -->
    <div class="row align-items-center mt-4 pt-4">
        <div class="col-12 mx-auto">
            <div class="text-center">
                <h3 class="font-weight-light">THE PORTFOLIO</h3>
                <p class="h-lead">Find out more about our featured works</p>
            </div>
        </div>
    </div>
    <!--
        =================================
                PORTFOLIO CARDS
        =================================
     -->
    <div class="row col-12 col-md-12 col-lg-10 col-xl-7 mx-auto" style="padding: 0px; margin: 0px;">
        @for($i=0; $i<8; $i++)
        <div class="col-12 col-md-3 pt-4">
            <div class="text-center">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/275x350"></img>
            </div>
        </div>
        @endfor
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
                        <div class="slider">
                        @for($i=0; $i<20; $i++)
                        <img src="http://placehold.it/150x150" class="slide mr-1"></img>
                        @endfor
                        </div>
                    </li>
                    <li class="list-group-item">
                        @for($i=0; $i<5; $i++)
                        <p class="lead"><a href="#" class="h-lead">OUR STORY</a></p>
                        @endfor
                    </li>
                </ul>
                <p class="copyright mt-4">©2019 SEREINFLORIST</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
