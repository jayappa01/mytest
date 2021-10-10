<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechargeController extends Controller
{
    //
     public function handleAddRecharge() {
        return \View::make('Broker.User_Recharge');
    }

    public function handleAddUserRecharge() {
        return \View::make('User.Payment_Method');
    }

    public function handlePaytmGateway() {
        return \View::make('User.Paytm_Gateway');
    }

    public function handleGPay() {
        return \View::make('User.G_pay_Gateway');
    }   

    public function handleWhatsappPay() {
        return \View::make('User.Whatsapp_pay_Gateway');
    }

    public function handlePhonepe() {
        return \View::make('User.Phonepe_Gateway');
    }


    
}
