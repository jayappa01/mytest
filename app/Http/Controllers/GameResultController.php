<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameResultController extends Controller
{
    //

    
    public function handleAllResults() {
        return \View::make('Broker.All_Results');
    }

    public function handleEverydaysResults() {
        return \View::make('User.Everydays_Results');
    }

     public function handleSeeGameResults() {
        return \View::make('User.Game_Results');
    }

    
}
