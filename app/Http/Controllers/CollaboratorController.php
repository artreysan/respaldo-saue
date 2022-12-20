<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Account;
use App\Models\Service;
use App\Models\Location;
use App\Models\Petition;
use App\Models\Equipment;
use App\Models\Enterprise;
use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{

    public function index(){

        $equipments    = Equipment::all();
        $collaborators = Collaborator::all();

        return view('collaborator/index', compact('collaborators','equipments'));
    }

    public function create(){


        $enterprises   = Enterprise::all();
        $locations     = Location::all();
        $rols          = Rol::all();

        return view('collaborator/create', compact('enterprises','locations','rols'));
    }

    public function store (Request $request)
    {

        $collaborator = new Collaborator();

        $collaborator->nombre             = $request->nombre;
        $collaborator->apellido_paterno   = $request->apellido_paterno;
        $collaborator->apellido_materno   = $request->apellido_materno;
        $collaborator->email              = $request->email;

        $collaborator->rol_id             = $request->rol_id;
        $collaborator->enterprise_id      = $request->enterprise_id;
        $collaborator->location_id        = $request->location_id;
        $collaborator->equipment_id       = $request->equipment_id;

        $collaborator->nodo               = $request->nodo;
        $collaborator->ip                 = $request->ip;
        $collaborator->vpn                = $request->vpn;
        $collaborator->internet           = $request->internet;

        $collaborator->account_gitlab     = $request->account_gitlab;
        $collaborator->account_glpi       = $request->account_glpi;
        $collaborator->account_jira       = $request->account_jira;
        $collaborator->account_da         = $request->account_da;

        $collaborator->save();

        $id = $collaborator->id;

        $equipments    = Equipment::all();
        $collaborator  = Collaborator::find($id);
        $petitions     = Petition::where('collaborator_id', $id)->get(['id', 'fileID', 'created_at', 'status']);

        return view('collaborator/show', compact('collaborator', 'equipments', 'petitions'));

    }

    public function show($id)
    {
        $equipments    = Equipment::all();
        $collaborator  = Collaborator::find($id);
        $petitions     = Petition::where('collaborator_id', $id)->get(['id','fileID', 'created_at','status']);

        return view('collaborator/show', compact('collaborator', 'equipments','petitions'));
    }

    public function update(Request $request, $id){


        $petitions = Petition::find($id);
        $equipments = Equipment::find($id);
        $collaborator = Collaborator::findOrFail($id);

        $collaborator->nodo     = $request->nodo;
        $collaborator->ip       = $request->ip;
        $collaborator->vpn      = $request->vpn;
        $collaborator->internet = $request->internet;

        $collaborator->account_gitlab = $request->account_gitlab;
        $collaborator->account_glpi   = $request->account_glpi;
        $collaborator->account_jira   = $request->account_jira;
        $collaborator->account_da     = $request->account_da;

        $collaborator->equipment_id  = $request->equipment_id;

        $collaborator->save();

        $equipments    = Equipment::all();
        $collaborator  = Collaborator::find($id);
        $petitions     = Petition::all();

        return view('collaborator/show', compact('collaborator', 'equipments', 'petitions'));

    }

}
