<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return view('pages/dashboard/profile')->with('profile', $request->user());
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $user->update($request->except(['_token', '_method']));

        // dd($request->except(['_token', '_method']));


        return redirect(route('dashboard.profile'))->with('user');
        
    }
}
