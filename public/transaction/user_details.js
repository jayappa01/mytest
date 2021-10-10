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

//add user
$('#add_user').click(function(e){
	 e.preventDefault();
	var url = 'AddUser';
    var UserName= $('#UserName').val();
	var UserID = $('#UserID').val();
	var email_id = $('#email_id').val();
	var Password = $('#Password').val();
	var Mobile = $('#Mobile').val();
	var sec_mobile = $('#sec_mobile').val();
	var userType= $('#userType').val();
	var Partnership = $('#Partnership').val();
	var userpercentage = $('#userpercentage').val();
	var OwnGame = $('#OwnGame').val();
	var Address = $('#Address').val();
	var AccNumber = $('#AccNumber').val();
	var Ifsc = $('#Ifsc').val();
	var UserActive = $('#UserActive').val();
	var pincode = $('#pincode').val();
	var State = $('#State').val();
	var type_play = $('#type_play').val();

	$.ajax({
		url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, UserName:UserName,UserID:UserID,email_id:email_id,
        	Password:Password,Mobile:Mobile,sec_mobile:sec_mobile,userType:userType,
        	Partnership:Partnership,userpercentage:userpercentage,OwnGame:OwnGame,
        	Address:Address,AccNumber:AccNumber,Ifsc:Ifsc,UserActive:UserActive,
        	pincode:pincode,State:State,type_play:type_play},
		}).done(function (data) {
			console.log(data.message);
		$('#error_msg').show();
		$('#error_msg').addClass('alert-success');
		$('#error_msg').html(data.message);
		setTimeout(function() { 
			$("#error_msg").fadeOut(1500); 

  		window.location.href = "Add-User";
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

//Edit user


//Listing

function showdatatable(){
	$('#UserList').DataTable({
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


jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (
                key == 8 || 
                key == 9 ||
                key == 13 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });


    });
};

$('#Mobile').ForceNumericOnly();
$('#sec_mobile').ForceNumericOnly();
$('#pincode').ForceNumericOnly();