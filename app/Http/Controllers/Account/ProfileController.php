<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Account\UpdateProfile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.account.profile.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile $request)
    {
        // Validate the form.
        $validator = $request->validated();

        // Update the user's profile.
        Auth::user()->name_first = $validator['name_first'];
        Auth::user()->name_last = $validator['name_last'];
        Auth::user()->email = $validator['email'];
        Auth::user()->save();

        Session::flash('message', 'Your account has been updated.');
        Session::flash('title', 'Heads up.');
        Session::flash('color', 'bg-emerald-400');

        // Return the user back.
        return redirect()->route('account.profile.index');
    }
}
