<nav class="navbar navbar-expand-sm justify-content-center sticky-top" style="background-color: white;">
    <div class="separator text-muted d-sm-none" style="width: 100%">
      <a class="nav-link" data-toggle="modal" data-target="#menuModal" style="cursor: pointer">Menu</a>
    </div>
    <div class="separator text-muted d-none d-sm-flex" style="width: 100%">
      <a class="nav-link" href="{{route('home')}}#anchor-start">Home</a>
      <div class="dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown">
          Services 
          <i class="fa fa-angle-down"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('decoration')}}">Decoration</a>
          <a class="dropdown-item" href="{{route('wedding')}}">Wedding</a>
        </div>
      </div>
      <!-- <a class="nav-link" href="#">Services</a> -->
      <a class="nav-link" href="https://www.instagram.com/sereinflorist/" target="_blank"><i class="fa fa-instagram"></i> Gallery</a>
      <a class="nav-link" href="{{route('eternelle')}}">Eternelle</a>
      <a class="nav-link" href="{{route('contact')}}">Contact us</a>
    </div>
</nav>


<style type="text/css">
  #menuModal a{
    font-size: 1.3rem;
    text-transform: uppercase;
    color: gray;
    letter-spacing: 0.3em;
  } 
</style>
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content h-100 p-2">
            <div class="modal-body d-flex align-content-center flex-wrap double-border">
              <div style="position: absolute; right: 5%">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="font-size: 1.8rem;">&times;</span>
                </button>
              </div>
              <div class="text-center mx-auto">
                  <a class="nav-link" href="{{route('home')}}#anchor-start">Home</a>
                  <!-- <a class="nav-link" href="{{route('decoration')}}">Service</a> -->
                  <a class="nav-link" href="{{route('decoration')}}">Decoration</a>
                  <a class="nav-link" href="{{route('wedding')}}">Wedding</a>
                  <a class="nav-link" href="https://www.instagram.com/sereinflorist/" target="_blank"><i class="fa fa-instagram"></i> Gallery</a>
                  <a class="nav-link" href="{{route('eternelle')}}">Eternelle</a>
                  <a class="nav-link" href="{{route('contact')}}">Contact us</a>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>  
