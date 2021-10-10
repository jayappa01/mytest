@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body">

    <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h5 class="card-title info">All Added User</h5>
              <div class="heading-elements">
                <button class="btn btn-sm btn-info btn-lighten-4 text-black" data-toggle="modal" data-target="#AddUserModel">+ Add User</button>
              </div>
            </div>

            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table id="UserList" 
                    class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>Commission</th>
                        <th>State</th>
                        <th>Game Owner</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($arrUserDetails as $arrUserDetail)
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal" data-target="#AddUserModel" id="editUser" onClick="editUserdetails('{{$arrUserDetail->user_id}}')"><i class=" font-medium-4 la la-user"></i></button></td>
                        <td>{{$arrUserDetail->user_id}}</td>
                        <td>{{$arrUserDetail->user_name}}</td>
                        <td>{{$arrUserDetail->mobile_no}}</td>
                        <td>{{$arrUserDetail->user_type}}</td>
                         <td>{{$arrUserDetail->partnership_percentage}}</td>
                        <td>{{$arrUserDetail->state}}</td>
                        <td>{{$arrUserDetail->own_game}}</td>
                      </tr>
                  @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Edit</th>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>Commission</th>
                        <th>State</th>
                        <th>Game Owner</th>
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
    <!-- Row grouping -->

    <!-- Start Model Of This Page  -->
    <div class="modal fade" id="AddUserModel" tabindex="-1" role="dialog" aria-labelledby="AddUserModelTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
        <div
          class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-info">
          <div class="modal-header">
            <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Add User</h5>
            <button type="button" id="btnclose" class="close black font-weight-bolder" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
            <div class="alert" style="display: none;" id="error_msg"></div>
            <form class="form form-horizontal" id="userDetail" method="post">
              <div class="form-body">
                <h4 class="form-section label-control white font-weight-bolder"><i class="la la-user-plus"></i> User Details</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="UserName">User Name</label>
                      <div class="col-md-9">
                        <input type="text" id="UserName" class="form-control border-primary" placeholder="User Name" name="UserName">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="UserID">User Id</label>
                      <div class="col-md-9">
                        <input type="text" id="UserID" class="form-control border-primary" placeholder="User Id" name="UserID" readonly="readonly">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Email">Email</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="email" id="email_id" class="form-control" name="email_id" placeholder="Email">
                          <div class="form-control-position">
                            <i class="icon-envelope"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Password">Password</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="Password" id="Password" class="form-control" name="Password" placeholder="Password">
                          <div class="form-control-position">
                            ***
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Phone1">Mobile</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="tel" id="Mobile" class="form-control" name="Mobile" placeholder="Mobile Number">
                          <div class="form-control-position">
                            <i class="ft-phone"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Phone2">Secondary Mobile</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="tel" id="sec_mobile" class="form-control" name="sec_mobile" placeholder="Mobile 2">
                          <div class="form-control-position">
                            <i class="ft-phone"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="who">User Type</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select ame="userType" id="userType" class="form-control">
                            <option value="0" selected>User</option>
                            <option value="1">Broker</option>
                          </select>
                          <div class="form-control-position">
                            <i class="la la-user"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder"
                        for="Partnership">Partnership</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select id="userpercentage" name="userpercentage" class="form-control">
                            <option value="0" selected>0%</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="15">15%</option>
                            <option value="20">20%</option>
                            <option value="25">25%</option>
                            <option value="30">30%</option>
                            <option value="35">35%</option>
                            <option value="40">40%</option>
                            <option value="45">45%</option>
                            <option value="50">50%</option>
                          </select>
                          <div class="form-control-position">
                            %
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="userpercentage">Type of playing</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select id="type_play" name="type_play" class="form-control">
                            <option value="10">10% With No Commission</option>
                            <option value="9">9% With 10% Commission</option>
                          </select>
                          <div class="form-control-position">
                            <i class="la la-gamepad"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="OwnsGame">User Have Game</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select class="form-control" name="OwnGame" id="OwnGame" required>
                            <option value="0" selected="">No</option>
                            <option value="1">Yes</option>
                          </select>
                          <div class="form-control-position">
                            <i class="icon-game-controller"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="State">State</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select class="form-control" name="State" id="State" required>
                            <option value="" disabled="" selected="">Select Your State</option>
                            @foreach($arrStates as $state)
                              <option value="{{ $state->state_code }}">{{ $state->state }}</option>
                            @endforeach
                          </select>
                          <div class="form-control-position">
                            <i class="la la-automobile"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Area">Address</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="text" id="Address" class="form-control" name="Address" placeholder="Type Your Address">
                          <div class="form-control-position">
                            <i class="la la-bicycle"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="AcNumber">Account No.</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="tel" id="AccNumber" class="form-control" name="AccNumber" placeholder="Please Type Account Number">
                          <div class="form-control-position">
                            <i class="la la-bank"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Ifsc">IFSC Code</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="tel" id="Ifsc" class="form-control" name="Ifsc" placeholder="Please type IFSC">
                          <div class="form-control-position">
                            <i class="la la-barcode"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="UserActive">User Active</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <select id="UserActive" name="UserActive" class="form-control">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                          </select>
                          <div class="form-control-position">
                            <i class="icon-question"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Pin">Pin Code</label>
                      <div class="col-md-9">
                        <div class="position-relative has-icon-left">
                          <input type="number" id="pincode" class="form-control" name="pincode" placeholder="pincode ">
                          <div class="form-control-position">
                            <i class="icon-pin"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions right">
                  <button type="button" id="btnclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" id="add_user" class="btn bg-white blue darken-4 text-uppercase">+ Add</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
</div>

@include('header.footer_head')
@include('header.footer_toe')
<script type="text/javascript" src="{{ asset('public/transaction/user_details.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/tables/datatable/datatables.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>

<script type="text/javascript">
  $.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

 function editUserdetails(userid) {
 
  var url ='{!! route('Edit-User') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, userid:userid},
    }).done(function (data) {
      
    $('#UserID').val(data.user_id);
    $('#UserName').val(data.user_name);
    $('#email_id').val(data.email);
    $('#Password').val(data.password);
    $('#Mobile').val(data.mobile_no);
    $('#sec_mobile').val(data.phone_no);
    $('#Address').val(data.address);
    $('#AccNumber').val(data.account_no);
    $('#Ifsc').val(data.ifsc_code);
    $('#pincode').val(data.pincode);
    $('#OwnGame').val(data.own_game);
    $('#userType').val(data.user_type);
    $('#State').val(data.state);
    $('#UserActive').val(data.is_active); 
    $('#userpercentage').val(data.partnership_percentage);
    $('#type_play').val(data.type_play);

    }).fail(function(data){ 
       console.log(data);
     });
  }
</script>


