$(document).ready(function() {
	
});
  
$.ajaxSetup({
	headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

//close dialog
$('#btnclose').click(function(e){
	$('#error_msg').hide();
});

//add Double game
$('#add_double_game').click(function(e) {
	 e.preventDefault();
	var url = 'AddGame';
    var GameName= $('#GameName').val();
	var GameNumber = $('#GameNumber').val();
	var StartTime = $('#StartTime').val();
	var EndTime = $('#EndTime').val();
	var ShutBefore = $('#ShutBefore').val();
	var days = $('#days').val();
	var GameActive= $('#GameActive').val();
	var Playable = $('#Playable').val();
	var Team = $('#Team').val();
	var UserID = $('#UserID').val();
	var GameId = $('#GameId').val();

	$.ajax({
		url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, GameName:GameName,GameNumber:GameNumber,StartTime:StartTime,
        	EndTime:EndTime,ShutBefore:ShutBefore,days:days,GameActive:GameActive,
        	Playable:Playable,Team:Team,UserID:UserID,GameId:GameId},
		}).done(function (data) {
			console.log(data.message);
		$('#error_msg').show();
		$('#error_msg').addClass('alert-success');
		$('#error_msg').html(data.message);
		setTimeout(function() { 
			$("#error_msg").fadeOut(1500); 

  		window.location.href = "Add-Double-Game";
		}, 5000)

		}).fail(function(data){
				var response = JSON.parse(data.responseText);
				var errorString = '<ul>';
				$.each( response.errors, function( key, value) {
				errorString += '<li>' + value + '</li>';
			});
		errorString += '</ul>';
		$('#error_msg').show();
		$('#error_msg').addClass('alert-danger');
		$('#error_msg').html(errorString);
		// setTimeout(function() { $("#error_msg").fadeOut(1500); }, 5000)
		});
		
});
// add sindle game

//Edit user

$('#add_Single_game').click(function(e) {
	 e.preventDefault();
	var gameTime_arr1 = [];
	for( var i =1; i<=12; i++) {
		var time = $('#Time'+i).val();
		gameTime_arr1.push(time);
	}
	var url = 'AddSingleGame';
    var GameName= $('#GameName').val();
	var GameNumber = $('#GameNumber').val();
	var StartTime = $('#StartTime').val();
	var EndTime = $('#EndTime').val();
	var ShutBefore = $('#ShutBefore').val();
	var days = $('#days').val();
	var GameActive= $('#GameActive').val();
	var Playable = $('#Playable').val();
	var Team = $('#Team').val();
	var UserID = $('#UserID').val();
	var GameId = $('#GameId').val();

	$.ajax({
		url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, GameName:GameName,GameNumber:GameNumber,StartTime:StartTime,
        	EndTime:EndTime,ShutBefore:ShutBefore,days:days,GameActive:GameActive,
        	Playable:Playable,Team:Team,UserID:UserID,GameId:GameId,gameTimeArr:gameTime_arr1},
		}).done(function (data) {
			console.log(data.message);
		$('#error_msg').show();
		$('#error_msg').addClass('alert-success');
		$('#error_msg').html(data.message);
		setTimeout(function() { 
			$("#error_msg").fadeOut(1500); 

  		window.location.href = "Add-Single-Game";
		}, 5000)

		}).fail(function(data){
				var response = JSON.parse(data.responseText);
				var errorString = '<ul>';
				$.each( response.errors, function( key, value) {
				errorString += '<li>' + value + '</li>';
			});
		errorString += '</ul>';
		$('#error_msg').show();
		$('#error_msg').addClass('alert-danger');
		$('#error_msg').html(errorString);
		// setTimeout(function() { $("#error_msg").fadeOut(1500); }, 5000)
		});
		
});
//Listing

function showdatatable(){
	$('#GameList').DataTable({
	"destroy": true,
	        "dom": '<"row no-gutters"<"col col-auto"l><"col"f><"col col-auto">> <"row no-gutters"<"col "<"table-responsive"rt>>><"row"<"col"i><"col"p>>',
	        "serverSide": true,
	        "searching": true,
	        "processing": true,
	        "ajax": {
	        type: "POST",
	                headers: {
	                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                },
	                url:'/showGamelist',
	                data: {'_token': $('meta[name="csrf-token"]').attr('content')},
	        }
	});
}
