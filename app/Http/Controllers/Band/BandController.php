<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    function get_page(){

        return view('frontend.band.band');
    }
}
