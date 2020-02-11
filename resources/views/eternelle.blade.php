@extends('layouts.master')
@section('css')
<style type="text/css">
.h-lead{
    font-size: 2rem;
    font-weight: 300;
    letter-spacing: 0.5rem;
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
    font-size: 0.9rem;
    font-weight: 300;
    letter-spacing: 0.05rem;
}

.banner {
  height: 100vh;
  min-height: 500px;
  background:linear-gradient(0deg,rgba(255,255,255,0.6),rgba(255,255,255,0.6)),url("{{asset('/images/eternelle/headbanner.jpg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}   

.banner-small{
  height: 80vh;
  min-height: 500px;
}

.banner-left {
  background:linear-gradient(to right,rgba(233,233,233,1), rgba(233,233,233,1) 40%,rgba(255,255,255,0.3)),url("{{asset('/images/eternelle/headbanner.jpg')}}");
  color: black;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.banner-right {
  background:linear-gradient(to left,rgba(245,245,245,1), rgba(235,235,235,1) 40%,rgba(255,255,255,0.3)),url("{{asset('/images/eternelle/rosebear.jpg')}}");
  color: black;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

</style>
@endsection

@section('title')
 Eternelle
@endsection

@section('body')
    @component('components.navbar')
    @endcomponent
<div class="container-fluid banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 mx-auto text-center">
                <img class="img-fluid rounded-circle mb-4" src="{{asset('/images/logotransparent.png')}}" style="height: 100px; width: 100px; background-color: white;"></img>
                <h1 class="h-lead">SEREIN FLORIST</h1>
                <h2 class="h3-lead">ETERNELLE</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner-small banner-right">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 offset-md-3 col-md-9 offset-lg-6 col-lg-6 text-right">
                <h2 class="h2-lead mb-4">Eternal Rose Bear</h2>
                <p>"It’s not how much we GIVE but how much LOVE we put into giving”<br><i style="font-size: 0.8rem;">- Mother Theresa.</i> <br><br> Share the love to your precious ones by giving these adorable rose bears! It is made of premium artificial roses and will last forever. Perfect idea if you’re looking for unique gift for Valentine’s Day, birthdays, graduations and any occasion..</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner-small banner-left">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-6">
                <h2 class="h2-lead mb-4">Dome Series</h2>
                <p>The dome series, the first series of Eternelle collections. Sweet combination of dried flowers and preserved flowers arranged in a dome. Preserved flowers are real flowers that have been processed with a revolutionary technology to maintain their fresh appearance for years-without any special maintenance! Special thing about our domes is you can personalize it with any personal message or put your name on it.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 mt-4">
    <div class="row align-items-center">
        <div class="col-12 mx-auto text-center">
          <h2 class="h2-lead mb-4">Check Our Availability!</h2>
        </div>
        <div class="serein-button2 p-2 mx-auto mb-4">
          <span class="mr-2 ml-2">Contact Us For More Info</span>
        </div>
    </div>
    <hr>
</div>

@endsection