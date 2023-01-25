@extends('layouts.dashboard')

@section('content')
    @if($data) 
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Property Name</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $Udata)
          <tr>
            <th scope="row">{{$Udata->contact_id}}</th>
            <td>{{$Udata->contact_name}}</td>
            <td>{{$Udata->contact_phone_number}}</td>
            <td>{{$Udata->contact_email}}</td>
            <td>{{$Udata->contact_message}}</td>
            <td>{{$Udata->property_name}}</td>
          </tr>
        @endforeach
          
        </tbody>
      </table>
    @endif
@endsection
