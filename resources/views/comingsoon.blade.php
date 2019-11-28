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
                            <p class="lead pt-4" style="color: gray; font-size: 1.1rem; margin-bottom: 0;"><i>Coming Soon!</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection