<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function bankingTransactions()
    {
    	return view('banking_transactions');
    }

    public function accountStatus()
    {
    	return view('account_status');
    }
}
