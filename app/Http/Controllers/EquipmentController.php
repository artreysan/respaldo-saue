<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\View;
use App\Http\Controllers\Controller;
use App\Models\Collaborator;
use Illuminate\Support\Facades\Redirect;
=======
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440

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

    public function update(Request $request, $id)
    {

        $equipment = Equipment::findOrFail($id);

        $equipment->propietario     = $request->propietario;

        $equipment->save();

        $equipment = Equipment::all();
        return view('petitions/index', compact('petitions'));
    }

    public function show($id)
    {
        $collaborators = Collaborator::all();
        $equipment = Equipment::find($id);


        return view('equipment/show', compact('collaborators', 'equipment'));
    }

}
