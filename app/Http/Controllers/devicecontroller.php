<?php

namespace App\Http\Controllers;
use App\Models\device;

use Illuminate\Http\Request;



class devicecontroller extends Controller
{
    //

    function list(){

        return Device::all();

    }
    
}