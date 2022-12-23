<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function index(){
        $enterprises = Enterprise::all();
        return view('/enterprises/home', compact('enterprises'));
    }

    public function register()
    {
        return view('/enterprises/register');
    }

    public function create (Request $request)
    {

        $enterprise = new Enterprise();

        $enterprise->nombre    = $request->nombre;
        $enterprise->contrato  = $request->contrato;

        $enterprise->save();

        return view('/enterprises/register');
    }
}
