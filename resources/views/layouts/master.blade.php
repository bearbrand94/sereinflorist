
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Serein Florist Surabaya</title>
    <meta description="Serein Florist creates inspired flowers for weddings and special occasion events.">
    <meta keywords="florist, florist surabaya, serein, serein florist">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/serein.css')}}">
    <link rel = "icon" href ="{{asset('/images/logocircle.png')}}" type = "image/x-icon"> 


    @yield('css')
    <style type="text/css">
        .list-group-item{
            color: rgb(109,110,112);
            font-size: 0.8rem;
        }

        .list-group-item a{
            font-size: 0.8rem;
            text-decoration: underline;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">
    
    <meta name="google-site-verification" content="1Gp4HJVJ7o7FzUUR0TB9xLJrxqCLv9vC_-kS4nbcpuk" />
  </head>
  <body>
    @yield('body')
<!-- FOOTER -->
<div class="container-fluid">
    <div class="row align-items-center mt-4 pt-4 mb-4">
        <div class="col-12 mx-auto">
            <div class="text-center">
                <h2 class="font-weight-light mb-4" style="color: #f79d69;">
                    <Strong>FOLLOW US ON INSTAGRAM!</Strong>
                </h2>
                <a class="serein-button2 p-2" href="https://www.instagram.com/sereinflorist/" target="_blank">
                    <span class="mr-2 ml-2"><i class="fa fa-instagram"></i> sereinflorist</span>
                </a>
                <ul class="list-group list-group-flush mt-4 pt-4">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="footer-lead">TERMS & CONDITIONS</p>
                                <ul class="list-group list-group-flush text-left" style="margin-top: 10px;">
                                  <li class="list-group-item">All of our arrangements are especially hand crafted for each one of you, so we cannot make the same exact arrangements twice.</li>
                                  <li class="list-group-item">It is our policy to substitute the flower types. As we work with nature, the availability, quality and seasonal changes of the flowers and foliage are beyond our control.</li>
                                  <li class="list-group-item">Note that we always ensure it will be substituted with content equal to the original value of the order.</li>
                                  <li class="list-group-item">No booking is confirmed until the payment has been received </li>
                                  <li class="list-group-item">All purchases are final</li>
                                </ul>
                            </div>

                            <div class="col-12 col-md-6 mt-4 mt-md-0">
                                <p class="footer-lead">FEATURED</p>
                                <ul class="list-group list-group-flush" style="margin-top: 10px;">
                                  <li class="list-group-item">Visit our instagram page to see our customers’ reviews and photos of them with our arrangements!</li>
                                  <li class="list-group-item"><a href="https://www.instagram.com/stories/highlights/17903736163293514/">OUR HIGHLIGHTS</a></li>
                                  <li class="list-group-item"><a href="https://www.instagram.com/stories/highlights/18029952904111176/">TESTIMONY</a></li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="copyright mt-4">©2019 SEREINFLORIST</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Isotope JS -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    @yield('js')
  </body>
</html>
