<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function handleUserDashboard() {
        return \View::make('User.User_Dashboard');
    }

     public function handlePlayGame() {
        return \View::make('User.Play_Game');
    }

 	public function handleStartDoubleGame() {
        return \View::make('User.Start_Double_Game');
    }

    public function handlePlayDoubleGameOpen() {
       return \View::make('User.Play_Double_Game_Open');
    }
    public function handlePlayDoubleGameClose() {
        return \View::make('User.Play_Double_Game_Close');
    }

     public function handleStartSingleGame() {
        return \View::make('User.Start_Single_Game');
    }

      public function handlePlaySingleGameOpen() {
        return \View::make('User.Play_Single_Game_Open');
    }

}
