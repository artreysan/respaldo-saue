<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Account;
use App\Models\Location;
use App\Models\Equipment;
use App\Models\Enterprise;
use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{

    public function index(){

        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        return view('/collaborators/home', compact('collaborators','enterprises','equipment','locations','accounts','rols'));
    }

    public function register()
    {
        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        return view('/collaborators/register', compact('collaborators','enterprises','equipment','locations','accounts','rols'));

    }

    public function create (Request $request)
    {

        $collaborator = new Collaborator();

        $collaborator->nombre             = $request->nombre;
        $collaborator->apellido_paterno   = $request->apellido_paterno;
        $collaborator->apellido_materno   = $request->apellido_materno;
        $collaborator->email              = $request->email;
        $collaborator->location_id        = $request->location_id;
        $collaborator->rol_id             = $request->rol_id;
        $collaborator->equipment_id       = $request->equipment_id;
        $collaborator->enterprise_id      = $request->enterprise_id;

        $collaborator->save();

        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        return view('/collaborators/home', compact('collaborators','enterprises','equipment','locations','accounts','rols'));

    }

    public function show(){

        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        return view('/collaborators/detail', compact('collaborators','enterprises','equipment','locations','accounts','rols'));
    }

}
