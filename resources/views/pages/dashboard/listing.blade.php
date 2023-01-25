@extends('layouts.dashboard')

@section('content')



<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Add Property</h4>
                        </div>
                        <form method="post" action="{{ route('dashboard.add') }}">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels"> Name of Property </label><input type="text"
                                    class="form-control" name="property_name" placeholder="Ex: 304 Blaster Up"
                                    value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels"> Address of Property </label><input
                                    type="text" class="form-control" name="property_address"
                                    placeholder="Ex: Toul Kok, Pnhom Penh" value="">
                            </div>
                            <div class="col-md-12 mt-3"><label class="labels"> Price of Property</label><input
                                    type="text" class="form-control" name="property_price"
                                    placeholder="Ex: 1000" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels"> Type of Property</label><input
                                    type="text" class="form-control" name="property_type"
                                    placeholder="Ex: Apartment, House, Villa" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels"> Numbers of Bedrooms</label><input
                                    type="text" class="form-control" name="no_of_bedrooms"
                                    placeholder="Ex: 2" value="">
                            </div>
                            <div class="col-md-12 mt-3"><label class="labels"> Numbers of Bathrooms</label><input
                                    type="text" class="form-control" name="no_of_bathrooms"
                                    placeholder="Ex: 3" value="">
                            </div>
                            <div class="col-md-12 mt-3"><label class="labels"> Area Size of Property </label><input
                                    type="text" class="form-control" name="area_size"
                                    placeholder="Ex: 160" value="">
                            </div>
                            <div class="col-md-12 mt-3"><label class="labels"> Link of Image of Property</label><input
                                    type="text" class="form-control" name="image_link"
                                    placeholder="Ex: Copy Link Address of your image" value="">
                            </div>
                            <div class="d-none"><label class="labels"></label><input
                                type="text" class="form-control" name="user_id" value="{{auth()->user()->id}}">
                        </div>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                     <div class="col-md-12">
                        <label class="labels">Description of Property</label>
                        <textarea class="form-control" name="property_description" placeholder="Ex: All the detail neccessary for the next home owner to see"></textarea>
                     </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Add
                            Property</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
