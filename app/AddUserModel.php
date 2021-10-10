<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;

class AddUserModel extends Model
{
     public function CreateUser($data) {

      $intUserId = $data['UserID'];
      $arrUser = [
		'name' => $data['UserName'],
		'user_name' => $data['UserName'],
		'email' => $data['email_id'],
		'password' => $data['Password'],
		'user_type' => $data['userType'],
		'phone_no' => $data['sec_mobile'],
		'mobile_no' => $data['Mobile'],
		'is_active' => $data['UserActive'],
      ];

		DB::beginTransaction();
		if( isset( $intUserId ) ) {
			try {
				    $arrUpdateUser = \DB::table('gameusers') ->where('id', $intUserId) ->limit(1) ->update( $arrUser ); 
					
					$arrUpdateUserDetail = \DB::table('user_details') ->where('user_id', $intUserId) ->limit(1) ->update( ['address'=>$data['Address'],'state'=>$data['State'],'pincode' => $data['pincode'],	'partnership_percentage' =>$data['userpercentage'],'type_play' => $data['type_play'], 'own_game' => $data['OwnGame'], 'account_no' => $data['AccNumber'], 'ifsc_code' => $data['Ifsc'] ] ); 
			     DB::commit();
			} catch (\Exception $e) {
			    DB::rollback();
			}
		} else {
			try {
				$intUserId = DB::table('gameusers')->insertGetId( $arrUser );
			   	$arrUserDetails =  DB::table('user_details')->insert( ['user_id'=>$intUserId,'address'=>$data['Address'],'state'=>$data['State'],'pincode' => $data['pincode'],'type_play' =>$data['type_play'],'partnership_percentage' =>$data['userpercentage'], 'own_game' => $data['OwnGame'], 'account_no' => $data['AccNumber'], 'ifsc_code' => $data['Ifsc'] ]);

			     DB::commit();
			} catch (\Exception $e) {
			    DB::rollback();
			}
	}
    
    }
}
