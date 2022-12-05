<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Account;
use App\Models\Service;
use App\Models\Location;
use App\Models\Equipment;
use App\Models\Enterprise;
use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{

    public function index(){

        $collaborators = Collaborator::all();

        return view('collaborator/index', compact('collaborators'));
    }

    public function create(){

        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        $collaborator = new Collaborator();
        return view('collaborator/create', compact('collaborators','enterprises','equipment','locations','accounts','rols'));
    }

    public function store (Request $request)
    {

        $collaborator = new Collaborator();

        $collaborator->nombre             = $request->nombre;
        $collaborator->apellido_paterno   = $request->apellido_paterno;
        $collaborator->apellido_materno   = $request->apellido_materno;
        $collaborator->rol_id             = $request->rol_id;
        $collaborator->email              = $request->email;
        $collaborator->enterprise_id      = $request->enterprise_id;
        $collaborator->location_id        = $request->location_id;
        $collaborator->nodo               = 0;
        $collaborator->ip                 = 0;
        $collaborator->vpn                = 0;
        $collaborator->internet           = 0;
        $collaborator->account_gitlab     = 0;
        $collaborator->account_glpi       = 0;
        $collaborator->account_jira       = 0;
        $collaborator->account_da         = 0;

        $collaborator->save();

        $collaborators = Collaborator::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $accounts      = Account::all();
        $rols          = Rol::all();

        return view('collaborator/index', compact('collaborators','enterprises','equipment','locations','accounts','rols'));

    }

    public function show($id)
    {
        $accounts      = Account::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $locations     = Location::all();
        $rols          = Rol::all();
        $services      = Service::all();

        $collaborator = Collaborator::find($id);

        return view('collaborator/show', compact('collaborator'));
    }

}
