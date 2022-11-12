<?php

namespace App\Http\Controllers;

use App\Models\Authorizer;
use Illuminate\Http\Request;

class AuthorizerController extends Controller
{
    public function show(){
        $equipments = Authorizer::all();
        return view('authorizer.home', compact('authorizers'));
    }

}
