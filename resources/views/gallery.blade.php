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
                <div class="col-12 col-md-4 d-flex mb-4">
                    <div class="col-12">
                    <img class="img-fluid mx-auto" src="https://via.placeholder.com/275x400.png"></img>
                    </div>

                </div>
                @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection