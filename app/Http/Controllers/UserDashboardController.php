<?php

    public function handleAddUser() {
        return \View::make('Broker.Add_User');
    }

    public function handleCreateGameResult() {
                ->select('games.id as Gameid' ,'games.game_name','games.serial_number','games.open_time','games.close_time','game_results.id','game_results.openpanna','game_results.open','game_results.closepanna','game_results.close')
                ->where('games.game_type',2)->get();

        return \View::make('Broker.Add_Results',compact('arrGameDetails'));
    }

    public function handleAddGame() {
      return \View::make('Broker.Add_Game');
    }

    public function handleUserAccount() {
      return \View::make('User.User_Account');
    }

    public function handleSeeHistory() {
      return \View::make('User.See_History');
    }

    public function handleGuessing() {
      return \View::make('User.Guessing');
    }
    
    public function handleAdminMessage() {
      return \View::make('User.Admin_Message');
    }

    public function handleMyBalance() {
      return \View::make('User.My_Balance');
    }

    public function handleUserRecharge() {
      return \View::make('User.Payment_Method');
    }

    public function handleSeeHisab() {
      return \View::make('User.See_Hisab');
    }

    public function handleGameResults() {
      return \View::make('User.Game_Results');
    }

    public function handleBalanceRecords() {
      return \View::make('User.Balance_Records');
    }

    public function handleBuyGuessing() {
      return \View::make('User.Buy_Guessing');
    }

    public function handleHistoryType() {
      return \View::make('User.History_Type');
    }

    public function handleHistoryDoubleGame() {
      return \View::make('User.History_Double_Game');
    }

    public function handleHistoryDoubleGameOpen() {
      return \View::make('User.History_Double_Game_Open');
    }

    public function handleHistoryDoubleGameClose() {
      return \View::make('User.History_Double_Game_Close');
    }

    public function handlePaymentMethod() {
      return \View::make('User.Payment_Method');
    }

    
}
