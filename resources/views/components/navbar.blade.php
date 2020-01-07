<nav class="navbar navbar-expand-sm justify-content-center sticky-top" style="background-color: white;">
    <div class="separator text-muted d-sm-none" style="width: 100%">
      <a class="nav-link" href="#">Menu</a>
    </div>
    <div class="separator text-muted d-none d-sm-flex" style="width: 100%">
      <a class="nav-link" href="{{route('home')}}">Home</a>
      <div class="dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown">
          Services <i class="fa fa-angle-down"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('decoration')}}">Decoration</a>
          <a class="dropdown-item" href="{{route('wedding')}}">Wedding</a>
        </div>
      </div>
      <!-- <a class="nav-link" href="#">Services</a> -->
      <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
      <a class="nav-link" href="{{route('eternelle')}}">Eternelle</a>
      <a class="nav-link" href="{{route('contact')}}">Contact us</a>
    </div>
</nav>