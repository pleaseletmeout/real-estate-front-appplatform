<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index">P'TES<span class="color-b">KNHOM</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
            data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-grid">Property</a>
                </li>
                <!-- @auth
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                @endauth -->
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block mr-3"
            data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>

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

    </div>
</nav>
<!--/ Nav End /-->
