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
      <a class="navbar-brand text-brand" href="/">P'TES<span class="color-b">KNHOM</span></a>
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
            <a class="nav-link" href="property-grid">Property</a>
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
@foreach ($property as $prop)
  <!--/ Intro Single Start /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{ $prop->property_name}}</h1>
            <span class="color-text-a">{{ $prop->property_address}}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ $prop->property_name}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ Intro Single End /-->

  <!--/ Property Single Start /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="{{$prop->image_link}}" alt="">
            </div>
            {{-- <div class="carousel-item-b">
              <img src="{{asset('/assets/')}}/img/slide-3.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset('/assets/')}}/img/slide-1.jpg" alt="">
            </div> --}}
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{$prop->property_price}}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{$prop->property_id}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{$prop->property_address}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>{{$prop->property_type}}</span>
                    </li>
                    {{-- <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>Sale</span>
                    </li> --}}
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>{{$prop->area_size}}m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{$prop->no_of_bedrooms}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{$prop->no_of_bathrooms}}</span>
                    </li>
                    {{-- <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span>1</span>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{$prop->property_description}}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="{{$prop->user_image_link}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">{{$prop->name}}</h4>
                <p class="color-text-a">
                  {{$prop->user_description}}
                </p>
                <ul class="list-unstyled">
                  {{-- <li class="d-flex justify-content-between">
                    <strong>Phone:</strong>
                    <span class="color-text-a">(222) 4568932</span>
                  </li> --}}
                  <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">{{$prop->phone_number}}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">{{$prop->email}}</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="{{$prop->user_facebook_link}}">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{$prop->user_youtube_link}}">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
              <form class="form-a contactForm" action="/contact" method="post" role="form">
                                @if (session('message'))
                                    <div class="alert alert-success my-1">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success my-1">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @csrf
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" name="contact_name" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="Name *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" name="contact_phone_number" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="Phone Number *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" name="contact_email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Email *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1 d-none">
                      <div class="form-group">
                        <input type="text" name="property_id" class="form-control form-control-lg form-control-a" id="inputPropertyid"
                          value="{{$prop->property_id}}" >
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" name="contact_message"  class="form-control" placeholder="Message *" name="message" cols="45"
                          rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach
  <!--/ Property Single End /-->

  @include('layouts.footer')
  
</body>
</html>
