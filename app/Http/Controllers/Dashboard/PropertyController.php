<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ContactForm;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // include for AUTH

class PropertyController extends Controller
{
    public function show()
    {
        return view('pages/dashboard/property');
    }

    public function showListing()
    {
        return view('pages/dashboard/listing');
    }


    public function storeProperty(Request $request){
        
        $request->validate([
            'property_name' => 'required',
            'property_address' => 'required',
            'property_price' => 'required',
            'property_type' => 'required',
            'no_of_bedrooms' => 'required',
            'no_of_bathrooms' => 'required',
            'area_size' => 'required',
            'image_link' => 'required',
            'property_description' => 'required',
            'user_id' => 'required',
        ]);
    
        
        //dd(auth()->user()->id);
        try {
            Property::create([
                'property_name' => $request->input('property_name'),
                'property_address' => $request->input('property_address'),
                'property_price' => $request->input('property_price'),
                'property_type' => $request->input('property_type'),
                'no_of_bedrooms' => $request->input('no_of_bedrooms'),
                'no_of_bathrooms' => $request->input('no_of_bathrooms'),
                'area_size' => $request->input('area_size'),
                'image_link' => $request->input('image_link'),
                'property_description' => $request->input('property_description'),
                'user_id' => $request->input('user_id'),
                // 'user_id' => auth()->user()->id,
            ]);
    
            session()->flash('message', 'Your property has been added');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('message', 'Your property adding having a problem');
        }
    
        return redirect(route('dashboard.listing'));
    }

    public function showProperty(){

        // SQL
        $property_db = DB::select("select * from property");
        
        // Query
        
        // Retrieve the currently authenticated user...
        // if (Auth::check()) {
        
        //     $user = Auth::user(); // Blade : {{Auth::user()->name}}
        //     $id = Auth::id();
        //     $id = Auth::name();
        
        // }
        
        // Past Array into view
        return view('/pages/property-grid', ["v_property" => $property_db] );
        
        
        }
        public function showPropertyLast(){

            // SQL
            $property_db = DB::table("property")->orderBy('property_id', 'desc')->take(3)->get();
            
                       
            // Past Array into view
            return view('/pages/index', ["v_property" => $property_db] );
            
            
        }
    public function contact()
    {
        $contact = DB::select("select * from contact_form inner join property inner join users on contact_form.property_id=property.property_id and property.user_id=users.id where id = '".auth()->user()->id."'");
        return view('/pages/dashboard/contact', ['data' => $contact]);
    }

    
    public function contactProperty(Request $request){

        $agent = new ContactForm();

        $agent->contact_name = $request->contact_name;
        $agent->contact_phone_number = $request->contact_phone_number;
        $agent->contact_email = $request->contact_email;
        $agent->contact_message = $request->contact_message;
        $agent->property_id = $request->property_id;

        $agent->save();

        return redirect('/')->with('message', 'Contacts Has Been Registered');
    }

}
