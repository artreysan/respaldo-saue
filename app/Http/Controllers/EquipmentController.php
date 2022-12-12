<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{

    public function index(){
        $equipments = Equipment::all();
        return view('equipment.home', compact('equipments'));
    }

    public function register()
    {

        return view('equipment.register');
    }

    public function create (Request $request)
    {

        $equipment = new Equipment();

        $equipment->tipo            = $request->tipo;
        $equipment->marca           = $request->marca;
        $equipment->modelo          = $request->modelo;
        $equipment->serie           = $request->serie;
        $equipment->mac_ethernet    = $request->mac_ethernet;
        $equipment->mac_wifi        = $request->mac_wifi;
        $equipment->propietario     = $request->propietario;

        $equipment->save();

        return view('/equipment/register');
    }
}
