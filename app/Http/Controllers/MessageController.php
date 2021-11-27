<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MessageModel; 
use DB;


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



    public function handleEditUserMsg(Request $request) {
        $post = $request->post();
          DB::connection()->enableQueryLog();

        $arrUserDetails = DB::table('gameusers')
                ->join( 'user_details', 'gameusers.id', '=', 'user_details.user_id' )
                ->select( 'user_details.user_id','gameusers.user_name', 'user_details.state', 'user_details.address' ,'user_details.pincode' ,'user_details.type_play' , 'user_details.account_no','user_details.ifsc_code', 'user_details.partnership_percentage','user_details.own_game', 'gameusers.user_name', 'gameusers.email','gameusers.password','gameusers.user_type', 'gameusers.phone_no','gameusers.is_active','gameusers.mobile_no')->where( 'user_id',$post['userid'] )->first();
                // print_r(DB::getQueryLog());
             return json_encode($arrUserDetails);
    }

    public function handleDeleteUserMsg(Request $request) {
        
    }

    public function handleAddUserMsg(Request $request) {
        $post = $request->post();
dd($post);
         $request->validate([
            'UserName' => 'required',
            'email_id' => 'required',
            'Password' => 'required',
            'Mobile' => 'required',
            'userType' => 'required',
            'pincode' => 'required',
        ]);

        $MessageModel = new MessageModel;
        $MessageModel->CreateUserMsg($request->all());

        if( isset($post['UserID'])){
            $massege =  [
                'success' => true,
                'message' => 'Data Updated successfully'
            ];
        } else {
             $massege =  [
                'success' => true,
                'message' => 'Data inserted successfully'
            ];
        }
    
         return response()->json($massege);
    
    }

     public function handlePaymentProblem() {
        return \View::make('Broker.payment-problem');
    }
    
    public function handleFrontEndMessage() {
        return \View::make('Broker.front-end-message');
    }

    public function handlePopUpMessage() {
        return \View::make('Broker.Pop-up-Message');
    }
    




    
    
    
}
