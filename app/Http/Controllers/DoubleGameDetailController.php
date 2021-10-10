<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameDetailModel; 
use DB;

class DoubleGameDetailController extends Controller
{
    //
     public function handleCreateDoubleGame() {

    	$arrUserDetails =DB::table('gameusers')->select('id','user_name')->get();
		$arrGameDetails =DB::table('games')->select()->where('game_type', 2)->get();

        return view('Broker.Add_Game_Double_Result',compact('arrUserDetails','arrGameDetails'));

    }

	public function handleEditGame(Request $request) {
		$post = $request->post();
		  DB::connection()->enableQueryLog();
		$arrGameDetails = DB::table('games')->where( 'id',$post['game_id'] )->first();
        return json_encode($arrGameDetails);
	}

	public function handleDeleteDoubleGame(Request $request) {
       $post = $request->post();
       $arrGameDetails =  DB::table('games')->where('id', $post['game_id'])->delete();
	   return json_encode($arrGameDetails);
    }

	public function handleAddGame(Request $request) {

		$post = $request->post();

		 $request->validate([
            'GameName' => 'required',
            'StartTime' => 'required',
            'EndTime' => 'required',
            'days' => 'required',
            'Team' => 'required',
        ]);

		$GameDetailModel = new GameDetailModel;
        $GameDetailModel->CreateDoubleGame($request->all());

        if( isset($post['GameId'])){
 			$massege =  [
                'success' => true,
                'message' => 'Game Updated successfully'
            ];
        } else {
        	 $massege =  [
                'success' => true,
                'message' => 'Game Added successfully'
            ];
        }

		 return response()->json($massege);
	
	}

}
