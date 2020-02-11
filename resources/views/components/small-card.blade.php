<div class="col-12 col-md-4 pt-4 pb-4 small-card">
    <div class="p-2 serein-card" style="height: 100%;">
        <div class="card-body text-center double-border d-flex flex-column" style="height: 100%">
            <div class="card-body p-0">
                <div class="img-responsive">
                    <img class="img-fluid img-thumbnail" src="{{ isset($image) ? $image : 'https://placehold.it/275x350'}}" style="width: 275px; height: 350px;"></img>
                </div>
                <hr>
                <div class="card-title d-flex">
                    <p class="font-weight-light justify-content-center align-self-center mb-0" style="text-transform: uppercase; width: 100%; font-size: 1.2rem;">
                        {{$title}}
                    </p>
                </div>
                <p class="serein-card-small lead">
                    {{$description}}
                </p>
            </div>
            <a class="serein-button2 p-2 mx-auto mt-auto" href="{{ isset($link) ? $link : '#'}}">
                <span class="mr-2 ml-2">Learn More</span>
            </a>
        </div>
    </div>
</div>