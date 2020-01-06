@extends('layouts.master')
@section('css')

@endsection
@section('body')
    @component('components.navbar')
    @endcomponent
<div class="container-fluid bg-light">
    <div class="row align-items-center">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 mt-4 mx-auto">
            <div class="text-center">
                <h3 class="font-weight-light">GALLERY</h3>
                <div class="row mt-4">
                @for($i=0; $i<12; $i++)
                <div class="col-12 col-md-4">
                    <figure class="figure">
                    <img class="img-fluid" src="https://via.placeholder.com/300x350.png"></img>
                    <figcaption class="figure-caption text-left">
                        <p class="lead">[ImageName]</p>
                    </figcaption>
                    </figure>

                </div>
                @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection