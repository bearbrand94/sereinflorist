@extends('layouts.master')
@section('css')
<style type="text/css">
.h-lead{
    font-size: 2rem;
    font-weight: 300;
    letter-spacing: 0.2rem;
    text-transform: uppercase;
}

.h2-lead{
    font-size: 1.6rem;
    font-weight: 330;
    letter-spacing: 0.4rem;
    text-transform: uppercase;
}
.h3-lead{
    font-size: 1rem;
    font-weight: 300;
    letter-spacing: 0.1rem;
    text-transform: uppercase;
}

p{
    font-size: 1rem;
    font-weight: 300;
    letter-spacing: 0.05rem;
}

.banner {
  height: 60vh;
  min-height: 500px;
  background:linear-gradient(180deg,rgba(255,255,255,0.6),rgba(248,249,250,1)),url("{{asset('/images/image1.jpeg')}}");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}   

.banner-small{
  height: 100%;
}

.banner-left {
  background:linear-gradient(to right,rgba(233,233,233,1), rgba(233,233,233,1) 40%,rgba(255,255,255,0.3)),url("{{asset('/images/image1.jpeg')}}");
  color: black;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.banner-right {
  background:linear-gradient(to left,rgba(245,245,245,1), rgba(235,235,235,1) 40%,rgba(255,255,255,0.3)),url("{{asset('/images/image1.jpeg')}}");
  color: black;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
@yield('service_css')
@endsection
@section('title')
 Eternelle
@endsection

@section('body')
    @component('components.navbar')
    @endcomponent

    @yield('banner')

    <div class="container-fluid bg-light h-100 pb-4">
        <div class="container h-100">
            <div class="row align-items-top h-100">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 mt-4">
        <div class="row align-items-center">
            <a class="serein-button2 p-2 mx-auto mb-4" href="{{route('contact')}}">
              <span class="mr-2 ml-2">Drop Us Any Inquiries</span>
            </a>
        </div>
        <hr>
    </div>
@endsection