<?php

namespace App\Http\Controllers;

use App\PackTravel;
use Illuminate\Http\Request;

class PackTravelController extends Controller
{
    public function index() {
        $packages_travels = PackTravel::all();
        // dd($packages_travels);
        return view('packagestravels',compact('packages_travels'));
    }
}
