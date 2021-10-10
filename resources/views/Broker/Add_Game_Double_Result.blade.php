
@include('header.nav_bar_head')
@include('header.nav_bar_toe')

<link rel="stylesheet" type="text/css" href="{{asset('public/css/custom.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body">
      <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h5 class="card-title info">All Double Result Game</h5>
              <div class="heading-elements">
                <button class="btn btn-sm btn-info btn-lighten-4 text-black" data-toggle="modal"
                  data-target="#AddDoubleGameModel">+ Double
                  Game</button>
              </div>
            </div>

            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table id="GameList" class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Open Time</th>
                        <th>Close Time</th>
                        <th>Play Ends</th>
                        <th>Days</th>
                        <th>Active</th>
                        <th>Company</th>
                        <th>Playable</th>
                        <th>Updated</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                         @foreach($arrGameDetails as $GameDetail)
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit" id="editUser" onClick="editGamedetails('{{$GameDetail->id}}')"></i></button></td>
                        <td>{{$GameDetail->id}}</td>
                        <td>{{$GameDetail->game_name}}</td>
                        <td>{{$GameDetail->open_time}}</td>
                        <td>{{$GameDetail->close_time}}</td>
                        <td>{{$GameDetail->shut_before}} min</td>
                        <td>{{$GameDetail->day_of_game}}</td>
                        <td>{{( $GameDetail->active == 1 ) ? 'Yes' : 'No'}}</td>
                        <td>{{($GameDetail->team == 1) ? 'Admin' : ($GameDetail->team == 2) ? 'User' : 'Others' }}</td>
                        <td>{{($GameDetail->payble == 1) ? 'Yes' : 'No'}}</td>
                        <td>{{date('d/m/Y'),strtotime($GameDetail->created_date)}}</td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"  onClick="deleteGamedetails('{{$GameDetail->id}}')"></i></button></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Open Time</th>
                        <th>Close Time</th>
                        <th>Play Ends</th>
                        <th>Days</th>
                        <th>Active</th>
                        <th>Company</th>
                        <th>Playable</th>
                        <th>Updated</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <div class="modal fade" id="AddDoubleGameModel" tabindex="-1" role="dialog"
      aria-labelledby="AddDoubleGameModelTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
        <div
          class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-info">
          <div class="modal-header">
            <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Add Double Result Game</h5>
            <button type="button" class="close black font-weight-bolder" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
           <div class="alert" style="display: none;" id="error_msg"></div>
            <form class="form form-horizontal">
              <div class="form-body">
                <h4 class="form-section label-control white font-weight-bolder"><i class="icon-diamond"></i> Game
                  Details</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="GameName">Game Name</label>
                      <div class="col-md-9">
                        <input type="text" id="GameName" class="form-control border-primary" placeholder="Game Name"
                          name="GameName">

                           <input type="hidden" id="GameId" name="GameId">

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="GameNumber">Game
                        Number</label>
                      <div class="col-md-9">
                        <input type="text" id="GameNumber" class="form-control border-primary" placeholder="Game Number"
                          name="GameNumber">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="StartTime">Open Time</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="time" id="StartTime" class="form-control" name="StartTime">
                          <div class="form-control-position">
                            <i class="ft-clock black"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="EndTime">Close Time</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="time" id="EndTime" class="form-control" name="EndTime">
                          <div class="form-control-position">
                            <i class="ft-clock black"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="ShutBefore">Shut
                        Before</label>
                      <div class="col-md-9">
                        <select id="ShutBefore" name="ShutBefore" class="form-control">
                          <option value="1">1 min</option>
                          <option value="2">2 min</option>
                          <option value="3">3 min</option>
                          <option value="5">5 min</option>
                          <option value="10" selected>10 min</option>
                          <option value="15">15 min</option>
                          <option value="20">20 min</option>
                          <option value="25">25 min</option>
                          <option value="30">30 min</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="days">Days Of Game</label>
                      <div class="col-md-9">
                        <select id="days" name="days" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7" selected>7</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="GameActive">Game
                        Active</label>
                      <div class="col-md-9">
                        <select id="GameActive" name="GameActive" class="form-control">
                          <option value="1">Yes</option>
                          <option value="0" selected>NO</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Playable">Playable ?</label>
                      <div class="col-md-9">
                        <select id="Playable" name="Playable" class="form-control">
                          <option value="1">Yes</option>
                          <option value="0" selected>NO</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Team">Team</label>
                      <div class="col-md-9">
                        <select id="Team" name="Team" class="form-control">
                          <option value="1" selected>Admin</option>
                          <option value="2">User</option>
                          <option value="3">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="UserID">If Other (ID)</label>
                      <div class="col-md-9">
                        <input type="text" id="UserID" class="form-control border-primary" placeholder="Id of A User"
                          name="UserID">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-actions right">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" id="add_double_game" class="btn bg-white blue darken-4 text-uppercase">+ Add</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  


  </div>
</div>
@include('header.footer_head')
<script type="text/javascript" src="{{ asset('public/transaction/game_details.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/tables/datatable/datatables.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>

@include('header.footer_toe')
<script type="text/javascript">
  $.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

 function editGamedetails(game_id) {
 
  var url ='{!! route('Edit-Double-Game') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, game_id:game_id},
    }).done(function (data) {
      
    $('#GameName').val(data.game_name);
    $('#GameNumber').val(data.serial_number);
    $('#StartTime').val(data.open_time);
    $('#EndTime').val(data.close_time);
    $('#ShutBefore').val(data.shut_before);
    $('#days').val(data.day_of_game);
    $('#GameActive').val(data.active);
    $('#Playable').val(data.payble);
    $('#Team').val(data.team);
    $('#UserID').val(data.user_id);
    $('#GameId').val(data.id);
   
    }).fail(function(data){ 
       console.log(data); 
     });
  }

   function deleteGamedetails(game_id) {
 
  var url ='{!! route('Delete-Double-Game') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, game_id:game_id},
    }).done(function (data) {
      window.location.href = "Add-Single-Game";
   
    }).fail(function(data){ 
       console.log(data);
     });
  }
</script>