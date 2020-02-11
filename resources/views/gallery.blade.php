 @extends('layouts.master')
@section('title')
 Gallery
@endsection
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
    font-size: 1rem;
    font-weight: 300;
    letter-spacing: 0.05rem;
}

.banner {
  height: 40vh;
  background:linear-gradient(180deg,rgba(255,255,255,0.6),rgba(248,249,250,1)),url("{{asset('/images/image1.jpeg')}}");

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}   

.btn{
  border-radius: 0; 
  font-size: 0.8rem;
}
</style>
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
                <h2 class="h3-lead">GALLERY</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light">
    <div class="row align-items-center">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 mt-4 mx-auto">
            <div class="text-center">
                <div class="row d-flex">
                    <div class="col-12 col-md-3">
                        <div class="serein-button2 p-2 btn-block mb-2" onclick="filter('all')">All Pictures</div>
                    </div>                    
                    <div class="col-12 col-md-3">
                        <div class="serein-button2 p-2 btn-block mb-2" onclick="filter('bouquet')">BOUQUET</div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="serein-button2 p-2 btn-block mb-2" onclick="filter('boxvase')">BOX & VASE</div>
                    </div>                    
                    <div class="col-12 col-md-3">
                        <div class="serein-button2 p-2 btn-block mb-2" onclick="filter('eternelle')">ETERNELLE</div>
                    </div>
                </div>
                <div class="row mt-4 grid">
                    <!-- <div class="grid"> -->
                        @for($i=0; $i<4; $i++)
                        <div class="col-12 col-md-4 element-item bouquet">
                            <figure class="figure">
                            <img class="img-fluid" src="https://via.placeholder.com/275x350.png"></img>
                            <figcaption class="figure-caption text-left">
                                <p class="lead">[Bouquet]</p>
                            </figcaption>
                            </figure>
                        </div>
                        @endfor
                        @for($i=0; $i<6; $i++)
                        <div class="col-12 col-md-4 element-item boxvase">
                            <figure class="figure">
                            <img class="img-fluid" src="https://via.placeholder.com/275x350.png"></img>
                            <figcaption class="figure-caption text-left">
                                <p class="lead">[Box & Vase]</p>
                            </figcaption>
                            </figure>
                        </div>
                        @endfor
                        @for($i=0; $i<5; $i++)
                        <div class="col-12 col-md-4 element-item eternelle">
                            <figure class="figure">
                            <img class="img-fluid" src="https://via.placeholder.com/275x350.png"></img>
                            <figcaption class="figure-caption text-left">
                                <p class="lead">[Eternelle]</p>
                            </figcaption>
                            </figure>
                        </div>
                        @endfor
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    function filter(type){
        if(type == "all"){
            $('.grid').isotope({ filter: '*' });
        }
        else if(type == "bouquet"){
            $('.grid').isotope({ filter: '.bouquet' });
        }
        else if(type == "boxvase"){
            $('.grid').isotope({ filter: '.boxvase' });
        }
        else{
            $('.grid').isotope({ filter: '.eternelle' });
        }
    }
    
</script>
@endsection