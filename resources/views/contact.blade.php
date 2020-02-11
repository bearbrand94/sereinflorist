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
  min-height: 1300px;
  background:linear-gradient(0deg,rgba(233,233,233,0.7),rgba(245,245,245,0.8)),url("{{asset('/images/image6.jpeg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}   

@media only screen and (min-width: 768px) {
  .banner {
    min-height: 100vh;
  } 
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
  color: gray;
  text-decoration: underline;
}

.social-p{
  color: black;
  font-size: 0.9rem;
  font-weight: 600;
  letter-spacing: 0.05rem;
}

.social-a{
  color: black;
  font-size: 0.875rem;
}

.social-div{
  box-shadow: 5px 5px 10px rgb(212,212,212);
  color: gray;
}
input, textarea{
  letter-spacing: 0.1rem;
}
.form-control{
  border-radius: 0; 
  font-size: 0.8rem;
}
</style>
@endsection

@section('title')
 Contact Us
@endsection

@section('body')
    @component('components.navbar')
    @endcomponent
<div class="container-fluid pt-4 pb-4 bg-light banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-11 col-lg-10 mx-auto text-center"> 
                <div class="mb-4 pb-2">
                <img class="img-fluid rounded-circle mb-4" src="{{asset('/images/logotransparent.png')}}" style="height: 100px; width: 100px; background-color: white;"></img>
                  <h1 class="h-lead">SEREIN FLORIST</h1>
                  <h2 class="h3-lead">Contact Us</h2>
                </div>

                <div class="row text-left">
                  <div class="col-12 col-md-6 mb-3 mb-sm-0">
                    <div class="card-body double-border general-inquiry h-100">
                      <h3 class="h2-lead text-center">Get In Touch</h3>
                      <hr>
                      <div class="card-content pt-2 pb-2">
                        <p>We will keep the information you send on file. Should a need arise we will reach out to you. We value your time and our time greatly.<br>
                        </p>
                        <div class="row">
                          <div class="col-12 d-flex">
                            <a href="https://www.instagram.com/sereinflorist/" target="_blank">
                            <div class="p-2 social-div mr-4">
                              <i class="fa fa-instagram fa-2x"></i>
                            </div>
                            </a>
                            <div>
                              <p class="mb-0 social-p">Follow Us:</p>
                              <a href="https://www.instagram.com/sereinflorist/" target="_blank" class="social-a">@sereinflorist</a>
                            </div>
                          </div>
                          <div class="col-12 d-flex mt-4">
                            <a href="https://wa.me/6282232222688" target="_blank">
                              <div class="p-2 social-div mr-4">
                                <i class="fa fa-whatsapp fa-2x"></i>
                              </div>
                            </a>
                            <div>
                              <p class="mb-0 social-p">WhatsApp:</p>
                              <a href="https://wa.me/6282232222688" target="_blank" class="social-a">0822-3222-2688</a>
                            </div>
                          </div>
                          <div class="col-12 d-flex mt-4">
                            <a href="https://www.instagram.com/sereinflorist/" target="_blank">
                            <div class="p-2 social-div mr-4">
                              <i class="fa fa-envelope-o" style="font-size: 1.75rem;"></i>
                            </div>
                            </a>
                            <div>
                              <p class="mb-0 social-p">Email Us:</p>
                              <a href="mailto:sereinflorist@gmail.com?Subject=Hello, Serein Florist" target="_blank" class="social-a">sereinflorist@gmail.com</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card-body double-border h-100">
                      <h3 class="h2-lead text-center">Leave Us A Message</h3>
                      <hr>
                      <div class="row">
                        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                          <input type="text" class="form-control" name="" placeholder="YOUR NAME">
                        </div>
                        <div class="col-12 col-lg-6">
                          <input type="text" class="form-control" name="" placeholder="YOUR EMAIL">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="11" placeholder="YOUR MESSAGE"></textarea>
                        </div>
                        <div class="col-12 mt-3 d-flex">
                          <div class="serein-button2 p-2 btn-block text-center">Send Message</div>
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