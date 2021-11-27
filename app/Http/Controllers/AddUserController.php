<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AddUserModel; 
use DB;

class AddUserController extends Controller
{

	public $timestamps = true;
 
    public function handleCreateUser() {
    	$arrStates = DB::table('states')->select('id','state_code','state')->get();

    	$arrUserDetails =DB::table('gameusers')
                ->join('user_details', 'gameusers.id', '=', 'user_details.user_id')
                ->select('user_details.user_id','gameusers.user_name', 'user_details.state','user_details.partnership_percentage','user_details.own_game', 'gameusers.user_name', 'gameusers.email','gameusers.password','gameusers.user_type', 'gameusers.phone_no','gameusers.mobile_no')
                ->get();

        return view('Broker.Add_User',compact('arrUserDetails', 'arrStates'));
    }


	public function handleEditUser(Request $request) {
		$post = $request->post();
		  DB::connection()->enableQueryLog();

		$arrUserDetails = DB::table('gameusers')
                ->join( 'user_details', 'gameusers.id', '=', 'user_details.user_id' )
                ->select( 'user_details.user_id','gameusers.user_name', 'user_details.state', 'user_details.address' ,'user_details.pincode' ,'user_details.type_play' , 'user_details.account_no','user_details.ifsc_code', 'user_details.partnership_percentage','user_details.own_game', 'gameusers.user_name', 'gameusers.email','gameusers.password','gameusers.user_type', 'gameusers.phone_no','gameusers.is_active','gameusers.mobile_no')->where( 'user_id',$post['userid'] )->first();
                // print_r(DB::getQueryLog());
             return json_encode($arrUserDetails);
    }

    public function handleAddUser(Request $request) {
		$post = $request->post();

		 $request->validate([
            'UserName' => 'required',
            'email_id' => 'required',
            'Password' => 'required',
            'Mobile' => 'required',
            'userType' => 'required',
            'pincode' => 'required',
        ]);

		$AddUserModel = new AddUserModel;
        $AddUserModel->CreateUser($request->all());

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

}
