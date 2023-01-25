@extends('layouts.dashboard')

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded mt-5"
                        width="250px" height="150px" src="{{ $profile->user_image_link }}"><span class="font-weight-bold">{{ $profile->name }}</span><span
                        class="text-black-50">{{ $profile->email }}</span><span>
                        <div class="socials-footer">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ $profile->user_facebook_link }}" class="link-one">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ $profile->user_youtube_link }}" class="link-one">
                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input name="name" type="text"
                                    class="form-control" value="{{ $profile->name }}"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email"
                                    class="form-control" value="{{ $profile->email }}"></div>
                            {{-- <div class="col-md-12"><label class="labels">Password</label><input type="text"
                                class="form-control" placeholder="*****" value=""></div> --}}
                            <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" name="phone_number"
                                    class="form-control" placeholder="" value="{{ $profile->phone_number }}"></div>
                            <div class="col-md-12"><label class="labels">Profile Link</label><input type="text" name="user_image_link"
                                    class="form-control" placeholder="" value="{{ $profile->user_image_link }}"></div>
                            <div class="col-md-12"><label class="labels">Link to your Facebook</label><input type="text" name="user_facebook_link"
                                    class="form-control" placeholder="" value="{{ $profile->user_facebook_link }}"></div>
                            <div class="col-md-12"><label class="labels">Link to your
                                    Youtube</label><input type="text" class="form-control" name="user_youtube_link"
                                    value="{{ $profile->user_youtube_link }}"></div>
                            <div class="col-md-12">
                                <label class="labels">Description</label>
                                <textarea class="form-control" name="user_description">{{ $profile->user_description }}</textarea>
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
