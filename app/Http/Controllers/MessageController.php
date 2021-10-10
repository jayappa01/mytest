<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
     public function handleMessage() {
        return \View::make('Broker.Your_Message');
    }

     public function handleGuessingManager() {
        return \View::make('User.Guessing');
    }

     public function handleMessagingUsers() {
        return \View::make('Broker.Messaging_Users');
    }

    //  public function handlePaymentProblem() {
    //     return \View::make('Broker.Your_Message');
    // }
    
    
    
}
