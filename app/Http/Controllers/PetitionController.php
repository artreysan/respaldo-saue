<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Account;
use App\Models\Equipment;
use App\Models\Authorizer;
use App\Models\Enterprise;
use App\Models\Collaborator;
use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    public function index(){

        $petitions = Petition::all();

        return view('/petition/home', compact('petitions'));
    }

    public function register()
    {
        $collaborators = Collaborator::all();
        $authorizers   = Authorizer::all();
        $enterprises   = Enterprise::all();
        $equipment     = Equipment::all();
        $accounts      = Account::all();

        return view('/petition/register', compact('authorizers','collaborators','enterprises','equipment','accounts'));
    }

    public function create (Request $request)
    {

        $petition = new Petition();

        $petition->collaborator_id   = $request->collaborator_id;
        $petition->equipment_id      = $request->equipment_id;
        $petition->vpn               = $request->vpn;
        $petition->ip_fija           = $request->ip_fija;
        $petition->internet          = $request->internet;
        $petition->cuenta_gitlab     = $request->cuenta_gitlab;
        $petition->cuenta_glpi       = $request->cuenta_glpi;
        $petition->cuenta_jira       = $request->cuenta_jira;
        $petition->cuenta_da         = $request->cuenta_da;
        $petition->tipo              = $request->tipo;
        $petition->marca             = $request->marca;
        $petition->serie             = $request->serie;
        $petition->mac_ethernet      = $request->mac_ethernet;
        $petition->mac_wifi          = $request->mac_wifi;
        $petition->propietario       = $request->propietario;

        $petition->save();

        $petitions = Petition::all();

        return view('/petition/home', compact('petitions'));


    }

}
