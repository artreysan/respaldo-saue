<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Http\Controllers\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class EquipmentController extends Controller
{

    public function index(){
        $equipments = Equipment::all();
        return view('equipment/index', compact('equipments'));
    }

    public function create(){

        $equipment = new Equipment();
        return view('equipment/create');
    }


    public function store (Request $request)
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

        $equipments = Equipment::all();

        return view('equipment/index', compact('equipments'));
    }
}
