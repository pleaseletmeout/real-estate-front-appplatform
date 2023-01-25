<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function index()
    {
        $p = DB::table('property')->orderBy('property_id','desc' )->take(3)->get(); 
        return view('/pages/index', ['v_property' => $p]);
    }

    public function about()
    {
        return view('/pages/about');
    }

    public function agentSingle()
    {
        return view('/pages/agent-single');
    }

    public function agentsGrid()
    {
        return view('/pages/agents-grid');
    }

    public function blogSingle()
    {
        return view('/pages/blog-single');
    }

    public function blogGrid()
    {
        return view('/pages/blog-grid');
    }

    public function contact()
    {
        return view('/pages/contact');
    }

    public function propertySingle($id)
    {
        //$property_db = DB::select("select * from property where property_id='".$id."'");
        $property_db = DB::select("select * from property inner join users on property.user_id=users.id where property_id='".$id."'");
        // dd($property_db);
        return view('/pages/property-single')->with("property", $property_db);
    }

    public function propertyGrid()
    {
        return view('/pages/property-grid');
    }

    public function dashboard()
    {
        return view('/pages/dashboard/index');
    }
}
