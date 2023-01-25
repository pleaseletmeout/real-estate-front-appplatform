@include('layouts.header')

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Start /-->
  @include('layouts.compartment.formSearch')
  <!--/ Form Search End /-->
<!--/ Nav Start /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="index">P'TES<span class="color-b">KHNOM</span></a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="property-grid">Property</a>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block mr-3" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
      <!--/ Sign in start /-->
      @guest
          <button class="btn btn-b-n d-none d-md-block" data-toggle="modal" data-target="#signinModal"
              data-backdrop="false">
              Sign in
              <span class="fa fa-sign-in" aria-hidden="true"></span>
          </button>
      @endguest

      @auth
          <a href="dashboard" href="{{ route('dashboard.main')}}">
              <button class="btn btn-b-n d-none d-md-block mr-1">
                  Dashboard
              </button>
          </a>

          <form method="post" action="{{ route('auth.logout') }}">
              @csrf
              <button class="btn btn-b-n d-none d-md-block">
                  Log out
                  <span class="fa fa-sign-out" aria-hidden="true"></span>
              </button>
          </form>
      @endauth
<!--/ Sign in end -->
  </div>
</nav>
<!--/ Nav End /-->


  <!--/ Intro Single Start /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Start /-->

  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div>
        </div>
          @foreach ($v_property as $property)
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{$property->image_link}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="href="property-single/{{$property->property_id}}"">{{$property->property_name}}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">{{$property->property_price}} $</span>
                  </div>
                  <a href="property-single/{{$property->property_id}}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>{{$property->area_size}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>{{$property->no_of_bedrooms}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>{{$property->no_of_bathrooms}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Type</h4>
                      <span>{{$property->property_type}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

  @include('layouts.footer')

</body>
</html>
