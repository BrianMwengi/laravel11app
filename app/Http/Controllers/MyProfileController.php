<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the profiles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('myprofile', ['profiles' => $profiles]);
    }
}
