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
    font-size: 1.2rem;
    font-weight: 350;
    letter-spacing: 0.2rem;
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
  background:linear-gradient(0deg,rgba(255,255,255,0.6),rgba(255,255,255,0.6)),url("{{asset('/images/image1.jpeg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}   

.banner-small{
  height: 80vh;
  min-height: 500px;
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

.general-inquiry a{
  color: black;
  text-decoration: underline;
}
</style>
@endsection

@section('title')
 Contact Us
@endsection

@section('body')
    @component('components.navbar')
    @endcomponent
<div class="container-fluid banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-11 col-lg-10 mx-auto text-center">
                <img class="img-fluid mb-4" src="https://via.placeholder.com/100x100.png"></img>
                <h1 class="h-lead mb-4 pb-4">SEREIN FLORIST</h1>

                
                <div class="row text-left">
                  <div class="col-12 col-md-4 mb-4">
                    <div class="card-body double-border general-inquiry">
                      <h3 class="h2-lead text-center">General Inquiry</h3>
                      <hr>
                      <p>For general enquiries, please contact us using the form, or find us on:<br>
                      </p>
                      <p class="mb-1">
                        <a href="https://www.instagram.com/sereinflorist/" target="_blank">Instagram</a><br>
                      </p>
                      <p>
                        <a href="https://wa.me/6282232222688" target="_blank">WhatsApp</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-md-8">
                    <div class="card-body double-border">
                      <h3 class="h2-lead text-center">Leave Us A Message</h3>
                      <hr>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <input type="text" class="form-control" name="" placeholder="YOUR NAME">
                        </div>
                        <div class="col-12 col-md-6">
                          <input type="text" class="form-control" name="" placeholder="YOUR EMAIL">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="YOUR MESSAGE"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection