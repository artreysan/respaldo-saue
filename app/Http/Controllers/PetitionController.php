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
use Barryvdh\DomPDF\Facade\Pdf;

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

        $petition = new Petition();

        return view('/petition/register', compact('authorizers','collaborators','enterprises','equipment','accounts'));
    }

    public function downloadPdf($petition){
        $path = storage_path('pdf/');
        $pdf_name = $petition->fileID.'_sau.pdf';
        $pdf = Pdf::loadView('petition.pdf.sau', array('solicitud'=>$petition));
        $pdf->save($path.'/'.$pdf_name);
        $pdf->setPaper('a4');
        return $pdf->stream($pdf_name);
    }


    public function create (Request $request)
    {

        $petition = new Petition();

        $petition->collaborator_id   = $request->collaborator_id;
        $petition->equipment_id      = $request->equipment_id;
        $petition->vpn               = $request->vpn;
        $petition->ip_fija           = $request->ip_fija;
        $petition->internet          = $request->internet;

        $petition->account_gitlab    = $request->account_gitlab;
        $petition->account_glpi      = $request->account_glpi;
        $petition->account_jira      = $request->account_jira;
        $petition->account_da        = 0;

        $petition->access_project    = $request->access_project;

        $petition->tk_glpi_account_1          = $request->tk_glpi_account_1;
        $petition->tk_gitlab_account_1        = $request->tk_gitlab_account_1;
        $petition->tk_jira_account_1          = $request->tk_jira_account_1;
        $petition->tk_da_account_1            = $request->tk_da_account_1;

        $petition->tk_nodo_1                  = $request->tk_nodo_1;
        $petition->tk_internet_1              = $request->tk_internet_1;
        $petition->tk_ip_1                    = $request->tk_ip_1;
        $petition->tk_vpn_1                   = $request->tk_vpn_1;

        $petition->tk_glpi_account_0          = $request->tk_glpi_account_0;
        $petition->tk_gitlab_account_0        = $request->tk_gitlab_account_0;
        $petition->tk_jira_account_0          = $request->tk_jira_account_0;
        $petition->tk_da_account_0            = $request->tk_da_account_0;

        $petition->tk_nodo_0                  = $request->tk_nodo_0;
        $petition->tk_internet_0              = $request->tk_internet_0;
        $petition->tk_ip_0                    = $request->tk_ip_0;
        $petition->tk_vpn_0                   = $request->tk_vpn_0;

        $petition->status            = 0;

        $petition->startTime         = time();
        $petition->fileID            = auth()->user()->id.$petition->startTime;


        $petition->save();


        $petitions = Petition::all();
        return view('collaborator/petition/index', compact('petitions'));

    }

    public function show($id)
    {

        $collaborator = Collaborator::find($id);

        return view('collaborator/petition/show', compact('collaborator'));
    }

    public function showPetition($id)
    {

        $petition = Petition::find($id);

        return view('collaborator/petition/showPetition', compact('petition'));
    }

    public function procesoPetition(Request $request, $id)
    {

        $petition = Petition::findOrFail($id);

        $petition->status   = 1;

        return view('collaborator/petition/showPetition', compact('petition'));
    }


}
