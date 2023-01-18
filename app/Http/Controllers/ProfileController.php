<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $profile = Customer::all();
        return view('profile',compact('profile'));
    }

}
