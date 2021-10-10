<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameDetailModel; 
use DB;

class SingleGameDetailController extends Controller
{
    //

     public function handleCreateSingleGame() {
     	$arrUserDetails =DB::table('gameusers')->select('id','user_name')->get();
		$arrGameDetails =DB::table('games')->select()->where('game_type', 1)->get();

        return \View::make('Broker.Add_Game_Single_Result',compact('arrUserDetails','arrGameDetails'));
    }

    public function handleEditSingleGame(Request $request) {
		$post = $request->post();

		$arrGameDetails = DB::table('games')->where( 'id',$post['game_id'] )->first();

		$arrGameTimeDetails = DB::table('single_game_times')->select('schedule_time')->where('game_id', $post['game_id'])->get();

		if( true == is_object($arrGameTimeDetails) ){
			foreach ($arrGameTimeDetails as $gametimedetail) {
				$arrTimeTable[] = $gametimedetail->schedule_time;
			}
		}

		$arrGameDetails->gametimedetails = $arrTimeTable;

             return json_encode($arrGameDetails);
	}

	public function handleDeleteSingleGame(Request $request) {
        $post = $request->post();

     	$arrGameDetails = DB::table('games')->where('id', $post['game_id'])->delete();
		$arrGameTimeDetails = DB::table('single_game_times')->where('game_id', $post['game_id'])->delete();
		return json_encode($arrGameDetails);
    }

	public function handleAddSingleGame(Request $request) {

		$post = $request->post();
		 $request->validate([
            'GameName' => 'required',
            'days' => 'required',
            'Team' => 'required',
        ]);

		$GameDetailModel = new GameDetailModel;
        $GameDetailModel->CreateSingleGame($request->all());

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
