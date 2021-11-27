<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;

class GameDetailModel extends Model
{

     public function CreateDoubleGame($data) {

	    $intGameId = $data['GameId'];
	    $arrGameDetails = [
			'game_name' => $data['GameName'],
			'serial_number' => $data['GameNumber'],
			'game_type' => 2,
			'open_time' => $data['StartTime'],
			'close_time' => $data['EndTime'],
			'shut_before' => $data['ShutBefore'],
			'day_of_game' => $data['days'],
			'active' => $data['GameActive'],
			'payble' => $data['Playable'],
			'team' => $data['Team'],
			'user_id' => $data['UserID'],
	    ];

		DB::beginTransaction();
			DB::enableQueryLog();
		if( isset( $intGameId ) ) {
			try {

				DB::table('games') ->where('id', $intGameId) ->limit(1) ->update( $arrGameDetails ); 
			     DB::commit();
			} catch (\Exception $e) {
			    DB::rollback();
			}
		} else {
			try {
				 DB::table('games')->insert( $arrGameDetails );
			     DB::commit();
			} catch (\Exception $e) {
				dd($e);
			    DB::rollback();
			}
		}
    
    }

    public function CreateSingleGame($data) {
	    $intGameId = $data['GameId'];
	    $arrGameDetails = [
			'game_name' => $data['GameName'],
			'serial_number' => $data['GameNumber'],
			'game_type' => 1,
			'shut_before' => $data['ShutBefore'],
			'day_of_game' => $data['days'],
			'active' => $data['GameActive'],
			'payble' => $data['Playable'],
			'team' => $data['Team'],
			'user_id' => $data['UserID'],
	    ];

		DB::beginTransaction();
		if( isset( $intGameId ) ) {
			try {

				DB::table('games') ->where('id', $intGameId) ->limit(1) ->update( $arrGameDetails ); 
				DB::table('single_game_times')->where('game_id', $intGameId)->delete();
				foreach ($data['gameTimeArr'] as $gameTime) {
					if(!empty($gameTime)) {
						$gametime = DB::table('single_game_times')->insert( ['game_id'=> $intGameId,'schedule_time'=>$gameTime] );
					}
				}
		
			     DB::commit();
			} catch (\Exception $e) {
			    DB::rollback();
			}
		} else {
			try {
				$intGameId = DB::table('games')->insertGetId( $arrGameDetails );

				foreach ($data['gameTimeArr'] as $gameTime) {
					if(!empty($gameTime)) {
						$gametime = DB::table('single_game_times')->insert( ['game_id'=> $intGameId,'schedule_time'=>$gameTime] );
					}
				}

			     DB::commit();
			} catch (\Exception $e) {
			
			    DB::rollback();
			}
		}
    
    }

    
     public function AddDoubleGameResult($data) {
     	// dd($data);

     	$intResultType = $data['result_type'];
     	$intGameId = $data['gameid'];
     	$intResultId = $data['result_id'];

     	DB::beginTransaction();
			DB::enableQueryLog();
		if( isset( $intResultId ) && $intResultType == 2 ) {
			$arrGameDetails = [
				'closepanna' => $data['panna'],
				'close' => $data['patti']
			];
			try {

				DB::table('game_results') ->where('id',$intResultId) ->limit(1) ->update( $arrGameDetails ); 
				DB::enableQueryLog();
			     DB::commit();
			} catch (\Exception $e) {
			    DB::rollback();
			}
		} else {
			if( false == isset( $intResultId ) && $intResultType == 1 ) {
			$arrGameDetails = [
				'game_id' => $data['gameid'],
				'openpanna' => $data['panna'],
				'open' => $data['patti']
			];

				try {
					 DB::table('game_results')->insert( $arrGameDetails );
				     DB::commit();
				} catch (\Exception $e) {
					dd($e);
				    DB::rollback();
				}
			}
     	}
	}
}
