<?php

use Illuminate\Support\Facades\Route;

//admin Get
Route::get('/Admin-Dashboard', 'AdminController@handleAdminDashboard')->name('Admin-Dashboard');

Route::get('/Add-Double-Game','DoubleGameDetailController@handleCreateDoubleGame')->name('Add-Double-Game');

Route::get('/Add-Game-Result','UserDashboardController@handleCreateGameResult')->name('Add-Game-Result');

Route::get('/Add-Game','UserDashboardController@handleAddGame')->name('Add-Game');
Route::get('/All-Results','GameResultController@handleAllResults')->name('All-Results');
Route::get('/Everydays-Results','GameResultController@handleEverydaysResults')->name('Everydays-Results');
Route::get('/Recharge','RechargeController@handleAddRecharge')->name('Recharge');

Route::get('/User-Recharge','RechargeController@handleAddUserRecharge')->name('User-Recharge');

Route::get('/Paytm-Gateway','RechargeController@handlePaytmGateway')->name('Paytm-Gateway');

Route::get('/G-pay-Gateway','RechargeController@handleGPay')->name('G-pay-Gateway');

Route::get('/Whatsapp-pay-Gateway','RechargeController@handleWhatsappPay')->name('Whatsapp-pay-Gateway');

Route::get('/Phonepe-Gateway','RechargeController@handleWhatsappPay')->name('Phonepe-Gateway');


Route::get('/Withdrawal','WithdrawalController@handleWithdrawal')->name('Withdrawal');
Route::get('/Add-User', 'AddUserController@handleCreateUser')->name('Add-User');
Route::get('/Admin-Hisab','HisabController@handleAdminHisab')->name('Admin-Hisab');
Route::get('/Message', 'MessageController@handleMessage')->name('Message');
Route::get('/Guessing-Manager','MessageController@handleGuessingManager')->name('Guessing-Manager');
Route::get('/Messaging-Users','MessageController@handleMessagingUsers')->name('Messaging-Users');
Route::get('/Advance-Double-Result-Date','AdminController@handleAdvanceDoubleResultDate')->name('Advance-Double-Result-Date');
Route::get('/Advance-Single-Result-Date','AdminController@handleAdvanceSingleResultDate')->name('Advance-Single-Result-Date');
Route::get('/Dated-Double-Result','AdminController@handleDatedDoubleResult')->name('Dated-Double-Result');
Route::get('/Dated-Single-Result','AdminController@handleDatedSingleResult')->name('Dated-Single-Result');


//User Get

Route::get('/User-Dashboard', 'UserController@handleUserDashboard')->name('User-Dashboard');
Route::get('/Play-Game', 'UserController@handlePlayGame')->name('Play-Game');
Route::get('/Start-Single-Game', 'UserController@handleStartSingleGame')->name('Start-Single-Game');
Route::get('/Play-Single-Game-Open', 'UserController@handlePlaySingleGameOpen')->name('Play-Single-Game-Open');
Route::get('/Start-Double-Game', 'UserController@handleStartDoubleGame')->name('Start-Double-Game');
Route::get('/Play-Double-Game-Close', 'UserController@handlePlayDoubleGameClose')->name('Play-Double-Game-Close');
Route::get('/Play-Double-Game-Open', 'UserController@handlePlayDoubleGameOpen')->name('Play-Double-Game-Open');
Route::get('/See-Game-Result', 'GameResultController@handleSeeGameResults')->name('See-Game-Result');
Route::get('/My-Balance', 'UserDashboardController@handleMyBalance')->name('My-Balance');
Route::get('/Admin-Message', 'UserDashboardController@handleAdminMessage')->name('Admin-Message');
Route::get('/Guessing', 'UserDashboardController@handleGuessing')->name('Guessing');
Route::get('/See-History', 'UserDashboardController@handleSeeHistory')->name('See-History');
Route::get('/User-Account', 'UserDashboardController@handleUserAccount')->name('User-Account');
Route::get('/See-Hisab', 'UserDashboardController@handleSeeHisab')->name('See-Hisab');
Route::get('/Game-Results', 'UserDashboardController@handleGameResults')->name('Game-Results');
Route::get('/Balance-Records', 'UserDashboardController@handleBalanceRecords')->name('Balance-Records');
Route::get('/Buy-Guessing', 'UserDashboardController@handleBuyGuessing')->name('Buy-Guessing');
Route::get('/History-Type', 'UserDashboardController@handleHistoryType')->name('History-Type');
Route::get('/History-Double-Game', 'UserDashboardController@handleHistoryDoubleGame')->name('History-Double-Game');
Route::get('/History-Double-Game-Open', 'UserDashboardController@handleHistoryDoubleGameOpen')->name('History-Double-Game-Open');
Route::get('/History-Double-Game-Close', 'UserDashboardController@handleHistoryDoubleGameClose')->name('History-Double-Game-Close');
Route::get('/Payment-Method', 'UserDashboardController@handlePaymentMethod')->name('Payment-Method');



//Post User
Route::post('/AddUser', 'AddUserController@handleAddUser')->name('AddUser');
Route::post('/Edit-User', 'AddUserController@handleEditUser')->name('Edit-User');

Route::post('/AddGame', 'DoubleGameDetailController@handleAddGame')->name('AddGame');
Route::post('/Edit-Double-Game', 'DoubleGameDetailController@handleEditGame')->name('Edit-Double-Game');
Route::post('/Delete-Double-Game', 'DoubleGameDetailController@handleDeleteDoubleGame')->name('Delete-Double-Game');

Route::get('/Add-Single-Game','SingleGameDetailController@handleCreateSingleGame')->name('Add-Single-Game');
Route::post('/AddSingleGame', 'SingleGameDetailController@handleAddSingleGame')->name('AddSingleGame');
Route::post('/Edit-Single-Game', 'SingleGameDetailController@handleEditSingleGame')->name('Edit-Single-Game');
Route::post('/Delete-Single-Game', 'SingleGameDetailController@handleDeleteSingleGame')->name('Delete-Single-Game');


Route::get('/', function () {
    return view('User.login');
});


