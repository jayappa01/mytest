<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddDoubleGameResultController extends Controller
{
    //
     public function handleAddDoubleGame() {
        return \View::make('Broker.Add_Game_Double_Result');
    }

     public function handleAddDoubleGameResult() {
        return \View::make('Broker.Add_Result');
    }
}
