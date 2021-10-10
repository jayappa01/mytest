<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayGameController extends Controller
{
    //
     public function handleAddSingleGame() {
        return \View::make('Broker.Add_Game_Double_Result');
    }
}
