@extends('layouts.master')

@section('title')
 Eternelle
@endsection

@section('body')
    @component('components.navbar')
    @endcomponent
<div class="container-fluid bg-light">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
                <div class="card h-100 justify-content-center p-2 mt-4 mb-4">
                    <div class="card-body text-center double-border">
                        <div class="card-body">
                            <h2 class="font-weight-light">@yield('title')</h2>
                            <hr>

                            @yield('content')
                            <img class="img-fluid img-thumbnail" src="https://placehold.it/450X300"></img>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection