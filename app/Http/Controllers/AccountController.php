<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index(){
        $accounts = Account::all();
        return view('/accounts/home', compact('accounts'));
    }

    public function register()
    {

        return view('account.register');
    }

    public function create (Request $request)
    {

        $account = new Account();

        $account->cuenta_gitlab   = $request->cuenta_gitlab ;
        $account->cuenta_jira     = $request->cuenta_jira ;
        $account->cuenta_glpi     = $request->cuenta_glpi ;
        $account->cuenta_da       = $request->cuenta_da ;

        $account->save();

        return view('/account/register');
    }
}

