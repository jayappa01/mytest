<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function handleAdminDashboard() {
        return \View::make('Broker.Admin_Dashboard');
    }

    public function handleAdvanceDoubleResultDate() {
        return \View::make('Broker.Advance_Double_Result_Date');
    }

    public function handleAdvanceSingleResultDate() {
        return \View::make('Broker.Advance_Single_Result_Date');
    }

    public function handleDatedDoubleResult() {
        return \View::make('Broker.Dated_Double_Result');
    } 

    public function handleDatedSingleResult() {
        return \View::make('Broker.Dated_Single_Result');
    }




    

    
}
