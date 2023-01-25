<!-- Modal Sign in -->

<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-footer d-flex justify-content-center">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i
                                        class="fas mr-1"></i>
                                    Login</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i
                                        class="fas mr-1"></i>
                                    Register</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                <!--Body-->
                                <div class="modal-body mb-1 ">
                                    <form method="post" action="{{ route('auth.login') }}">
                                        @csrf
                                        {{-- @if(session('message')) 
                                        <div class="alert alert-success my-1"> 
                                            {{ session('message') }} 
                                        </div> 
                                        @endif --}}
                                        <div class="md-form form-sm">
                                            <i class="fas prefix"></i>
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-sm validate" placeholder="Email">
                                            <label data-error="wrong" data-success="right" for="modalLRInput6"></label>
                                        </div>

                                        <div class="md-form form-sm">
                                            <i class="fas prefix"></i>
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-sm validate" placeholder="Password">
                                            <label data-error="wrong" data-success="right" for="modalLRInput7"></label>
                                        </div>
                                        <div class="text-center mt-2">
                                            <button class="btn btn-success waves-effect waves-light ">Log in <i
                                                    class="fas ml-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer display-footer">
                                    <div class="options text-center text-md-right mt-1 x-4">
                                        <p>Not a member? <a href="#panel2" class="blue-text">Sign Up</a></p>
                                        <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                    </div>
                                    <button type="button" class="btn btn-outline-success waves-effects ml-auto"
                                        data-dismiss="modal">Close</button>
                                </div>

                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->

                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form method="post" action="{{ route('auth.register') }}">
                                    @csrf
                                    {{-- @if(session('message')) 
                                        <div class="alert alert-success my-1"> 
                                            {{ session('message') }} 
                                        </div> 
                                        @endif --}}
                                    <!--Body-->
                                    <div class="modal-body">

                                        <div class="md-form form-sm ">
                                            <i class="fas prefix"></i>
                                            <input type="text" name="name" id="name"
                                                class="form-control form-control-sm validate" placeholder="Username">
                                            <label data-error="wrong" data-success="right" for="modalLRInput10"></label>
                                        </div>

                                        <div class="md-form form-sm ">
                                            <i class="fas prefix"></i>
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-sm validate" placeholder="Email">
                                            <label data-error="wrong" data-success="right" for="modalLRInput10"></label>
                                        </div>

                                        <div class="md-form form-sm">
                                            <i class="fas prefix"></i>
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-sm validate" placeholder="Password">
                                            <label data-error="wrong" data-success="right"
                                                for="modalLRInput8"></label>
                                        </div>

                                        <div class="md-form form-sm ">
                                            <i class="fas prefix"></i>
                                            <input type="text" name="phone_number" id="phone"
                                                class="form-control form-control-sm validate"
                                                placeholder="Phone Number">
                                            <label data-error="wrong" data-success="right"
                                                for="modalLRInput10"></label>
                                        </div>

                                        <div class="text-center form-sm mt-2">
                                            <button class="btn btn-success waves-effect waves-light"
                                                type="submit">Sign up<i class="fas ml-1"></i></button>
                                        </div>

                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <div class="options text-right">
                                            <p class="pt-1">Already have an account? <a href="#panel1"
                                                    class="blue-text">Log In</a></p>
                                        </div>
                                        <button type="button" class="btn btn-outline-success waves-effect ml-auto"
                                            data-dismiss="modal">Close</button>
                                    </div>
                            </div>
                            </form>
                            <!--/.Panel 2-->
                        </div>

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
    </div>
</div>
</div>
<!-- modal footer -->
