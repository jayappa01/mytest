<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    //
     public function handleWithdrawal() {
        return \View::make('Broker.User_Withdrawal');
    }
}
