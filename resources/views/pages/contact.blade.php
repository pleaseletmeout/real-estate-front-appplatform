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
      <a class="navbar-brand text-brand" href="index">Estate<span class="color-b">Agency</span></a>
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
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact">Contact</a>
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
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a">Send us message for more information</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Start /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div> -->
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form class="form-a contactForm" action="add" method="post" role="form">
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
                <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
                <div id="errormessage"></div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="contact_name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="contact_email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="phone" name="contact_phone_number" class="form-control form-control-lg form-control-a" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="property_id" class="form-control form-control-lg form-control-a" placeholder="property_id" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="contact_subject" class="form-control form-control-lg form-control-a" placeholder="contact subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="contact_message" class="form-control" name="contact_message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">ptesknhom@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">023 999999</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Phnom Penh Cambodia
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->

  @include('layouts.footer')

</body>
</html>
